<?php
namespace chain_gang\Core;
use chain_gang\Config\Database;
use chain_gang\Core\ResourceModelInterface;
use PDO;
class ResourceModel implements ResourceModelInterface
{
    private $table;
    private $id;
    private $model;
    public function __init($table, $id, $model) {
        $this->table = $table;
        $this->id = $id;
        $this->model = $model;
    }



    public function get($id)
    {
        $sql = "SELECT * FROM $this->table WHERE $this->id = $id";
        $req = Database::getBdd()->prepare($sql);
        $req->execute();
        return $req->fetchObject(get_class($this->model));
    }

    public function getAll()
    {
        $sql = "SELECT * FROM $this->table";
        $req = Database::getBdd()->prepare($sql);
        $req->execute();
        return $req->fetchAll(PDO::FETCH_CLASS, get_class($this->model));
    }

    public function delete($id)
    {
        $sql = "DELETE FROM $this->table WHERE id = ?";
        $req = Database::getBdd()->prepare($sql);
        return $req->execute([$id]);
    }

    public function save($model)
    {
        
        $args = $model->getProperties();
        $stringModel = '';
        foreach($args as $key=>$value) {
            $stringModel = $stringModel.$key.' = :'.$key.',';
        }
        $stringModel = rtrim($stringModel, ',');
        
        if($args['id'] == null) {
            $sql = "INSERT INTO $this->table SET $stringModel"; 
        } else {
            $id_Num = $args['id'];
            $sql = "UPDATE $this->table SET $stringModel WHERE $this->id = $id_Num";
        }
        $req = Database::getBdd()->prepare($sql);
        return $req->execute($args);

    }
}
?>