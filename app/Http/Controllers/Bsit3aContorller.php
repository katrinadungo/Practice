<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use function PHPUnit\Framework\returnArgument;


class Bsit3aContorller extends Controller
{
    public function index()
        {
            return view ('BSIT3A.lists');
    }
    
}

