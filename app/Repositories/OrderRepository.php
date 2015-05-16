<?php namespace App\Repositories;


use App\Models\Order;


class OrderRepository extends AbstractRepository {


    function __construct(Order $order)
    {
        $this->model = $order;
    }
}