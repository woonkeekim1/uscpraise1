<div class="form-group">
	<label for="sermon-title">목회야이기 제목</label>
	{!! Form::text('title', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
    <label for="sermon-content">목회야이기 본문</label>
    {!! Form::textarea('content', null, ['class' => 'form-control']) !!}
</div>
<div  class="form-group">
	{!! Form::submit($submitButtonText, ['class'=> 'btn btn-primary form-control']) !!}
</div>