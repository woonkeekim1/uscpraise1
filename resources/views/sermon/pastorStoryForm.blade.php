<div class="form-group">
	<label for="sermon-title">목회야이기 제목</label>
	{!! Form::text('title', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
    <label for="sermon-content">목회야이기 본문</label>
    {!! Form::textarea('content', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
	<label for="sermon-date">목회야이기 등록일</label>
	@if (!is_null($pastorStory))
		{!! Form::input('date', 'created_at', $pastorStory->created_at->format('Y-m-d'), ['class' => 'form-control']) !!}
	@else
		{!! Form::input('date', 'created_at', date('Y-m-d'), ['class' => 'form-control']) !!}	
	@endif
</div>
<div  class="form-group">
	{!! Form::submit($submitButtonText, ['class'=> 'btn btn-primary form-control']) !!}
</div>