<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
        $users = User::all();

        return view('admin.user.index',compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.user.create');
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
        $input = $request->all();
        $name = $request->input('name');
        $email = $request->input('email');
        $password = bcrypt($request->input('name'));

        $user = User::create(['name'=>$name,'email'=>$email,'password'=>$password]);
        $user->save();
        return redirect()->route('user.index');
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
        $user = User::find($id);
        $user->delete();
        return redirect()->route('user.index')->with('deleted_user','User has been successfully deleted');
    }

    public function getSignin(){
        return view('admin.user.signin');
    }

    public function getSignup(){
        return view('admin.user.signup');
    }

    public function logout(){
        Auth::logout();
        return redirect()->route('page.home');

    }

    public function isAdmin(){
        if(Auth::user()->status == 1){
            return true;
        }else{
            return false;
        }
    }

    public function changeStatus($id){
        $user = User::find($id);
        $user->status = 1;
        $user->save();
        return redirect()->route('user.index')->with('changed_status','User '.$user->name.' has change status to Administrator');
    }


    public function getOrder($id){
        $user = User::find($id);
        $orders = $user->orders;
        $orders->transform(function($order,$key){
            $order->cart = unserialize($order->cart);
            return $order;
        });

        return view('page.orders',compact('user','orders'));
    }

}
