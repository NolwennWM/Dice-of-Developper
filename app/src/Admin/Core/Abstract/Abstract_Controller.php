<?php
namespace Portfolio\Admin\Core\Abstract;

abstract class Abstract_Controller
{
    protected $security;
    protected $router;

    public function __construct() {
        global $security;
        global $router;
        $this->security = $security;
        $this->router = $router;
    }
}