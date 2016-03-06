@extends('app')
@section('content')
<div class="container">
	<div class="mainImageContainer">
			<div class="mainImagePrevButtonContainer">
	        	<div class="mainImagePrevButton">
				</div>
			</div>
			<div class="mainImageContent">
				<div class="mainImageTitle">"Build Your Faith Right"</div>
				<!-- 
				<button class="mainImageTitleButton"> &rarr; Latest Sermon</button>
				-->
			</div>
			<div class="mainImageNextButtonContainer">
				<div class="mainImageNextButton">
	            </div>
			</div>
		</div>
		
		<div class="middleContentContainer">
			<div class="middleContent">
				<div class="sermon">
					<div class="sermonHeader">
						<div class="sermonTitle">{!! $latestSermon[0]->title !!}</div> <div class="sermonDate">{!! $latestSermon[0]->created_at->year !!}.{!! str_pad($latestSermon[0]->created_at->month, 2, 0, STR_PAD_LEFT)!!}.{!!str_pad($latestSermon[0]->created_at->day, 2, 0, STR_PAD_LEFT) !!}</div>
					</div>
					<hr class="Line">
					<div class="sermonBody">
						<div class="sermonBodyHead">목사님 설교말씀 자리 테스트 중입니다</div>
						1. 이부분은 매주 목사님 설교말씀이 들어갈자리에요</br>
						2. 이것도 테스트중이에요</br>
						3. 이것도 테스트</br>
						4. 요놈도 테스트</br>
					</div>
				</div>
			</div>
			<div class="middleContentFiller">
				&nbsp;
			</div>
			<div class="middleContent">
				<div class="mainGallry">
					<image class="mainGallryImage" src="images/image2.jpg">
					<div class="mainGallryBody">
						<div class="mainGallaryDescription">	
							
						</div>
					</div>
				</div>
			</div>
			<div class="middleContentFiller">
				&nbsp;
			</div>
			<div class="middleContent">
				<div class="helper">
					<div class="helperHeader">
						목사님 작성하신 기사가 들어가는부분
					</div>
					<hr class="Line">
					<div class="helperBody">
						바꿀꺼나 추가할꺼 알려주시면 감사합니다
					</div>
					<hr class="transLine">
					<div class="helperBody1">
						<div class="contentHead">아쉽게도</div>
						모바일에서는
						<br>
						<div class="contentHead">잘안되요</div>
						ㅜㅜ
					</div>
				</div>
			</div>
		</div>
	
		<div class="middleContentInfoContainer">
			<div class="middleContent">
				<div class="worship">
					<div class = "worshipHeader" style="padding-left:20px">
						Worship
					</div>
					<div class = "worshipBody" style="padding-left:20px">
						예배 장소
					</div>
					<div class="worshipMap">
						<img src="images/worshipLocation.jpg" width="100%" height="100%" id="mapImage">
					</div>
				</div>
			</div>
			<div class="middleContentFiller">
				&nbsp;
			</div>
			<div class="middleContent">
				<div class="worship">
					<div class="worshipHeaderWhere">
						Where
					</div>
					<div class="worshipInfoBodyWhere">
						Worship: Kilgore<br>
						Fishbowl Chapel: University Religious Center<br>
						(next to Student Health Center)
					</div>
					<div class="worshipHeaderWhen">
						When
					</div>
					<div class="worshipInfoBodyWhen">
						Worship: 11:00 am Sunday(Korean/English)<br>
						Optional: 10:00 am Sunday(For Baby Care)
					</div>
				</div>
			</div>
			<div class="middleContentFiller">
				&nbsp;
			</div>
			<div class="middleContent">
				<div class="worship">
					<div class="worshipHeader">
						Announcement
					</div>
					<div class="AnnouncementBody">
						<div class="AnnouncementBodyPart">
							주보로 체우기<br>
							Kilgore에서!!
						</div>
						<div class="AnnouncementBodyPart">
							식사는??<br>
							108호에서
						</div>
						<div class="AnnouncementBodyPart">
							안알랴줌<br>
							비밀
						</div>
					</div>
					<div class="AnnouncementDotContainer">
						<div class="AnnouncementDot">
						</div>
						<div class="AnnouncementDot">
						</div>
						<div class="AnnouncementDot" style="margin-right:41px">
						</div>
					</div>
				</div>
			</div>
		</div>
	    
	    <div class="middleContentContainer">
				<div class="middleContent">
					<div class="mainGallry">
						<image class="mainGallryImage" src="images/image3.jpg">
						<div class="mainGallryBody">
							<div class="mainGallaryDescription" id="AboutUs">	
								About Us
							</div>
						</div>
					</div>
				</div>
				<div class="middleContentFiller">
				&nbsp;
				</div>
	            <div class="middleContent">
		            <div class="event">
		            	<div class="sermonHeader">
	    	            	목회 이야기
	        	        </div>
	        	        <hr class="Line">
	        	        <div class="eventBody">
	        	        	March 01, 2016
	        	        	<br>
	        	        	내 고유함을 가지다(제목만) 안녕하세요 바이 바이 바이 바이 바이asdfadf<br>
	        	        	March 01, 2016
	        	        	<br>
	        	        	내 고유함을 가지다(제목만) 안녕하세요 바이 바이 바이 바이<br>
	        	        	March 01, 2016
	        	        	<br>
	        	        	내 고유함을 가지다(제목만) 안녕하세요 바이 바이 바이 바이 
	        	        </div>
	        	        <hr class="transLine">
	        	        <div class="eventBody">
	        	        	마우스 오버시에는 밑줄 생기기
	        	        	<br>
	        	        	저도
	        	        </div>
	        	        <hr class="transLine">
	        	        <div class="eventBody">

	        	        </div>
	        	        <div class="EventDotContainer">
							<div class="EventDot">
							</div>
							<div class="EventDot">
							</div>
							<div class="EventDot" style="margin-right:41px">
							</div>
						</div>
	            	</div>
	            </div>
	
				<div class="middleContentFiller">
				&nbsp;
				</div>
				<div class="middleContent">
					<div class="mainGallry">
						<image class="mainGallryImage" src="images/image4.jpg">
						<div class="mainGallryBody">
							<div class="mainGallaryDescription" id="gallery">	
								Gallery
							</div>
						</div>
					</div>
				</div>
			</div>
</div>
<div style="width:100%; height:95px; background-color:white; clear:left;">

</div>
@endsection
@section('script')
<script>
	$(document).on('click', '#gallery', function(){
		window.location.href="{{ url('\gallery') }}";
	});
	$(document).on('click', '#AboutUs', function(){
		window.location.href="{{ url('\about') }}";
	});
	$(document).on('click', '.worshipMap', function(){
		var source = $('#mapImage').attr('src');
		$('.popUpContent').html('<img style="margin:auto;width:100%; height:80%" src="images/worshipLocation_Large.jpg">');
		$('.popUpContainer').css('display', 'block');
	});

</script>
	
@endsection