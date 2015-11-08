@extends('app')
@section('cssExtend')
<link rel="stylesheet" type="text/css" href="css/subPage.css">
<style>
.GalleryContainer
{
	width:100%;
	margin:auto;
	margin-top: 40px;
	background-color:white;
}
.GalleryHeaderContainer
{
	width:100%;
	height:100px;
	margin:auto;
	background-color:white;
	border: solid 1px #d0d0d0;
}
.GalleryHeader
{
	font-weight:bold;
	background-color:white;
	float:left;
	width:200px;
	height:100px;
	text-align:center;
	line-height:100px;
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
	margin:auto;
	float:left;
	background-color:#d2d2d2;
}
.GalleryContentContainer
{
	width:100%;
	height:245px;
	float:left;
	background-color:#d2d2d2;
	margin-bottom:32px;
}
.GalleryHorizontalMarginWithShadow
{
	width:100%;
	height:32px;
	box-shadow: 0px 10px 10px 0px #cecece inset;
}
.GalleryHorizontalMargin
{
	width:100%;
	height:32px;
}
.GalleryVerticalMargin
{
	height:245px;
	width:22px;
	float:left;
}
.GalleryVerticalMargin_Side
{
	height:245px;
	width:40px;
	float:left;
}
.GalleryImageContainer
{
	width:200px;
	height:245px;
	float:left;
	background-color:white;
}
.GalleryImageContainer:hover
{
	border:solid 3px #bf1e2e;
	box-sizing: border-box;
    -moz-box-sizing: border-box;
    -webkit-box-sizing: border-box;
}
.GalleryImage
{
	width:100%;
	height:150px;
}
.GalleryImageBody
{
	width:170px;
	margin:auto;
	height:30px;
	margin-top:20px;
	font-size:12px;
	background-color:white;
	color:#111111;
}
.GalleryImageTail
{
	width:170px;
	margin:auto;
	margin-top:15px;
	font-size:12px;
	color:#9a9a9a;
	height:12px;
	margin-botom:18px;
}
.ViewGalleryBlock
{
	display:block;
}
.HideGalleryBlock
{
	display:none;
}

#moreContent:hover
{
	background-color:#c5c5c5;
	color:white;
}

#moreContent
{
	width:643px;
	height:62px;
	border: solid 1px #cccbcb;
	box-shadow: 0 4px 0 0 #e4e4e4;
	line-height:60px;
	text-align:center;
	display:table;
	margin: auto;
	background-color:white;
	font-size:14px;
	color:#111111;
}

.viewImage{
	position: fixed;
	top:0;
	left:0;
	width:100%;
	height:100%;
	background:rgba(0,0,0,0.8);
	z-index:10;
	display:none;
}
.ImageContainer{
	width:1170px;
	height:100%;
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
	height:5%;
	width:100%;
	background-color:green;
}
.ImageContentContainer
{
	width:100%;
	height:75%;
	background-color:green;
	margin:auto;
}
.ImageContentButtonContainer
{
	width:5%;
	height:100%;
	background-color:gray;
	display:block;
	float:left;
}
.ImageContentButton
{
	width:100%;
	height:30%;
	top:35%;
	position:relative;
}
.ImageContent
{
	width:90%;
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
	width: 1170px;
	height:95%;
	margin:auto;
}
.ImageWrapper
{
	width: 100%;
	height:15%;
	margin:auto;
}

