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
        return $this->belongsTo('App\Models\User', 'id', 'manager_id');
    }

    public function product()
    {
        return $this->belongsTo('App\Models\Product', 'id', 'product_id');
    }
}
