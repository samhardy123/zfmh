<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Planning extends Model
{
    Protected $table = 'plannings';
    public $timestamps = true;

    public static $location = array(
    	''=>'Select Location',
    	'1'=>'Lahore',
    	'2'=>'Karachi',
    	'3'=>'Peshawar',
    	'4'=>'Queta',
    	'5'=>'islamabad'
    	);
   public static $service = array(
    	''=>'Select Service',
    	'1'=>'Buffet',
    	'2'=>'Family Style',
    	'3'=>'Sit Down',
    	'4'=>'Other'
    	
    	);
   public static $menu = array(
        ''=>'Select Menu',
        '1'=>'Menu 1',
        '2'=>'Menu 2',
        '3'=>'Menu 3',
        '4'=>'Menu 4',
        '5'=>'Menu 5',
        '6'=>'Menu 6',
        '7'=>'Menu 7'
        
        );
   public static $hall = array(
    	''=>'Select Hall',
    	'1'=>'Hall 1',
    	'2'=>'Hall 2',
    	'3'=>'Hall 3',
    	'4'=>'Hall 4',
    	'5'=>'Hall 5',
    	'6'=>'Hall 6',
    	'7'=>'Hall 7'
    	
    	);
   
    
}
