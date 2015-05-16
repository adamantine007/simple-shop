<?php namespace App\Repositories;


use App\Models\ExecutedOrder;


class ExecutedOrderRepository extends AbstractRepository {


    function __construct(ExecutedOrder $executedOrder)
    {
        $this->model = $executedOrder;
    }
}