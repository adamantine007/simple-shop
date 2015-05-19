<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model {

    protected $table = 'products';

    protected $fillable = [
        'name',
        'price',
        'amount',
        'suppliers'
    ];

    public function producer()
    {
        return $this->belongsTo('App\Models\Producer');
    }

    public function info()
    {
        return $this->hasOne('App\Models\ProductInfo');
    }

    public function supplies()
    {
        return $this->hasMany('App\Models\Supply');
    }

    public function order()
    {
        return $this->hasMany('App\Models\Order');
    }
}
