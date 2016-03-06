@extends('app')
@section('cssExtend')
<link rel="stylesheet" type="text/css" href="css/subPage.css">
<link rel="stylesheet" type="text/css" href="css/main.css">
<title>Power of Praise Church > About Us</title>
@endsection
@section('css')


@endsection
@section('content')
<div class="fullWidth" style="background-color:#444444">
	<div class="container">
		<div class="sermonImageContainer" style="background-image: url('/images/main_img_04.jpg')">
		</div>
	</div>
</div>

<div class="fullWidth" style="background-color:#bf1e2e" id="sermonNavBar">
	<div class="sermonWrapper">
		<ul class="sermonNav">
			<li class="sermonNavLogo"><a href={!! url('/') !!} class="logo"><img src="images/footer_logo.png" width="100%" height="61px"></a></li>
			<li style="margin-right:175px">교회소개</li>
			<li style="margin-right:44px;"><a href="#churchVision">교회비전</a></li>
			<li style="margin-right:52px;"><a href="#aboutPastor">목회자 소개</a></li>
			<li style="margin-right:40px;"><a href="#churchHistory">교회연혁</a></li>
			<li style="margin-right:42px;"><a href="#leaders">섬기는 사람들</a></li>
			<li style="margin-right:30px"><a href="#fridayPray">공지사항</a></li>
		</ul>
	</div>
