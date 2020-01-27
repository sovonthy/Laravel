<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentsController extends Controller
{
   public $students = array("Preab", " Sovath", "Reach", "Rith", " Kanha");
    public function showStudent(){
        return view('pages.student') ->with('students', $this->students);
    }
    public function searchStudent($name){
        // $isNameFound = false;
        // foreach ($this->students as $student) {
        //     if($student == $name){
        //         $result = $name. "is in the list";
        //         break;
        //     }else {
        //         $result = $name. "Not found...";
        //     }
        // }
        // return $result;
        
        //check is name found we will return found message
        $result = $name. " not found";
        if (in_array($name,$this->students)){
            $result = $name. " is in the list...";
        }
        return $result;
    }
}
