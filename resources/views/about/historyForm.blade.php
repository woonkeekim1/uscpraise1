<div class="form-group">
	<label for="history-year">년도</label>
	{!! Form::text('year', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
	<label for="history-description">내용</label>
	{!! Form::text('description', null, ['class' => 'form-control']) !!}
</div>
<div  class="form-group">
	{!! Form::submit($submitButtonText, ['class'=> 'btn btn-primary form-control']) !!}
</div>