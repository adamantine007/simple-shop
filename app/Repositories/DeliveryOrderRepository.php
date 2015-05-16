<?php namespace App\Repositories;


use App\Models\DeliveryOrder;

class DeliveryOrderRepository extends AbstractRepository {


    function __construct(DeliveryOrder $deliveryOrder)
    {
        $this->model = $deliveryOrder;
    }
}