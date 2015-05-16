<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Producer extends Model {

    protected $table = 'producers';

    protected $fillable = [
        'name',
        'info',
        'country'
    ];

    public function products()
    {
        return $this->hasMany('App\Models\Products');
    }
}
