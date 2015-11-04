@extends('app')
@section('cssExtend')
<link rel="stylesheet" type="text/css" href="css/subPage.css">
<style>
.GalleryContainer
{
	width:100%;
	background-color:Yellow;
	margin:auto;
	border:solid 1px;
}
.GalleryHeaderContainer
{
	background-color:yellow;
	width:100%;
	height:60px;
	margin:auto;
}
.GalleryHeader
{
	font-weight:bold;
	background-color:green;
	float:left;
	width:200px;
	height:60px;
	text-align:center;
	line-height:60px;
}
.aHeader:hover
{
	cursor:pointer;
}
.GalleryHeaderClick
{
	color: #bf1e2e;
}
.GalleryBodyWrapper
{
	width:100%;

}
.GalleryBodyContainer
{
	width:100%;
	background-color:green;
	margin:auto;
	float:left;
	height:100%;
}
.GalleryContentContainer
{
	width:100%;
	height:300px;
	float:left;
	background-color:red;
}
.GalleryHorizontalMargin
{
	width:100%;
	height:20px;
	background-color:yellow;
}
.GalleryVerticalMargin
{
	height:280px;
	width:20px;
	background-color:yellow;
	float:left;
}
.GalleryImageContainer
{
	width:200px;
	height:274px;
	float:left;
	background-color:blue;
}
.GalleryImageContainer:hover
{
	border:solid 3px #bf1e2e;
}
.GalleryImage
{
	width:100%;
	height:180px;
}
.GalleryImageBody
{
	width:170px;
	margin:auto;
	background-color:white;
	height:30px;
	margin-top:10px;
	font-size:12px;
}
.GalleryImageTail
{
	width:170px;
	margin:auto;
	background-color:white;
	margin-top:10px;
	font-size:12px;
	color:gray;
}
.ViewGalleryBlock
{
	display:block;
}
.HideGalleryBlock
{
	display:none;
}



#moreContent
{
	width:600px;
	height:60px;
	border: solid 1px;
	border-bottom: solid 3px;
	line-height:60px;
	text-align:center;
	margin-top:70px;
	display:inline-block;
	vertical-align: middle;
	margin-left:300px;
	margin-bottom:70px;
}

.viewImage{
	position: fixed;
	top:0;
	left:0;
	width:100%;
	height:100%;
	background:rgba(255,255,255,0.5);
	z-index:10;
	display:none;
}
.ImageContainer{
	width:1000px;
	height:700px;
	overflow: auto;
	margin: auto;
	top: 0; left: 0; bottom: 0; right: 0;
	background-color:red;
	vertical-align: middle;
	position:absolute;
	z-index:10;
}
.CloseButtonContainer
{
	height:30px;
	width:100%;
	background-color:green;
}
.ImageContentContainer
{
	width:100%;
	height:550px;
	background-color:yellow;
	margin:auto;
}
.ImageContentButtonContainer
{
	width:75px;
	height:100%;
	background-color:gray;
	display:block;
	float:left;
}
.ImageContent
{
	width:850px;
	height:100%;
	background-color:blue;
	display:block;
	float:left;
}

#showImage
{
	display:none;
	z-index:10;
	position:fixed;
	top:0;
	left:0;
	right:0;
	bottom:0;	
	width: 80%;
	height:100%;
	margin:auto;
	background-color:black;
}
.ImageWrapper
{
	width:1000px;
	margin:auto;
}

.ImageTailContainer
{
	width:950px;
	height:90px;
	background-color:yellow;
	margin:auto;
}
.SmallImageContentButtonContainer
{
	height:100%;
	background-color:black;
	width:50px;
	float:left;
	
}
.SmallImageContentContainer
{
	height:100%;
	background-color:yellow;
	width: 850px;
	float:left;
}
.SmallImageBox
{
	height:100%;
	width:100px;
	background-color:red;
	margin-left:20px;
	float:left;
}

