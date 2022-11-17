<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Auth\User;
use Illuminate\Http\Request;

class RoleRouteController extends Controller
{
     // ? GET Admins
    public function admins()
    {
        $admins = User::where('role_id',1)->get();
        return view('Users.admins',compact('admins'));
    }

}
