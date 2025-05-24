<?php
use Portfolio\Router\Attribute\Route_Attribute;
/**
 * TODO
 */
class Main_Controller
{
    public function __construct() {
        echo "<br>main controller lancé<br>";
    }

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
