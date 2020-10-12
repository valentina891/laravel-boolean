<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function studenti(){
        $data = config('students');
        //uso compact perchè non è un array associativo quello di students.php//
        return view('studenti', compact('data'));
    }
}
