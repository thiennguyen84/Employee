@extends('master')
@section('content')
<div class="container">
	<div class="alert alert-info text-center head">Kết quả cho từ khóa "<strong>{{$name}}</strong>"</div>
  <hr>
  @if(count($searchs)==0)
    <div class="alert alert-danger">
      <strong>Không có nhân viên nào trong danh sách mà bạn muốn tìm</strong>
    </div>
  @endif
	<table class="table table-hover">
    <thead>
      <tr>
        <th>STT</th>
        <th>Name</th>
        <th>Avata</th>
        <th>Email</th>
        <th>Birthday</th>
        <th>Address</th>
        <th colspan="2" class="add"><div class="btn-add"><a href="{{route('employs.create')}}" class="btn btn-info"><span>thêm nhân viên</span></a></div></th>
      </tr>
    </thead>
    <tbody>
      @php 
        $temp=1;
      @endphp
    	@foreach ($searchs as $value)
      <tr>
        <td>{{$temp++}}</td>
        <td>{{$value->name}}</td>
        <td><img src="{!! asset('img/'.$value['image']) !!}" class="name-search" alt=""></td>
        <td>{{$value->email}}</td>
        <td>{{$value->birthday}}</td>
        <td>{{$value->address}}</td>
        <td><div class="show"><a href="{{route('employs.show',$value->id)}}" class="btn btn-info"><span class="ti-user"></span></a></div></td>
        <td><form action="{{route('employs.destroy',$value->id)}}" method="POST">
          {{ csrf_field() }}
          {{ method_field('DELETE') }}
          <div class="delete"><button class="btn btn-danger"><span class="ti-close"></span></button></div>
        </form></td>
      </tr>
      @endforeach
    </tbody>
  </table>
  <div class="row">{{$searchs->links()}}</div>
</div>
@endsection