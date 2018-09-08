@extends('app')
@section('cssExtend')
<link rel="stylesheet" type="text/css" href="css/subPage.css">
<title>Power of Praise Church > Sermon</title>
@endsection
@section('content')
<div class="fullWidth" style="background-color:#444444">
	<div class="container">
		<div class="sermonImageContainer" style="background-image: url('/images/main_img_02.jpg')">
		</div>
	</div>
</div>

<div class="fullWidth" style="background-color:#bf1e2e" id="sermonNavBar">
	<div class="sermonWrapper">
		<ul class="sermonNav">
			<li class="sermonNavLogo"><a href={!! url('/') !!} class="logo"><img src="/images/footer_logo.png" width="100%" height="61px"></a></li>
			<li style="margin-right:76px">예배와 말씀</li>
			<li><a href="#sundayPray">주일 예배</a></li>
			<li><a href="#morningPray">아침 예배</a></li>
			<li><a href="#fridayPray">금요 예배</a></li>
			<li><a href="#pastorStory">목회 이야기</a></li>
		</ul>
	</div>
</div>
<div class="bodyWrapper" style="background-color:#f4f4f4">
	<div class="container">
		<a name="sundayPray"></a>
		<div class="fullwidth" style="height:90px; background-color:#f4f4f4">
		</div>
		<div class="fullWidth" style="background-color:#f4f4f4;height:966px;">
			<div class="container">
				<div class="fullWidth">
					<font size="10px" color="#bf1e2e" style="font-weight:bold">주일 예배 </font> 
					@if (Auth::check() && (Auth::user()->level == 5 || Auth::user()->level == 0))
					<span><a href="/sermon/sundaySermon"><button class="btn btn-default">추가</button></a></span>
					@endif
				</div>
				@include('errors.list')
				<table class="sundaySermonTable" style="margin-top:40px" id="sermonTable">
					<tr>
						<th style="width:280px">설교 일자</th>
						<th style="width:136px">설교자</th>
						<th style="width:384px">설교제목</th>
						<th style="width:184px">성경구절</th>
						<th style="width:90px">듣기</th>
						<th> 다운로드 </th>
						@if (Auth::check() && (Auth::user()->level == 5 || Auth::user()->level == 0))
							<th style="width:186px">
								Edit
							<th>
						@endif
					</tr>
					<?php $count = 0;?> 
					@foreach($contents as $content)
					<?php $count++;?>
						@if($count == $contents->count())
							<tr data-id={{ $content->id }}>
								<td style="border-bottom:none;">{{ $content->sermonDate->year }}년 {{$content->sermonDate->month }}월 {{ $content->sermonDate->day }}일</td>
								<td style="border-bottom:none;">{{ $content->author->name }}</td>
								<td style="border-bottom:none;">{{ $content->title }}</td>
								<td style="border-bottom:none;">{{ $content->body }}</td>
								<td style="border-bottom:none;">
									<div class="sermonAudio" data-id="{{$content->id}}" style="margin:auto;">
										<audio src="" type="audio/mpeg">
										</audio>
									</div>
								</td>
								<td style="border-bottom:none;padding-right:10px;padding-left:10px">
									<input class='btn btn-default' data-id="{{$content->id}}" name="download-mp3" type="button" value="download">
								</td>
								@if (Auth::check() && (Auth::user()->level == 5 || Auth::user()->level == 0))
									<td style="border-bottom:none;">
										<input type="button" class='btn btn-primary editSundaySermon' value="Edit">
										<input type="button" class='btn btn-danger deleteSundaySermon' value="Delete">
									</td>
								@endif
							</tr>
						@else
							<tr data-id={{ $content->id }}>
								<td>{{ $content->sermonDate->year }}년 {{$content->sermonDate->month }}월 {{ $content->sermonDate->day }}일</td>
								<td>{{ $content->author->name }}</td>
								<td>{{ $content->title }}</td>
								<td>{{ $content->body }}</td>
								<td>
									<div class="sermonAudio" data-id="{{$content->id}}" style="margin:auto;">
										<audio src="" type="audio/mpeg">
										</audio>
									</div>
								</td>
								<td style="padding-right:10px;padding-left:10px">
									<input class='btn btn-default' data-id="{{$content->id}}" name="download-mp3" type="button" value="download">
								</td>
								@if (Auth::check() && (Auth::user()->level == 5 || Auth::user()->level == 0))
									<td>
										<input type="button" class='btn btn-primary editSundaySermon' value="Edit">
										<input type="button" class='btn btn-danger deleteSundaySermon' value="Delete">
									</td>
								@endif
							</tr>
						@endif
					@endforeach
				</table>
				<div class="boardPageListWrapper">
					<div class="boardPageList" id="sundayPrayList">
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
	</div>	
