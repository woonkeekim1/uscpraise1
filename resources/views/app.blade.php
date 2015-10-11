<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" 
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="ko"  xml:lang="ko">
<meta http-equiv="Content-Type" Content="text/html; charset=utf-8" />
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="css/main.css">
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
		<li class="logo"><a href={!! url('/') !!} class="logo"><img src="images/logo.png" width="100%" height="61px"></a></li>
		<li style="width:82px"><a href={!! action('AboutController@aboutUs') !!}>교회소개<img src="images/btn_category_arrow_off.png" style="padding-left:11px;"></img></a>
			<ul>
				<li style="width:113px"><a href={!! url('/about#churchVision') !!}>교회비전</a></li>
				<li style="width:113px"><a href={!! url('/about#aboutPastor') !!}>교역자 소개</a></li>
				<li style="width:113px"><a href={!! url('/about#churchHistory') !!}>교회현역</a></li>
				<li style="width:113px"><a href={!! url('/about#leaders') !!}>섬기는 사람들</a></li>
				<li style="width:113px"><a href={!! url('/about#churchHistory') !!}>공지사항</a></li>
			</ul>
		</li>
		<li style="width:70px"><a href={!! action('GalleryController@index') !!}>겔러리<img src="images/btn_category_arrow_off.png" style="padding-left:11px;"></img></a>
			<ul>
				<li><a href="#" onMouseOver="hoverNav()">갤러리1</a></li>
				<li><a href="#">갤러리 2</a></li>
			</ul>
		</li>
		<li style="width:51px"><a href={!! action('SermonController@index') !!}>설교<img src="images/btn_category_arrow_off.png" style="padding-left:11px;"></img></a>
			<ul>
				<li><a href={!! url('/sermon#sundayPray') !!}>주일 예배</a></li>
				<li><a href={!! url('/sermon#morningPray') !!}>아침 예배</a></li>
				<li><a href={!! url('/sermon#fridayPray') !!}>금요 예배</a></li>
			</ul>
		</li>
		<li><a href={!! action('AboutController@contactUs') !!}>문의</a></li>
		<li class="facebook"><a href="#"><img src="images/facebook_logo.png"></a></li>
		<li style="margin-right:0px;width:67px;"><a href="#" style="font-weight:bold;font-size:14px;">English<img src="images/btn_category_arrow_off.png" style="padding-left:11px;"></img></a>
			<ul>
				<li><a href="#">Korean</a></li>
				<li><a href="#">Espenol</a></li>
			</ul>
		</li>
	</ul>
</div>
	@yield('content')

<div class="tail">
	<div class="tailContainer">
		<div class="tailInfo">
			<img class="tailLogo" src="images/footer_logo.png">
			<div class="tailContent">
				2015 power of Praise church &emsp;&emsp; Term of Use &nbsp;|&nbsp;  Privacy Policy  &nbsp;|&nbsp;  Sponsorship
			</div>
		</div>
		<div class="tailContact">
			<div class="tailContactHeader">
				Contact
			</div>
			<div class="tailContactPhone">
				(323) 998-3784
			</div>
			<div class="tailBody">
				University Religious Center<br>
				835 W. 34th St. Los Angeles, CA 90007
			</div>
		</div>
	</div>
</div>
</body>



<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
@yield('script') 
<script>


                var mainImageList = [];
                mainImageList[0] = "image1.jpg";
                mainImageList[1] = "image2.jpg";
                mainImageList[2] = "image3.jpg";
                mainImageList[3] = "image4.jpg";
                var curImag = 0;
                var myVal = setInterval(function(){changeMainImage()}, 3000);
                $(".ImgNextButton").click(function(){
                                $("#ImgCircle" + curImag).removeClass("ImgCircleSelected");
                                curImag = (curImag+1) % 4;
                                $("#ImgCircle" + curImag).addClass("ImgCircleSelected");
                                $(".ImageBody").css("background-image", "url(" +mainImageList[curImag] + ")");
								clearInterval(myVal);
								myVal = setInterval(function(){changeMainImage()}, 3000);
                               
                });
                $(".ImgPrevButton").click(function(){
                                $("#ImgCircle" + curImag).removeClass("ImgCircleSelected");
                                curImag = (curImag-1 + 4) % 4;
                                $("#ImgCircle" + curImag).addClass("ImgCircleSelected");
                                $(".ImageBody").css("background-image", "url(" +mainImageList[curImag] + ")");
								clearInterval(myVal);
								myVal = setInterval(function(){changeMainImage()}, 3000);
                               
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
</script>
</html>