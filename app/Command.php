<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Command extends Model
{
    protected $fillable = [
    	'date_service','time_service','total_price','payment_status','payment_form',
    	'user_id','client_id','services_list',
    ];
}
