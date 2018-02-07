@extends('master')
@section('content')
<div class="container">
	<h2 class="head">List Employees</h2>
  <hr>
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
        <th>Email</th>
        <th>Birthday</th>
        <th>Address</th>
        <th colspan="2" class="add"><div class="btn-group btn-group"><a href="{{route('add')}}" class="btn btn-info"><span class="ti-plus"></span></a></div></th>
      </tr>
    </thead>
    <tbody>
      <?php $dem=0;?>
    	@foreach ($employees as $value)
      <?php $dem++; ?>
      <tr>
        <td>{{$dem}}</td>
        <td>{{$value->name}}</td>
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