@extends('layouts.app')
@section('title')
<title>show</title>
@endsection
@section('content')
<div class="container">
	<h2 class="head"><a href="{{ route('employs.edit',$employee->id) }}" class="btn btn-info show-head"><span class="ti-pencil-alt"></span></a>Employee "<strong class="">{{ $employee->name }}</strong>"</h2>
	<hr>
	@if(Session::has('thanhcong'))
      <div class="alert alert-success thanh-cong">{{ Session::get('thanhcong') }}</div>
    @endif
	<div class="row">
		<div class="col-lg-6">
			<div class="avata-name">
			 	Avatar
			</div>
			<div class="avata text-center">
				<img src="{!! asset('img/'.$employee['image']) !!}" class="avata-img img-circle" alt="">
			</div>
		</div>
		<div class="col-lg-6">
			<div class="form-group">
	    		<label for="name">Name:</label>
	    		<div class="well well-sm">{{ $employee->name }}</div>
	  		</div>
	  		<div class="form-group">
	    		<label for="birthday">Birthday:</label>
	    		<div class="well well-sm">{{ $employee->birthday }}</div>
	    	</div>
	  		<div class="form-group">
	    		<label for="email">Email:</label>
	    		<div class="well well-sm">{{ $employee->email }}</div>
	    	</div>
	 		<div class="form-group">
	    		<label for="address">Address:</label>
	    		<div class="well well-sm">{{ $employee->address }}</div>
	  		</div>
	  	</div>
	</div>
</div>
@endsection