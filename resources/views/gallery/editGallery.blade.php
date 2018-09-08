@extends('app')
@section('cssExtend')
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
<title>Power of Praise Church > Edit Gallery</title>
@endsection
@section('css')
.login{
	width: 80%;
	height: 70%;
	margin:auto;
}
@endsection
@section('content')
<div class="container">
	<div class="bodyWrapper">
		<div style="min-height:500px;display:flex; padding: 20px 0px;">
			<div class="login">
				<div class="worshipHeader">Edit Gallery</div>
				@include('errors.list')
				{!! Form::model($gallery, ['method'=> 'PATCH', 'enctype' => 'multipart/form-data', 'action' => ['GalleryController@editGallery', $gallery->id]]) !!}
					@include('gallery.galleryForm', ['submitButtonText' => 'Edit'])
				{!! Form::close() !!}
			</div>
		</div>
	</div>
</div>
@endsection