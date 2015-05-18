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
        return $this->belongsTo('App\Models\User', 'customer_id', 'id');
    }

    public function seller()
    {
        return $this->belongsTo('App\Models\User', 'seller_id', 'id');
    }

    public function status()
    {
        return $this->hasOne('App\Model\OrderStatus', 'status_id', 'id');
    }

}
