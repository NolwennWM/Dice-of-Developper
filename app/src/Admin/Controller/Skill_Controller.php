<?php
// filepath: c:\Users\Nolwenn\Documents\dev\Dice-of-Developper\app\src\Admin\Controller\Skill_Controller.php
namespace Portfolio\Admin\Controller;

use Portfolio\Router\Route_Attribute as Route;
use Portfolio\Admin\Core\Abstract\Abstract_Controller;
use Portfolio\Admin\Model\Skill_Model;

class Skill_Controller extends Abstract_Controller
{
    private $model;

    public function __construct()
    {
        parent::__construct();
        $this->model = new Skill_Model();
    }

    #[Route("", true)]
    public function list()
    {
        $items = $this->model->getAll();
        $this->router->requirePage("/View/Skill/list.php", ["items" => $items]);
    }

    #[Route("skill/create", true)]
    public function create_page()
    {
        $this->router->requirePage("/View/Skill/create.php");
    }

    #[Route("skill/create_submit", true, method:"POST")]
    public function create_submit()
    {
        $data = [
            "name" => $_POST["name"] ?? "",
            "description" => $_POST["description"] ?? "",
            "icon" => $_POST["icon"] ?? ""
        ];
        $this->model->create($data);
        $this->router->redirect("/admin/skill");
    }

    #[Route("skill/edit/{id}", true)]
    public function edit_page($id)
    {
        $item = $this->model->getById($id);
        $this->router->requirePage("/View/Skill/edit.php", [], ["item" => $item]);
    }

    #[Route("skill/edit_submit/{id}", true, method:"POST")]
    public function edit_submit($id)
    {
        $data = [
            "name" => $_POST["name"] ?? "",
            "description" => $_POST["description"] ?? "",
            "icon" => $_POST["icon"] ?? ""
        ];
        $this->model->update($id, $data);
        $this->router->redirect("/admin/skill");
    }

    #[Route("skill/delete/{id}", true)]
    public function delete($id)
    {
        $this->model->delete($id);
        $this->router->redirect("/admin/skill");
    }
}