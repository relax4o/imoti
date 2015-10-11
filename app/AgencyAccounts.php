<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AgencyAccounts extends Model
{
	protected $table = 'agency_accounts';
	protected $primaryKey = false;
	protected $fillable = ['agency_id', 'account_id'];

    public function accounts() {
    	return $this->belongsTo('App\User', 'agency_id');
    }

    public function profiles() {
    	return $this->belongsTo('App\Profile', 'account_id');
    }
}
