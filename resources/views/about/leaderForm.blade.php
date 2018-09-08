<div class="form-group">
	<label for="leader-name">이름</label>
	{!! Form::text('name', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
    <label for="leader-groupName">조 이름</label>
    {!! Form::text('group_name', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
	<label for="leader-image">사진</label>
    	@if (!is_null($leader))
    		<label for="leader-current">현재: 
    		{{ $leader->image }}
    	@endif
    </label>
    {!! Form::file('image', [ 'accept' => 'image/*']) !!}
</div>
<div  class="form-group">
	{!! Form::submit($submitButtonText, ['class'=> 'btn btn-primary form-control']) !!}
</div>