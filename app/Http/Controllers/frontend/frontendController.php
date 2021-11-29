<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class frontendController extends middleController
{
  public function index(Request $request)
  {
     
    $this->data('title',$this->maketitle('home',''));
    if($request->isMethod('get'))
    {
      return view($this->pagepath.'home',$this->data);
    }else
    {
      $this->validate($request,[
        'name'=>'required|min:5|max:20',
        'username'=>'required|min:5|max:20|'
      ]);
    }
    
  }  
      

}