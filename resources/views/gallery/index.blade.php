@extends('app')
@section('cssExtend')
<link rel="stylesheet" type="text/css" href="css/subPage.css">
<title>Power of Praise Church > Gallery</title>
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
	background-color: #f4f4f4;
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
	position:relative;
}
.GalleryImageContainer:hover
{
	border:solid 3px #bf1e2e;
	box-sizing: border-box;
    -moz-box-sizing: border-box;
    -webkit-box-sizing: border-box;
    cursor: pointer;
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
	overflow:hidden;
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
	overflow:hidden;
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
	vertical-align: middle;
	position:absolute;
	z-index:10;
}
.CloseButtonContainer
{
	height:42px;
	width:100%;
}
.CloseButton
{
	width:5%;
	height:100%;
	float:right;
	background: url('/images/btn_close.png') no-repeat center center;
}
.ImageContentContainer
{
	width:100%;
	height:70%;
	margin:auto;
}
.ImageBodyContainer
{
	height:15%;
	overflow:hidden;
	text-overflow:ellipsis;
	width: 100%;
	font-weight:bold;
	color:white;
	margin:auto;
	position:absolute;
	bottom:0px;
}
.ImageBody
{
	width:90%;
	height:80%;
	margin:auto;
}
.ImageContentButtonContainer
{
	width:5%;
	height:100%;
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
	margin:auto;
	float:left;
}
.SmallImageContentButtonContainer
{
	height:100%;
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
	cursor:pointer;
}
.SmallImageBoxWrapper
{
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
	float:left;
}
.EmptyMargin
{
	height:5%;
	width:100%;
	display:block;

}
#moreContent:hover
{
	cursor:pointer;
}

.smallImageRightButton
{
	width:100%;
	height:100%;
	background: url("/images/btn_small_gallery_right.png") center no-repeat;
	cursor:pointer;
}
.smallImageRightButton:hover
{
	background: url("/images/btn_small_gallery_right_over.png") center no-repeat;
}
.smallImageLeftButton
{
	width:100%;
	height:100%;
	background: url("/images/btn_small_gallery_left.png") center no-repeat;
	cursor:pointer;
}
.smallImageLeftButton:hover
{
	background: url("/images/btn_small_gallery_left_over.png") center no-repeat;
}
.mainImage
{
	width:100%;
	height:100%;
	background: url('/images/image1.jpg') no-repeat center center fixed;
	-webkit-background-size: 100% 100%;
	-moz-background-size: 100% 100%;
	-o-background-size: 100% 100%;
	background-size: 100% 100%;
	position:relative;
}


</style>
@endsection
@section('content')
<div class="fullWidth" style="background-color:#444444">
	<div class="container">
		<div class="sermonImageContainer" style="background-image: url('/images/main_img_03.jpg')">
		</div>
	</div>
</div>
<div class="fullWidth" style="background-color:#bf1e2e" id="sermonNavBar">
	<div class="sermonWrapper">
		<ul class="sermonNav">
			<li class="sermonNavLogo"><a href={!! url('/') !!} class="logo"><img src="/images/footer_logo.png" width="100%" height="61px"></a></li>
			<li style="margin-right:76px">갤러리</li>
		</ul>
	</div>
