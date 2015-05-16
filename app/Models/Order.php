<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model {

    protected $table = 'orders';

    protected $fillable = [
        'products',
        'address',
        'delivery_date',
        'status_id',
        'price'
    ];

    public function customer()
    {
        return $this->belongsTo('App\Models\User', 'id', 'customer_id');
    }

    public function status()
    {
        return $this->hasOne('App\Model\OrderStatus', 'id', 'status_id');
    }
}
