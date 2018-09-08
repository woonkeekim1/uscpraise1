@extends('app')
@section('cssExtend')
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
<title>Power of Praise Church > About Us</title>
@endsection
@section('css')
.login{
	width: 70%;
	height: 70%;
	margin:auto;
}
@endsection
@section('content')
<div class="bodyWrapper">
	<div style="min-height:500px;display:flex;">
		<div class="login">
			@include('errors.list')
			{!! Form::open() !!}
				<div class="form-group">
					<label for="exampleInputEmail1">Email</label>
	    			{!! Form::text('email', null, ['class' => 'form-control']) !!}
				</div>
				<div class="form-group">
				    <label for="exampleInputPassword1">Password</label>
				    {!! Form::password('password', ['class' => 'form-control', 'type' => 'password']) !!}
				</div>
				<button type="submit" class="btn btn-default">Submit</button>
			{!! Form::close() !!}
		</div>
	</div>
</div>
@endsection