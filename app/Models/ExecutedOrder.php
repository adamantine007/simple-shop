<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ExecutedOrder extends Model {

    protected $table = 'executed_orders';

    protected $fillable = [
        'products',
        'address',
        'delivery_date',
        'status_id',
        'supplier_id',
        'price'
    ];

    public function customer()
    {
        return $this->belongsTo('App\Models\User', 'id', 'customer_id');
    }

    public function seller()
    {
        return $this->belongsTo('App\Models\User', 'id', 'seller_id');
    }

    public function status()
    {
        return $this->hasOne('App\Model\OrderStatus', 'id', 'status_id');
    }

}
