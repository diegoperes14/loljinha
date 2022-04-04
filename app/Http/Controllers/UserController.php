<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{   
    //lista tudo
    public function index(){
        //dd('UserController@index');
        return view('users/index');
    }
    //exibe apenas um
    public function show($id){
        return ("Usuario ".$id);
    }
}
