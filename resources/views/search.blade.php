@extends('master')
@section('content')
<div class="container">
	<h2>Tìm thấy {{count($searchs)}} kết quả</h2>
	<table class="table table-bordered">
    <thead>
      <tr>
        <th>STT</th>
        <th>Name</th>
        <th>Email</th>
        <th>Birthday</th>
        <th>Address</th>
        <th colspan="2" class="add"><div class="btn-group btn-group"><a href="{{route('show')}}" class="btn btn-info">show</a></div></th>
      </tr>
    </thead>
    <tbody>
      <?php $dem=0;?>
    	@foreach ($searchs as $value)
      <?php $dem++; ?>
      <tr>
        <td>{{$dem}}</td>
        <td>{{$value->name}}</td>
        <td>{{$value->email}}</td>
        <td>{{$value->birth_day}}</td>
        <td>{{$value->address}}</td>
        <td><div class="edit"><a href="{{route('edit',$value->id)}}" class="btn btn-info">Edit</a></div></td>
        <td><form action="/task/{{ $value->id }}" method="POST">
            {{ csrf_field() }}
            {{ method_field('DELETE') }}
            <div class="delete"><button class="btn btn-info">Delete</button></div>
        </form></td>
      </tr>
      @endforeach
    </tbody>
  </table>
  <div class="row">{{$searchs->links()}}</div>
</div>
@endsection