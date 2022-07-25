<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
  public function Hello(){
    return "hello world";
    }

    public function HelloDev(){
    return 'hello world';
    }


public function HelloDev2(){
    return 'hello world';
    }

    public function HelloDev22(){
    return 'test3';
  }

public function HelloDev02(){
    return 'test!!!';
    }


}