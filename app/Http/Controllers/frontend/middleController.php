<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class middleController extends Controller
{   
  public $frontendpath='frontend.';
  public $pagepath='';
  public function __construct()
  {
      $this->data('title',$this->makeTitle('project',''));
      $this->pagepath=$this->frontendpath.'pages.';
  }
}
