@extends('app')
@section('cssExtend')
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
<title>Power of Praise Church > Add Announcement</title>
@endsection
@section('css')
.login{
	width: 80%;
	height: 70%;
	margin:auto;
}
@endsection
@section('content')
<div class="bodyWrapper">
	<div style="min-height:500px;display:flex; padding: 20px 0px;">
		<div class="login">
			<div class="worshipHeader">Add Announcement</div>
			@include('errors.list')
			{!! Form::open() !!}
				@include('announcementForm', ['submitButtonText' => 'Add'])
			{!! Form::close() !!}
		</div>
	</div>
</div>
@endsection