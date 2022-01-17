<?php
namespace chain_gang\Models;
use chain_gang\Models\BicycleResourceModel;
class BicycleResponsitory
{
    private $bicycleResourceModel;
    public function __construct() {
        $this->bicycleResourceModel = new BicycleResourceModel;
    }

    function getAll()
    {
        $d['show'] = $this->bicycleResourceModel->getall();
        return $d;
    }
    function get($id) {
        $d['show'] = $this->bicycleResourceModel->get($id);
        return $d;
    }
    function add($model)
    {            
        return $this->bicycleResourceModel->save($model);       
    }

    function edit($model)
    {
        return $this->bicycleResourceModel->save($model);
    }

    function delete($id)
    {
        return $this->bicycleResourceModel->delete($id);
    }
}
?>