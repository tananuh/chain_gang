<?php
namespace chain_gang\Models;
use chain_gang\Models\BicycleResourceModel;
class BicycleResponsitory
{
    function getAll()
    {
        $Model = new BicycleResourceModel;
        $d = $Model->getall();
        $s = [];
        foreach($d as $key=>$value) {
            $s[$key] = $d[$key]->getBicycleShow();
        }
        $a['show'] = $s;
        return $a;
    }
    function get($id) {
        $Model = new BicycleResourceModel;
        $d = $Model->get($id);
        $a['show'] = $d->getProperties();
        return $a;
    }
    function add($model)
    {            
        $Model = new BicycleResourceModel();
        return $Model->save($model);       
    }

    function edit($model)
    {
        $Model = new BicycleResourceModel();
        return $Model->save($model);
    }

    function delete($id)
    {
        $Model = new BicycleResourceModel();
        return $Model->delete($id);
    }
}
?>