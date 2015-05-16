<?php namespace App\Repositories;


use App\Models\Product;
use Illuminate\Database\Eloquent\Model;

class ProductRepository extends AbstractRepository {

    function __construct(Product $product)
    {
        $this->model = $product;
    }

}