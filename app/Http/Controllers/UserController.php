<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
class UserController extends Controller
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

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('users.create');
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
        $this->validate($request,[
            'name' => 'required|min:6',
            'email' => 'required|email',
            'password' => 'required|confirmed|min:6'
           
        ]);
         // 'password_confirmation' => 'required'
        // dd( request()->all());

        $user = new User;
        $user->name  = $request->name;
        $user->email  = $request->email;
        $user->password = bcrypt($request->password);
       
        if($user->save()){

            // [
            //     'response' => [
            //         'status' =>'success',
            //         'message' => 'User created successfully!'
            //     ]
            // ]


            return redirect('/users/create?status=success&message= user created');
        }else{
            return redirect('/users/create?status=danger&message= create user failed');
        }


        // [
        //     'response' => [
        //         'status' =>'danger',
        //         'message' => 'User creating problem!'
        //     ]
        // ]

    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
