<?php

namespace App;

use Illuminate\Auth\Authenticatable;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;
use Illuminate\Database\Eloquent\Model;

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
     * The table's primary key.
     *
     * @var string
     */
    protected $primaryKey = 'account_id';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['username', 'email', 'password', 'is_agency'];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = ['password', 'remember_token'];

    /**
     * The attribute casts.
     *
     * @var array
     */
    protected $casts = [
                'is_agency'     => 'boolean',
                'is_subaccount' => 'boolean',
    ];

    /**
     * Relationship with AgencyAccounts.
     *
     * @return
     */
    public function agency()
    {
        return $this->hasMany('App\AgencyAccounts', 'agency_id');
    }

    /**
     * Relationship with Profile.
     *
     * @return
     */
    public function profiles()
    {
        return $this->hasOne('App\Profile', 'account_id');
    }

    /**
     * Check account whether is agency or not.
     *
     * @return
     */
    public function isAgency()
    {
        return $this->is_agency;
    }

    /**
     * Check account whether is subaccount of agency account.
     *
     * @return
     */
    public function isSubAccount()
    {
        return $this->is_subaccount;
    }

    /**
     * Setting column values of current instance.
     *
     * @param mixed $property
     * @param mixed $value
     *
     * @return
     */
    public function set($property, $value = null)
    {
        if (!is_array($property)) {
            $this->$property = $value;

            return $this;
        }

        foreach ($property as $prop=>$val) {
            $this->set($prop, $val);
        }

        return $this;
    }

    /**
     * Getting column values.
     *
     * @param mixed $property
     *
     * @return
     */
    public function get($property)
    {
        return $this->$property;
    }

    /**
     * Getting subaccounts of the current agency account.
     *
     * @return
     */
    public function getSubAccounts()
    {
        $profiles = $this->load('profiles');

        $collect = collect($profiles->agency)->map(function ($item, $key) {
            return $item->profiles;
        });

        return $collect;
    }

    /**
     * Set password mutator.
     *
     * @param mixed $value
     *
     * @return
     */
    public function setPasswordAttribute($value)
    {
        $this->attributes['password'] = bcrypt($value);
    }

    /**
     * Set is_agency mutator.
     *
     * @param mixed $value
     *
     * @return
     */
    public function setIsAgencyAttribute($value)
    {
        $this->attributes['is_agency'] = ($value != 0 && $value != 1) ? 0 : $value;
    }
}
