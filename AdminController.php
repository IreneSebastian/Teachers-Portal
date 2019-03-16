<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class AdminController extends Controller
{
    public function allteachers()
    {
        return view('Admin.allteachers');
    }
    public function students()
    {
        return view('Admin.allstudents');
    }
    public function adminindex()
    {
        return view('Admin.adminindex');
    }

    //to block and unblock
    
}
