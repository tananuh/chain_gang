<?php
namespace chain_gang\Controllers;
use chain_gang\Core\Controller;
use chain_gang\Models\BicycleResponsitory;
use chain_gang\Models\Bicycle;
class BicyclesController extends Controller
{
    function index()
    {
        $Bicycles = new BicycleResponsitory;
        $this->set($Bicycles->getAll());
        $this->render("index");
    }

    function create()
    {
        $this->render("create");
        if (isset($_POST["brand"]))
        {
            $args = [
                'brand' => $_POST["brand"], 
                'model' => $_POST["model"], 
                'year' => $_POST["year"],
                'category' => $_POST["category"],
                'gender' => $_POST["gender"],
                'color' => $_POST["color"],
                'weight' => $_POST["weight"],
                'weight_type' => $_POST["weight_type"],
                'condition_id' => $_POST["condition_id"],
                'price' => $_POST["price"]
            ];
            $bicycle = new Bicycle;
            $bicycle->setBicycle($args);
            $Bicycles = new BicycleResponsitory();
            
            if ($Bicycles->add($bicycle)) {
                header("Location: " . WEBROOT);
            }
        }
        
        
        

    }

    function edit($id)
    {
        
        $Bicycles = new BicycleResponsitory;
        $this->set($Bicycles->get($id));
        $this->render("edit");
        if (isset($_POST["brand"]))
        {
            $args = [
                'id' => $id, 
                'brand' => $_POST["brand"], 
                'model' => $_POST["model"], 
                'year' => $_POST["year"],
                'category' => $_POST["category"],
                'gender' => $_POST["gender"],
                'color' => $_POST["color"],
                'weight' => $_POST["weight"],
                'weight_type' => $_POST["weight_type"],
                'condition_id' => $_POST["condition_id"],
                'price' => $_POST["price"]
            ];
            $bicycle = new Bicycle;
            $bicycle->setBicycle($args);
            $Bicycles = new BicycleResponsitory();

            if ($Bicycles->edit($bicycle))
            {
                header("Location: " . WEBROOT);
            }
        }
        
    }

    function delete($id)
    {
        $Bicycles = new BicycleResponsitory;
        
        if ($Bicycles->delete($id))
        {
            header("Location: " . WEBROOT);
        }
    }
}
?>