</div>
<div class="bodyWrapper" style="background-color:#ffde00">
	<div class="container">
		<a name="morningPray"></a>
		<div class="fullwidth" style="height:90px; background-color:#ffde00">
		</div>
		<div class="fullWidth" style="background-color:#ffde00;height:966px;">
			<div class="container">
				<div class="fullWidth">
					<font size="10px" color="#bf1e2e" style="font-weight:bold">아침 기도</font>
				</div>
				<div class="middleContentContainer" style="margin-top:42px">
					<div class="middleContent" style="background-color:white">
						<div class="mainGallry">
							<image class="mainGallryImage" src="/images/img_morning_01.jpg">
							<div class="mainGallryBody">
								<div class="contentBlockDescription">	
									하나님으로부터 위대한 것을 기대하라!
								</div>
							</div>
						</div>
					</div>
					<div class="middleContentFiller">
						&nbsp;
					</div>
					<div class="middleContent">
				            <div class="event"  style="background-color:#bf1e2e; color:white; line-height:1.1em">
				            	<div class="sermonHeader" style="color:#ffde00">
			    	            	예배 장소와 시간
			        	        </div>
			        	        <hr class="Line">
			        	        <div class="eventBody"  style="color:white; font-weight:bold;">
			        	        	USC Kilgore Chapel
			        	        	<br>
			        	        	월~금 오전 7시부터 8시까지
			        	        </div>
			        	        <hr class="transLine">
			        	        <div class="eventBody"  style="color:white; font-weight:bold;">
			        	        	오늘의 설교 말씀
			        	        	<div class="more">
										more >
									</div>
			        	        	<br>
			        	        	@if ($dailySermon && sizeof($dailySermon) > 0)
			        	        		{{$dailySermon[0]->title}}
			        	        	@endif
			        	        </div>
			        	        <hr class="transLine">
			        	        <div class="eventBody"  style="color:white; font-weight:bold;">
			        	        	예배문의
			        	        	<br>
			        	        	webmaster@uscpraise.org
			        	        </div>
			            	</div>
			            </div>
					<div class="middleContentFiller">
						&nbsp;
					</div>
					<div class="middleContent"  style="background-color:white">
						<div class="mainGallry">
							<image class="mainGallryImage" src="/images/img_morning_02.jpg">
							<div class="mainGallryBody">
								<div class="contentBlockDescription">	
									하루의 시작! USC 캠퍼스 아침예배
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
	</div>
