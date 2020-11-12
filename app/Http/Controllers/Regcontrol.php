<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class Regcontrol extends Controller
{
    public function reg(Request $req)
    {
        $firstName = $req->firstName;
        $middleName = $req->middleName;
        $lastName = $req->lastName;
        $email1 = $req->email1;
        $email2 = $req->email2;
        $studentPhone = $req->studentPhone;
        $parentPhone = $req->parentPhone;
        $className = $req->className;
        $rollNo = $req->rollNo;
        $passwrd = md5($req->repassword);
        $class_id =  DB::table('class')->select('class_id')->where('class_name','=',$className)->get();
        foreach($class_id as $class)
            $class_id = $class->class_id;
        $check = DB::table('student')
            ->select('*')
            ->where('Roll_No','=',$rollNo)
            ->where('class_id','=',$class_id)
            ->where('Email','=',$email1)->count();
        echo $check;
        if($check == 0 )
        {
            DB::insert('insert into student values(?,?,?,?,?,?,?,?,?,?,?)',array("123",$rollNo,$firstName,$middleName,$lastName,$email1,$studentPhone,$parentPhone,3,$passwrd,$class_id));
            return redirect('/');
        }
        else
        {
            return redirect('/status');
        }
    }
}
