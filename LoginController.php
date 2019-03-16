<?php

namespace App\Http\Controllers;

use App\Login;
use Illuminate\Http\Request;
use DB;

class LoginController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    //  public function login(Request $request)
    //  {

    // }
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function Userlogin(Request $request)
    {
        // return $request->all();
	$uname = $request->get('uname');
        $password= $request->get('password');
        $utype=$request->get('utype');
        $fname=$request->get('fname');
        //return $utype;
        $a=Login::where('uname',$uname)->where('password',$password)->get();
		foreach ($a as $object) {

            if($uname=$object->uname){
               // return $object;
               //$fname=$object->fname;

               // $value=session('email');
                if($object->utype == "admin"){
                    session(['uname'=>$uname]);
                   // session(['email'=>$email]);
                    //return "sucess";
                   return View('Admin.adminindex');

            }
            else if($object->utype == "Teachers"){
                if($object->ustatus==1){
                session(['uname'=>$uname]);
                return View('Teachers.teachersindex');}
                //return "sucess";
            }
            else if($object->utype == "Students"){
                if($object->ustatus==1){
                session(['uname'=>$uname]);
                return redirect('/Loginme');}
                //return "sucess";
            }
        }


            else{
                return redirect('/Login')->with('success','wrong username/password');
                //return "aa";
            }

        }
        $msg = [
            'message' => 'Enter Correct Username And Password!',
           ];

       return redirect('/Login')->with($msg);
}



    public function logout() {
        session()->flush();
        session_unset();
        //Auth::logout();
        return redirect('/Login');
      }
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
        $uname = $request->get('uname');
        $password= $request->get('password');
        $a=Login::where('uname',$uname)->get();

        foreach ($a as $object) {
            if($object->uname = $uname){
                //session(['email'=>$email]);
                //$value=session('email');
                return View('Pages.about');
                //->with('session',$value);

            }
            else{
                return $a;
                //return redirect('Pageviews.login')->with('success','wrong username/password');
            }

        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Login  $login
     * @return \Illuminate\Http\Response
     */
    public function show(Login $login)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Login  $login
     * @return \Illuminate\Http\Response
     */
    public function edit(Login $login)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Login  $login
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Login $login)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Login  $login
     * @return \Illuminate\Http\Response
     */
    public function destroy(Login $login)
    {
        //
    }
}
