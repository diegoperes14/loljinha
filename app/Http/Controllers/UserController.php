<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{   
    //lista tudo
    public function index(){

        $users = User::get();
        return view('users/index', compact ('users'));
    }

    //exibe apenas um
    public function show($id){
        //$user = User::where('id', '=', $id)->first();
        if (!$user = User::find($id)){
            return redirect()->route('users.index');
        }
        return view ('users/show', compact('user'));
    }

    //exibe a página atual
    public function home($id){
        return ("Usuario ".$id);
    }

    //chama a view de cadastro
    public function create(){
        return view('users/create');
    }

    //cadastra o novo usuário
    public function store(Request $request){
        dd($request->only([
            'name',
            'email',
            'password'
        ]));
    }
}
