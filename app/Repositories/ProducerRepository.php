<?php namespace App\Repositories;


use App\Models\Producer;


class ProducerRepository extends AbstractRepository {

    function __construct(Producer $producer)
    {
        $this->model = $producer;
    }
}