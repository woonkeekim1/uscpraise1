@extends('app')
@section('cssExtend')
<link rel="stylesheet" type="text/css" href="css/subPage.css">
<title>Power of Praise Church > Sermon</title>
@endsection
@section('content')
<div class="fullWidth" style="background-color:#444444">
	<div class="container">
		<div class="sermonImageContainer">
		</div>
	</div>
</div>
<div class="fullWidth" style="background-color:#bf1e2e" id="sermonNavBar">
	<div class="sermonWrapper">
		<ul class="sermonNav">
			<li class="sermonNavLogo"><a href={!! url('/') !!} class="logo"><img src="images/footer_logo.png" width="100%" height="61px"></a></li>
			<li style="margin-right:76px">예배와 말씀</li>
			<li><a href="#sundayPray">주일 예배</a></li>
			<li><a href="#morningPray">아침 예배</a></li>
			<li><a href="#fridayPray">금요 예배</a></li>
		</ul>
	</div>
</div>
<a name="sundayPray"></a>
<div class="fullwidth" style="height:90px; background-color:#f4f4f4">
</div>
<div class="fullWidth" style="background-color:#f4f4f4;height:966px;">
	<div class="container">
		<div class="fullWidth">
			<font size="10px" color="#bf1e2e" style="font-weight:bold">주일 예배</font>
		</div>
		<table class="sundaySermonTable" style="margin-top:40px">
			<tr>
				<th style="width:280px">설교 일자</th>
				<th style="width:136px">설교자</th>
				<th style="width:384px">설교제목</th>
				<th style="width:184px">본문</th>
				<th style="width:186px">듣기</th>
			</tr>
			<?php $count = 0;?> 
			@foreach($contents as $content)
			<?php $count++;?>
				@if($count == $contents->count())
					<tr>
						<td style="border-bottom:none;">{{ $content->sermonDate->year }}년 {{$content->sermonDate->month }}월 {{ $content->sermonDate->day }}일</td>
						<td style="border-bottom:none;">{{ $content->author->name }}</td>
						<td style="border-bottom:none;">{{ $content->title }}</td>
						<td style="border-bottom:none;">{{ $content->body }}</td>
						<td style="border-bottom:none;">
							<div class="sermonAudio">
								<audio src="{{$content->audio}}" type="audio/mpeg">
								</audio>
							</div>
						</td>
					</tr>
				@else
					<tr>
						<td>{{ $content->sermonDate->year }}년 {{$content->sermonDate->month }}월 {{ $content->sermonDate->day }}일</td>
						<td>{{ $content->author->name }}</td>
						<td>{{ $content->title }}</td>
						<td>{{ $content->body }}</td>
						<td>
							<div class="sermonAudio" style="margin:auto;">
								<audio src="{{$content->audio}}" type="audio/mpeg">
								</audio>
							</div>
						</td>
					</tr>
				@endif
			@endforeach
		</table>
		<div class="boardPageListWrapper">
			<div class="boardPageList">
				@if($returnArray['start'] != 0)
				<a id="listPage{!! $returnArray['start']-5 !!}">
					<div class="boardNextContainer">
						< 이전
					</div>
				</a>
				@endif
				<?php $tmpStart = $returnArray['start'];?>
				@if($returnArray['start'] == $returnArray['curPage'])
					<a id="listPage{!! $returnArray['start'] !!}" ><font color="#c03737">{{$returnArray['start'] + 1}}</font></a>
				@else	
					<a id="listPage{!! $returnArray['start'] !!}">{{$returnArray['start'] + 1}}</a>
				@endif
				@for($returnArray['start']=$returnArray['start']+1; $returnArray['start'] < $returnArray['end']; $returnArray['start']++)
					@if($returnArray['start'] == $returnArray['curPage'])
						| <a id="listPage{!! $returnArray['start'] !!}"><font color="#c03737">{{$returnArray['start'] + 1}}</font></a>
					@else
						| <a id="listPage{!! $returnArray['start'] !!}">{{$returnArray['start'] + 1}}</a>
					@endif
				@endfor
				@if($returnArray['totalPage'] > $returnArray['end'])
					<a id="listPage{!! $tmpStart+5 !!}">
						<div class="boardNextContainer">
							다음 >
						</div>
					</a>
				@endif
			</div>
		</div>
	</div>
