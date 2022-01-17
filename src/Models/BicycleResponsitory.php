<?php
namespace chain_gang\Models\Bicycle;
use chain_gang\Models\Bicycle\BicycleResourceModel;
class BicycleResponsitory
{
    private $bicycleResourceModel;
    public function __construct() {
        $this->bicycleResourceModel = new BicycleResourceModel;
    }

    function getAll()
    {
        return $this->bicycleResourceModel->getall();;
    }
    function get($id) {
        return $this->bicycleResourceModel->get($id);
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