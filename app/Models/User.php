<?php namespace App\Models;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;

class User extends Model implements AuthenticatableContract, CanResetPasswordContract {

	use Authenticatable, CanResetPassword;

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'users';

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = [
        'name',
        'surname',
        'middle_name',
        'email',
        'phone',
        'address',
        'status',
        'password'
    ];

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	protected $hidden = ['password', 'remember_token'];

    public function orders()
    {
        return $this->hasMany('App\Models\Order', 'customer_id');
    }

    public function executedOrdersByCustomer()
    {
        return $this->hasMany('App\Model\ExecutedOrder', 'customer_id');
    }

    public function executedOrdersBySeller()
    {
        return $this->hasMany('App\Model\ExecutedOrder', 'seller_id');
    }

    public function deliveryOrdersByManager()
    {
        return $this->hasMany('App\Models\DeliveryOrder', 'manager_id');
    }

    public function suppliesByManager()
    {
        return $this->hasMany('App\Models\Supply', 'manager_id');
    }

    public function salary()
    {
        return $this->belongsTo('App\Models\Salary', 'id', 'status_id');
    }
}
