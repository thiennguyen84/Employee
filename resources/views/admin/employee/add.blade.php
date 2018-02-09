@extends('master')
@section('content')
<div class="container">
	<h2 class="head">Add Employee</h2>
	<hr>
	<div class="col-lg-6 col-lg-offset-3">
		<form action = "{{ route('employs.store') }}" method="POST" enctype="multipart/form-data">
			{{ csrf_field() }}
			<div class="form-group">
	    		<label for="name">Name:</label>
	    		<input type="text" class="form-control" name= "name" required="">
	  		</div>
	  		<div class="form-group">
	    		<label for="birthday">Birthday:</label>
	    		<input type="date" class="form-control" name= "birthday">
	  		</div>
	  		<div class="form-group">
	    		<label for="email">Email:</label>
	    		<input type="email" class="form-control" name= "email" value="@gmail.com">
	  		</div>
	  		@if ($errors->has('email'))
	            <div class="alert alert-danger">
	                <ul>
	                    @foreach ($errors->get('email') as $email)
	                        <li>{{$email}}</li>
	                    @endforeach
	                </ul>
	            </div>
            @endif
	 		<div class="form-group">
	    		<label for="address">Address:</label>
	    		<input type="text" class="form-control" name= "address" required="">
	  		</div>
	  		<div class="upload-btn-wrapper">
  				<button class="btn-upload">Upload avata</button>
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
	  			<button type="submit" class="btn btn-default">Add</button>
	  			<button type="reset" class="btn btn-default">Reset</button>
	  		</div>
		</form>
	</div>
</div>
@endsection