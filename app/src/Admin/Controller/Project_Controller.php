<?php
// filepath: c:\Users\Nolwenn\Documents\dev\Dice-of-Developper\app\src\Admin\Controller\Project_Controller.php
namespace Portfolio\Admin\Controller;

use Portfolio\Router\Route_Attribute as Route;
use Portfolio\Admin\Core\Abstract\Abstract_Controller;
use Portfolio\Admin\Model\Project_Model;

class Project_Controller extends Abstract_Controller
{
    private $model;

    public function __construct()
    {
        parent::__construct();
        $this->model = new Project_Model();
    }

    #[Route("", true)]
    public function list()
    {
        $items = $this->model->getAll();
        $this->router->requirePage("/View/Project/list.php", ["items" => $items], []);
    }

    #[Route("project/create", true)]
    public function create_page()
    {
        $this->router->requirePage("/View/Project/create.php");
    }

    #[Route("project/create_submit", true, method:"POST")]
    public function create_submit()
    {
        $data = [
            "title" => $_POST["title"] ?? "",
            "description" => $_POST["description"] ?? "",
            "url" => $_POST["url"] ?? "",
            "image" => $_POST["image"] ?? ""
        ];
        $this->model->create($data);
        $this->router->redirect("/admin/project");
    }

    #[Route("project/edit/{id}", true)]
    public function edit_page($id)
    {
        $item = $this->model->getById($id);
        $this->router->requirePage("/View/Project/edit.php", [], ["item" => $item]);
    }

    #[Route("project/edit_submit/{id}", true, method:"POST")]
    public function edit_submit($id)
    {
        $data = [
            "title" => $_POST["title"] ?? "",
            "description" => $_POST["description"] ?? "",
            "url" => $_POST["url"] ?? "",
            "image" => $_POST["image"] ?? ""
        ];
        $this->model->update($id, $data);
        $this->router->redirect("/admin/project");
    }

    #[Route("project/delete/{id}", true)]
    public function delete($id)
    {
        $this->model->delete($id);
        $this->router->redirect("/admin/project");
    }
}