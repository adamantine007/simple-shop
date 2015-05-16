<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SupplyStatus extends Model {

    protected $table = 'supply_statuses';

    protected $fillabe = [
        'name'
    ];

    public function supplies()
    {
        return $this->hasMany('App\Models\Supply');
    }
}
