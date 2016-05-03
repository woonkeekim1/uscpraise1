<div class="form-group">
	<label for="sermon-title">설교제목</label>
	{!! Form::text('title', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
	<label for="sermon-content">설교 본문</label>
    {!! Form::textarea('content', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
    <label for="sermon-content">성경 구절</label>
    {!! Form::text('body', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
    <label for="sermon-content">설교 audio</label>
    	@if (!is_null($sermon))
    		<label for="sermon-current">현재: 
    		{{ $sermon->audio }}
    	@endif
    </label>
    {!! Form::file('audio',  [ 'accept' => 'audio/*']) !!}
</div>
<div class="form-group">
	<label for="sermon-date">설교 날짜</label>
	@if (!is_null($sermon))
		{!! Form::input('date', 'sermonDate', $sermon->sermonDate->format('Y-m-d'), ['class' => 'form-control']) !!}
	@else
		{!! Form::input('date', 'sermonDate', date('Y-m-d'), ['class' => 'form-control']) !!}	
	@endif
</div>
<div  class="form-group">
	{!! Form::submit($sublmitButonText, ['class'=> 'btn btn-primary form-control']) !!}
</div>