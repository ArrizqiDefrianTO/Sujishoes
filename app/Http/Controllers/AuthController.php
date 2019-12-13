<?php

namespace App\Http\Controllers;

use App\Auth;
use Illuminate\Http\Request;
use App\User;

class AuthController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    // == LOGIN ==
    public function getLogin()
    {
        //
        return view('auths.login2');
    }

    public function postLogin(Request $request) 
    {
        //
        return redirect('/');
    }

    // == REGISTER ==
    public function getRegister()
    {
        //
        return view('auths.register2');
    }

    public function postRegister(Request $request) 
    {
        //
        $this->validate($request, [
            'name' => 'required|min:10',
            'password' => 'required|min:8|confirmed'

        ]);

        User::create([
            'name' => $request->username,
            'password' => bcrypt($request->password)
        ]);

        return redirect('/login2');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
     * @param  \App\Auth  $auth
     * @return \Illuminate\Http\Response
     */
    public function show(Auth $auth)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Auth  $auth
     * @return \Illuminate\Http\Response
     */
    public function edit(Auth $auth)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Auth  $auth
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Auth $auth)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Auth  $auth
     * @return \Illuminate\Http\Response
     */
    public function destroy(Auth $auth)
    {
        //
    }
}
