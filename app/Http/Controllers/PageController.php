<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\User;

class PageController extends Controller
{
    public function homepage(){
        $semua_user = User::all();
        return view('beranda', ['users_di_view' => $semua_user]);
    }

    public function tambahUser(){
        return view ('tambah-user');
    }
    public function storeUser(Request $request){
        $data = $request->all();
        User::create ([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => $data['password']
        ]);
        return redirect ('/');
    }

    public function editUser($id){
        $user = User::find ($id);
        return view ('edit-user', ['user' => $user]);
    }

    public function updateUser(Request $request, $id){
        $user = User::find ($id);
        $data = $request->all();
        $user->update ([
            'name' => $data['name'],
            'email' => $data['email']
        ]);
        return redirect ('/');
    }

    public function deleteUser($id){
        $user = User::find($id);
        $user->delete();
        return redirect('/');
    }
}
