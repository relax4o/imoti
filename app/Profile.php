<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
	// automaticlly is asigned to profiles table
	public $timestamps = false;

	protected $primaryKey = 'account_id';

	protected $casts = [
		'is_setted' => 'boolean'
	];

	protected $appends = ['complete_name'];

    public function accounts() {
    	return $this->belongsTo('App\User', 'id');
    }

    public function getCompleteNameAttribute() {
    	return $this->attributes['first_name'] . ' ' . $this->attributes['last_name'];
    }
}
