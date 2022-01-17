<?php
namespace chain_gang\Models\Task;
use chain_gang\Models\Task\TaskModel;
use chain_gang\Core\ResourceModel;
class TaskResourceModel extends ResourceModel
{
    public function __construct(){
        $this->__init("task", "id", new TaskModel);
    }
}
?>