@extends('master')
@section('content')
<div class="container">
	<h2 class="head">List Employees</h2>
  <hr>
  <div class="row">
    <div class="col-lg-5 col-lg-offset-4">
      <form class="navbar-form navbar-left" action="{{route('search')}}" method="get">
        <div class="input-group">
          <input type="text" class="form-control" name="search" placeholder="Tìm theo tên" required="">
          <div class="input-group-btn">
              <button class="btn btn-default" type="submit">
              <i class="ti-search"></i>
               </button>
          </div>
        </div>
      </form>
      <div class="btn-add"><a href="{{route('add')}}" class="btn btn-info"><span>thêm nhân viên</span></a></div>
    </div>
  </div>
  <div class="row">
    @if(Session::has('thanhcong'))
      <div class="alert alert-success thanh-cong">{{Session::get('thanhcong')}}</div>
    @endif
  </div>
	<table class="table table-hover">
    <thead>
      <tr>
        <th>STT</th>
        <th>Name</th>
        <th>Avata</th>
        <th>Email</th>
        <th>Birthday</th>
        <th>Address</th>
        <th></th>
        <th></th>
      </tr>
    </thead>
    <tbody>
      <?php $dem=0;?>
    	@foreach ($employees as $value)
      <?php $dem++; ?>
      <tr>
        <td>{{$dem}}</td>
        <td>{{$value->name}}</td>
        <td><img src="http://localhost:8000/img/{{$value->image}}" width="40" height="35px" alt=""></td>
        <td>{{$value->email}}</td>
        <td>{{$value->birth_day}}</td>
        <td>{{$value->address}}</td>
        <td><div class="edit"><a href="{{route('edit',$value->id)}}" class="btn btn-info"><span class="ti-pencil-alt"></span></a></div></td>
        <td><form action="/task/{{ $value->id }}" method="POST">
          {{ csrf_field() }}
          {{ method_field('DELETE') }}
          <div class="delete"><button class="btn btn-danger"><span class="ti-close"></span></button></div>
        </form></td>
      </tr>
      @endforeach
    </tbody>
  </table>
  <div class="row">{{$employees->links()}}</div>
</div>
@endsection