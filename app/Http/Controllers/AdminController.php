<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function adminLogin(Request $req){
        return view("admin.adminlogin");
    }
    public function adminReg(Request $req){
        return view("admin.adminReg");
    }
    public function adminDash(Request $req){
        return view("admin.admindashboard");
    }
}
