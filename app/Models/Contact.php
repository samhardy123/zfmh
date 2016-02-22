<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    Protected $table = 'contacts';
    public $timestamps = true;

    public static $payments = array(
    	''=>'Payment Scheme',
    	'1'=>'Monthely',
    	'2'=>'Quaterly',
    	'3'=>'Yearly'
    	

    	);

    
}