.EmptyMargin
{
	background-color:green;
	height:30px;
	width:100%;
	display:block;
	
}
</style>
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
				<li style="margin-right:76px">문의</li>
				<li><a href="#Before2015">Group 2015</a></li>
				<li><a href="#morningPray">2014</a></li>
				<li><a href="#fridayPray">Before</a></li>
			</ul>
		</div>
	</div>
	<a name="Before2015"></a>
	<div class="fullwidth" style="height:90px; background-color:#f4f4f4">
	</div>
	<div class="fullWidth" style="background-color:#f4f4f4; min-height:966px">
		<div class="container">
			<div class="fullWidth">
				<font size="10px" color="#bf1e2e" style="font-weight:bold">갤러리</font>
			</div>
			<div class="GalleryContainer">
				<div class="GalleryHeaderContainer">
					<div class="GalleryHeader GalleryHeaderClick" id="PrayAndSermonHeader" onClick="displayImageBlock('PrayAndSermon')">
						<a class="aHeader">예배설교</a>
					</div>
					<div class="GalleryHeader" id="RetreatHeader" onClick="displayImageBlock('Retreat')">
						<a class="aHeader">수련회</a>
					</div>
					<div class="GalleryHeader">
						대회/기념식
					</div>
					<div class="GalleryHeader">
						베트남 선교
					</div>
				</div>
				<div class="GalleryBodyWrapper">
					<!-- 에베설교 -->
					<div class="GalleryBodyContainer ViewGalleryBlock" id="PrayAndSermon">
						<?php $count = 0;?>
						
						@if($contentsPrayAndSermon->count() > 0)
						<div class="GalleryContentContainer">
						@endif
						
						@while($count < 5 && $contentsPrayAndSermon->count() -$count > 0)
							@if($count == 0)
							<div class="GalleryHorizontalMargin">
								&nbsp;
							</div>
							@endif
							@if($count != 0)
							<div class="GalleryVerticalMargin">
								&nbsp;
							</div>
							@endif
							<div class="GalleryImageContainer" id="PrayAndSermon{{ $contentsPrayAndSermon[$count]->id}}">
								<div class="GalleryImage">
									<Img src="{{$contentsPrayAndSermon[$count]->image}}" width="100%" height="100%">
								</div>
								<div class="GalleryImageBody">
									{{ $contentsPrayAndSermon[$count]->body }}
								</div>
								<div class="GalleryImageTail">
									{{ $contentsPrayAndSermon[$count]->category }} | {{ $contentsPrayAndSermon[$count]->header }}
								</div>
							</div>
							<?php $count++; ?>
						@endwhile
						@if($contentsPrayAndSermon->count() > 0)
						</div>
						@endif
						
						
						@if($contentsPrayAndSermon->count() > 5)
						<div class="GalleryContentContainer">
						@endif
	
						@while($count < 10 && $contentsPrayAndSermon->count() - $count > 0)
							@if($count % 5 == 0)
							<div class="GalleryHorizontalMargin">
								&nbsp;
							</div>
							@endif
							@if($count % 5 != 0)
							<div class="GalleryVerticalMargin">
								&nbsp;
							</div>
							@endif
							<div class="GalleryImageContainer" id="PrayAndSermon{{ $contentsPrayAndSermon[$count]->id}}">
								<div class="GalleryImage">
									<Img src="{{$contentsPrayAndSermon[$count]->image}}" width="100%" height="100%">
								</div>
								<div class="GalleryImageBody">
									{{ $contentsPrayAndSermon[$count]->body }}
								</div>
								<div class="GalleryImageTail">
									{{ $contentsPrayAndSermon[$count]->category }} | {{ $contentsPrayAndSermon[$count]->header }}
								</div>
							</div>
							<?php $count++; ?>
						@endwhile
						@if($contentsPrayAndSermon->count() > 5)
						</div>
						@endif
						
						
					</div>
					<!-- 에배설교 끝 -->
					<!-- 수련회  -->
					<div class="GalleryBodyContainer HideGalleryBlock" id="Retreat">
						<?php $count = 0;?>
						
						@if($contentsRetreat->count() > 0)
						<div class="GalleryContentContainer">
						@endif
						
						@while($count < 5 && $contentsRetreat->count() -$count > 0)
							@if($count == 0)
							<div class="GalleryHorizontalMargin">
								&nbsp;
							</div>
							@endif
							@if($count != 0)
							<div class="GalleryVerticalMargin">
								&nbsp;
							</div>
							@endif
							<div class="GalleryImageContainer" id="Retreat{{ $contentsRetreat[$count]->id}}">
								<div class="GalleryImage">
									<Img src="{{$contentsRetreat[$count]->image}}" width="100%" height="100%">
								</div>
								<div class="GalleryImageBody">
									{{ $contentsRetreat[$count]->body }}
								</div>
								<div class="GalleryImageTail">
									{{ $contentsRetreat[$count]->category }} | {{ $contentsRetreat[$count]->header }}
								</div>
							</div>
							<?php $count++; ?>
						@endwhile
						@if($contentsRetreat->count() > 0)
						</div>
						@endif
						
						
						@if($contentsRetreat->count() > 5)
						<div class="GalleryContentContainer">
						@endif
	
						@while($count < 10 && $contentsRetreat->count() - $count > 0)
							@if($count % 5 == 0)
							<div class="GalleryHorizontalMargin">
								&nbsp;
							</div>
							@endif
							@if($count % 5 != 0)
							<div class="GalleryVerticalMargin">
								&nbsp;
							</div>
							@endif
							<div class="GalleryImageContainer" id="Retreat{{ $contentsRetreat[$count]->id}}">
								<div class="GalleryImage">
									<Img src="{{$contentsRetreat[$count]->image}}" width="100%" height="100%">
								</div>
								<div class="GalleryImageBody">
									{{ $contentsRetreat[$count]->body }}
								</div>
								<div class="GalleryImageTail">
									{{ $contentsRetreat[$count]->category }} | {{ $contentsRetreat[$count]->header }}
								</div>
							</div>
							<?php $count++; ?>
						@endwhile
						@if($contentsRetreat->count() > 5)
						</div>
						@endif
					</div>
					<!-- 수련회 끝 -->
				</div>
			</div>
			<!-- more contents -->
			<div id="moreContent">
				펼쳐보기<img src="\images\image1.jpg" width="10px" height="10px">
			</div>
		</div>
	</div>
	<div class="viewImage" id ="viewImage" onClick="removeImage()">
	</div>
		<div id="showImage">
		</div>
	
