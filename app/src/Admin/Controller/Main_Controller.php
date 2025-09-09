<?php
namespace Portfolio\Admin\Controller;

use Portfolio\Router\Route_Attribute;
use Portfolio\Admin\Core\Abstract\Abstract_Controller;

/**
 * TODO
 */
class Main_Controller extends Abstract_Controller
{
    #[Route_Attribute("", true)]
    public function dashboard()
    {
        $nbProjects = 42;
        $nbPages = 15;
        $languages = ['Français', 'English', 'Español'];
       $this->router->requirePage("/View/Main/dashboard.php", [], ["title"=>"Admin - Tableau de bord", "body_class"=>"dashboard-page", "nbProjects"=>$nbProjects, "nbPages"=>$nbPages, "languages"=>$languages]);

    }
    #[Route_Attribute("test2", true)]
    public function test2()
    {
        echo "<br>test2<br>";

    }
}