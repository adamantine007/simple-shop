<?php namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class ProductInfo extends Model {

    protected $table = 'products_info';

    protected $fillable = [
        'info'
    ];

    public function product()
    {
        return $this->belongsTo('App\Models\Product');
    }
}