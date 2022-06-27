<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
  public function index()
  {
    echo'ola';
  }

  public function idGet($id){
       echo 'seu usuario tem o id: ' . $id;
  }
}
