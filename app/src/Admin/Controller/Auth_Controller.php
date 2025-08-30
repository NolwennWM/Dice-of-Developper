<?php
namespace Portfolio\Admin\Controller;

use Portfolio\Router\Route_Attribute as Route;
use Portfolio\Admin\Core\Abstract\Abstract_Controller;
use Portfolio\Admin\Model\Admin_Model;

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
    /**
     * Display the login page
     */
    #[Route("login", false)]
    public function login_page()
    {
        $flashes = $this->router->getFlashMessages();
        $pageData = ["title"=>"Admin - Connexion", "body_class"=>"login-page"];
        $toRender = array_merge($flashes, $pageData);
        $this->router->requirePage("/View/Auth/Login_View.php", ["security"=>$this->security], $toRender);
    }
    /**
     * Process the login form submission
     */
    #[Route("login_submit", false, method:"POST")]
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
            $this->router->redirect("/admin/auth/login", $errors);
        }
        
    }
    /**
     * Logout the current admin
     */
    #[Route("logout", true)]
    public function logout()
    {
        session_destroy();
        session_start();
        $this->router->redirect("/admin/auth/login", ["success" => "Vous avez été déconnecté."]);
    }
    /**
     * Display the registration page
     */
    #[Route("register", false)]
    public function register_page()
    {
        if($this->adminModel->hasExistingAdmin())
        {
            $this->router->redirect("/admin/auth/login", ["info" => "Un compte administrateur existe déjà. Veuillez vous connecter."]);
        }
        $flashes = $this->router->getFlashMessages();
        $pageData = ["title"=>"Admin - Inscription", "body_class"=>"register-page"];
        $toRender = array_merge($flashes, $pageData);
        $this->router->requirePage("/View/Auth/Register_View.php", ["security"=>$this->security], $toRender);
    }
    /**
     * Process the registration form submission
     */
    #[Route("register_submit", false, method:"POST")]
    public function register_submit()
    {
        if($this->adminModel->hasExistingAdmin())
        {
            $this->router->redirect("/admin/auth/login", ["info" => "Un compte administrateur existe déjà. Veuillez vous connecter."]);
        }

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
        if (!$password || strlen($password) < 6) 
        {
            $errors["password"] = "Le mot de passe doit contenir au moins 6 caractères.";
        }
        elseif(!preg_match('/^(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{6,}$/', $password))
        {
            $errors["password"] = "Le mot de passe doit contenir au moins une majuscule, un chiffre et un caractère spécial.";
        }
        $confirm_password = filter_input(INPUT_POST, "confirm_password");
        if ($password !== $confirm_password) 
        {
            $errors["confirm_password"] = "Les mots de passe ne correspondent pas.";
        }

        if (empty($errors)) 
        {
            $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
            $created = $this->adminModel->createAdmin($email, $hashedPassword);
            if ($created) 
            {
                $this->router->redirect("/admin/auth/login", ["success" => "Compte administrateur créé avec succès. Veuillez vous connecter."]);
            } 
            else 
            {
                $errors["general"] = "Une erreur est survenue lors de la création du compte. Veuillez réessayer.";
            }
        }

        if (!empty($errors)) 
        {
            $this->router->redirect("/admin/auth/register", $errors);
        }
    }
}