<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUpdateUsersFormRequest;
use App\Models\User;

class UsersController extends Controller
{
    public function index()
    {
        $users = User::get();
        //dd($user);

        return view('users/index_users', compact('users'));
    }
    
    public function show($id)
    {
        //$user = User::where('id', '=', $id)->first();

        if(!$user = User::find($id)){
            return redirect()->route('users.index');
        }
        
        return view('users.show', compact('user'));
        //dd($user);
    }

    public function create()
    {
        return view('users.create');
    }

    public function storeUser(StoreUpdateUsersFormRequest $request)
    {
        //Tratar o campo
        $data = $request->all();
        $data['password'] = bcrypt($request->password);

        User::create($data);

        return redirect()->route('users.index');

        // $user = User::create($request->all($data));

        // return redirect()->route('users.show', $user->id);

        // $user = new User;
        // $user->name = $request->name;
        // $user->email = $request->email;
        // $user->password = $request->password;
        // $user->save();
    }
}
