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
        $profile_imagem = ProfileImageController::showByIdUser(1);

        return view ('users/show', compact('user', 'profile_imagem'));
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
        $p = $request->only([
            'name',
            'email',
            'password'
        ]);
    }
}
