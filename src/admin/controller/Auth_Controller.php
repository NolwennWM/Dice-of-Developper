<?php
namespace Portfolio\Admin\Controller;

use Portfolio\Router\Attribute\Route_Attribute as Route;
use Portfolio\Admin\Core\Abstract\Abstract_Controller;
use Portfolio\Admin\Model\Admin_Model;

require __DIR__ . "/../core/abstract/Abstract_Controller.php";
require __DIR__ . "/../model/Admin_Model.php";

/**
 * Class handling authentication (login, logout, etc.)
 */
class Auth_Controller extends Abstract_Controller
{
    private $adminModel;

    public function __construct() 
    {
        parent::__construct();
        $this->adminModel = new Admin_Model();   
    }
    #[Route("")]
    public function login_page()
    {
        $flashes = $this->router->getFlashMessages();
        $pageData = ["title"=>"Admin - Connexion", "body_class"=>"login-page"];
        $toRender = array_merge($flashes, $pageData);
        $this->router->requirePage("/view/Login_View.php", ["security"=>$this->security], $toRender);
    }

    #[Route("signin", method:"POST")]
    public function checkLogin()
    {
        // TODO gérer le multi-langue pour les messages d'erreur
        $errors = [];
        if (!$this->security->is_csrf_valid()) 
        {
            $errors["security"] = "Erreur de sécurité, veuillez réessayer.";
        }
        if ($this->security->is_honey_pot_filled()) 
        {
            $errors["security"] = "Erreur de sécurité, veuillez réessayer.";
        }
        $email = filter_input(INPUT_POST, "email", FILTER_VALIDATE_EMAIL);
        if (!$email) 
        {
            $errors["email"] = "Email invalide.";
        }
        $password = filter_input(INPUT_POST, "password");
        if (!$password) 
        {
            $errors["password"] = "Mot de passe invalide.";
        }
        
        if (empty($errors)) 
        {
            $admin = $this->adminModel->getAdminByEmail($email);
            if (!$admin || !password_verify($password, $admin["password"])) 
            {
                $errors["email"] = "Email ou mot de passe incorrect.";
            }
        }

        if (empty($errors))
        {
            $_SESSION["admin"] = [
                "id" => $admin["id"],
                "email" => $admin["email"]
            ];
            $this->router->redirect("/admin/dashboard");
        }
        else 
        {
            // TODO afficher les erreurs
            $this->router->redirect("/admin/login", $errors);
        }
        
    }

    #[Route("logout")]
    public function logout()
    {
        session_destroy();
        session_start();
        $this->router->redirect("/admin/login", ["success" => "Vous avez été déconnecté."]);
    }
}