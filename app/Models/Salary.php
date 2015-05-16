<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Salary extends Model {

    protected $table = 'salaries';

    protected $fillable = [
        'position',
        'salary'
    ];

    public function staffs()
    {
        return $this->hasMany('App\Models\User', 'status');
    }
}