</div>
<div class="bodyWrapper" style="background-color:#f4f4f4">
	<div class="container">
		<a name="churchVision"></a>
		<div class="fullwidth" style="height:90px; background-color:#f4f4f4">
		</div>
		<div class="fullWidth" style="background-color:#f4f4f4;height:966px;">
			<div class="container">
				<div class="fullWidth">
					<font class="font36" color="#bf1e2e" style="font-weight:bold">교회비전</font>
				</div>
				<div class="fullWidth">
					<div class="aboutGrace">
							찬양선교교회
					</div>
				</div>
				<div class="fullWidth">
					<div class="churchSlogan">
						사랑과 사명이 어우러진 교회
					</div>
				</div>
				<div class="fullWidth">
					<div class="sloganBody">
						찬양선교교회는 하나님께서 USC 캠퍼스 안에 마련하신 하나님 나라의 교두보입니다. 유학생활이라는 삶의 여정을 주님과 함꼐 걷도록 한국과 아시아계 유학생을 섬깁니다.<br>
						성경을 기초로 하는 복음주의 신앙의 깃발 아래 하나님과의 친밀한 관계로 인도합니다. USC 대학의 종교학생그룹으로 등록되어 캠퍼스 내 선교활동을 보장받고 있으며<br>
						주일 예배와 아침기도회, 금요 성경의 모임을 캠퍼스에서 가집니다.
					</div>
				</div>
				<div class="fullWidth">
					<div class="sloganContainer">
						<div class="slogan">
							<div class="sloganTitle">
								<div class="sloganIcon" style="background: url('images/intro_icon_01.png') no-repeat center center;
				background-size:cover;"></div>비전
							</div>
							<ul>
								<li>초대교회의 예배 공동체, 사랑 공동체, 선교 공동체를 지향</li>
								<li>유학생들을 하나님 나라의 추수할 일꾼으로 양육</li>
								<li>영혼 하나의 부흥, 청년 하나가 바로 서는 일에 전력</li>
							</ul>
						</div>
						<div class="sloganFiller">
							&nbsp;
						</div>
						<div class="slogan">
							<div class="sloganTitle">
								<div class="sloganIcon" style="background: url('images/intro_icon_02.png') no-repeat center center;
				background-size:cover;"></div>선교
							</div>
							<ul>
								<li>세계 각국 청년들의 집결지인 USC 캠퍼스를 세계선교의 현장으로 인식</li>
								<li>유학생에 대한 복음 전파를 넘어 양육된 일꾼을 모국의 선교사로 파송</li>
								<li>USC의 명성을 활용하여 해외 대학들과 복음안에서 교류</li>
							</ul>
						</div>
					</div>
					
					
					<div class="sloganContainer">
						<div class="slogan">
							<div class="sloganTitle">
								<div class="sloganIcon" style="background: url('images/intro_icon_03.png') no-repeat center center;
				background-size:cover;"></div>도우미
							</div>
							<ul>
								<li>유학 초년생들의 정착을 돕고 든든히 서도록 지원</li>
								<li>유학 삶에서의 필요 충족, 위로 제공, 정신적/신앙적인 멘토 역할</li>
								<li>실패, 좌절, 상실, 파탄 등의 위기를 예수 사랑으로 함께 극복</li>
							</ul>
						</div>
						<div class="sloganFiller">
							&nbsp;
						</div>
						<div class="slogan">
							<div class="sloganTitle">
								<div class="sloganIcon" style="background: url('images/intro_icon_01.png') no-repeat center center;
				background-size:cover;"></div>지역 봉사
							</div>
							<ul>
								<li>캠퍼스 내 기독학생 그룹들과 연계</li>
								<li>USC의 지역사회 활동에 복음적으로 협력</li>
								<li>Los Angeles시의 노숙자, 음주, 마약 문제 등에 협조</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="bodyWrapper" style="background-color:#ffde00">
	<div class="container">
		<a name="aboutPastor"></a>
		<div class="fullwidth" style="height:90px; background-color:#ffde00">
		</div>
		<div class="fullWidth" style="background-color:#ffde00;height:766px;">
			<div class="container">
				<div class="fullWidth">
					<font class="font36" color="#bf1e2e" style="font-weight:bold">목회자 소개</font>
				</div>
				<div class="fullWidth" style="height:700px">
					<div class="pastorContentBody">
						<div class="pastorBodyFiller">
						</div>
						<div class="pastorBody">
							<b>찬양선교교회</b>를 이끌고 있는 신승호 목사는 40세가 되서야 하나님을 만난 늦깍이 목사다.<br>
							경기고등학교와 서울대학교를 거쳐 유명 기업들과 해외지사 근무 경력이 있고<br>
							예술의 전당에서 공연기획을 맡아 일하기도 했다. 세상에서 잘 나가던 청년이<Br>
							어느 날벼락 같은 말기 암의 사형선고를 받았다. 삶을 마감하기 직전 하나님께<br>
							서원을 하고 나서 하나님의 기적적인 치유하심으로 '제 2의 인생'을 얻었다.<br>
							40세의 나이에 신학을 시작, 개척 목회의 길로 들어섰고 주님을 섬기는 일에<br>
							깊이가 필요함을 느껴 98년에 미국으로 건너와 Fuller신학교에서 박사학위를<br>
							받았다. Redondo Beach에서 시작된 이민목회가 USC 박사과정 청년들의<br>
							열정에 이끌려 2004년 USC캠퍼스로 옮겨진 이래로 줄곧 한국과 아시아계<br>
							유학생들을 주 대상으로 캠퍼스 유학생 선교에 힘을 기울여왔다. 신승호 목사는<br>
							<b>USC대학 종교디렉터(Religious Director)</b>로 임명 받아 대학의 각종<br>
						종교사업계획에도 협조하고 있다.
							
						</div>
						<div class="pastorBodyFiller">
						</div>
					</div>
					<div class="pastorImage">
						
						</div>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="bodyWrapper" style="background-color:white">
	<div class="container">
		<a name="churchHistory"></a>
		<div class="fullwidth" style="height:100px; background-color:white">
		</div>
		<div class="fullWidth" style="background-color:white;min-height:966px;">
			<div class="container">
				<div class="fullWidth">
					<font class="font36" color="#bf1e2e" style="font-weight:bold">교회연혁</font>
				</div>
				<div class="churchHistoryList" id="HistoryList">
					<?php $curYear = ''; $i = 0;?>
					@while($i < $count)
					<div class="fullWidth">
						@if($curYear != $contents[$i]->year)
							<?php  $curYear = $contents[$i]->year; ?>
							<div class="year">
								{{ $contents[$i]->year }}
							</div>
							<div class ="yearDescription">
								<ul class="yearDescriptionList">
									@while($i < $count && $contents[$i]->year == $curYear)
										<li>{{ $contents[$i]->description}}</li>
										<?php $i++;?>
									@endwhile
								</ul>
							</div>
							<div style="clear:both">
								<hr>
							</div>
						@endif
						<?php  $i++;?>
					</div>
					@endwhile
				</div>
				@if($pages > 1)
				
					@if($pages == 2)
						<div style="width:40px; margin-top:10px; margin-bottom:20px; margin-left:auto; margin-right:auto;">
							<div class="AnnouncementDot" id="History0">
							</div>
							<div class="AnnouncementDot" id="History1">
							</div>
						</div>
					@elseif($page == 3)
						<div style="width:60px; margin-top:10px; margin-bottom:20px; margin-left:auto; margin-right:auto;">
							<div class="AnnouncementDot" id="History0">
							</div>
							<div class="AnnouncementDot" id="History1">
							</div>
							<div class="AnnouncementDot" id="History2">
							</div>
						</div>
					@endif
				@endif
			</div>
		</div>
	</div>