.ImageTailContainer
{
	width:90%;
	height:100%;
	background-color:yellow;
	margin:auto;
	float:left;
}
.SmallImageContentButtonContainer
{
	height:100%;
	background-color:black;
	width:5%;
	float:left;
	
}
.SmallImageContentContainer
{
	height:100%;
	width: 100%;
	float:left;
}
.SmallImageBox
{
	height:100%;
	width:100%;
	float:left;
}
.SmallImageBoxWrapper
{
	background-color:black;
	height:100%;
	width:10%;
	float:left;
}
.SmallImageBox:hover
{
	Opacity:0.8;
}
.SmallImageBoxFiller
{
	height:100%;
	width:2%;
	background-color:green;
	float:left;
}
.EmptyMargin
{
	background-color:green;
	height:5%;
	width:100%;
	display:block;
	
}
#moreContent:hover
{
	cursor:pointer;
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
				<li style="margin-right:76px">겔러리</li>
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
						@if($count == 0)
							<div class="GalleryHorizontalMarginWithShadow">
								&nbsp;
							</div>
						@endif
						@if($contentsPrayAndSermon->count() > 0)
						<div class="GalleryContentContainer">
						@endif
						
						@while($count < 5 && $contentsPrayAndSermon->count() -$count > 0)
							@if($count == 0)
							<div class="GalleryVerticalMargin_Side">
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
									{{ $contentsPrayAndSermon[$count]->category }} | {{ $contentsPrayAndSermon[$count]->created_at->year }}
								</div>
							</div>
							<?php $count++; ?>
						@endwhile
						@if($count == 5)
						<div class="GalleryVerticalMargin_Side">
							&nbsp;
						</div>
						@endif
						@if($contentsPrayAndSermon->count() > 0)
						</div>
						@endif
						
						
						@if($contentsPrayAndSermon->count() > 5)
						<div class="GalleryContentContainer">
						@endif
	
						@while($count < 10 && $contentsPrayAndSermon->count() - $count > 0)

							@if($count % 5 == 0)
							<div class="GalleryVerticalMargin_Side">
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
									{{ $contentsPrayAndSermon[$count]->category }} | {{ $contentsPrayAndSermon[$count]->created_at->year }}
								</div>
							</div>
							<?php $count++; ?>
						@endwhile
						@if($count == 10)
						<div class="GalleryVerticalMargin_Side">
							&nbsp;
						</div>
						@endif
						@if($contentsPrayAndSermon->count() > 5)
						</div>
						@endif
						
						
					</div>
					<!-- 에배설교 끝 -->
					<!-- 수련회  -->
					<div class="GalleryBodyContainer HideGalleryBlock" id="Retreat">
						<?php $count = 0;?>
						@if($count == 0)
							<div class="GalleryHorizontalMarginWithShadow">
								&nbsp;
							</div>
						@endif
						@if($contentsRetreat->count() > 0)
						<div class="GalleryContentContainer">
						@endif
						
						@while($count < 5 && $contentsRetreat->count() -$count > 0)
							@if($count == 0)
							<div class="GalleryVerticalMargin_Side">
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
									{{ $contentsRetreat[$count]->category }} | {{ $contentsRetreat[$count]->created_at->year }}
								</div>
							</div>
							<?php $count++; ?>
						@endwhile
						@if($count == 5)
						<div class="GalleryVerticalMargin_Side">
							&nbsp;
						</div>
						@endif
						@if($contentsRetreat->count() > 0)
						</div>
						@endif
						
						
						@if($contentsRetreat->count() > 5)
						<div class="GalleryContentContainer">
						@endif
	
						@while($count < 10 && $contentsRetreat->count() - $count > 0)

							@if($count % 5 == 0)
							<div class="GalleryVerticalMargin_Side">
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
									{{ $contentsRetreat[$count]->category }} | {{ $contentsRetreat[$count]->created_at->year }}
								</div>
							</div>
							<?php $count++; ?>
						@endwhile
						@if($count == 10)
						<div class="GalleryVerticalMargin_Side">
							&nbsp;
						</div>
						@endif
						@if($contentsPrayAndSermon->count() > 5)
						</div>
						@endif
						
						
					</div>
					<!-- 수련회 끝 -->
				</div>
			</div>
			<div style="width:100%; height:30px; clear:both;">
			&nbsp;
			</div>
			<!-- more contents -->
			<div id="moreContent">
				펼쳐보기<img id="moreContentArrow" src="\images\arrow_bottom.png" width="10px" height="10px" style="margin-left:5px">
			</div>
		</div>
	</div>
	<div style="width:100%; height:40px; clear:both;">
			&nbsp;
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
		$("#" + ImageIndexToContentArray[curIndex]).removeClass("ViewGalleryBlock");
		$("#" + ImageIndexToContentArray[curIndex]).addClass("HideGalleryBlock");
		$("#" + HeaderArray[curIndex]).removeClass("GalleryHeaderClick");
		$("#" + ImageIndexToContentArray[curIndex]).hide();
		
		curIndex = ImageContentToIndexArray[newDiv];
		$("#" + ImageIndexToContentArray[curIndex]).addClass("ViewGalleryBlock");
		$("#" + ImageIndexToContentArray[curIndex]).removeClass("HideGalleryBlock");
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
	$('#moreContent').mouseenter(function()
	{
		$('#moreContentArrow').attr('src', '/images/arrow_bottom_over.png');
	});
	$('#moreContent').mouseleave(function()
	{
		$('#moreContentArrow').attr('src', '/images/arrow_bottom.png');
	});
	$pageCountPrayAndSermon = 1;
	$pageCountRetreat = 1;
	$(document).on('click', '#moreContent', function(){
		var $id = '';
		var $count = 0;
		if($('#PrayAndSermon').hasClass('ViewGalleryBlock'))
		{
			$id = 'PrayAndSermon';
			$count = $pageCountPrayAndSermon;
		}
		else if($('#Retreat').hasClass('ViewGalleryBlock'))
		{
			$id = 'Retreat';
			$count = $pageCountRetreat;
		}
		$.ajax({
			url:'/gallery/moreContent' + $id,
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
						$content += '<div class="GalleryVerticalMargin_Side"> &nbsp; </div>';
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
						$content += '<div class="GalleryVerticalMargin_Side"> &nbsp; </div>';
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

				if($('#PrayAndSermon').hasClass('ViewGalleryBlock'))
				{
					document.getElementById('PrayAndSermon').innerHTML += $content;
					$pageCountPrayAndSermon++;
				}
				else if($('#Retreat').hasClass('ViewGalleryBlock'))
				{
					document.getElementById('Retreat').innerHTML += $content;
					$pageCountRetreat++;
				}
			},	 
		})
	});

	

	
	$(document).on('click',  "[id^=PrayAndSermon]", function(){
		var $listPage = $(this).prop('id');
		var $ImageID = $listPage.substring(13, $listPage.length);
		$ImageID = parseInt($ImageID);
		if(!isNaN($ImageID) && typeof($ImageID) === 'number')
		{
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
						$html += '<div class="ImageContentButtonContainer">';
						$html += '<Img src="/images/image1.jpg" class="ImageContentButton" id="viewBigNextImagePrayAndSermon' + data.before.id  +'">';
					}
					$html += '</div>';
					$html += '<div class="ImageContent">' +
						'<Img src="' + data.current.image + '" width="100%" height="100%">' +
						'</div>';
					if(data.after == null)
						$html += '<div class="ImageContentButtonContainer">';
					else
					{
						$html += '<div class="ImageContentButtonContainer">';
						$html += '<Img src="/images/image1.jpg" class="ImageContentButton" id="viewBigNextImagePrayAndSermon' + data.after.id  +'">';
					}
					$html += '</div>';
					$html += '</div>';
					$html += '<div class ="EmptyMargin"> &nbsp; </div>';
					$html += '<div class="ImageWrapper">';
					$html += '<div class ="SmallImageContentButtonContainer" id="viewSmallNextImagePrayAndSermon' + eval(data.contents[0].id+1) + '"> </div>';
					$html += '<div class="ImageTailContainer">';
					$html += '<div class ="SmallImageContentContainer">';
					$count = 0;
					while($count < data.count)
					{
						if($count == 0)
							$html += '<div class="SmallImageBoxFiller" style="width:3%"> </div>';
						else
							$html += '<div class="SmallImageBoxFiller"> </div>';
						$html += '<div class="SmallImageBoxWrapper"><div class="SmallImageBox">';
						$html += '<img src="' + data.contents[$count].smallimage + '" width="100%" height="100%" id="viewBigNextImagePrayAndSermon' + data.contents[$count].id + '">';
						$html += '</div></div>';
						$count++;
					}
					$html += '<div class="SmallImageBoxFiller" style="width:3%"> </div>';

					$html += '</div>';
					$html += '</div>';
					$html += '<div class ="SmallImageContentButtonContainer" id="viewSmallNextImagePrayAndSermon' + eval(data.contents[data.count-1].id-1) + '"> </div>';
					$html += ' </div> </div>';

					document.getElementById('showImage').innerHTML += $html;
					document.getElementById("showImage").style.display = "block";
					document.getElementById("viewImage").style.display = "block";
					}});
			
		}
			
		});

	$(document).on('click',  "[id^=Retreat]", function(){
		var $listPage = $(this).prop('id');
		var $ImageID = $listPage.substring(7, $listPage.length);
		$ImageID = parseInt($ImageID);
		if(!isNaN($ImageID) && typeof($ImageID) === 'number')
		{
			$.ajax({
				url:'/gallery/ContentRetreat',
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
						$html += '<div class="ImageContentButtonContainer">';
						$html += '<Img src="/images/image1.jpg" class="ImageContentButton" id="viewBigNextImageRetreat' + data.before.id  +'">';
					}
					$html += '</div>';
					$html += '<div class="ImageContent">' +
						'<Img src="' + data.current.image + '" width="100%" height="100%">' +
						'</div>';
					if(data.after == null)
						$html += '<div class="ImageContentButtonContainer">';
					else
					{
						$html += '<div class="ImageContentButtonContainer">';
						$html += '<Img src="/images/image1.jpg" class="ImageContentButton" id="viewBigNextImageRetreat' + data.after.id  +'">';
					}
					$html += '</div>';
					$html += '</div>';
					$html += '<div class ="EmptyMargin"> &nbsp; </div>';
					$html += '<div class="ImageWrapper">';
					$html += '<div class ="SmallImageContentButtonContainer" id="viewSmallNextImageRetreat' + eval(data.contents[0].id+1) + '"> </div>';
					$html += '<div class="ImageTailContainer">';
					$html += '<div class ="SmallImageContentContainer">';
					$count = 0;
					while($count < data.count)
					{
						if($count == 0)
							$html += '<div class="SmallImageBoxFiller" style="width:3%"> </div>';
						else
							$html += '<div class="SmallImageBoxFiller"> </div>';
						$html += '<div class="SmallImageBoxWrapper"><div class="SmallImageBox">';
						$html += '<img src="' + data.contents[$count].smallimage + '" width="100%" height="100%" id="viewBigNextImageRetreat' + data.contents[$count].id + '">';
						$html += '</div></div>';
						$count++;
					}
					$html += '<div class="SmallImageBoxFiller" style="width:3%"> </div>';

					$html += '</div>';
					$html += '</div>';
					$html += '<div class ="SmallImageContentButtonContainer" id="viewSmallNextImageRetreat' + eval(data.contents[data.count-1].id-1) + '"> </div>';
					$html += ' </div> </div>';

					document.getElementById('showImage').innerHTML += $html;
					document.getElementById("showImage").style.display = "block";
					document.getElementById("viewImage").style.display = "block";
					}});
			
		}
			
		});
