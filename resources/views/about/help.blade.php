@extends('app')
@section('cssExtend')
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
<title>Power of Praise Church > Help</title>
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
			<div class="">
				LA에 <font style="color:red">정착하시는데 도움이</font> 필요하시는분들은 간단하게 작성해 주시면 저희가 최대한 빨리 연락드리겠습니다.
			</div>
			<div class="worshipHeader">이 양식을 채워주세요</div>
			@include('errors.list')
			{!! Form::open() !!}
				<div class="form-group">
					<label for="history-year">이름</label>
					{!! Form::text('name', null, ['class' => 'form-control']) !!}
				</div>
				<div class="form-group">
					<label for="history-description">이메일 주소</label>
					{!! Form::text('email', null, ['class' => 'form-control']) !!}
				</div>
				<div class="form-group">
					<label for="history-description">필요하신 도움</label><br>
					{!! Form::checkbox('pickup', 'pickup') !!} 공항 픽업 <br>
					{!! Form::checkbox('bank', 'bank') !!} 은행 계좌 개설<br>
					{!! Form::checkbox('phone', 'phone') !!} 핸드폰 개통<br>
					{!! Form::checkbox('else', 'else') !!} 기타<br> {!! Form::text('elseText', null, ['class' => 'form-control']) !!}

				</div>
				<div  class="form-group">
					{!! Form::submit('Submit', ['class'=> 'btn btn-primary form-control']) !!}
				</div>
			{!! Form::close() !!}
		</div>
	</div>
</div>
@endsection