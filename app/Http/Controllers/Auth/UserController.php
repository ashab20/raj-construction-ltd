<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Auth\User;
use Illuminate\Http\Request;
use  App\Http\Requests\Auth\RegisterRequest;
use Exception;
use App\Http\Traits\ResponseTrait;

class UserController extends Controller
{
    // use ResponseTrait;

    // *** Registration Form ***

    public function userRegistrationForm()
    {
        
        return view('auth.register');
    }

   // *** Registration Store ***

    public function userRegistrationStore(RegisterRequest $request)
    {
        // try{
        // $store = new User();

        // $store->name = $request->input('userFullName');
        // $store->name = $request->userFullName;
        // $store->email = $request->userEmailAddress;
        // $store->password = $request->userEmailAddress;
        // $store->role_id = $request->roles;
        // $store->phone = $request->userPassword;

        print_r($request);
        // }
        // catch (Exception $error){
        //     dd($error);
            // return redirect('/')->with($this->responseMsg(false,'error','Server error'));            
        // }
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