</div>
<div class="bodyWrapper" style="background-color:white">
	<div class="container">
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
						<div class="circleImage" style="background-image:url('/images/img_worship_01.png')">
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
						<div class="circleImage" style="background-image:url('/images/img_worship_02.png')">
						</div>
						<div class="circleImageDescriptionContainer">
							<div class="circleImageDescriptionFirstLine">
								성경공부
							</div>
							<div class="circleImageDescriptionSecondLine">
								깊이있는 성경 해석 시간
							</div>
						</div>
					</div>
					<div class="middleContentFiller">
						&nbsp;
					</div>
					<div class="middleContent">
						<div class="circleImage" style="background-image:url('/images/img_worship_03.png')">
						</div>
						<div class="circleImageDescriptionContainer">
							<div class="circleImageDescriptionFirstLine">
								Q&A
							</div>
							<div class="circleImageDescriptionSecondLine">
								믿음의 삶 전반에 대한 질문을 통한 성장의 시간
							</div>
						</div>
					</div>
				</div>
				<div class="middleContentContainer" style="margin-top:70px">
					<div class="announceContentContainer">
						<div class="announceContent">
							금요일 저녁 6시 30분부터 캠퍼스에서 드리는 예배
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="bodyWrapper" style="background-color:#f4f4f4">
	<div class="container">
		<a name="pastorStory"></a>
		<div class="fullwidth" style="height:90px; background-color:#f4f4f4">
		</div>
		<div class="fullWidth" style="background-color:#f4f4f4;height:966px;">
			<div class="container">
				<div class="fullWidth">
					<font size="10px" color="#bf1e2e" style="font-weight:bold">목회이야기</font>
					@if (Auth::check() && (Auth::user()->level == 5 || Auth::user()->level == 0))
						<span><a href="/sermon/pastorStory"><button class="btn btn-default">추가</button></a></span>
					@endif
				</div>
				<table class="sundaySermonTable" style="margin-top:40px" id="pastorStoryTable">
					<tr>
						<th style="width:280px">개시 일자</th>
						<th style="width:136px">등록자</th>
						<th style="width:384px">제목</th>
						<th style="width:184px">조회수</th>
						@if (Auth::check() && (Auth::user()->level == 5 || Auth::user()->level == 0))
							<th style="width:186px">Edit</th>
						@endif
					</tr>
					<?php $count = 0;?> 
					@foreach($pastorStoryContents as $content)
					<?php $count++;?>
						@if($count == $pastorStoryContents->count())
							<tr  class="pastor-story-row" data-id={{$content->id}}>
								<td>{{ $content->created_at->year }}년 {{$content->created_at->month }}월 {{ $content->created_at->day }}일</td>
								<td>{{ $content->author->name }}</td>
								<td>{{ $content->title }}</td>
								<td>{{ $content->hits }}</td>
								@if (Auth::check() && (Auth::user()->level == 5 || Auth::user()->level == 0))
									<td>
										<input type="button" class='btn btn-primary editPastorStory' value="Edit">
										<input type="button" class='btn btn-danger deletePastorStory' value="Delete">
									</td>
								@endif
							</tr>
							<tr>
								@if($returnArrayForPastorStory['pastorStoryIndex'] != null && $returnArrayForPastorStory['pastorStoryIndex'] == $content->id)
									<td colspan="4" class="pastorStoryContent" style="border-bottom:none;display:table-cell"> {!! nl2br($content->content) !!} </td>
								@else 
									<td colspan="4" class="pastorStoryContent" style="border-bottom:none;"> {!! nl2br($content->content) !!} </td>
								@endif
							</tr>
						@else
							<tr  class="pastor-story-row" data-id={{$content->id}}>
								<td>{{ $content->created_at->year }}년 {{$content->created_at->month }}월 {{ $content->created_at->day }}일</td>
								<td>{{ $content->author->name }}</td>
								<td>{{ $content->title }}</td>
								<td>{{ $content->hits }}</td>
								@if (Auth::check() && (Auth::user()->level == 5 || Auth::user()->level == 0))
									<td>
										<input type="button" class='btn btn-primary editPastorStory' value="Edit">
										<input type="button" class='btn btn-danger deletePastorStory' value="Delete">
									</td>
								@endif
							</tr>
							<tr>
								@if($returnArrayForPastorStory['pastorStoryIndex'] != null && $returnArrayForPastorStory['pastorStoryIndex'] == $content->id)
									<td colspan="4" class="pastorStoryContent" style="display:table-cell"> {!! nl2br($content->content) !!} </td>
								@else 
									<td colspan="4" class="pastorStoryContent">  {!! nl2br($content->content) !!} </td>
								@endif
							</tr>
						@endif
					@endforeach
				</table>
				<div class="boardPageListWrapper">
					<div class="boardPageList" id="pastorStoryList">
						@if($returnArrayForPastorStory['start'] != 0)
						<a id="pastorStoryPage{!! $returnArrayForPastorStory['start']-5 !!}">
							<div class="boardNextContainer">
								< 이전
							</div>
						</a>
						@endif
						<?php $tmpStart = $returnArrayForPastorStory['start'];?>
						@if($returnArrayForPastorStory['start'] == $returnArrayForPastorStory['curPage'])
							<a id="pastorStoryPage{!! $returnArrayForPastorStory['start'] !!}" ><font color="#c03737">{{$returnArrayForPastorStory['start'] + 1}}</font></a>
						@else	
							<a id="pastorStoryPage{!! $returnArrayForPastorStory['start'] !!}">{{$returnArrayForPastorStory['start'] + 1}}</a>
						@endif
						@for($returnArrayForPastorStory['start']=$returnArrayForPastorStory['start']+1; $returnArrayForPastorStory['start'] < $returnArrayForPastorStory['end']; $returnArrayForPastorStory['start']++)
							@if($returnArrayForPastorStory['start'] == $returnArrayForPastorStory['curPage'])
								| <a id="pastorStoryPage{!! $returnArrayForPastorStory['start'] !!}"><font color="#c03737">{{$returnArrayForPastorStory['start'] + 1}}</font></a>
							@else
								| <a id="pastorStoryPage{!! $returnArrayForPastorStory['start'] !!}">{{$returnArrayForPastorStory['start'] + 1}}</a>
							@endif
						@endfor
						@if($returnArrayForPastorStory['totalPage'] > $returnArrayForPastorStory['end'])
							<a id="pastorStoryPage{!! $tmpStart+5 !!}">
								<div class="boardNextContainer">
									다음 >
								</div>
							</a>
						@endif
					</div>
				</div>
			</div>
		</div>
	</div>	
