<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class OrderStatus extends Model {

    protected $table = 'order_statuses';

    protected $fillable = [
        'name'
    ];

    public function orders()
    {
        return $this->belongsTo('App\Models\Order', 'status_id');
    }

    public function executedOrders()
    {
        return $this->belongsTo('App\Models\ExecutedOrder', 'status_id');
    }

}
