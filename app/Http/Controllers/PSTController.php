<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Register;

class PSTController extends Controller
{
    public function first()
    {
        return view("welcome");
    }
    public function store(Request $req)
    {
        Register::create([
            'name' => $req->name,
            'village' => $req->village,
            'tehsil' => $req->tehsil,
            'district' => $req->dis,
            'state' => $req->state,
            'date_of_birth' => $req->dob,
            'blood_group' => $req->blood,
            'education' => $req->edu,
            'job' => $req->job,
            'religion' => $req->rel,
            'cast' => $req->cast,
            'sub_cast' => $req->subcast
        ]);

        return response()->json(['success' => 'User created successfully.']);
    }
}
