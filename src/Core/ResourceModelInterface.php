<?php
namespace chain_gang\Core;
interface ResourceModelInterface
{
    public function getAll();
    public function get($id);
    public function save($model);
    public function delete($id);
    public function __init($table, $id, $model);

}
?>