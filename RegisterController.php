<?php

namespace App\Http\Controllers;

use App\Register;
use App\Login;
use Illuminate\Http\Request;
use Crypt;
use DB;

class RegisterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    //to view the list of teachers in adminpanel
    public function index()
    {
        $teachers=Register::select('fname','lname','uname', 'rid', 'ustatus')->where('utype','Teachers')->get();
        return view ('Admin.allteachers',compact('teachers'));
    }

    public function Updateteachers(Request $request, $loginid)
    {

        $login = Login::where('loginid', $loginid)->get();
        //$log = Login::find($loginid);
        foreach($login as $obj){
            if($obj -> ustatus == 1){
                Login::where('loginid', $loginid)->update(['ustatus'=> 2]);
                $user = Login::where('loginid', $loginid)->select('uname')->get();
                Register::where('uname', $user[0]->uname)->update(['ustatus'=> 2]);
            }
            else if($obj -> ustatus == 2){

               Login::where('loginid',$loginid)->update(['ustatus'=> 1]);
               $user = Login::where('loginid', $loginid)->select('uname')->get();
               Register::where('uname', $user[0]->uname)->update(['ustatus'=> 1]);

            }


        }

        // return \redirect('/allteac');
        return redirect('/allteachers');


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
        request()->validate( [


            'uname' => 'unique:registers'

       ]);
        {


            $reg = new Register([
                'fname'=> $request->get('fname'),
                'lname'=>$request->get('lname'),
                'uname'=>$request->get('uname'),
                'utype'=>$request->get('utype'),
                'ustatus'=>1
            ]);
            $reg -> save();

            $log = new Login([

                'rid'=> DB::getPdo()->lastInsertId(),
                'uname'=> $request->get('uname'),
                'password'=> $request->get('password'),
                'utype'=> $request->get('utype'),
                'fname'=>$request->get('fname'),
                'ustatus'=>1

            ]);

            $log-> save();
            return redirect('/Login');
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Register  $register
     * @return \Illuminate\Http\Response
     */
    public function show(Register $register)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Register  $register
     * @return \Illuminate\Http\Response
     */
    public function edit(Register $register)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Register  $register
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Register $register)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Register  $register
     * @return \Illuminate\Http\Response
     */
    public function destroy(Register $register)
    {
        //
    }
    public function sindex()
    {

            $students=Register::select('fname','lname','uname', 'rid', 'ustatus')->where('utype','Students')->get();
            return view ('Admin.allstudents',compact('students'));
            //return $students;
    }

    public function Updatestudents(Request $request, $loginid){

        $login = Login::where('loginid', $loginid)->get();
        //$log = Login::find($loginid);
        foreach($login as $obj){
            if($obj -> ustatus == 1){
                Login::where('loginid', $loginid)->update(['ustatus'=> 2]);
                $user = Login::where('loginid', $loginid)->select('uname')->get();
                Register::where('uname', $user[0]->uname)->update(['ustatus'=> 2]);
            }
            else if($obj -> ustatus == 2){

               Login::where('loginid',$loginid)->update(['ustatus'=> 1]);
               $user = Login::where('loginid', $loginid)->select('uname')->get();
               Register::where('uname', $user[0]->uname)->update(['ustatus'=> 1]);

            }


        }
        return \redirect('/students');
 }
}
