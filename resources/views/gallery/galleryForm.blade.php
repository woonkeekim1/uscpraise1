<div class="form-group">
	<label for="gallery-title">제목</label>
	{!! Form::text('title', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
    <label for="gallery-content">내용</label>
    {!! Form::textarea('body', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
	<label for="gallery-category">카테고리</label>
	{!! Form::select('category', 
					  array('PrayAndSermon' => 'Pray And Sermon', 'Retreat' => 'Retreat', 'Event' => 'Event', 'Mission' => 'Mission', 'Before2016' => 'Before2016'),
					  null,
					  ['class' => 'form-control']) !!}
</div>
<div class="form-group">
	<label for="gallery-image">사진</label>
    	@if (!is_null($gallery))
    		<label for="gallery-current">현재: 
    		{{ $gallery->image }}
    	@endif
    </label>
    {!! Form::file('image', [ 'accept' => 'image/*']) !!}
</div>
<div  class="form-group">
	{!! Form::submit($submitButtonText, ['class'=> 'btn btn-primary form-control']) !!}
</div>