<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreEmployee;
use App\Http\Requests\UpdateEmployee;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Employee;
use Session;
use Validator;
use File;

class EmployController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $employees = Employee::orderBy('name')->paginate(10);   
        return view('admin.employee.index',['employees'=>$employees]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.employee.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreEmployee $request)
    {
        //
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
        return redirect('/employs')->with('thanhcong','Thêm nhân viên thành công');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $employee= Employee::findOrFail($id);
        return view('admin.employee.show',['employee'=>$employee]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $employee = Employee::findOrFail($id);
        return view('admin.employee.edit',['employee'=>$employee]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateEmployee $request, $id)
    {
        //
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
        return redirect()->route('employs.show',$employee->id)->with('thanhcong','Update nhân viên thành công');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $employee = Employee::findOrFail($id);
        $file= $employee->image;
        File::delete('img/'.$file);
        $employee->delete();
        return redirect('employs')->with('thanhcong','Xóa nhân viên thành công');
    }

    public function search(Request $request){
        $name = $request->search;
        $searchs = Employee::where('name','like','%'.$name.'%')->orderBy('name')->paginate(10);
        return view('admin.employee.search',['searchs'=>$searchs,'name'=>$name]);
    }
}
