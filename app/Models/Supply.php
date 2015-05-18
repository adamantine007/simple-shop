<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Supply extends Model {

    protected $table = 'supplies';

    protected $fillable = [
        'amount',
        'price',
    ];

    public function supplier()
    {
        return $this->belongsTo('App\Models\Supplier', 'supplier_id', 'id');
    }

    public function manager()
    {
        return $this->belongsTo('App\Models\User', 'manager_id', 'id');
    }

    public function product()
    {
        return $this->belongsTo('App\Models\Product', 'product_id', 'id');
    }

    public function status()
    {
        return $this->belongsTo('App\Models\SupplyStatus');
    }
}
