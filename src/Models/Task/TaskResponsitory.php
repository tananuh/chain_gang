<?php
namespace chain_gang\Models\Task;
use chain_gang\Models\Task\TaskResourceModel;
class TaskResponsitory
{
    private $taskResourceModel;
    public function __construct() {
        $this->taskResourceModel = new TaskResourceModel;
    }

    function getAll()
    {
        return $this->taskResourceModel->getall();
    }
    function get($id) {
        return $this->taskResourceModel->get($id);
    }
    function add($model)
    {            
        return $this->taskResourceModel->save($model);       
    }

    function edit($model)
    {
        return $this->taskResourceModel->save($model);
    }

    function delete($id)
    {
        return $this->taskResourceModel->delete($id);
    }
}
?>