</div>
<div class="bodyWrapper" style="background-color:#f4f4f4">
	<div class="container">
		<a name="Before2015"></a>
		<div class="fullwidth" style="height:90px; background-color:#f4f4f4">
		</div>
		<div class="fullWidth" style="background-color:#f4f4f4; min-height:966px">
			<div class="container">
				<div class="fullWidth">
					<font class="font36" color="#bf1e2e" style="font-weight:bold">갤러리</font>
					@if (Auth::check() && (Auth::user()->level == 10 || Auth::user()->level == 0))
						<a href={{ action('GalleryController@addGallery') }}><button class="btn btn-default">추가</button></a>
					@endif
				</div>
				<div class="GalleryContainer">
					<div class="GalleryHeaderContainer">
						<div class="GalleryHeader GalleryHeaderClick" id="PrayAndSermonHeader">
							<a class="aHeader">예배설교</a>
						</div>
						<div class="GalleryHeader" id="RetreatHeader">
							<a class="aHeader">수련회</a>
						</div>
						<div class="GalleryHeader" id="EventHeader">
							<a class="aHeader">대회/기념식</a>
						</div>
						<div class="GalleryHeader" id="MissionHeader">
							<a class="aHeader">베트남 선교</a>
						</div>
						<div class="GalleryHeader" id="Before2016Header">
							<a class="aHeader">Before 2016</a>
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
										<Img src="{{$contentsPrayAndSermon[$count]->smallImage}}" width="100%" height="100%">
										@if (Auth::check() && (Auth::user()->level == 10 || Auth::user()->level == 0))
											<div data-id="{{$contentsPrayAndSermon[$count]->id}}" class="editContainer" >
												<img src="/images/edit-icon.png">
											</div>
											<div data-id="{{$contentsPrayAndSermon[$count]->id}}" class="closeContainer">
												&times;
											</div>
										@endif
									</div>
									<div class="GalleryImageBody">
										{!! $contentsPrayAndSermon[$count]->title !!}
									</div>
									<div class="GalleryImageTail">
										{!! $contentsPrayAndSermon[$count]->header !!} | {!! $contentsPrayAndSermon[$count]->created_at->year !!}.{!! str_pad($contentsPrayAndSermon[$count]->created_at->month, 2, 0, STR_PAD_LEFT)!!}.{!!str_pad($contentsPrayAndSermon[$count]->created_at->day, 2, 0, STR_PAD_LEFT)!!}
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
										<Img src="{{$contentsPrayAndSermon[$count]->smallImage}}" width="100%" height="100%">
										@if (Auth::check() && (Auth::user()->level == 10 || Auth::user()->level == 0))
											<div data-id="{{$contentsPrayAndSermon[$count]->id}}" class="editContainer" >
												<img src="/images/edit-icon.png">
											</div>
											<div data-id="{{$contentsPrayAndSermon[$count]->id}}" class="closeContainer">
												&times;
											</div>
										@endif
									</div>
									<div class="GalleryImageBody">
										{!! $contentsPrayAndSermon[$count]->title !!}
									</div>
									<div class="GalleryImageTail">
										{!! $contentsPrayAndSermon[$count]->header !!} | {!! $contentsPrayAndSermon[$count]->created_at->year !!}.{!! str_pad($contentsPrayAndSermon[$count]->created_at->month, 2, 0, STR_PAD_LEFT)!!}.{!!str_pad($contentsPrayAndSermon[$count]->created_at->day, 2, 0, STR_PAD_LEFT)!!}
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
										<Img src="{{$contentsRetreat[$count]->smallImage}}" width="100%" height="100%">
										@if (Auth::check() && (Auth::user()->level == 10 || Auth::user()->level == 0))
											<div data-id="{{ $contentsRetreat[$count]->id}}" class="editContainer" >
												<img src="/images/edit-icon.png">
											</div>
											<div data-id="{{ $contentsRetreat[$count]->id}}" class="closeContainer">
												&times;
											</div>
										@endif
									</div>
									<div class="GalleryImageBody">
										{!! $contentsRetreat[$count]->title !!}
									</div>
									<div class="GalleryImageTail">
										{!! $contentsRetreat[$count]->header !!} | {!! $contentsRetreat[$count]->created_at->year !!}.{!! str_pad($contentsRetreat[$count]->created_at->month, 2, 0, STR_PAD_LEFT)!!}.{!!str_pad($contentsRetreat[$count]->created_at->day, 2, 0, STR_PAD_LEFT)!!}
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
										<Img src="{{$contentsRetreat[$count]->smallImage}}" width="100%" height="100%">
										@if (Auth::check() && (Auth::user()->level == 10 || Auth::user()->level == 0))
											<div data-id="{{ $contentsRetreat[$count]->id}}" class="editContainer" >
												<img src="/images/edit-icon.png">
											</div>
											<div data-id="{{ $contentsRetreat[$count]->id}}" class="closeContainer">
												&times;
											</div>
										@endif
									</div>
									<div class="GalleryImageBody">
										{!! $contentsRetreat[$count]->title !!}
									</div>
									<div class="GalleryImageTail">
										{!! $contentsRetreat[$count]->header !!} | {!! $contentsRetreat[$count]->created_at->year !!}.{!! str_pad($contentsRetreat[$count]->created_at->month, 2, 0, STR_PAD_LEFT)!!}.{!!str_pad($contentsRetreat[$count]->created_at->day, 2, 0, STR_PAD_LEFT)!!}
									</div>
								</div>
								<?php $count++; ?>
							@endwhile
							@if($count == 10)
							<div class="GalleryVerticalMargin_Side">
								&nbsp;
							</div>
							@endif
							@if($contentsRetreat->count() > 5)
							</div>
							@endif


						</div>
						 <!-- 수련회 끝 -->
						 <!-- 이벤트  -->
						<div class="GalleryBodyContainer HideGalleryBlock" id="Event">
							<?php $count = 0;?>
							@if($count == 0)
								<div class="GalleryHorizontalMarginWithShadow">
									&nbsp;
								</div>
							@endif
							@if($contentsEvent->count() > 0)
							<div class="GalleryContentContainer">
							@endif

							@while($count < 5 && $contentsEvent->count() -$count > 0)
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
								<div class="GalleryImageContainer" id="Event{{ $contentsEvent[$count]->id}}">
									<div class="GalleryImage">
										<Img src="{{$contentsEvent[$count]->smallImage}}" width="100%" height="100%">
										@if (Auth::check() && (Auth::user()->level == 10 || Auth::user()->level == 0))
											<div data-id="{{ $contentsEvent[$count]->id}}" class="editContainer" >
												<img src="/images/edit-icon.png">
											</div>
											<div data-id="{{ $contentsEvent[$count]->id}}" class="closeContainer">
												&times;
											</div>
										@endif
									</div>
									<div class="GalleryImageBody">
										{!! $contentsEvent[$count]->title !!}
									</div>
									<div class="GalleryImageTail">
										{!! $contentsEvent[$count]->header !!} | {!! $contentsEvent[$count]->created_at->year !!}.{!! str_pad($contentsEvent[$count]->created_at->month, 2, 0, STR_PAD_LEFT)!!}.{!!str_pad($contentsEvent[$count]->created_at->day, 2, 0, STR_PAD_LEFT)!!}
									</div>
								</div>
								<?php $count++; ?>
							@endwhile
							@if($count == 5)
							<div class="GalleryVerticalMargin_Side">
								&nbsp;
							</div>
							@endif
							@if($contentsEvent->count() > 0)
							</div>
							@endif


							@if($contentsEvent->count() > 5)
							<div class="GalleryContentContainer">
							@endif

							@while($count < 10 && $contentsEvent->count() - $count > 0)

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
								<div class="GalleryImageContainer" id="Event{{ $contentsEvent[$count]->id}}">
									<div class="GalleryImage">
										<Img src="{{$contentsEvent[$count]->smallImage}}" width="100%" height="100%">
										@if (Auth::check() && (Auth::user()->level == 10 || Auth::user()->level == 0))
											<div data-id="{{ $contentsEvent[$count]->id}}" class="editContainer" >
												<img src="/images/edit-icon.png">
											</div>
											<div data-id="{{ $contentsEvent[$count]->id}}" class="closeContainer">
												&times;
											</div>
										@endif
									</div>
									<div class="GalleryImageBody">
										{!! $contentsEvent[$count]->title !!}
									</div>
									<div class="GalleryImageTail">
										{!! $contentsEvent[$count]->header !!} | {!! $contentsEvent[$count]->created_at->year !!}.{!! str_pad($contentsEvent[$count]->created_at->month, 2, 0, STR_PAD_LEFT)!!}.{!!str_pad($contentsEvent[$count]->created_at->day, 2, 0, STR_PAD_LEFT)!!}
									</div>
								</div>
								<?php $count++; ?>
							@endwhile
							@if($count == 10)
							<div class="GalleryVerticalMargin_Side">
								&nbsp;
							</div>
							@endif
							@if($contentsEvent->count() > 5)
							</div>
							@endif


						</div>
						 <!-- 이벤트 끝 -->
						 <!--  선교 -->
						<div class="GalleryBodyContainer HideGalleryBlock" id="Mission">
							<?php $count = 0;?>
							@if($count == 0)
								<div class="GalleryHorizontalMarginWithShadow">
									&nbsp;
								</div>
							@endif
							@if($contentsMission->count() > 0)
							<div class="GalleryContentContainer">
							@endif

							@while($count < 5 && $contentsMission->count() -$count > 0)
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
								<div class="GalleryImageContainer" id="Mission{{ $contentsMission[$count]->id}}">
									<div class="GalleryImage">
										<Img src="{{$contentsMission[$count]->smallImage}}" width="100%" height="100%">
										@if (Auth::check() && (Auth::user()->level == 10 || Auth::user()->level == 0))
											<div data-id="{{ $contentsMission[$count]->id}}" class="editContainer" >
												<img src="/images/edit-icon.png">
											</div>
											<div data-id="{{ $contentsMission[$count]->id}}" class="closeContainer">
												&times;
											</div>
										@endif
									</div>
									<div class="GalleryImageBody">
										{!! $contentsMission[$count]->title !!}
									</div>
									<div class="GalleryImageTail">
										{!! $contentsMission[$count]->header !!} | {!! $contentsMission[$count]->created_at->year !!}.{!! str_pad($contentsMission[$count]->created_at->month, 2, 0, STR_PAD_LEFT)!!}.{!!str_pad($contentsMission[$count]->created_at->day, 2, 0, STR_PAD_LEFT)!!}
									</div>
								</div>
								<?php $count++; ?>
							@endwhile
							@if($count == 5)
							<div class="GalleryVerticalMargin_Side">
								&nbsp;
							</div>
							@endif
							@if($contentsMission->count() > 0)
							</div>
							@endif


							@if($contentsMission->count() > 5)
							<div class="GalleryContentContainer">
							@endif

							@while($count < 10 && $contentsMission->count() - $count > 0)

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
								<div class="GalleryImageContainer" id="Mission{{ $contentsMission[$count]->id}}">
									<div class="GalleryImage">
										<Img src="{{$contentsMission[$count]->smallImage}}" width="100%" height="100%">
										@if (Auth::check() && (Auth::user()->level == 10 || Auth::user()->level == 0))
											<div data-id="{{ $contentsMission[$count]->id}}" class="editContainer" >
												<img src="/images/edit-icon.png">
											</div>
											<div data-id="{{ $contentsMission[$count]->id}}" class="closeContainer">
												&times;
											</div>
										@endif
									</div>
									<div class="GalleryImageBody">
										{!! $contentsMission[$count]->title !!}
									</div>
									<div class="GalleryImageTail">
										{!! $contentsMission[$count]->header !!} | {!! $contentsMission[$count]->created_at->year !!}.{!! str_pad($contentsMission[$count]->created_at->month, 2, 0, STR_PAD_LEFT)!!}.{!!str_pad($contentsMission[$count]->created_at->day, 2, 0, STR_PAD_LEFT)!!}
									</div>
								</div>
								<?php $count++; ?>
							@endwhile
							@if($count == 10)
							<div class="GalleryVerticalMargin_Side">
								&nbsp;
							</div>
							@endif
							@if($contentsMission->count() > 5)
							</div>
							@endif
						</div>
						 <!-- 선교 끝 -->
						 <!-- before 2016 시작 -->
						 <div class="GalleryBodyContainer HideGalleryBlock" id="Before2016">
							<?php $count = 0;?>
							@if($count == 0)
								<div class="GalleryHorizontalMarginWithShadow">
									&nbsp;
								</div>
							@endif
							@if($contentsBefore2016->count() > 0)
							<div class="GalleryContentContainer">
							@endif

							@while($count < 5 && $contentsBefore2016->count() -$count > 0)
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
								<div class="GalleryImageContainer" id="Before2016{{ $contentsBefore2016[$count]->id}}">
									<div class="GalleryImage">
										<Img src="{{$contentsBefore2016[$count]->smallImage}}" width="100%" height="100%">
										@if (Auth::check() && (Auth::user()->level == 10 || Auth::user()->level == 0))
											<div data-id="{{ $contentsBefore2016[$count]->id}}" class="editContainer" >
												<img src="/images/edit-icon.png">
											</div>
											<div data-id="{{ $contentsBefore2016[$count]->id}}" class="closeContainer">
												&times;
											</div>
										@endif
									</div>
									<div class="GalleryImageBody">
										{!! $contentsBefore2016[$count]->title !!}
									</div>
									<div class="GalleryImageTail">
										{!! $contentsBefore2016[$count]->header !!} | {!! $contentsBefore2016[$count]->created_at->year !!}.{!! str_pad($contentsBefore2016[$count]->created_at->month, 2, 0, STR_PAD_LEFT)!!}.{!!str_pad($contentsBefore2016[$count]->created_at->day, 2, 0, STR_PAD_LEFT)!!}
									</div>
								</div>
								<?php $count++; ?>
							@endwhile
							@if($count == 5)
							<div class="GalleryVerticalMargin_Side">
								&nbsp;
							</div>
							@endif
							@if($contentsBefore2016->count() > 0)
							</div>
							@endif


							@if($contentsBefore2016->count() > 5)
							<div class="GalleryContentContainer">
							@endif

							@while($count < 10 && $contentsBefore2016->count() - $count > 0)

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
								<div class="GalleryImageContainer" id="Before2016{{ $contentsBefore2016[$count]->id}}">
									<div class="GalleryImage">
										<Img src="{{$contentsBefore2016[$count]->smallImage}}" width="100%" height="100%">
										@if (Auth::check() && (Auth::user()->level == 10 || Auth::user()->level == 0))
											<div data-id="{{ $contentsBefore2016[$count]->id}}" class="editContainer" >
												<img src="/images/edit-icon.png">
											</div>
											<div data-id="{{ $contentsBefore2016[$count]->id}}" class="closeContainer">
												&times;
											</div>
										@endif
									</div>
									<div class="GalleryImageBody">
										{!! $contentsBefore2016[$count]->title !!}
									</div>
									<div class="GalleryImageTail">
										{!! $contentsBefore2016[$count]->header !!} | {!! $contentsBefore2016[$count]->created_at->year !!}.{!! str_pad($contentsBefore2016[$count]->created_at->month, 2, 0, STR_PAD_LEFT)!!}.{!!str_pad($contentsBefore2016[$count]->created_at->day, 2, 0, STR_PAD_LEFT)!!}
									</div>
								</div>
								<?php $count++; ?>
							@endwhile
							@if($count == 10)
							<div class="GalleryVerticalMargin_Side">
								&nbsp;
							</div>
							@endif
							@if($contentsBefore2016->count() > 5)
							</div>
							@endif


						</div>
						 <!-- before 2016 끝 -->
					</div>
				</div>
				<div style="width:100%; height:30px; clear:both;">
				&nbsp;
				</div>
				<!-- more contents -->
				<div id="moreContent">
					펼쳐보기<img id="moreContentArrow" src="/images/arrow_bottom.png" width="10px" height="10px" style="margin-left:5px">
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
	</div>
