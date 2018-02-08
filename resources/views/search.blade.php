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
        <th colspan="2" class="add"><div class="btn-group btn-group"><a href="{{route('add')}}" class="btn btn-info"><span class="ti-plus"></span></a></div></th>
      </tr>
    </thead>
    <tbody>
      <?php $dem=0;?>
    	@foreach ($searchs as $value)
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
  <div class="row">{{$searchs->links()}}</div>
</div>
@endsection