</script>
<script>
$(document).on('click',  "[id^=viewBigNextImage]", function(){
	var $listPage = $(this).prop('id');
	var $parsingHeader = $listPage.substring(16, $listPage.length);
	var $header ='';
	var $id = 0;
	if($parsingHeader.indexOf('PrayAndSermon') > -1)
	{
		$header = 'PrayAndSermon';
		$id = $parsingHeader.substring(13, $parsingHeader.length);
	}
	else if($parsingHeader.indexOf('Retreat') > -1)
	{
		$header = 'Retreat';
		$id = $parsingHeader.substring(7, $parsingHeader.length);
	}
	$.ajax({
			url:'/gallery/Content' + $header,
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
				{
					$html += '<div class="ImageContentButtonContainer">';
				}
				else
				{
					$html += '<div class="ImageContentButtonContainer">';
					$html += '<Img src="/images/image1.jpg" class="ImageContentButton" id="viewBigNextImage' + $header + data.before.id  + '">';
				}
				$html += '</div>';
				$html += '<div class="ImageContent">' +
					'<Img src="' + data.current.image + '" width="100%" height="100%">' +
					'</div>';
				if(data.after == null)
					$html += '<div class="ImageContentButtonContainer">';
				else
				{
					$html += '<div class="ImageContentButtonContainer">';
					$html += '<Img src="/images/image1.jpg" class="ImageContentButton" id="viewBigNextImage' + $header + data.after.id  + '">';
				}
				$html += '</div>';
				$html += '</div>';
				$html += '<div class ="EmptyMargin"> &nbsp; </div>';
				$html += '<div class="ImageWrapper">';
				$html += '<div class ="SmallImageContentButtonContainer" id="viewSmallNextImage' + $header + eval(data.contents[0].id+1) + '">';
				$html += '</div>';
				$html += '<div class="ImageTailContainer">';
				$html += '<div class ="SmallImageContentContainer">';
				$count = 0;
				while($count < data.count)
				{
					if($count == 0)
						$html += '<div class="SmallImageBoxFiller" style="width:3%"> </div>';
					else
						$html += '<div class="SmallImageBoxFiller"> </div>';
					$html += '<div class="SmallImageBoxWrapper"><div class="SmallImageBox">';
					$html += '<img src="' + data.contents[$count].smallimage + '" width="100%" height="100%" id="viewBigNextImage' + $header + data.contents[$count].id + '">';
					$html += '</div></div>';
					$count++;
				}
				$html += '<div class="SmallImageBoxFiller" style="width:3%"> </div>';

				$html += '</div>';
				$html += '</div>';
				$html += '<div class ="SmallImageContentButtonContainer" id="viewSmallNextImage' + $header + eval(data.contents[data.count-1].id-1) + '"> </div>';
				$html += ' </div> </div>';

				document.getElementById('showImage').innerHTML += $html;
				document.getElementById("showImage").style.display = "block";
				document.getElementById("viewImage").style.display = "block";
				}});
});


