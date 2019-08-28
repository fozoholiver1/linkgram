<?php

namespace App\Http\Controllers;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Image\Facades\Image;
class ProfilesController extends Controller
{
    //
    public function index($user)
    {
         $user=User::findOrFail($user);

        return view('profiles.index',[
            'user'=>$user,
        ]);
    }
}
