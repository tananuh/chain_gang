<?php
namespace chain_gang\Models\Bicycle;
use chain_gang\Models\Bicycle\BicycleModel;
use chain_gang\Core\ResourceModel;
class BicycleResourceModel extends ResourceModel
{
    public function __construct(){
        $this->__init("Bicycle", "id", new Bicycle);
    }
}
?>