</div>
<div class="popUpDailySermonContainer" id="dailySermonPopup">
	<div class="popUpDailySermonWrapper">
		<div class="popUpDailySermoncontentContainer">
			<div class="closeButtonContainer">
				<div class="closeButton">
				</div>
			</div>	
			<div class="popUpDailySermon">
				<div class="popUpDailySermonContent">
					<div class="header">
						아침 설교
					</div>
					<div class="content">
						<div class="date">
						</div>
						<div class="bibleVerse">
						</div>
						<div class="title">
						</div>
						<div class="body">
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
<script>

$(document).on('click', 'input[name=download-mp3]', function(e, d){
	var id = e.target.dataset.id;
	window.open('/downloadSermonAudio/' + id);
})

$(document).on('click', '.pastor-story-row', function (e, data) {
	var storyId = e.currentTarget.dataset.id;
	$(".pastorStoryContent").hide();
	$(this).next().children().show();
	$.ajax({
		url:'/sermon/pastorStoryClick',
		data: {storyId : storyId},
		type: "GET",
		cache: true,
		jsonp: false,
		dataType: 'json',
		success: function (data) {
		}
	});
});

$(document).on('click', '.sermonAudio', function(e, t){
	if(!$(this).children()[0].paused)
	{
		$(this).children()[0].pause();
		$(this).css("background-image", "url(/images/audioPlay.png)");
	}
	else
	{
		try{
			$(this).children()[0].play();
			var id = e.target.dataset.id;
			var x = $(e.currentTarget).children('audio')[0];
			if (x.canPlayType("audio/mpeg")) {
	        	x.setAttribute("src","/playSermonAudio/" + id);
	    	} else {
	        	x.setAttribute("src","/playSermonAudio/" + id);
		    }
		    x.play();
			$(this).css("background-image", "url(/images/audioPause.png)");
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
				"<th width='90px'>듣기</th>" +
				"<th> 다운로드 </th>" +
				@if (Auth::check() && (Auth::user()->level == 5 || Auth::user()->level == 0))
					"<th width='186px'>Edit</th>" +
				@endif
				"</tr>"
				$count = 0;
				$.each(data.contents, function(i)
				{
					$count++;
					var date = new Date(data.contents[i].sermonDate);
					if($count != data.count)
					{
						$table+= 
						"<tr data-id='" + data.contents[i].id +"'>" +
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
							"<td style='padding-right:10px;padding-left:10px'>" +
									"<input class='btn btn-default' data-id='" + data.contents[i].id + "' name='download-mp3' type='button' value='download'>" +
								"</td>" +
							@if (Auth::check() && (Auth::user()->level == 5 || Auth::user()->level == 0))
								'<td>' +
									'<input type="button" style="margin-right:4px" class="btn btn-primary editSundaySermon" value="Edit">' +
									'<input type="button" class="btn btn-danger deleteSundaySermon" value="Delete">' +
								'</td>' +
							@endif
							"</tr>"
					}
					else
					{
						$table+= 
							"<tr data-id='" + data.contents[i].id +"'>" +
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
								"<td style='border-bottom:none;padding-right:10px;padding-left:10px'>" +
									"<input class='btn btn-default' data-id='" + data.contents[i].id + "' name='download-mp3' type='button' value='download'>" +
								"</td>" +
								@if (Auth::check() && (Auth::user()->level == 5 || Auth::user()->level == 0))
									'<td style="border-bottom:none;"">' +
										'<input type="button" style="margin-right:4px" class="btn btn-primary editSundaySermon" value="Edit">' +
										'<input type="button" class="btn btn-danger deleteSundaySermon" value="Delete">' +
									'</td>' +
								@endif
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
				for($myVar = data.start+1; $myVar < data.end; $myVar++)
				{
					if($myVar == data.curPage)
						$boardPageList += ' | <a id="listPage' + $myVar + '"><font color="#c03737">' + eval($myVar+1)+'</font></a>';
					else
						$boardPageList += ' | <a id="listPage' + $myVar + '">' + eval($myVar+1)+'</a>';
				}
				if(data.totalPage > data.end+1)
					$boardPageList += '<a id="listPage' + eval(data.start+5) + '"><div class="boardNextContainer">다음 ></div></a>';				
				$('#sermonTable').html($table);
				$('#sundayPrayList').html($boardPageList);
				
			},	 
		})
	});

$(document).on('click', "[id^=pastorStoryPage]", function(){
		var $listPage = $(this).prop('id');
		var $pageNum = $listPage.substring(15, $listPage.length);
		$.ajax({
			url:'/sermon/updatePastorStory',
			data: {pastorStoryPage : $pageNum},
			type: "GET",
			cache: true,
			jsonp:false,
			dataType: 'json',
			success: function(data){
				$table = "<tr>" + 
				"<th width='280px'>개시 일자</th>" +
				"<th width='136px'>작성자</th>" +
				"<th width='384px'>제목</th>" +
				"<th width='184px'>조회수</th>" +
				@if (Auth::check() && (Auth::user()->level == 5 || Auth::user()->level == 0))
					"<th width='186px'>test</th>" +
				@endif
				"</tr>"
				$count = 0;
				$.each(data.contents, function(i)
				{
					$count++;
					var date = new Date(data.contents[i].created_at);
					if($count != data.count)
					{
						$table+= 
							"<tr class='pastor-story-row' data-id='" + data.contents[i].id + "'>" +
							"<td>"+date.getFullYear() + "년 " + eval(date.getMonth()+1) + "월 " + date.getDate() + "일</td>" +
							"<td>"+data.contents[i].name+"</td>" +
							"<td>"+data.contents[i].title+"</td>" +
							"<td>"+data.contents[i].hits+"</td>" +
							@if (Auth::check() && (Auth::user()->level == 5 || Auth::user()->level == 0))
								'<td>' +
									'<input type="button" style="margin-right:4px" class="btn btn-primary editPastorStory" value="Edit">' +
									'<input type="button" class="btn btn-danger deletePastorStory" value="Delete">' +
								'</td>' +
							@endif
							"</tr>" +
							"<tr>" +
							'<td colspan="4" class="pastorStoryContent">' + data.contents[i].content + '</td>' + 
							"</tr>"
					}
					else
					{
						$table+= 
							"<tr  class='pastor-story-row' data-id='" + data.contents[i].id + "'>" +
							"<td>"+date.getFullYear() + "년 " + eval(date.getMonth()+1) + "월 " + date.getDate() + "일</td>" +
							"<td>"+data.contents[i].name+"</td>" +
							"<td>"+data.contents[i].title+"</td>" +
							"<td>"+data.contents[i].hits+"</td>" +
							@if (Auth::check() && (Auth::user()->level == 5 || Auth::user()->level == 0))
								'<td>' +
									'<input type="button" style="margin-right:4px" class="btn btn-primary editPastorStory" value="Edit">' +
									'<input type="button" class="btn btn-danger deletePastorStory" value="Delete">' +
								'</td>' +
							@endif
							"</tr>" +
							"<tr>" +
							'<td colspan="4" class="pastorStoryContent">' + data.contents[i].content + '</td>' + 
							"</tr>"
					}
				});

				$boardPageList = "";
				if(data.start != 0)
					$boardPageList += '<a id="pastorStoryPage' + eval(data.start-5) + '"><div class="boardNextContainer">< 이전</div></a>';
				if(data.start == data.curPage)	
					$boardPageList += '<a id="pastorStoryPage' + data.start + '"><font color="#c03737">' + eval(data.start+1)+'</font></a>';
				else	
					$boardPageList += '<a id="pastorStoryPage' + data.start + '">' + eval(data.start+1)+'</a>';
				for($myVar = data.start+1; $myVar < data.end; $myVar++)
				{
					if($myVar == data.curPage)
						$boardPageList += ' | <a id="pastorStoryPage' + $myVar + '"><font color="#c03737">' + eval($myVar+1)+'</font></a>';
					else
						$boardPageList += ' | <a id="pastorStoryPage' + $myVar + '">' + eval($myVar+1)+'</a>';
				}
				if(data.totalPage > data.end+1)
					$boardPageList += '<a id="pastorStoryPage' + eval(data.start+5) + '"><div class="boardNextContainer">다음 ></div></a>';				
				$('#pastorStoryTable').html($table);
				$('#pastorStoryList').html($boardPageList);
				
			},	 
		})
	});
	
	$(document).on('click', '.deleteSundaySermon', function (e, data){
		e.stopPropagation();
		var row = e.currentTarget.closest('tr');
		var sermonId = row.dataset.id;
		$.ajax({
			url:'/sermon/deleteSundaySermon/' + sermonId,
			type: "GET",
			cache: true,
			jsonp:false,
			dataType: 'json',
			success: function(data){
				if(data.status == 'success')
				{
					alert(data.message);
					$(row).remove();
				}
				else
					alert(data.message);
			}
		})
	});

	$(document).on('click', '.deletePastorStory', function (e, data){
		e.stopPropagation();
		var row = e.currentTarget.closest('tr');
		var sermonId = row.dataset.id;
		$.ajax({
			url:'/sermon/deletePastorStory/' + sermonId,
			type: "GET",
			cache: true,
			jsonp: false,
			dataType: 'json',
			success: function(data){
				if(data.status == 'success')
				{
					alert(data.message);
					$(row).remove();
				}
				else
					alert(data.message);
			}
		})
	});

	$(document).on('click', '.editSundaySermon', function (e, data){
		e.stopPropagation();
		var row = e.currentTarget.closest('tr');
		var sermonId = row.dataset.id;
		window.location.href = '/sermon/editSundaySermon/' + sermonId;
	});
	$(document).on('click', '.editPastorStory', function (e, data){
		e.stopPropagation();
		var row = e.currentTarget.closest('tr');
		var storyId = row.dataset.id;
		window.location.href = '/sermon/editPastorStory/' + storyId;
	});

	$(document).on('click', '.more', function (e, data) {
		e.stopPropagation();
		$.ajax({
			type: 'GET',
			url: '/sermon/dailyWord',
			cache: true,
			jsonp: false,
			dataType: 'json',
			success: function(data) {
				var content = $('#dailySermonPopup').find('.popUpDailySermonContent');
				if(data) {
					var date = new Date(data[0].created_at);
					content.find('.date')[0].innerHTML = date.getFullYear() + "년 " + eval(date.getMonth()+1) + "월 " + date.getDate() + "일";
					content.find('.bibleVerse')[0].innerHTML = data[0].bibleverse;
					content.find('.title')[0].innerHTML = data[0].title;
					content.find('.body')[0].innerHTML = data[0].body.replace(/(\r\n|\n|\r)/gm, "<br>");;
				}
				
			}
		});	
        $('.popUpDailySermonContainer').css('display', 'block');
        console.log("Complete");
	});
</script>
@endsection