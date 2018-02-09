@extends('master')
@section('content')
<div class="container">
	<h2 class="head">Employee "<strong class="">{{$employee->name}}</strong>"</h2>
	<hr>
	<div class="row">
		<form action = "{{route('edit',$employee->id)}}" method="POST" enctype="multipart/form-data">
				{{ csrf_field() }}
			<div class="col-lg-6">
				<div class="avata-name">
				 	Avata
				</div>
				<div class="avata text-center">
					<img src="{!! asset('img/'.$employee['image']) !!}" class="avata-img img-circle" alt="">
				</div>
			</div>
			<div class="col-lg-6">
				<div class="form-group">
		    		<label for="name">Name:</label>
		    		<input type="text" class="form-control" name= "name" value="{{$employee->name}}" required="">
		  		</div>
		  		<div class="form-group">
		    		<label for="birthday">Birthday:</label>
		    		<input type="text" class="form-control" name= "birthday" value="{{$employee->birthday}}">
		  		</div>
		  		<div class="form-group">
		    		<label for="email">Email:</label>
		    		<input type="email" class="form-control" name= "email" value="{{$employee->email}}" readonly="">
		  		</div>
		 		<div class="form-group">
		    		<label for="address">Address:</label>
		    		<input type="text" class="form-control" name= "address" value="{{$employee->address}}" required="">
		  		</div>
		  		<div class="upload-btn-wrapper">
  					<button class="btn-upload">Change avata</button>
  					<input type="file" name="avata" />
				</div>
				@if ($errors->has('avata'))
	                <div class="alert alert-danger">
	                    <ul>
	                        @foreach ($errors->get('avata') as $avata)
	                            <li>{{$avata}}</li>
	                        @endforeach
	                    </ul>
	                </div>
	            @endif
		  		<div class="sub">
		  			<button type="submit" class="btn btn-default">Update</button>
		  			<button type="reset" class="btn btn-default">Reset</button>
		  		</div>
		  	</div>
		</form>
	</div>
</div>
@endsection