<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
	protected $table = 'profiles';
	protected $fillable = ['account_id', 'profile_id'];

    public function accounts() {
    	return $this->belongsTo('App\User');
    }
}