$(document).on('click',  "[id^=viewSmallNextImage]", function(){
	var $listPage = $(this).prop('id');
	var $parsingHeader = $listPage.substring(18, $listPage.length);
	var $header ='';
	var $id = 0;
	if($parsingHeader.indexOf('PrayAndSermon') > -1)
	{
		$header = 'PrayAndSermon';
		$id = $parsingHeader.substring(13, $parsingHeader.length);
	}
	else if($parsingHeader.indexOf('Retreat') > -1)
	{
		$header = 'Retreat';
		$id = $parsingHeader.substring(7, $parsingHeader.length);
	}
	$.ajax({
			url:'/gallery/moreSmallContent' + $header,
			data: {id : $id},
			type: "GET",
			cache: true,
			jsonp:false,
			dataType: 'json',
			success: function(data){
				//retrieve data
				$html = '<div class ="SmallImageContentButtonContainer" id="viewSmallNextImage' + $header + eval(data.contents[0].id+1) +  '">';
				$html += '</div>';
				$html += '<div class="ImageTailContainer">';
				$html += '<div class ="SmallImageContentContainer">';
				$count = 0;
				while($count < data.count)
				{
					if($count == 0)
						$html += '<div class="SmallImageBoxFiller" style="width:3%"> </div>';
					else
						$html += '<div class="SmallImageBoxFiller"> </div>';
					$html += '<div class="SmallImageBoxWrapper"><div class="SmallImageBox">';
					$html += '<img src="' + data.contents[$count].smallimage + '" width="100%" height="100%" id="viewBigNextImage' + $header + data.contents[$count].id + '">';
					$html += '</div></div>';
					$count++;
				}
				$html += '<div class="SmallImageBoxFiller" style="width:3%"> </div>';

				$html += '</div>';
				$html += '</div>';

				$html += '<div class ="SmallImageContentButtonContainer" id="viewSmallNextImage'  + $header + eval(data.contents[data.count-1].id-1) +  '">';

				$('.ImageWrapper').html($html);
				
				document.getElementById("showImage").style.display = "block";
				document.getElementById("viewImage").style.display = "block";
				}});
});


function removeImage()
{
	document.getElementById("showImage").style.display = "none";
	document.getElementById("viewImage").style.display = "none";
}
</script>
@endsection