</div>

<a name="morningPray"></a>
<div class="fullwidth" style="height:90px; background-color:#ffde00">
</div>
<div class="fullWidth" style="background-color:#ffde00;height:966px;">
	<div class="container">
		<div class="fullWidth">
			<font size="10px" color="#bf1e2e" style="font-weight:bold">아침 예배</font>
		</div>
		<div class="middleContentContainer" style="margin-top:42px">
			<div class="middleContent" style="background-color:white">
				<div class="mainGallry">
					<image class="mainGallryImage" src="images/image2.jpg">
					<div class="mainGallryBody">
						<div class="contentBlockDescription">	
							BLAH
						</div>
					</div>
				</div>
			</div>
			<div class="middleContentFiller">
				&nbsp;
			</div>
			<div class="middleContent">
		            <div class="event"  style="background-color:#bf1e2e">
		            	<div class="sermonHeader" style="color:yellow">
	    	            	blah blah
	        	        </div>
	        	        <hr class="Line">
	        	        <div class="eventBody">
	        	        	test
	        	        	<br>
	        	        	test
	        	        </div>
	        	        <hr class="transLine">
	        	        <div class="eventBody">
	        	        	test
	        	        	<br>
	        	        	test
	        	        </div>
	        	        <hr class="transLine">
	        	        <div class="eventBody">
	        	        	test
	        	        	<br>
	        	        	test
	        	        </div>
	            	</div>
	            </div>
			<div class="middleContentFiller">
				&nbsp;
			</div>
			<div class="middleContent"  style="background-color:white">
				<div class="mainGallry">
					<image class="mainGallryImage" src="images/image2.jpg">
					<div class="mainGallryBody">
						<div class="contentBlockDescription">	
							BLah
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="middleContentContainer">
			<div class="announceContentContainer">
				<div class="announceContent">
					찬양선교교회에서 여러분을 아침예배에 초대합니다!
				</div>
			</div>
		</div>
		<div class="middleContentContainer" style="margin-top:60px">
			<div style="color:#bf1e2e; font-weight:bold; line-height:1.6em; font-size:36px;">
				여러분을 초대합니다<br>
				찬양선교교회는 열린 예배이며 USC 캠퍼스에서 하루를 시작하도록 돕습니다.
			</div>
		</div>
	</div>
</div>
<a name="fridayPray"></a>
<div class="fullwidth" style="height:90px; background-color:white">
</div>
<div class="fullWidth" style="background-color:white;height:966px;">
	<div class="container">
		<div class="fullWidth">
			<font size="10px" color="#bf1e2e" style="font-weight:bold">금요 예배</font>
		</div>
		<div class="middleContentContainer" style="magin-top:42px">
			<div class="middleContent">
				<div class="circleImage">
				</div>
				<div class="circleImageDescriptionContainer">
					<div class="circleImageDescriptionFirstLine">
						일대일 기도
					</div>
					<div class="circleImageDescriptionSecondLine">
						교우들과 기도제목을 나누는 기도모임
					</div>
				</div>
			</div>
			<div class="middleContentFiller">
				&nbsp;
			</div>
			<div class="middleContent">
				<div class="circleImage" style="background-image:url('/images/image2.jpg')">
				</div>
				<div class="circleImageDescriptionContainer">
					<div class="circleImageDescriptionFirstLine">
						성경공부
					</div>
					<div class="circleImageDescriptionSecondLine">
						깊이있는 성경을 해석하는 시간
					</div>
				</div>
			</div>
			<div class="middleContentFiller">
				&nbsp;
			</div>
			<div class="middleContent">
				<div class="circleImage" style="background-image:url('/images/image3.jpg')">
				</div>
				<div class="circleImageDescriptionContainer">
					<div class="circleImageDescriptionFirstLine">
						일대일 기도
					</div>
					<div class="circleImageDescriptionSecondLine">
						성경에 관한 질문을 통한 성장의 시간
					</div>
				</div>
			</div>
		</div>
		<div class="middleContentContainer" style="margin-top:70px">
			<div class="announceContentContainer">
				<div class="announceContent">
					금요일 저녁 6시 30분부터 교회 '쉼터'에서 드리는 예배
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
@section('script')
<script src="/scripts/myScript.js"></script>
<script>


