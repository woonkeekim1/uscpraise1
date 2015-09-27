<style>
.midNav
{
	width:1170px;
	height:135px;
	position:relative;
	background-color:green;
}
.test
{
	width:100%;
	height:100%;
	background-color:pink;
}
.navFix
{
	position:fixed;
	top:0px;
}
</style>
@extends('app')
@section('content')
Description about our church
<div class="test">
</div>

<div class="midNav">
	<a href="#test">test1</a>
	<a href="#test2">test2</a>

</div>
<a name="test">
</a>

<div class="test" style="margin-top:135px">
THis is test 1

</div>

<a name="test2">
</a>
<div class="test" style="margin-top:135px">
this is test 2
</div>
@endsection
@section('script')
<script>
$(function(){
	$(window).scroll(function(){
		var top = $(document).scrollTop()
		if(top > 770)
		{
			if(!$('.midNav').hasClass('navFix'))
			{
				$('.midNav').addClass('navFix');
			}
		}
		else
		{
			if($('.midNav').hasClass('navFix'))
			{
				$('.midNav').removeClass('navFix');
			}
		}
	}).triggerHandler("scroll");
});

</script>
@endsection