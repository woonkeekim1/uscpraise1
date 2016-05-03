@extends('app')
@section('cssExtend')
<title>Power of Praise Church</title>
@endsection
@section('content')
<div class="container">
	<div class="mainImageContainer">
			
			<div class="mainImagePrevButtonContainer">
	        	<div class="mainImagePrevButton">
				</div>
			</div>
			
			<!--<div class="mainImageContent">
				<!--
				<div class="mainImageTitle">"Build Your Faith Right"</div>
				-->
				<!-- 
				<button class="mainImageTitleButton"> &rarr; Latest Sermon</button>
				
			</div>-->
			
			<div class="mainImageNextButtonContainer">
				<div class="mainImageNextButton">
	            </div>
			</div>
			
		</div>
		
		<div class="middleContentContainer">
			<div class="middleContent">
				<div class="sermon">
					@if ($latestSermon[0] != null)
					<div class="sermonHeader">
						<div class="sermonTitle">{!! $latestSermon[0]->title !!}</div> <div class="sermonDate">{!! $latestSermon[0]->created_at->year !!}.{!! str_pad($latestSermon[0]->created_at->month, 2, 0, STR_PAD_LEFT)!!}.{!!str_pad($latestSermon[0]->created_at->day, 2, 0, STR_PAD_LEFT) !!}</div>
					</div>
					<hr class="Line">
					<div class="sermonBody">
						<div class="sermonBodyContent">
								{!! $latestSermon[0]->content !!}
						</div>
					</div>
					@endif
				</div>
			</div>
			<div class="middleContentFiller">
				&nbsp;
			</div>
			<div class="middleContent">
				<div class="mainGallry">
					<image class="mainGallryImage" src="/images/image2.jpg">
					<div class="mainGallryBody">
						<div class="mainGallaryDescription" id="galleryLink">	
							갤러리
						</div>
					</div>
				</div>
			</div>
			<div class="middleContentFiller">
				&nbsp;
			</div>
			<div class="middleContent">
				<div class="mainGallry">
					<image class="mainGallryImage" src="/images/morningQT.jpg">
					<div class="mainGallryBody">
						<div class="mainGallaryDescription" id="morningQT">	
							아침 큐티 모임
						</div>
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
						<img src="/images/worshipLocation.jpg" width="100%" height="100%" id="mapImage">
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
						Worship: Kilgore Chapel<br>
						University Religious Center<br>
						(next to Student Health Center)
					</div>
					<div class="worshipHeaderWhen">
						When
					</div>
					<div class="worshipInfoBodyWhen">
						Worship: 11:00 am Sunday(Korean/English)
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
						@if (Auth::check() &&  Auth::user()->level == 0)
							<a href="{{action('LandController@addAnnouncement')}}" style="font-size:10px;">추가</a>
						@endif
					</div>
					<div class="AnnouncementBody">
						@if($announcement->count() > 0)
							<div class="AnnouncementBodyPart">
								{{ $announcement[0]->body }}
								@if (Auth::check() &&  Auth::user()->level == 0)
									<img src="/images/edit-icon.png" data-id="{{ $announcement[0]->id }}" class="edit">
									<div data-id="{{ $announcement[0]->id }}" class="closeContainer">
										&times;
									</div>
								@endif
							</div>
						@endif
						@if($announcement->count() > 1)
							<hr>
							<div class="AnnouncementBodyPart">
								{{ $announcement[1]->body }}
								@if (Auth::check() &&  Auth::user()->level == 0)
									<img src="/images/edit-icon.png" data-id="{{ $announcement[1]->id }}" class="edit">
									<div data-id="{{ $announcement[1]->id }}" class="closeContainer">
										&times;
									</div>
								@endif
							</div>
						@endif
						@if($announcement->count() > 2)
							<hr>
							<div class="AnnouncementBodyPart">
								{{ $announcement[2]->body }}
								@if (Auth::check() &&  Auth::user()->level == 0)
									<img src="/images/edit-icon.png" data-id="{{ $announcement[2]->id }}" class="edit">
									<div data-id="{{ $announcement[2]->id }}" class="closeContainer">
										&times;
									</div>
								@endif
							</div>
						@endif
					</div>
					<div class="AnnouncementBody" style="display:none">
						@if($announcement->count() > 3)
							<div class="AnnouncementBodyPart">
								{{ $announcement[3]->body }}
								@if (Auth::check() &&  Auth::user()->level == 0)
									<img src="/images/edit-icon.png" data-id="{{ $announcement[3]->id }}" class="edit">
									<div data-id="{{ $announcement[3]->id }}" class="closeContainer">
										&times;
									</div>
								@endif
							</div>
						@endif
						@if($announcement->count() > 4)
							<hr>
							<div class="AnnouncementBodyPart">
								{{ $announcement[4]->body }}
								@if (Auth::check() &&  Auth::user()->level == 0)
									<img src="/images/edit-icon.png" data-id="{{ $announcement[4]->id }}" class="edit">
									<div data-id="{{ $announcement[4]->id }}" class="closeContainer">
										&times;
									</div>
								@endif
							</div>
						@endif
						@if($announcement->count() > 5)
							<hr>
							<div class="AnnouncementBodyPart">
								{{ $announcement[5]->body }}
								@if (Auth::check() &&  Auth::user()->level == 0)
									<img src="/images/edit-icon.png" data-id="{{ $announcement[5]->id }}" class="edit">
									<div data-id="{{ $announcement[5]->id }}" class="closeContainer">
										&times;
									</div>
								@endif
							</div>
						@endif
					</div>
					<div class="AnnouncementBody" style="display:none">
						@if($announcement->count() > 6)
							<div class="AnnouncementBodyPart">
								{{ $announcement[6]->body }}
								@if (Auth::check() &&  Auth::user()->level == 0)
									<img src="/images/edit-icon.png" data-id="{{ $announcement[6]->id }}" class="edit">
									<div data-id="{{ $announcement[6]->id }}" class="closeContainer">
										&times;
									</div>
								@endif
							</div>
						@endif
						@if($announcement->count() > 7)
							<hr>
							<div class="AnnouncementBodyPart">
								{{ $announcement[7]->body }}
								@if (Auth::check() &&  Auth::user()->level == 0)
									<img src="/images/edit-icon.png" data-id="{{ $announcement[7]->id }}" class="edit">
									<div data-id="{{ $announcement[7]->id }}" class="closeContainer">
										&times;
									</div>
								@endif
							</div>
						@endif
						@if($announcement->count() > 8)
							<hr>
							<div class="AnnouncementBodyPart">
								{{ $announcement[8]->body }}
								@if (Auth::check() &&  Auth::user()->level == 0)
									<img src="/images/edit-icon.png" data-id="{{ $announcement[8]->id }}" class="edit">
									<div data-id="{{ $announcement[8]->id }}" class="closeContainer">
										&times;
									</div>
								@endif
							</div>
						@endif
					</div>
					<div class="AnnouncementDotContainer">
						@if($announcement->count() > 3)
						<div class="AnnouncementDot" data-dotId="0">
						</div>
						<div class="AnnouncementDot" data-dotId="1">
						</div>
						@endif
						@if($announcement->count() > 6)
						<div class="AnnouncementDot" data-dotId="2" style="margin-right:41px">
						</div>
						@endif
					</div>
				</div>
			</div>
		</div>
	    
	    <div class="middleContentContainer">
				<div class="middleContent">
					<div class="mainGallry">
						<image class="mainGallryImage" src="/images/_img_worship.jpg">
						<div class="mainGallryBody">
							<div class="mainGallaryDescription" id="morningPray">	
								아침/금요 예배
							</div>
						</div>
					</div>
				</div>
				<div class="middleContentFiller">
				&nbsp;
				</div>
	            <div class="middleContent">
		            <div class="pastorStory">
		            	<div class="sermonHeader">
	    	            	목회 이야기
	        	        </div>
	        	        <hr class="Line">
	        	        <div id="pastorStoryContainer">
		        	        @foreach ($pastorStories as $pastorStory)
		        	        	<div class="eventBody">
		        	        		<a href={{ url('/sermon?pastorStory=' . $pastorStory->id . '#pastorStory') }}>
		        	        		<div class="date">
		        	        			{!! $pastorStory->created_at->year !!}.{!! str_pad($pastorStory->created_at->month, 2, 0, STR_PAD_LEFT)!!}.{!!str_pad($pastorStory->created_at->day, 2, 0, STR_PAD_LEFT)!!}
		        	        		</div>
		        	        		<div class="title">
		        	        			{!! $pastorStory->title !!}
		        	        		</div>
		        	        		</a>
		        	        	</div>
		        	        	 <hr class="transLine">
		        	        @endforeach
		        	    </div>
	        	        <div class="EventDotContainer">
	        	        	@for($i = 1; $i < $pastorStoryCount; $i++)
	        	        		@if ($i == 1)
		        	        		<div class="EventDot pastorStoryDot " id="pastorStory0">
									</div>
									<div class="EventDot pastorStoryDot " id="pastorStory1">
									</div>
								@else
									<div class="EventDot pastorStoryDot " id="pastorStory{{$i}}">
									</div>
								@endif
	        	        	@endfor
						</div>
	            	</div>
	            </div>
	
				<div class="middleContentFiller">
				&nbsp;
				</div>
				<div class="middleContent">
					<div class="mainGallry">
						<image class="mainGallryImage" src="/images/_img_mission.jpg">
						<div class="mainGallryBody">
							<div class="mainGallaryDescription" id="vision">	
								베트남 선교
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
	$(document).on('click', '#vision', function(){
		window.location.href="{{ url('\about#churchVision') }}";
	});
	$(document).on('click', '#morningPray', function(){
		window.location.href="{{ url('\sermon#fridayPray') }}";
	});
	$(document).on('click', '#morningQT', function(){
		window.location.href="{{ url('\sermon#morningPray') }}";
	})
	$(document).on('click', '#galleryLink', function(){
		window.location.href="{{ url('\gallery') }}";
	})
	$(document).on('click', '.worshipMap', function(){
		window.open("https://www.google.com/maps/place/835+W+34th+St,+Los+Angeles,+CA+90089/@34.0232168,-118.2870684,17.25z/data=!4m2!3m1!1s0x80c2c7e4f1c7a399:0x5f21887fdcf24e0b");
	});

	$(document).on('click', '[id^=pastorStory]', function(e){
		$id = e.currentTarget.id.substring(11,12);
		$.ajax({
			url: '/landing',
			data: {type : 'pastorStory', count: $id},
			type: "GET",
			cache: true,
			jsonp:false,
			dataType: 'json',
			success: function(data) {
				var i = 0;
				var pastorStories = data.pastorStories;
				var html = "";
				for(i = 0; i < pastorStories.length; i++)
				{
					html += '<div class="eventBody">';
					html += '<a href="/sermon?pastorStory=' + pastorStories[i].id + '#pastorStory">';
					html += '<div class="date">';
		        	html += pastorStories[i].created_at.substring(0,4) + "." + pastorStories[i].created_at.substring(5,7) + "." + pastorStories[i].created_at.substring(8,10);
		        	html += '</div>'
		        	html += '<div class="title">';
					html += pastorStories[i].title;
		        	html += '</div>';
		        	html += '</a>';
		        	html += '</div>';
		        	html += '<hr class="transLine">';
				}
				$('#pastorStoryContainer').html(html);
			}
		});

	});
