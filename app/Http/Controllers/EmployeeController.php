<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Employee;

class EmployeeController extends Controller
{
    //
    public function show(){
    	$employees = Employee::paginate(10);	
    	return view('index',['employees'=>$employees]);
    }

    public function add(){
    	return view('add');
    }

    public function postAdd(Request $request){
    $employee = new Employee();
    $employee->name = $request->name;
    $employee->address = $request->address;
    $employee->birth_day = $request->birthday;
    $employee->email = $request->email;
    $employee->save();
    return redirect('/show');
    }

    public function edit($id){
    	$employee = Employee::find($id);
    	return view('edit',['employee'=>$employee]);
    }

    public function postEdit(Request $request,$id){
    	$employee = Employee::find($id);
    	$employee->name = $request->name;
   	 	$employee->address = $request->address;
    	$employee->birth_day = $request->birthday;
    	$employee->email = $request->email;
    	$employee->save();
    	return redirect('/show');
    }

    public function delete($id){
    	$employee = Employee::find($id)->delete();
    	return redirect('show');
    }

    public function search(Request $request){
    	$searchs = Employee::where('name','like','%'.$request->search.'%')->paginate(10);
    	return view('search',['searchs'=>$searchs]);
    }
}