$(document).on('click', '.sermonAudio', function(){
	if(!$(this).children()[0].paused)
	{
		$(this).children()[0].pause();
		$(this).css("background-image", "url(images/image1.jpg)");
	}
	else
	{
		try{
		$(this).children()[0].play();
		$(this).css("background-image", "url(images/image2.jpg)");
		}
		catch(err)
		{
				alert("ERROR");
		}
	}
});

$(document).on('click', "[id^=listPage]", function(){
		var $listPage = $(this).prop('id');
		var $pageNum = $listPage.substring(8, $listPage.length);
		$.ajax({
			url:'/sermon/updateSundaySermon',
			data: {sundaySermonPage : $pageNum},
			type: "GET",
			cache: true,
			jsonp:false,
			dataType: 'json',
			success: function(data){
				$table = "<tr>" + 
				"<th width='280px'>설교 일자</th>" +
				"<th width='136px'>설교자</th>" +
				"<th width='384px'>설교제목</th>" +
				"<th width='184px'>본문</th>" +
				"<th width='186px'>듣기</th>" +
				"</tr>"
				$count = 0;
				$.each(data.contents, function(i)
				{
					$count++;
					var date = new Date(data.contents[i].sermonDate);
					if($count != data.count)
					{
						
						$table+= 
						"<tr>" +
							"<td>"+date.getFullYear() + "년 " + eval(date.getMonth()+1) + "월 " + date.getDate() + "일</td>" +
							"<td>"+data.contents[i].name+"</td>" +
							"<td>"+data.contents[i].title+"</td>" +
							"<td>"+data.contents[i].body+"</td>" +
							"<td>" +
								'<div class="sermonAudio">' +
									'<audio src="' + data.contents[i].audio +  '" type="audio/mpeg">' +
									'</audio>' +
								'</div>' +
							"</td>" +
							"</tr>"
					}
					else
					{
						$table+= 
							"<tr>" +
								"<td style='border-bottom:none;'>"+date.getFullYear() + "년 " + eval(date.getMonth()+1) + "월 " + date.getDate() + "일</td>" +
								"<td style='border-bottom:none;'>"+data.contents[i].name+"</td>" +
								"<td style='border-bottom:none;'>"+data.contents[i].title+"</td>" +
								"<td style='border-bottom:none;'>"+data.contents[i].body+"</td>" +
								"<td style='border-bottom:none;'>" + 
									'<div class="sermonAudio">' +
										'<audio src="' + data.contents[i].audio +  '" type="audio/mpeg">' +
										'</audio>' +
									'</div>' +
								"</td>" +
								"</tr>";
					}
				});
				
				$boardPageList = "";
				if(data.start != 0)
					$boardPageList += '<a id="listPage' + eval(data.start-5) + '"><div class="boardNextContainer">< 이전</div></a>';
				if(data.start == data.curPage)	
					$boardPageList += '<a id="listPage' + data.start + '"><font color="#c03737">' + eval(data.start+1)+'</font></a>';
				else	
					$boardPageList += '<a id="listPage' + data.start + '">' + eval(data.start+1)+'</a>';
				for($myVar = data.start+1; $myVar <= data.end; $myVar++)
				{
					if($myVar == data.curPage)
						$boardPageList += ' | <a id="listPage' + $myVar + '"><font color="#c03737">' + eval($myVar+1)+'</font></a>';
					else
						$boardPageList += ' | <a id="listPage' + $myVar + '">' + eval($myVar+1)+'</a>';
				}
				if(data.totalPage > data.end+1)
					$boardPageList += '<a id="listPage' + eval(data.start+5) + '"><div class="boardNextContainer">다음 ></div></a>';				
				$('.sundaySermonTable').html($table);
				$('.boardPageList').html($boardPageList);
				
			},	 
		})
	});


</script>
@endsection