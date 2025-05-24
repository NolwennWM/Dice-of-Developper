<?php
// namespace Portfolio\Admin\Controller;

use Portfolio\Router\Attribute\Route_Attribute;

require __DIR__ . "/../model/Admin_Model.php";
/**
 * TODO
 */
class Auth_Controller
{
    public function __construct() {
       echo "<br>auth_controller<br>";
    }
    #[Route_Attribute("")]
    public function login_page()
    {

        require __DIR__."/../view/Login_View.php";
    }
}