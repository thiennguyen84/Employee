@extends('master')
@section('content')
<div class="container">
	<h2 class="head"><a href="{{route('employs.edit',$employee->id)}}" class="btn btn-info show-head"><span class="ti-pencil-alt"></span></a>Employee "<strong class="">{{$employee->name}}</strong>"</h2>
	<hr>
	@if(Session::has('thanhcong'))
      <div class="alert alert-success thanh-cong">{{Session::get('thanhcong')}}</div>
    @endif
	<div class="row">
			<div class="col-lg-6">
				<div class="avata-name">
				 	Avata
				</div>
				<div class="avata text-center">
					<img src="http://localhost:8000/img/{{$employee->image}}" class="avata-img img-circle" alt="">
				</div>
			</div>
			<div class="col-lg-6">
				<div class="form-group">
		    		<label for="name">Name:</label>
		    		<div class="well well-sm">{{$employee->name}}</div>
		  		</div>
		  		<div class="form-group">
		    		<label for="birthday">Birthday:</label>
		    		<div class="well well-sm">{{$employee->birthday}}</div>
		  		<div class="form-group">
		    		<label for="email">Email:</label>
		    		<div class="well well-sm">{{$employee->email}}</div>
		 		<div class="form-group">
		    		<label for="address">Address:</label>
		    		<div class="well well-sm">{{$employee->address}}</div>
		  		</div>
		  	</div>
		</div>
</div>
@endsection