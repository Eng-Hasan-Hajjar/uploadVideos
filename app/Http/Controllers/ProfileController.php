<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function store2(){
        return view('profile');
      }
    function store(Request $req){
          //  echo " Hello from controller";
       //   dd($req);
       //  if( $req->hasFile('InputName')){
            $path=$req->file('img')->store('avatars');
            return ['path'=>$path,'upload'=>'success'];
   
          //}
    }
}
