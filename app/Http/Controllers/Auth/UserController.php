<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Auth\User;
use Illuminate\Http\Request;
use  App\Http\Requests\Auth\RegisterRequest;
use Exception;
// use App\Traits\ResponseTrait;
use App\Http\Controllers\Auth\UserTraits;
use App\Http\Requests\Auth\LoginRequest;
use App\Models\Auth\Role;
use Illuminate\Support\Facades\Crypt;

class UserController extends Controller
{
    use UserTraits;

    // *** Registration Form ***

    public function userRegistrationForm()
    {
        $roles = Role::all();
        return view('auth.register', compact('roles'));
    }

    // *** Registration Store ***

    public function userRegistrationStore(RegisterRequest $request)
    {
        try {
            $store = new User();

            // $store->name = $request->input('userFullName');
            $store->name = $request->userFullName;
            $store->email = $request->userEmailAddress;
            $store->password =  Crypt::encryptString($request->userPassword);
            $store->role_id = $request->userRoles;
            $store->phone = $request->userPhoneNumber;

            if ($store->save()) {
                return redirect('/')->with($this->resMessageHtml(true, false, 'User created successfully'));
            }
        } catch (Exception $error) {
            dd($error);
            return redirect()->back()->with($this->responseMsg(false, 'error', 'Server error'));
        }
    }


    public function userLoginForm()
    {
        // Crypt::decryptString($encrypted);
        return view('auth.login');
    }

    public function userLoginCheck(LoginRequest $request)
    {


        try {
            $user = User::where('email', $request->userEmailAddress->first());

            // if ($user) {
                // if(Hash::check($request->password , $user->password)){}
                dd($user);
                return redirect()->back()->with($this->responseMsg(false, 'error', 'Server error'));
            // }
            // $check->email = $request->userEmailAddress;
            // $check->password =  Crypt::decryptString($check->password);

            // if ($check) {
            //     return redirect('/')->with($this->resMessageHtml(true, false, 'User created successfully'));
            // }
        } catch (Exception $error) {
            dd($error);
            return redirect()->back()->with($this->responseMsg(false, 'error', 'Server error'));
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Auth\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Auth\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Auth\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Auth\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        //
    }
}
