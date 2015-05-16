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
        return $this->belongsTo('App\Models\Supplier', 'id', 'supplier_id');
    }

    public function manager()
    {
        return $this->belongsTo('App\Models\User', 'id', 'manager_id');
    }

    public function product()
    {
        return $this->belongsTo('App\Models\Product', 'id', 'product_id');
    }

    public function status()
    {
        return $this->belongsTo('App\Models\SupplyStatus');
    }
}
