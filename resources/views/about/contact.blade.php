@extends('app')
@section('cssExtend')
<link rel="stylesheet" type="text/css" href="css/subPage.css">
<title>Power of Praise Church > Contact Us</title>
@endsection
@section ('css')
.sponsorEmphsisunderline
{
	cursor: pointer;
	color: #bf1e2e;
}
#map{
	width: 300px;
	height: 300px;
	display:inline-block;
	margin:20px;
	float:left;
}
@endsection
@section('content')

<div class="fullWidth" style="background-color:#444444">
	<div class="container">
		<div class="sermonImageContainer" style="background-image: url('/images/main_img_01.jpg')">
		</div>
	</div>
</div>
<div class="fullWidth" style="background-color:#bf1e2e" id="sermonNavBar">
	<div class="sermonWrapper">
		<ul class="sermonNav">
			<li class="sermonNavLogo"><a href={!! url('/') !!} class="logo"><img src="/images/footer_logo.png" width="100%" height="61px"></a></li>
			<li style="margin-right:175px">문의</li>
		</ul>
	</div>
</div>
<div class="bodyWrapper" style="background-color:#f4f4f4">
	<div class="container">
		<div class="fullwidth" style="height:90px; background-color:#f4f4f4">
		</div>
		<div class="fullWidth" style="background-color:#f4f4f4;height:966px;">
			<div class="fullWidth">
				<font size="10px" color="#bf1e2e" style="font-weight:bold">문의</font>
			</div>
			<div class="fullWidth" style="margin-top:20px; line-height:1.8em; font-weight:bold;">
				USC 찬양선교교회는 USC Student Organization에 속에 있습니다. 본 교회는 학생들의 헌금 뿐 아니라 졸업생을 포함한
				여러 후원자들의 재정적인 도움으로 운영되고 있습니다. <span id="sponsorPopup" class="sponsorEmphsisunderline">후원을 원하시는 분은 (은행 계좌번호)</span> 으로
				입금이 가능합니다. 교회에 대한 문의사항이 있으시면 아래의 연락처로 연락바랍니다
			</div>
			<div class="fullWidth">
				<div class="sloganContainer">
					<div class="slogan">
						<div class="sloganTitle">
							<div class="sloganIcon" style="background: url('/images/contact_icon_01.png') no-repeat center center;
			background-size:cover;"></div>Location
						</div>
						<ul>
							<li>예배 장소: USC Kilgore(지도 A 참조)</li>
							<li>교제 장소: The Well - 2726 South Vermont Avenue Unit E, Los Angeles CA, 90020 (지도 B 참조)</li>
						</ul>
					</div>
					<div class="sloganFiller">
						&nbsp;
					</div>
					<div class="slogan">
						<div class="sloganTitle">
							<div class="sloganIcon" style="background: url('/images/contact_icon_02.png') no-repeat center center;
			background-size:cover;"></div>Contact Information
						</div>
						<ul>
							<li>최그린 학생대표: 213-503-3904, greencho@usc.edu</li>
							<li>신승호 목사: 213-239-3784, shsynn@usc.edu</li>
							<li>평신도들의 업그레이드를 위한 헌신과 침묵의 훈련장으로서의 역할</li>
						</ul>
					</div>
				</div>
			</div>
			<div class="fullWidth">
				<div class="sloganContainer">
					<div class="slogan"  style="width:100%">
						<div class="sloganTitle">
							<div class="sloganIcon" style="background: url('/images/contact_icon_03.png') no-repeat center center;
			background-size:cover;"></div> 교회 오시는 길
						</div>
						<div id="map">

						</div>
						<ul style="float:left;">
							<li>예배 장소:  835 W. 34th St. Los Angeles CA, 90007 (지도 A참조)</li>
							<li>교제 장소: The Well - 2726 S. Vermont Ave. Unit E, Los Angeles CA, 90007 (지도 B 참조)</li>
							<li>차량 요청: 차량이 없으신 분은 교회의 준비된 차량으로 라이드 서비스를 합니다. 라이드 필요하신 분은 <br>
   										교회 또는 학생대표에게 연락 주시기 바랍니다.</li>
							<li>대중교통: 한인타운에서 USC 방향 -  Metro 버스 204 또는 754 (Vermont Ave.) / Metro 지하철.</li>
							<li>USC 캠퍼스 셔틀: Route A/B/C/Union Station</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
@section('script')
<script type="text/javascript" src="js/myScript.js"></script>
<script src="https://maps.googleapis.com/maps/api/js"></script>
<script>
	var initMap = function() { 
			var geocoder = new google.maps.Geocoder();;
			var address = '2726 south vermont avenue Unit E, Los Angeles, CA';

			if (geocoder) {
				geocoder.geocode({
					'address': address
				}, function (results, status) {
					if(status == google.maps.GeocoderStatus.OK)
					{
						if(status != google.maps.GeocoderStatus.ZERO_RESULTS)
						{
							var map = new google.maps.Map(document.getElementById('map'),{
								center: {lat: 34.0242343, lng:-118.2858417},
								zoom: 14,
								disableDefaultUI: true,
								scrollwheel: false
							});
							var wellMarker = new google.maps.Marker({
												position: results[0].geometry.location, 
												label: "B",
												title:"The Well"
											});
							wellMarker.setMap(map);
							var churchMarker = new google.maps.Marker({
												position: {lat: 34.0232333, lng: -118.2845142}, 
												label: "A",
												title: "Church"
											});
							churchMarker.setMap(map);
						}
					}
				})
			}
		}
	initMap();

</script>
@endsection