<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AgencyAccounts extends Model
{
	protected $table = 'agency_accounts';
	protected $fillable = ['agency_id', 'account_id'];

    public function accounts() {
    	return $this->belongsTo('App\User');
    }
}
