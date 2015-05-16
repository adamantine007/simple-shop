<?php namespace App\Repositories;


use App\Models\Supplies;

class SuppliesRepository extends AbstractRepository {


    function __construct(Supplies $supplies)
    {
        $this->model = $supplies;
    }
}