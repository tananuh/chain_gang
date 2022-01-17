<?php
namespace chain_gang\Controllers;
use chain_gang\Core\Controller;
use chain_gang\Models\Task\TaskResponsitory;
use chain_gang\Models\Task\TaskModel;
class TasksController extends Controller
{
    private $taskResponsitory;
    public function __construct() {
        $this->taskResponsitory = new TaskResponsitory;
    }
    function index()
    {
        $d['showTasks'] = $this->taskResponsitory->getAll();
        $this->set($d);
        $this->render("index");
    }

    function create()
    {
        $this->render("create");
        if (isset($_POST["title"]))
        {
            $args = [
                'title' => $_POST["title"], 
                'description' => $_POST["description"], 
            ];
            $taskModel = new TaskModel;
            $taskModel->setTaskModel($args);
            
            if ($this->taskResponsitory->add($taskModel)) {
                header("Location: " . WEBROOT);
            }
        }
        
        
        

    }

    function edit($id)
    {
        
        $d['task'] = $this->taskResponsitory->get($id);
        $this->set($d);
        $this->render("edit");
        if (isset($_POST["title"]))
        {
            $args = [
                'id' => $id,
                'title' => $_POST["title"], 
                'description' => $_POST["description"], 
            ];
            $taskModel = new TaskModel;
            $taskModel->setTaskModel($args);

            if ($this->taskResponsitory->edit($taskModel))
            {
                header("Location: " . WEBROOT);
            }
        }
        
    }

    function delete($id)
    {   
        if ($this->taskResponsitory->delete($id))
        {
            header("Location: " . WEBROOT);
        }
    }
}
?>