<?php
// namespace Portfolio\Admin\Controller;

use Portfolio\Router\Attribute\Route_Attribute as Route;

require __DIR__ . "/../model/Admin_Model.php";
/**
 * TODO
 */
class Auth_Controller
{
    private $security;
    public function __construct() {
        global $security;
        $this->security = $security;
    }
    #[Route("")]
    public function login_page()
    {

        require __DIR__."/../view/Login_View.php";
    }

    #[Route("signin", method:"POST")]
    public function checkLogin()
    {
        echo "coucou";

    }
}