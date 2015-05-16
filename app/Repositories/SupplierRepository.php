<?php namespace App\Repositories;


use App\Models\Suppliers;

class SuppliersRepository extends AbstractRepository {


    function __construct(Suppliers $suppliers)
    {
        $this->model = $suppliers;
    }
}