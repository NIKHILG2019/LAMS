<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Symfony\Component\Console\Input\Input;

class Regcontrol extends Controller
{
    public function reg(Request $req)
    {
        $enrollmentNumber = $req->EnrollmentNumber;
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
        if($check == 0 )
        {
            try {
                DB::insert('insert into student values(?,?,?,?,?,?,?,?,?,?,?)',array($enrollmentNumber,$rollNo,$firstName,$middleName,$lastName,$email1,$studentPhone,$parentPhone,3,$passwrd,$class_id));
            }
            catch (\Illuminate\Database\QueryException $ex)
            {
                   return back()->withErrors($ex->getCode())->withInput();
            }
            return redirect('/');
        }
        else
        {
            return redirect('/status');
        }
    }
}
