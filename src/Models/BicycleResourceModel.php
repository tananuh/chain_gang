<?php
namespace chain_gang\Models;
use chain_gang\Models\BicycleModel;
use chain_gang\Core\ResourceModel;
class BicycleResourceModel extends ResourceModel
{
    public function __construct(){
        $this->__init("Bicycle", "id", new Bicycle);
    }
}
?>