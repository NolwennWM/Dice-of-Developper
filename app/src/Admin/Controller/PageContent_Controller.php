<?php
// filepath: c:\Users\Nolwenn\Documents\dev\Dice-of-Developper\app\src\Admin\Controller\PageContent_Controller.php
namespace Portfolio\Admin\Controller;

use Portfolio\Router\Route_Attribute as Route;
use Portfolio\Admin\Core\Abstract\Abstract_Controller;
use Portfolio\Admin\Model\PageContent_Model;

class PageContent_Controller extends Abstract_Controller
{
    private $model;

    public function __construct()
    {
        parent::__construct();
        $this->model = new PageContent_Model();
    }

    #[Route("", true)]
    public function list()
    {
        $items = $this->model->getAll();
        $this->router->requirePage("/View/PageContent/list.php", ["items" => $items]);
    }

    #[Route("page-content/create", true)]
    public function create_page()
    {
        $this->router->requirePage("/View/PageContent/create.php");
    }

    #[Route("page-content/create_submit", true, method:"POST")]
    public function create_submit()
    {
        $data = [
            "slug" => $_POST["slug"] ?? "",
            "title" => $_POST["title"] ?? "",
            "content" => $_POST["content"] ?? "",
            "language" => $_POST["language"] ?? "fr"
        ];
        $this->model->create($data);
        $this->router->redirect("/admin/page-content");
    }

    #[Route("page-content/edit/{id}", true)]
    public function edit_page($id)
    {
        $item = $this->model->getById($id);
        $this->router->requirePage("/View/PageContent/edit.php", [], ["item" => $item]);
    }

    #[Route("page-content/edit_submit/{id}", true, method:"POST")]
    public function edit_submit($id)
    {
        $data = [
            "slug" => $_POST["slug"] ?? "",
            "title" => $_POST["title"] ?? "",
            "content" => $_POST["content"] ?? "",
            "language" => $_POST["language"] ?? "fr"
        ];
        $this->model->update($id, $data);
        $this->router->redirect("/admin/page-content");
    }

    #[Route("page-content/delete/{id}", true)]
    public function delete($id)
    {
        $this->model->delete($id);
        $this->router->redirect("/admin/page-content");
    }
}