@endsection
@section('script')
<script type="text/javascript" src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
<script>
	var HeaderArray = {};
	var ImageIndexToContentArray = {};
	var ImageContentToIndexArray = {};
	HeaderArray[0] = 'PrayAndSermonHeader';
	HeaderArray[1] = 'RetreatHeader';
	ImageContentToIndexArray['PrayAndSermon'] = 0;
	ImageContentToIndexArray['Retreat'] = 1;
	ImageIndexToContentArray[0] = 'PrayAndSermon';
	ImageIndexToContentArray[1] = 'Retreat';
	var curIndex = 0;
	function displayImageBlock(newDiv)
	{
		//$("#" + ImageIndexToContentArray[curIndex]).removeClass("ViewGalleryBlock");
		//$("#" + ImageIndexToContentArray[curIndex]).addClass("HideGalleryBlock");
		$("#" + HeaderArray[curIndex]).removeClass("GalleryHeaderClick");
		$("#" + ImageIndexToContentArray[curIndex]).hide();
		
		curIndex = ImageContentToIndexArray[newDiv];
		//$("#" + ImageIndexToContentArray[curIndex]).addClass("ViewGalleryBlock");
		//$("#" + ImageIndexToContentArray[curIndex]).removeClass("HideGalleryBlock");
		$("#" + HeaderArray[curIndex]).addClass("GalleryHeaderClick");
		$("#" + ImageIndexToContentArray[curIndex]).show();
	}
	function clickPrevButton()
	{
		//$("#" + ImageIndexToContentArray[curIndex]).removeClass("ViewGalleryBlock");
		//$("#" + ImageIndexToContentArray[curIndex]).addClass("HideGalleryBlock");
		$("#" + ImageIndexToContentArray[curIndex]).hide("slide", {direction:"right"}, 800);
		
		$("#" + HeaderArray[curIndex]).removeClass("GalleryHeaderClick");
		curIndex = (curIndex-1+Object.keys(ImageContentToIndexArray).length) % Object.keys(ImageContentToIndexArray).length;
		//$("#" + ImageIndexToContentArray[curIndex]).addClass("ViewGalleryBlock");
		//$("#" + ImageIndexToContentArray[curIndex]).removeClass("HideGalleryBlock");
		 $("#" + ImageIndexToContentArray[curIndex]).delay(800).show("slide", {direction: "left"}, 800);
		$("#" + HeaderArray[curIndex]).addClass("GalleryHeaderClick");
	}
	function clickNextButton()
	{
		//$("#" + ImageIndexToContentArray[curIndex]).removeClass("ViewGalleryBlock");
		//$("#" + ImageIndexToContentArray[curIndex]).addClass("HideGalleryBlock");
		$("#" + ImageIndexToContentArray[curIndex]).hide("slide", {direction:"left"}, 800);
		
		$("#" + HeaderArray[curIndex]).removeClass("GalleryHeaderClick");
		curIndex = (curIndex+1) % Object.keys(ImageContentToIndexArray).length;
		//$("#" + ImageIndexToContentArray[curIndex]).addClass("ViewGalleryBlock");
		//$("#" + ImageIndexToContentArray[curIndex]).removeClass("HideGalleryBlock");
		 $("#" + ImageIndexToContentArray[curIndex]).delay(800).show("slide", {direction: "right"}, 800);
		$("#" + HeaderArray[curIndex]).addClass("GalleryHeaderClick");
	}
	$pageCountPrayAndSermon = 1;
	$(document).on('click', '#moreContent', function(){
		$.ajax({
			url:'/gallery/moreContentPrayAndSermon',
			data: {page : $pageCountPrayAndSermon},
			type: "GET",
			cache: true,
			jsonp:false,
			dataType: 'json',
			success: function(data){
				$count = 0 ;
				$content = "";
				if(data.count > 0)
					$content+= '<div class="GalleryContentContainer">';

				while($count < 5 && data.count - $count > 0)
				{
					if($count == 0)
						$content += '<div class="GalleryHorizontalMargin"> &nbsp; </div>';
					if($count != 0)
						$content += '<div class="GalleryVerticalMargin"> &nbsp; </div>';
					$content += '<div class="GalleryImageContainer" id="PrayAndSermon' + data.contents[$count].id + '">' +
									'<div class="GalleryImage">';
					$content += '<img src="' + data.contents[$count].image + '" width="100%" height="100%"> </div>';
					$content += '<div class="GalleryImageBody">' + data.contents[$count].body + '</div>';
					$content += '<div class="GalleryImageTail">' + data.contents[$count].category + ' | ' +
								data.contents[$count].header + '</div> </div>';
					$count++;
				}

				if(data.count > 0)
					$content += '</div>';

				if(data.count > 5)
					$content += '<div class="GalleryContentContainer">';

				while($count < 10 && data.count - $count > 0)
				{
					if($count % 5 == 0)
						$content += '<div class="GalleryHorizontalMargin"> &nbsp; </div>';
					if($count % 5 != 0)
						$content += '<div class="GalleryVerticalMargin"> &nbsp; </div>';
					$content += '<div class="GalleryImageContainer" id="PrayAndSermon' + data.contents[$count].id + '"> <div class="GalleryImage">';
					$content += '<img src="' + data.contents[$count].image + '" width="100%" height="100%">';
					$content += '</div> <div class="GalleryImageBody">';
					$content += data.contents[$count].body;
					$content += '</div> 	<div class="GalleryImageTail">';
					$content += data.contents[$count].category + " | " + data.contents[$count].header;
					$content += '</div> </div>';
					$count++;
				}
				if(data.count > 5)
					$content += '</div>';

				document.getElementById('PrayAndSermon').innerHTML += $content;
				$pageCountPrayAndSermon++;
			},	 
		})
	});

	$(document).on('click',  "[id^=PrayAndSermon]", function(){
		var $listPage = $(this).prop('id');
		var $ImageID = $listPage.substring(13, $listPage.length);
		if(($ImageID % 1) === 0)
		{
			document.getElementById("showImage").style.display = "block";
			document.getElementById("viewImage").style.display = "block";
			$.ajax({
				url:'/gallery/ContentPrayAndSermon',
				data: {id : $ImageID},
				type: "GET",
				cache: true,
				jsonp:false,
				dataType: 'json',
				success: function(data){
					//retrieve data
					$html = '<div class ="ImageContainer">';
					$html += '<div class="CloseButtonContainer">';
					$html += '</div>';
					$html += '<div class="ImageContentContainer">';
					if(data.before == null)
					{
						$html += '<div class="ImageContentButtonContainer">';
					}
					else
					{
						$html += '<div class="ImageContentButtonContainer" onClick="test(' + data.after.id  +')">';
						$html += '<Img src="/images/image1.jpg" width="20px"; height="20px";>';
					}
					$html += '</div>';
					$html += '<div class="ImageContent">' +
						'<Img src="' + data.current.image + '" width="100%" height="100%">' +
						'</div>';
					if(data.after == null)
						$html += '<div class="ImageContentButtonContainer">';
					else
						$html += '<div class="ImageContentButtonContainer" onClick="test(' + data.before.id  +')">';
					$html += '</div>';
					$html += '</div>';
					$html += '<div class ="EmptyMargin"> &nbsp; </div>';
					$html += '<div class="ImageWrapper">';
					$html += '<div class="ImageTailContainer">';
					$html += '<div class ="SmallImageContentButtonContainer">';
					$html += '</div>';
					$html += '<div class ="SmallImageContentContainer">';
					$html += '<div class="SmallImageBox" style="margin-left:0px;">';
					$html += '</div>';
					$html += '<div class="SmallImageBox"> </div>';
					$html += '<div class="SmallImageBox"> </div>';
					$html += '<div class="SmallImageBox"> </div>';
					$html += '<div class="SmallImageBox"> </div>';
					$html += '<div class="SmallImageBox"> </div>';
					$html += '</div>';
					$html += '<div class ="SmallImageContentButtonContainer"> </div>';
					$html += '</div> </div> </div>';

					document.getElementById('showImage').innerHTML += $html;
					}});
			
		}});
		