</div>
@endsection
@section('script')
<script type="text/javascript" src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
<script type="text/javascript" src="js/myScript.js"></script>
<script type="text/javascript" src="js/galleryScript.js"></script>
<script>
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
		else if($('#Mission').hasClass('ViewGalleryBlock'))
		{
			$id = 'Mission';
			$count = $pageCountMission;
		}
		else if($('#Event').hasClass('ViewGalleryBlock'))
		{
			$id = 'Event';
			$count = $pageCountEvent;
		}
		else if($('#Before2016').hasClass('ViewGalleryBlock'))
		{
			$id = 'Before2016';
			$count = $pageCountEvent;
		}
		$.ajax({
			url:'/gallery/moreContent' + $id,
			data: {page : $count},
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
					$content += '<div class="GalleryImageContainer" id="' + $id + data.contents[$count].id + '">' +
									'<div class="GalleryImage">';
					$content += "<img src='" + data.contents[$count].smallimage + "' width='100%' height='100%'>";

					@if (Auth::check() && (Auth::user()->level == 10 || Auth::user()->level == 0))
						$content += '<div data-id="' + data.contents[$count].id +  '" class="editContainer" >' +
						'<img src="/images/edit-icon.png">' +
						'</div>' +
						'<div data-id="' + data.contents[$count].id + '" class="closeContainer">' +
						'&times;' +
						'</div>' +
					@endif

					$content += '</div>';
					$content += '<div class="GalleryImageBody">' + data.contents[$count].body + '</div>';
					$content += '<div class="GalleryImageTail">' + data.contents[$count].header + ' | ' +
								data.contents[$count].created_at.split('-').join('.') + '</div> </div>';
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
					$content += '<div class="GalleryImageContainer" id="' + $id + data.contents[$count].id + '"> <div class="GalleryImage">';
					$content += '<img src="' + data.contents[$count].smallimage + '" width="100%" height="100%">';

					@if (Auth::check() && (Auth::user()->level == 10 || Auth::user()->level == 0))
						$content += '<div data-id="' + data.contents[$count].id +  '" class="editContainer" >' +
						'<img src="/images/edit-icon.png">' +
						'</div>' +
						'<div data-id="' + data.contents[$count].id + '" class="closeContainer">' +
						'&times;' +
						'</div>' +
					@endif

					$content += '</div>';
					$content += '<div class="GalleryImageBody">' + data.contents[$count].body + '</div>';
					$content += '<div class="GalleryImageTail">';
					$content += data.contents[$count].header + " | " + data.contents[$count].created_at.split('-').join('.') ;
					$content += '</div> </div>';
					$count++;
				}
				if(data.count > 5)
					$content += '</div>';
				if($('#PrayAndSermon').hasClass('ViewGalleryBlock'))
				{
					document.getElementById('PrayAndSermon').innerHTML += $content;
					$pageCountPrayAndSermon++;
					console.log($pageCountPrayAndSermon);
				}
				else if($('#Retreat').hasClass('ViewGalleryBlock'))
				{
					document.getElementById('Retreat').innerHTML += $content;
					$pageCountRetreat++;
				}
				else if($('#Mission').hasClass('ViewGalleryBlock'))
				{
					document.getElementById('Retreat').Mission += $content;
					$pageCountMission++;
				}
				else if($('#Event').hasClass('ViewGalleryBlock'))
				{
					document.getElementById('Event').innerHTML += $content;
					$pageCountEvent++;
				}
				else if($('#Before2016').hasClass('ViewGalleryBlock'))
				{
					document.getElementById('Before2016').innerHTML += $content;
					$pageCountEvent++;
				}
			}
		})
	});
</script>
@endsection
