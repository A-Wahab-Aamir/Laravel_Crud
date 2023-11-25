<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB; 

class StudentController extends Controller
{
    public function registrationForm(){
        return view('registor_form');
    }

    public function insert_student(Request $request){
        $std_name=$request->input('name');
        $std_class=$request->input('class');
        $std_section=$request->input('section');
        DB::insert("insert into student (name,class, section) values(?,?,?)", [ $std_name,  $std_class,  $std_section]);
        return  redirect('fetch');

    }

    public function fetch_student(){
        $result=DB::select("select * from student");
        return view("fetch_student",compact("result"));

    }
    public function delete_student($id){
       DB::delete("delete from student where id=$id");
       return  redirect('fetch');

    }
    public function edit_student($id){
        $result=DB::select("select * from student where id=$id");
        return view("edit_student",compact("result"));
    }

    public function update_student(Request $request , $id){
        $std_name=$request->input('name');
        $std_class=$request->input('class');
        $std_section=$request->input('section');
        DB::update("update student set name=? , class=? , section=? where id=$id", [ $std_name,  $std_class,  $std_section]);
        return  redirect('fetch');
 
     }
}
