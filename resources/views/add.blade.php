@extends('master')
@section('content')
<div class="container">
	<h2 class="head">Add Employee</h2>
	<hr>
	@if (count($errors)>0)
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
	@endif
	<div class="col-lg-6 col-lg-offset-3">
		<form action = "{{route('add')}}" method="POST">
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
	    		<input type="email" class="form-control" name= "email" value="@gmail.com" required="">
	  		</div>
	 		<div class="form-group">
	    		<label for="address">Address:</label>
	    		<input type="text" class="form-control" name= "address" required="">
	  		</div>
	  		<div class="sub">
	  			<button type="submit" class="btn btn-default">Add</button>
	  			<button type="reset" class="btn btn-default">Reset</button>
	  		</div>
		</form>
	</div>
</div>
@endsection