<?php

namespace App\Http\Controllers;
use App\Models\{
    HomeModel,
    User
};
use Illuminate\Http\Request;

class HomeController extends Controller
{
    protected $home;
    protected $user;

    public function __construct(
        HomeModel $home, 
        User $user,
        )
    {
        $this->home = $home;
        $this->user = $user;
    }

    public function home($userId)
    {
        if(!$user = $this->user->find($userId)){
            return redirect()->back();
        }



        return view('dashboard/home', compact('user', 'home'));
    }


}
