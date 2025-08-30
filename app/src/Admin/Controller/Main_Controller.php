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
    public function test1()
    {
        echo "<br>test1<br>";

    }
    #[Route_Attribute("test2", true)]
    public function test2()
    {
        echo "<br>test2<br>";

    }
}
//TODO pourquoi on est pas en 404