<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Employee;
use Session;
use Validator;
use File;

class EmployeeController extends Controller
{
    //
    public function show(){
    	$employees = Employee::orderBy('name')->paginate(10);	
    	return view('admin.employee.index',['employees'=>$employees]);
    }

    public function add(){
    	return view('admin.employee.add');
    }

    public function postAdd(Request $request){
    	$this->validate($request,[
    		'email'=>'required|email|unique:employees'
    	],
    	[
    		'email.unique'=>'Email đã có người sử dụng',
    	]);
    	$employee = new Employee();
    	if($request->hasFile('avata')){
    		$file = $request->avata;
    		$file->move('img',$file->getClientOriginalName());
    		$employee->image = $file->getClientOriginalName();
    	}
	    $employee->name = $request->name;
	    $employee->address = $request->address;
	    $employee->birthday = $request->birthday;
	    $employee->email = $request->email;
	    $employee->save();
    	return redirect('/show')->with('thanhcong','Thêm nhân viên thành công');
    }

    public function edit($id){
    	$employee = Employee::findOrFail($id);
    	return view('admin.employee.edit',['employee'=>$employee]);
    }

    public function postEdit(Request $request,$id){
    	$employee = Employee::findOrFail($id);
    	if($request->hasFile('avata')){
    		$file1= $employee->image;
    		File::delete('img/'.$file1);
    		$file = $request->avata;
    		$file->move('img',$file->getClientOriginalName());
    		$employee->image = $file->getClientOriginalName();
    		$employee->save();
    	}
    	$employee->name = $request->name;
   	 	$employee->address = $request->address;
    	$employee->birthday = $request->birthday;
    	$employee->email = $request->email;
    	$employee->save();
    	return redirect('/show')->with('thanhcong','Update nhân viên thành công');
    }

    public function delete($id){
    	$employee = Employee::findOrFail($id);
    	$file= $employee->image;
    	File::delete('img/'.$file);
    	$employee->delete();
    	return redirect('/show')->with('thanhcong','Xóa nhân viên thành công');
    }

    public function search(Request $request){
    	$name = $request->search;
    	$searchs = Employee::where('name','like','%'.$name.'%')->orderBy('name')->paginate(10);
    	return view('admin.employee.search',['searchs'=>$searchs,'name'=>$name]);
    }
}
