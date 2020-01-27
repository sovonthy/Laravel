<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentsController extends Controller
{
      
    public function showStudent(){
        $students = array("Preab", " Sovath", "Reach", "Rith", " Kanha");
        return view('pages.student', compact('students'));
    }
}
