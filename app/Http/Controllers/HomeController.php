<?php

namespace App\Http\Controllers;
use App\Models\Contact;
use App\Models\Planning;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use DB;

class HomeController extends Controller
{
    function index(){

       return view('publicPages.index');
   }
   function menu1(){

       return view('publicPages.menu1');
   }function menu2(){

       return view('publicPages.menu2');
   }function menu3(){

       return view('publicPages.menu3');
   }function menu4(){

       return view('publicPages.menu4');
   }function menu5(){

       return view('publicPages.menu5');
   }function menu6(){

       return view('publicPages.menu6');
   }function menu7(){

       return view('publicPages.menu7');
   }function menu8(){

       return view('publicPages.menu8');
   }function menu9(){

       return view('publicPages.menu9');
   }function menu10(){

       return view('publicPages.menu10');
   }function menu11(){

       return view('publicPages.menu11');
   }function menu12(){

       return view('publicPages.menu12');
   }
    function about(){

       return view('publicPages.about');
   }
   function menu(){

       return view('publicPages.menu');
   }
   function gallery(){

       return view('publicPages.gallery');
   }function login(){

       return view('publicPages.login');
   }
   function planning(){
    	$location = 	Planning::$location;
    	$service = 	Planning::$service;
    	$menu = 	Planning::$menu;
    	$hall =   Planning::$hall;
       return view('publicPages.planning')->with('location' , $location)->with('service' , $service)->with('menu' , $menu)->with('hall' , $hall);
   }
   
   function booking(){
       $plan =  DB::table('plannings')->get();
       //return($plan);
       return view('publicPages.booking')->with('plan' , $plan);
   }
   
   function contact(){

       return view('publicPages.contact');
   }

   function saveContact(){
   		$data = input::all();

   		$contact = new Contact();

   		$contact->name = $data['name'];
   		$contact->email = $data['email'];
   		$contact->address = $data['address'];
   		$contact->city = $data['city'];
   		$contact->state = $data['state'];
   		$contact->website = $data['website'];
   		$contact->mobile = $data['mobile'];

   		$contact->save();
       $success = 'Event Created Successfully';
     return redirect()->back()->with('success' , $success);
   }
   function savePlanning(){

    $data = input::all();

     $plan =  DB::table('plannings')->lists('date');
      for ($i=1; $i < count($plan); $i++) {
        //return($plan[$i]);
        if($plan[$i] == $data['date']){ 
      
        $error = 'This Date is Already Book For Event Please Choose Other One';

        $location =   Planning::$location;
        $service =  Planning::$service;
        $menu =   Planning::$menu;
        $hall =   Planning::$hall;
     return redirect()->back()->with('location' , $location)->with('service' , $service)->with('menu' , $menu)->with('hall' , $hall)->with('error' , $error);
      
    }
    }

        $planning = new Planning();

      $planning->date = $data['date'];
      $planning->location = $data['location'];
      $planning->advance = $data['advance'];
      $planning->budget = $data['budget'];
      $planning->service = $data['service'];
      $planning->menu = $data['menu'];
      $planning->hall = $data['hall'];
      $planning->camera_man = $data['camera_man'];
      $planning->own_catrer = $data['own_catrer'];
      $planning->phone = $data['phone'];
      $planning->package = $data['package'];

     

      $planning->save();
       $location =   Planning::$location;
        $service =  Planning::$service;
        $menu =   Planning::$menu;
        $success = 'Event Created Successfully';
     return redirect()->back()->with('location' , $location)->with('service' , $service)->with('menu' , $menu)->with('success' , $success);
      
    }

    public function userLogin(){
      $data = input::all();
      if($data['username'] == 'admin' && $data['password'] == 'admin'){
         return view('publicPages.index');
      }else{
        $error = 'Username or Passwoed is incorrect';
        return redirect()->back()->with('error' , $error);
      }
    }

   public function delete(){
  $response = array();
 $id = Input::get('deleteId', '');
 if(!empty($id)){
  $institute = Planning::find($id);
  $institute->delete();
     $response['status'] = 'success';
 }else{
   $response['status'] = 'error';
 }
 return json_encode($response);
}

   

}
