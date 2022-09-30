<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
class StudentController extends Controller
{   
    public function show($lisa)
        {
            $lisa = Str::upper($lisa);
            return view('student', ['naam' => $lisa]);
        }

}