</script>
<script>
function test($id)
{
	document.getElementById("showImage").style.display = "block";
	document.getElementById("viewImage").style.display = "block";
	
	$.ajax({
		url:'/gallery/ContentPrayAndSermon',
		data: {id : $id},
		type: "GET",
		cache: true,
		jsonp:false,
		dataType: 'json',
		success: function(data){
			//retrieve data
			$html = '<div class ="ImageContainer">';
			$html += '<div class="CloseButtonContainer">';
			$html += '</div>';
			$html += '<div class="ImageContentContainer">';
			if(data.before == null)
				$html += '<div class="ImageContentButtonContainer">';
			else
				$html += '<div class="ImageContentButtonContainer" onClick="test(' + data.after.id + ')">';				
			$html += '</div>';
			$html += '<div class="ImageContent">' +
				'<Img src="' + data.current.image + '" width="100%" height="100%">' +
				'</div>';
			if(data.after == null)
				$html += '<div class="ImageContentButtonContainer">';
			else
				$html += '<div class="ImageContentButtonContainer" onClick="test(' + data.before.id + ')">';
			$html += '</div>';
			$html += '</div>';
			$html += '<div class ="EmptyMargin"> &nbsp; </div>';
			$html += '<div class="ImageWrapper">';
			$html += '<div class="ImageTailContainer">';
			$html += '<div class ="SmallImageContentButtonContainer">';
			$html += '</div>';
			$html += '<div class ="SmallImageContentContainer">';
			$html += '<div class="SmallImageBox" style="margin-left:0px;">';
			$html += '</div>';
			$html += '<div class="SmallImageBox"> </div>';
			$html += '<div class="SmallImageBox"> </div>';
			$html += '<div class="SmallImageBox"> </div>';
			$html += '<div class="SmallImageBox"> </div>';
			$html += '<div class="SmallImageBox"> </div>';
			$html += '</div>';
			$html += '<div class ="SmallImageContentButtonContainer"> </div>';
			$html += '</div> </div> </div>';
			document.getElementById('showImage').innerHTML += $html;
		}});	
}


function removeImage()
{
	document.getElementById("showImage").style.display = "none";
	document.getElementById("viewImage").style.display = "none";
}
</script>
@endsection