/**
 * 
 */
$(window).scroll(function(){
	var scollHeight = $(window).scrollTop();
	if(scollHeight > 632)
	{
		if(!$("#sermonNavBar").hasClass("fixedNavBar"))
		{
			$("#sermonNavBar").addClass("fixedNavBar")
		}
	}
	else
	{
		if($("#sermonNavBar").hasClass("fixedNavBar"))
		{
			$("#sermonNavBar").removeClass("fixedNavBar")
		}
	}
});