/*
	$(document).on('click', '.pastorStoryDot', function(e){
		var id = e.currentTarget.dataset.dotid;
		$.ajax({
			url:'/getPastorStory',
			data: {id : id},
			type: "GET",
			cache: true,
			jsonp: false,
			dataType: 'json',
			success: function (data) {
				console.log(data);
				/*
				@foreach ($pastorStories as $pastorStory)
    	        	<div class="eventBody">
    	        		<a href={{ url('/sermon?pastorStory=' . $pastorStory->id . '#pastorStory') }}>
    	        		<div class="date">
    	        			{!! $pastorStory->created_at->year !!}.{!! str_pad($pastorStory->created_at->month, 2, 0, STR_PAD_LEFT)!!}.{!!str_pad($pastorStory->created_at->day, 2, 0, STR_PAD_LEFT)!!}
    	        		</div>
    	        		<div class="title">
    	        			{!! $pastorStory->title !!}
    	        		</div>
    	        		</a>
    	        	</div>
    	        	 <hr class="transLine">
    	        @endforeach


				var html = "";
				
    	       	for(var i = 0; i < data.length; i++)
    	       	{
    	       		html += '<div class="eventBody">';
    	       		html += '<a href="/sermon?pastorStory=?' + data[i].id + '#pastorStory">';
    	       		html += '<div class="date">';
    	       		var date = new Date(data[i].created_at);
    	       		html += date.getFullYear() + "." + date.getMonth() + "." + date.getDate();
    	       		html += '</div>';
    	       		html += '<div class="title">';
    	       		html += data[i].title;
    	       		html += '</div>';
    	       		html += '</a>';
    	       		html += '</div>';
    	       		html += '<hr class="transLine">';
    	       	}

    	       	console.log(html);

			}
		});
	});
*/
	$(document).on('click', '.AnnouncementDot', function(e){
		console.log(e.currentTarget.dataset.dotid);
		var id = e.currentTarget.dataset.dotid;
		$('.AnnouncementBody').each(function (i, row){
			if(i == id)
			{
				$(row).show();
			}
			else
			{
				$(row).hide();
			}
		});
	});

	$(document).on('click', '.AnnouncementBody .edit', function(e){
		id = e.currentTarget.dataset.id;
		window.location.href = '/editAnnouncement/' + id;
	});

	$(document).on('click', '.AnnouncementBody .closeContainer', function(e) {
		id = e.currentTarget.dataset.id;
		$.ajax({
			url:'/deleteAnnounce',
			data: {id : id},
			type: "GET",
			cache: true,
			jsonp: false,
			dataType: 'json',
			success: function (data) {
				alert('Complete!!');
				window.location.href=".";
			}
		});
	});
</script>
	
@endsection