</div>
<div class="bodyWrapper" style="background-color:#f4f4f4">
	<div class="container">
		<a name="leaders"></a>
		<div class="fullwidth" style="height:90px; background-color:#f4f4f4">
		</div>
		<div class="fullWidth" style="background-color:#f4f4f4;height:800px;">
			<div class="container">
				<div class="fullWidth">
					<font class="font36" color="#bf1e2e" style="font-weight:bold">섬기는 사람들</font>
				</div>
				
				<div class="middleContentContainer">
					<div class="middleContent">
						<div class="circleImage" style="background-image:url('/images/img_01.png')">
						</div>
						<div class="circleImageDescriptionContainer">
							<div class="leaderDescription">
								싹트네(학부)<Br>
								팀리더: 오지영
							</div>
						</div>
					</div>
					<div class="middleContentFiller">
						&nbsp;
					</div>
					<div class="middleContent">
						<div class="circleImage" style="background-image:url('/images/img_02.png')">
						</div>
						<div class="circleImageDescriptionContainer">
							<div class="leaderDescription">
								Abel<br>
								팀리더: 정지향
							</div>
						</div>
					</div>
					<div class="middleContentFiller">
						&nbsp;
					</div>
					<div class="middleContent">
						<div class="circleImage" style="background-image:url('/images/img_03.png')">
						</div>
						<div class="circleImageDescriptionContainer">
							<div class="leaderDescription">
								Zion<br>
								팀리더: 박경미
							</div>
						</div>
					</div>
				</div>
				<div class="middleContentContainer">
					<div class="middleContent">
						<div class="circleImage" style="background-image:url('/images/img_04.png')">
						</div>
						<div class="circleImageDescriptionContainer">
							<div class="leaderDescription">
								서로섬김<Br>
								팀리더: 이 황
							</div>
						</div>
					</div>
					<div class="middleContentFiller">
						&nbsp;
					</div>
					<div class="middleContent">
						<div class="circleImage" style="background-image:url('/images/img_05.png')">
						</div>
						<div class="circleImageDescriptionContainer">
							<div class="leaderDescription">
								안디옥<br>
								팀리더: 남상욱
							</div>
						</div>
					</div>
					<div class="middleContentFiller">
						&nbsp;
					</div>
					<div class="middleContent">
						<div class="circleImage" style="background-image:url('/images/img_06.png')">
						</div>
						<div class="circleImageDescriptionContainer">
							<div class="leaderDescription">
								브리스길라와 아글라<br>
								팀리더: 신은해
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
@section('script')
<script type="text/javascript" src="js/myScript.js"></script>
<script type="text/javascript" src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
<script>
$(document).on('click',  "[id^=History]", function(){
	var $listPage = $(this).prop('id');
	var $HistoryID = $listPage.substring(7, $listPage.length);
	$HistoryID = parseInt($HistoryID);
	$.ajax({
		url:'/about/moreHistory',
		data: {id : $HistoryID},
		type: "GET",
		cache: true,
		jsonp:false,
		dataType: 'json',
		success: function(data){
			$curYear = '';
			$i = 0;
			$html = "";
			while($i < data.count)
			{
				$html = '<div class="fullWidth">';
				if($curYear != data.contents[$i].year)
				{
					$curYear = data.contents[$i].year;
					$html += '<div class="year">';
					$html += $curYear;
					$html += '</div>';
					$html += '<div class="yearDescription">';
					$html += '<ul class="yearDescriptionList">';
					while($i < data.count && data.contents[$i].year == $curYear)
					{
						$html += '<li>' + data.contents[$i].description + '</li>';
						$i++;
					}
					$html += '</ul>';
					$html += '</div>';
					$html += '<div style="clear:both">';
					$html += '<hr>';
					$html += '</div>';
				}
				$html += '</div>';
			}
			$("#HistoryList").html($html);
		}
		/*
		error: function(data){
			alert("HI");
		}
		*/
	});
	
});
</script>

@endsection