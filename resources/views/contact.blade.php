@extends('app')
@section('cssExtend')
<link rel="stylesheet" type="text/css" href="css/subPage.css">
@endsection
@section ('css')
.underline
{
	text-decoration:underline;
}
@endsection
@section('content')
<div class="fullWidth" style="background-color:#444444">
	<div class="container">
		<div class="sermonImageContainer" style="background: url('images/image1.jpg') center center; background-size:cover">
		</div>
	</div>
</div>
<div class="fullWidth" style="background-color:#bf1e2e" id="sermonNavBar">
	<div class="sermonWrapper">
		<ul class="sermonNav">
			<li class="sermonNavLogo"><a href={!! url('/') !!} class="logo"><img src="images/footer_logo.png" width="100%" height="61px"></a></li>
			<li style="margin-right:175px">문의</li>
		</ul>
	</div>
</div>
<div class="fullwidth" style="height:90px; background-color:white">
</div>
<div class="fullWidth" style="background-color:white;height:966px;">
	<div class="container">
		<div class="fullWidth">
			<font size="10px" color="#bf1e2e" style="font-weight:bold">문의</font>
		</div>
		<div class="fullWidth">
			USC 찬양선교교회는 USC Student Organization에 속에 있습니다. 본 교회는 학생들의 헌금 뿐 아니라 졸업생을 포함한
			여러 후원자들의 재정적인 도움으로 운영되고 있습니다. <span class="underline">후원을 원하시는 분은 (은행 계좌번호)</span> 으로
			입금이 가능합니다. 교회에 대한 문의사항이 있으시면 아래의 연락처로 연락바랍니다
		</div>
		<div class="fullWidth">
			<div class="sloganContainer">
				<div class="slogan">
					<div class="sloganTitle">
						<div class="sloganIcon" style="background: url('images/intro_icon_01.png') no-repeat center center;
		background-size:cover;"></div>Location
					</div>
					<ul>
						<li>예배 장소: USC Taper Hall 102호 (지도 A 참조)</li>
						<li>교제 장소: The Well - 1207 w 37th PL, Los Angeles CA, 90020 (지도 B 참조)</li>
					</ul>
				</div>
				<div class="sloganFiller">
					&nbsp;
				</div>
				<div class="slogan">
					<div class="sloganTitle">
						<div class="sloganIcon" style="background: url('images/intro_icon_02.png') no-repeat center center;
		background-size:cover;"></div>Contact Information
					</div>
					<ul>
						<li>최그린 학생대표: 213-503-3904, greencho@usc.edu</li>
						<li>신승호 목사: 213-239-3884, shsynn@usc.edu</li>
						<li>평신도들의 업그레이드를 위한 헌신과 침묵의 훈련장으로서의 역할</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
@section('script')
<script src="/scripts/myScript.js"></script>
@endsection