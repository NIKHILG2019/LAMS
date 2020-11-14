<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StudentDashboard extends Controller
{
    function attendance()
    {
        $enrollment_number = 126;
        $student_data = DB::table('student')->select('*')->where('Enrollment_id','=',$enrollment_number)->get();
        $student_details = [];
        foreach ($student_data as $data)
        {
            array_push($student_details,$data->Roll_No);
            array_push($student_details,$data->semester);
            array_push($student_details,$data->class_id);
            array_push($student_details,$data->Department);
        }
        $subjects = DB::table('subject')->select('*')->where('semester','=',$student_details[1])->where('Department','=',$student_details[3])->get();
        $sub_id = array();
        foreach($subjects as $subject)
            array_push($sub_id,$subject->subject_id);
        $teaches = array();
        foreach($sub_id as $sub)
            array_push($teaches ,DB::table('teaches')->select('teaches_id')->where('class_id','=',$student_details[2])->where('subject_id','=',$sub)->get());

        $attended = array();
        $lectures = array();
        foreach($teaches as $teach)
        array_push($lectures,DB::table('attends')->select('*')->where('teaches_id','=',$teach->teaches_id));

    }
}
