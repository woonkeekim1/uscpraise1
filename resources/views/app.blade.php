<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" 
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="ko"  xml:lang="ko">
<meta http-equiv="Content-Type" Content="text/html; charset=utf-8" />
<!DOCTYPE html>
<html>
<head>
<meta http-equiv-"X-UA-Compatible" content="IE=edge"/>
<link rel="stylesheet" type="text/css" href="/css/main.css">
<link rel="shortcut icon" href="/images/favicon/ppc.png" / >
</head>
@yield('cssExtend')
<style>
body, html{
  width:100%;
  height:100%;
}
body{
    margin:0 !important;
    padding:0 !important;
    font-family: 'Nanum Gothic', sans-serif;
    font-size:18px;
}
.testcolor
{
	color:blue;
}
@yield('css')

</style>
</head>
<body>
<div class="wrapper">
	<ul class="nav">
		<li class="logo"><a href={!! url('/') !!} class="logo"><img src="/images/logo.png" width="238px" height="61px"></a></li>
		<li style="width:82px"><a href={!! action('AboutController@aboutUs') !!}  style="padding:0px">교회소개<img src="/images/btn_category_arrow_off.png" style="padding-left:11px;"></img></a>
			<ul>
				<li style="width:137px;"><a href={!! url('/about#churchVision') !!}>교회비전</a></li>
				<li style="width:137px"><a href={!! url('/about#aboutPastor') !!}>교역자 소개</a></li>
				<li style="width:137px"><a href={!! url('/about#churchHistory') !!}>교회연역</a></li>
				<li style="width:137px"><a href={!! url('/about#leaders') !!}>섬기는 사람들</a></li>
			</ul>
		</li>
		<li style="width:70px"><a href={!! action('GalleryController@index') !!}   style="padding:0px">갤러리</a>
		</li>
		<li style="width:51px"><a href={!! action('SermonController@index') !!}   style="padding:0px">설교<img src="/images/btn_category_arrow_off.png" style="padding-left:11px;"></img></a>
			<ul>
				<li><a href={!! url('/sermon#sundayPray') !!}>주일 예배</a></li>
				<li><a href={!! url('/sermon#morningPray') !!}>아침 예배</a></li>
				<li><a href={!! url('/sermon#fridayPray') !!}>금요 예배</a></li>
				<li><a href={!! url('/sermon#pastorStory') !!}>목회 이야기</a></li>
			</ul>
		</li>
		<li><a href={!! action('AboutController@contactUs') !!}   style="padding:0px">문의</a></li>
		<li class="facebook"><a href="https://www.facebook.com/USC-Power-of-Praise-Church-969479439781757/"   style="padding:0px"><img src="/images/facebook_logo.png"></a></li>
	</ul>
</div>
	@yield('content')

<div class="tail">
	<div class="tailContainer">
		<div class="tailInfo">
			<img class="tailLogo" src="/images/footer_logo.png">
			<div class="tailContent">
				ⓒ 2016 Power of Praise Church &emsp;&emsp; &nbsp;  <a style="color:white; text-decoration:none;" href={!! url('/privacyPolicy') !!}>Privacy Policy</a>  &nbsp;|&nbsp;  <div id="sponsorPopup" style="display:inline; cursor:pointer">Sponsorship</div>
			</div>
		</div>
		<div class="tailContact">
			<div class="tailContactHeader">
				Contact
			</div>
			<div class="tailContactPhone">
				(213) 239-3784
			</div>
			<div class="tailBody">
				2726 S. Vermont Ave. Unit E<br>
				Los Angeles, CA 90007
			</div>
		</div>
	</div>
</div>
<div class="popUpContainer">
	<div class="popUpWrapper">
		<div class="popUpcontentContainer">
			<div class="closeButtonContainer">
				<div class="closeButton">
				</div>
			</div>	
			<div class="popUp">
				<div class="popUpContent">
				</div>
			</div>
		</div>
	</div>
</div>
</body>



<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
@yield('script') 
<script>


                var mainImageList = [];
                mainImageList[0] = "/images/main_landing1.jpg";
                mainImageList[1] = "/images/main_landing2.jpg";
                //mainImageList[2] = "image3.jpg";
                //mainImageList[3] = "image4.jpg";
                var curImag = 0;
                
                var myVal = setInterval(function(){changeMainImage()}, 3000);
                $(".mainImageNextButton").click(function(){
                    curImag = (curImag+1) % mainImageList.length;
                    $('.mainImageContainer').css('background-image',"url(" +mainImageList[curImag] + ")");
                    //clearInterval(myVal);
					//myVal = setInterval(function(){changeMainImage()}, 3000);
                });
                $(".mainImagePrevButton").click(function(){
                    curImag = (curImag-1 + 4) % mainImageList.length	;
                    $('.mainImageContainer').css('background-image',"url(" +mainImageList[curImag] + ")");
					//clearInterval(myVal);
					//myVal = setInterval(function(){changeMainImage()}, 3000);
                               
                });
                

                function changeMainImage()
                {
                                $("#ImgCircle" + curImag).removeClass("ImgCircleSelected");
                                curImag = (curImag+1) % 4;
                                $("#ImgCircle" + curImag).addClass("ImgCircleSelected");
                                $(".ImageBody").css("background-image", "url(" +mainImageList[curImag] + ")");
								
                }
                
                function hoverNav()
                {
                    $(this).parent().parent().addClass(".testcolor");
                }

                $(document).on('click', '#sponsorPopup', function(){
                	$('.popUpContent').html('<img style="margin:auto;width:100%; height:100%" src="/images/PPC_popup.jpg">');
                	$('.popUpContainer').css('display', 'block');
                });
            	$(document).on('click', '.closeButton', function(){
            		$('.closeButton').parent().parent().parent().parent().css('display', 'none');
            		$('.popUpContent').html('');
            	});
            	$(document).on('click', '.popUpWrapper', function(){
            		$('.closeButton').parent().parent().parent().parent().css('display', 'none');
            		$('.popUpContent').html('');
            	});

</script>
</html>