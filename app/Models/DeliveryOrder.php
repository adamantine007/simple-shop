<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DeliveryOrder extends Model {

    protected $table = 'delivery_orders';

    protected $fillable = [
        'amount',
        'status',
    ];

    public function manager()
    {
        return $this->belongsTo('App\Models\User', 'manager_id', 'id');
    }

    public function product()
    {
        return $this->belongsTo('App\Models\Product', 'product_id', 'id');
    }
}
