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
            'sub_cast' => $req->subcast,
            'maritalStatus' => $req->marry,
            'familyMember' => $req->fam,
            'rationCard' => $req->rcType,
            'aadharNumber' => $req->aadhar,
            'agriculture' => $req->agr,
            'plot' => $req->plot,
            'cycle' => $req->cycle,
            'twoWheeler' => $req->twowheel,
            'fourWheeler' => $req->fourwheel,
            'incomeSource' => $req->income,
            'familyAnnualIncome' => $req->annIncome,

        ]);

        return response()->json(['success' => 'User created successfully.']);
    }
}
