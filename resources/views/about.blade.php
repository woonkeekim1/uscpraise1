@extends('app')
@section('cssExtend')
<link rel="stylesheet" type="text/css" href="css/subPage.css">
@endsection
@section('css')
.aboutGrace
{
	font-size:30px;
	font-weight:bold;
	display:inline-block;
	background-color:Red;
	position:relative;
	text-align:center;
	margin:0 auto;
	display:table;
	margin-top:20px;
	border-bottom: solid 1px;
}
.churchSlogan
{
	color:white;
	background-color:red;
	padding:15px;
	margin:0 auto;
	display:table;
	margin-top:20px;
	font-weight:bold;
}
.sloganContainer
{
	width:100%;
	margin-top:50px;
	display:block;
	position:relative;
	float:left;
}
.slogan
{
	width:500px;
	height:200px;
	background-color:yellow;
	padding:20px;
	float:left;
	display:block;
	border: solid 1px black;
}
.sloganFiller
{
	width:86px;
	background-color:red;
	float:left;
}
.sloganTitle
{
	font-weight:bold;
}
.sloganIcon
{
	width:25px;
	height:25px;
	display:inline-block;
	vertical-align:middle;
	margin-right:3px;
}

.slogan ul
{
	padding-left:20px;
}
.slogan ul li
{
	font-size:14px;
	padding-top:7px;
	padding-bottom:7px;
	margin:0px;
}
.pastorHeader
{
	font-size:16px;
	font-weight:bold;
	margin-top:20px;
	line-height:24px;
}
.pastorBody
{
	font-size:14px;
	line-height:25px;
}
.pastorContentBody
{
	width:540px;
	background-color:white;
	float:left;
}
.pastorImage
{
	width:580px;
	background:url('images/image1.jpg') no-repeat center center;
	background-size:cover;
	height:500px;
	float:left;
	position:relative;
}
.churchHistoryList
{
	width:100%;
	border-top:solid 4px red;
}

.yearDescription li
{
	width:500px;
	padding:0px;
	margin:0px;
}
.yearDescription ul
{
	padding:10px;
	padding-top:20px;
	margin:0px;
}
.year
{
	color:red;
	text-align:center;
	padding:30px;
	padding-right:70px;
	float:left;
	font-weight:bold;
	display:block;
}
.yearDescription
{
	float:left;
	background-color:blue;
	display:inline-block;
}
@endsection
@section('content')
<div class="fullWidth" style="background-color:gray">
	<div class="container">
		<div class="sermonImageContainer" style="background: url('images/image1.jpg') center center; background-size:cover">
		</div>
	</div>
</div>
<div class="fullWidth" style="background-color:red" id="sermonNavBar">
	<div class="sermonWrapper">
		<ul class="sermonNav">
			<li class="sermonNavLogo"><a href={!! url('/') !!} class="logo"><img src="images/footer_logo.png" width="100%" height="61px"></a></li>
			<li style="margin-right:60px">교회소개</li>
			<li style="margin-right:33px;"><a href="#churchVision">교회비전</a></li>
			<li style="margin-right:33px;"><a href="#aboutPastor">목회자 소개</a></li>
			<li style="margin-right:33px;"><a href="#churchHistory">교회연혁</a></li>
			<li style="margin-right:33px;"><a href="#fridayPray">섬기는 사람들</a></li>
			<li><a href="#fridayPray">공지사항</a></li>
		</ul>
	</div>
