@extends('app')
@section('cssExtend')
<link rel="stylesheet" type="text/css" href="css/subPage.css">
@endsection
@section('content')
<div class="fullWidth" style="background-color:gray">
	<div class="container">
		<div class="sermonImageContainer">
		</div>
	</div>
</div>
<div class="fullWidth" style="background-color:red" id="sermonNavBar">
	<div class="sermonWrapper">
		<ul class="sermonNav">
			<li class="sermonNavLogo"><a href={!! url('/') !!} class="logo"><img src="images/footer_logo.png" width="100%" height="61px"></a></li>
			<li style="margin-right:100px">예배와 말씀</li>
			<li><a href="#sundayPray">주일 예배</a></li>
			<li><a href="#morningPray">아침 예배</a></li>
			<li><a href="#fridayPray">금요 예배</a></li>
		</ul>
	</div>
</div>
<a name="sundayPray"></a>
<div class="fullwidth" style="height:100px; background-color:white">
</div>
<div class="fullWidth" style="background-color:white;height:700px;">
	<div class="container">
		<div class="fullWidth">
			<font size="10px" color="red" style="font-weight:bold">주일 예배</font>
		</div>
		<table class="sundaySermonTable" style="margin-top:20px">
			<tr>
				<th>설교 일자</th>
				<th>설교자</th>
				<th>설교제목</th>
				<th>본문</th>
				<th>듣기</th>
			</tr>
			@foreach($contents as $content)
			<tr>
				<td>{{ $content->sermonDate }}</td>
				<td>{{ $content->author->name }}</td>
				<td>{{ $content->title }}</td>
				<td>{{ $content->body }}</td>
				<td>&nbsp;</td>
			</tr>
			@endforeach
		</table>
		<div class="boardPageListWrapper">
			<div class="boardPageList">
				@if($returnArray['start'] != 0)
				<a id="listPage{!! $returnArray['start']-5 !!}"><</a>
				@endif
				@if($returnArray['start'] == $returnArray['curPage'])
					<a id="listPage{!! $returnArray['start'] !!}" ><font color="white">{{$returnArray['start'] + 1}}</font></a>
				@else	
					<a id="listPage{!! $returnArray['start'] !!}">{{$returnArray['start'] + 1}}</a>
				@endif
				@for($returnArray['start']=$returnArray['start']+1; $returnArray['start'] <= $returnArray['end']; $returnArray['start']++)
					@if($returnArray['start'] == $returnArray['curPage'])
						| <a id="listPage{!! $returnArray['start'] !!}"><font color="white">{{$returnArray['start'] + 1}}</font></a>
					@else
						| <a id="listPage{!! $returnArray['start'] !!}">{{$returnArray['start'] + 1}}</a>
					@endif
				@endfor
				@if($returnArray['totalPage'] > $returnArray['end'])
					<a id="listPage{!! $returnArray['start']+5 !!}">></a>
				@endif
			</div>
		</div>
	</div>
</div>

<a name="morningPray"></a>
<div class="fullwidth" style="height:100px; background-color:yellow">
</div>
<div class="fullWidth" style="background-color:yellow;height:700px;">
	<div class="container">
		<div class="fullWidth">
			<font size="10px" color="red" style="font-weight:bold">아침 예배</font>
		</div>
		<div class="middleContentContainer">
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
		            <div class="event"  style="background-color:red">
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
		<div class="middleContentContainer">
			<div style="color:red; font-weight:bold; line-height:32px; font-size:25px;">
				여러분을 초대합니다<br>
				찬양선교교회는 열린 예배이며 USC 캠퍼스에서 하루를 시작하도록 돕습니다.
			</div>
		</div>
	</div>
</div>
<a name="fridayPray"></a>
<div class="fullwidth" style="height:100px; background-color:white">
</div>
<div class="fullWidth" style="background-color:white;height:700px;">
	<div class="container">
		<div class="fullWidth">
			<font size="10px" color="red" style="font-weight:bold">금요 예배</font>
		</div>
		<div class="middleContentContainer">
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
				<div class="circleImage1">
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
				<div class="circleImage2">
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
		<div class="middleContentContainer">
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
				"<th>설교 일자</th>" +
				"<th>설교자</th>" +
				"<th>설교제목</th>" +
				"<th>본문</th>" +
				"<th>듣기</th>" +
				"</tr>"
				
				$.each(data.contents, function(i)
				{
					$table+=
					"<tr>" +
						"<td>"+data.contents[i].sermonDate + "</td>" +
						"<td>"+data.contents[i].name+"</td>" +
						"<td>"+data.contents[i].title+"</td>" +
						"<td>"+data.contents[i].body+"</td>" +
						"<td>&nbsp;</td>" +
						"</tr>"
				});
				
				$boardPageList = "";
				if(data.start != 0)
					$boardPageList += '<a id="listPage' + eval(data.start-5) + '"><</a>';
				if(data.start == data.curPage)	
					$boardPageList += '<a id="listPage' + data.start + '"><font color="white">' + eval(data.start+1)+'</font></a>';
				else	
					$boardPageList += '<a id="listPage' + data.start + '">' + eval(data.start+1)+'</a>';
				for($myVar = data.start+1; $myVar <= data.end; $myVar++)
				{
					if($myVar == data.curPage)
						$boardPageList += '| <a id="listPage' + $myVar + '"><font color="white">' + eval($myVar+1)+'</font></a>';
					else
						$boardPageList += '| <a id="listPage' + $myVar + '">' + eval($myVar+1)+'</a>';
				}
				if(data.totalPage > data.end+1)
					$boardPageList += '<a id="listPage' + eval(data.start+5) + '">></a>';				
				$('.sundaySermonTable').html($table);
				$('.boardPageList').html($boardPageList);
			},	 
		})
	});


</script>
@endsection