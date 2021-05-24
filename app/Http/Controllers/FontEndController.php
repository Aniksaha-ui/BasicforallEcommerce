<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class FontEndController extends Controller
{
    public function StoreNewslater(Request $request){
    	$validateData = $request->validate([
     'email' => 'required|unique:newslaters|max:55',
    	]);

   $data = array();
   $data['email'] = $request->email;
   DB::table('newslaters')->insert($data);


      $notification=array(
            'massage'=>'Thanks For Subscribeing',
            'alert-type'=>'success'
      );
           return Redirect()->back()->with($notification); 	

    }


    


}