</div>
<a name="churchVision"></a>
<div class="fullwidth" style="height:100px; background-color:white">
</div>
<div class="fullWidth" style="background-color:white;height:850px;">
	<div class="container">
		<div class="fullWidth">
			<font size="10px" color="red" style="font-weight:bold">교회비전</font>
		</div>
		<div class="fullWidth">
			<div class="aboutGrace">
					Grace란
			</div>
		</div>
		<div class="fullWidth">
			<div class="churchSlogan">
				USC 찬양선교교회의 2015년 표어는 Grace in God 입니다.
			</div>
		</div>
		<div class="fullWidth">
			<div class="sloganContainer">
				<div class="slogan">
					<div class="sloganTitle">
						<div class="sloganIcon" style="background: url('images/image1.jpg') no-repeat center center;
		background-size:cover;"></div>비전 교회
					</div>
					<ul>
						<li>세력 확장이 아니라 지역 속에 들어가 연약한 교회를 격려하며 돕는 것</li>
						<li>국내,외 지역 교회들과의 협력과 메트릭스 팀웍을 통해 인력과 자원을 공유하는것 </li>
						<li>교파와 교단의 벽을 넘어서 상호간 목회적 소프트웨어를 공유하는것 </li>
					</ul>
				</div>
				<div class="sloganFiller">
					&nbsp;
				</div>
				<div class="slogan">
					<div class="sloganTitle">
						<div class="sloganIcon" style="background: url('images/image2.jpg') no-repeat center center;
		background-size:cover;"></div>선교사역
					</div>
					<ul>
						<li>선교사 훈련을 중요시하는 선교사 사관학교로서의 역할</li>
						<li>안식년 선교사들의 휴식과 재충전의 자리로서의 역할</li>
						<li>평신도들의 업그레이드를 위한 헌신과 침묵의 훈련장으로서의 역할</li>
					</ul>
				</div>
			</div>
			
			
			<div class="sloganContainer">
				<div class="slogan">
					<div class="sloganTitle">
						<div class="sloganIcon" style="background: url('images/image1.jpg') no-repeat center center;
		background-size:cover;"></div>한국 유학생들의 쉼터
					</div>
					<ul>
						<li>세력 확장이 아니라 USC 학교 속에 들어가 젊은 유학생 격려하며 돕는 것</li>
						<li>국내,외 지역 USC 졸업생들과 유학생들에게 믿음의 성장네트워크를 공유하는 것</li>
						<li>유학생들에게 믿음을 공유하는 공간과 그들만의 쉼터를 제공하는 것 </li>
					</ul>
				</div>
				<div class="sloganFiller">
					&nbsp;
				</div>
				<div class="slogan">
					<div class="sloganTitle">
						<div class="sloganIcon" style="background: url('images/image2.jpg') no-repeat center center;
		background-size:cover;"></div>교내 복음 전파
					</div>
					<ul>
						<li>USC 교내에서 한국 유학생 뿐만 아니라 아시아 학생들에게 복음전파 역할</li>
						<li>USC 교내 속에 복음 전파 역할</li>
						<li>학생들을 위한 오전 예배 큐티 모임으로 말씀을 전파하는 역할</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</div>
<a name="aboutPastor"></a>
<div class="fullwidth" style="height:100px; background-color:yellow">
</div>
<div class="fullWidth" style="background-color:yellow;height:850px;">
	<div class="container">
		<div class="fullWidth">
			<font size="10px" color="red" style="font-weight:bold">목회자 소개</font>
		</div>
		<div class="fullWidth">
			<div class="pastorContentBody">
				<div class="pastorHeader">
					찬양선교교회는 하나님의 비전으로 세워진 교회입니다.<br>
					사도행전적 교회란, 예수님꼐서 주인되시고 성령님께서 이끄시는 교회입니다.
				</div>
				<div class="pastorBody">
					모든 성도들이 세상 속의 소금과 빛으로 살아가며 삶으로 복음을 증거하는 선교사로 살아가는 교회입니다.
					한 지역에만 머물지 않고 땅 끝을 향해 나아가는 교회입니다. 온누리교회의 사도행전적 교회의 비전은
					"ACT29"라는 단어로 표현됩니다. 성경의 사도행전은 28장으로 끝나지만 그 28장의 마지막은 마치
					끝나지 않은 것 같은 여운을 두고 끝납니다. 이는 사도행전의 역사는 교회를 통해 계속되고 있다는 것입니다.
					온누리교회는 오늘 이 시대에 사도행전을 써 내려가는 교회라 되고 싶습니다.
					주님 오실 때까지 그리스도의 지상명령에 순종하며
					사도행전적 교회로 다시 오실 주님을 맞이할 것입니다.
					
				</div>
			</div>
			<div class="pastorImage">
			</div>
		</div>
	</div>
</div>
<a name="churchHistory"></a>
<div class="fullwidth" style="height:100px; background-color:white">
</div>
<div class="fullWidth" style="background-color:green;height:850px;">
	<div class="container">
		<div class="fullWidth">
			<font size="10px" color="red" style="font-weight:bold">교회연혁</font>
		</div>
		<div class="churchHistoryList">
			<div class="fullWidth">
				<div class="year">
					2004
				</div>
				<div class="yearDescription">
					<ul>
						<li>"USC찬양선교교회"개척, 창립예배</li>
						<li>"USC찬양선교교회"개척, 창립예배</li>
					</ul>
				</div>
			</div>
			<div style="clear:both">
				<hr>
			</div>
			<div class="fullWidth">
				<div class="year">
					2005
				</div>
				<div class="yearDescription">
					<ul>
						<li>제 1기 교회연합 평신도 신앙강좌 개최</li>
						<li>제 1기 교회연합 평신도 신앙강좌 개최</li>
					</ul>
				</div>
			</div>
			<div style="clear:both">
				<hr>
			</div>
			<div class="fullWidth">
				<div class="year">
					2006
				</div>
				<div class="yearDescription">
					<ul>
						<li>제 1기 젊은이를 꺠운다 교회청년 대학부 교역자 세미나</li>
						<li>제 1기 젊은이를 꺠운다 교회청년 대학부 교역자 세미나</li>
					</ul>
				</div>
			</div>
			<div style="clear:both">
				<hr>
			</div>
		</div>
	</div>
</div>
@endsection
@section('script')
<script src="/scripts/myScript.js"></script>
@endsection