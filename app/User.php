<?php

namespace App;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;
use Validator;

class User extends Model implements AuthenticatableContract, CanResetPasswordContract
{
    use Authenticatable, CanResetPassword;

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'accounts';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['username', 'email', 'password', 'display_name'];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = ['password', 'remember_token'];

    public function agencies() {
        return $this->hasMany('App\AgencyAccounts');
    }

    public function isAgency() {
        return $this->is_agency;
    }

    public function isSubAccount() {
        return $this->is_subaccount;
    }

    public function set($property, $value = null) {

        if ( !is_array($property) ) {
            $this->$property = $value;
            return $this;
        }

        foreach ( $property as $prop=>$val) {
            $this->set($prop, $val);
        }
        
        return $this;
    }

    public function get($property) {
        return $this->$property;
    }
}
