<div class="form-group">
	<label for="announce-body">내용</label>
	{!! Form::text('body', null, ['class' => 'form-control']) !!}
</div>
<div  class="form-group">
	{!! Form::submit($submitButtonText, ['class'=> 'btn btn-primary form-control']) !!}
</div>