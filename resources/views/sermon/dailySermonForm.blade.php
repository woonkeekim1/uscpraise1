
<div class="form-group">
    <label for="sermon-content">성경 구절</label>
    {!! Form::text('bibleverse', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
	<label for="sermon-title">설교 제목</label>
	{!! Form::text('title', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
	<label for="sermon-content">설교 본문</label>
    {!! Form::textarea('body', null, ['class' => 'form-control']) !!}
</div>
<div  class="form-group">
	{!! Form::submit($submitButtonText, ['class'=> 'btn btn-primary form-control']) !!}
</div>