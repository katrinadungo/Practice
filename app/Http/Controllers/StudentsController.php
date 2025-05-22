<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentsController extends Controller
{
    public function index(){
        return view("BSIT3A.create");
    }
    public function store(Request $request){ $request ->validate(
        ['stud_no' => 'required|max:255|string',
        'fname' => 'required|max:255|string',
        'mname' => 'required|max:255|string',
        'lname' => 'required|max:255|string',
        'address' => 'required|max:255|string',
        'stud_dob' => 'required|date',
        ]
    );


    }

}

