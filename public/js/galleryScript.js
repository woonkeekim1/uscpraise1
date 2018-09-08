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
	$(document).on('click', '.aHeader', function(data){
		var parentDiv = $(this).closest('div');
		$('.GalleryHeader').removeClass('GalleryHeaderClick');
		parentDiv.addClass('GalleryHeaderClick');

		$('.GalleryBodyContainer').addClass("HideGalleryBlock");
		$('.GalleryBodyContainer').removeClass("ViewGalleryBlock");
		var header = parentDiv.attr("id").substring(0, parentDiv.attr("id").length-6);
		$("#" + header).addClass("ViewGalleryBlock");
		$('.GalleryBodyContainer').hide();
		$("#" + header).show();
	});

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
	$pageCountMission = 1;
	$pageCountEvent = 1;
	

	

	
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
					$html += '<div class="CloseButton"></div>';
					$html += '</div>';
					$html += '<div class="ImageContentContainer">';
					if(data.before == null)
					{
						$html += '<div class="ImageContentButtonContainer">';
					}
					else
					{
						$html += '<div class="ImageContentButtonContainer">';
						$html += '<div class="smallImageLeftButton" id="viewBigNextImagePrayAndSermon' + data.before.id  +'"></div>';
					}
					$html += '</div>';
					$html += '<div class="ImageContent">' +
						'<div class="mainImage" style="background-image:url(\'' + data.current.image + '\')">' +
						'<div class="ImageBodyContainer">' +
						'<div class="ImageBody">' + data.current.body +'</div>' +
						'</div>' + 
						'</div></div>';
					if(data.after == null)
						$html += '<div class="ImageContentButtonContainer">';
					else
					{
						$html += '<div class="ImageContentButtonContainer">';
						$html += '<div class="smallImageRightButton" id="viewBigNextImagePrayAndSermon' + data.after.id  +'"></div>';
					}
					$html += '</div>';
					$html += '</div>';
					$html += '<div class ="EmptyMargin"> &nbsp; </div>';
					$html += '<div class="ImageWrapper">';
					$html += '<div class ="SmallImageContentButtonContainer" id="viewSmallNextImagePrayAndSermon' + eval(data.contents[0].id+1) + '">';
					if(data.maxYN == 'N')
					{
						$html += '<div class="smallImageLeftButton"></div>';
					}
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
						$html += '<img src="' + data.contents[$count].smallimage + '" width="100%" height="100%" id="viewBigNextImagePrayAndSermon' + data.contents[$count].id + '">';
						$html += '</div></div>';
						$count++;
					}
					$html += '<div class="SmallImageBoxFiller" style="width:3%"> </div>';

					$html += '</div>';
					$html += '</div>';
					$html += '<div class ="SmallImageContentButtonContainer" id="viewSmallNextImagePrayAndSermon' + eval(data.contents[data.count-1].id-1) + '">';
					if(data.minYN == 'N')
					{
						$html += '<div class="smallImageRightButton"></div>';
					}
					$html += '</div>';
					$html += ' </div> </div>';

					document.getElementById('showImage').innerHTML = $html;
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
					$html += '<div class="CloseButton"></div>';
					$html += '</div>';
					$html += '<div class="ImageContentContainer">';
					if(data.before == null)
					{
						$html += '<div class="ImageContentButtonContainer">';
					}
					else
					{
						$html += '<div class="ImageContentButtonContainer">';
						$html += '<div class="smallImageLeftButton" id="viewBigNextImageRetreat' + data.before.id  +'"></div>';
					}
					$html += '</div>';
					$html += '<div class="ImageContent">' +
						'<div class="mainImage" style="background-image:url(\'' + data.current.image + '\')">' +
						'<div class="ImageBodyContainer">' +
						'<div class="ImageBody">' + data.current.body +'</div>' +
						'</div>' + 
						'</div></div>';
					if(data.after == null)
						$html += '<div class="ImageContentButtonContainer">';
					else
					{
						$html += '<div class="ImageContentButtonContainer">';
						$html += '<div class="smallImageRightButton" id="viewBigNextImageRetreat' + data.after.id  +'"></div>';
					}
					$html += '</div>';
					$html += '</div>';
					$html += '<div class ="EmptyMargin"> &nbsp; </div>';
					$html += '<div class="ImageWrapper">';
					$html += '<div class ="SmallImageContentButtonContainer" id="viewSmallNextImageRetreat' + eval(data.contents[0].id+1) + '">';
					if(data.maxYN == 'N')
					{
						$html += '<div class="smallImageLeftButton"></div>';
					}
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
						$html += '<img src="' + data.contents[$count].smallimage + '" width="100%" height="100%" id="viewBigNextImageRetreat' + data.contents[$count].id + '">';
						$html += '</div></div>';
						$count++;
					}
					$html += '<div class="SmallImageBoxFiller" style="width:3%"> </div>';

					$html += '</div>';
					$html += '</div>';
					$html += '<div class ="SmallImageContentButtonContainer" id="viewSmallNextImageRetreat' + eval(data.contents[data.count-1].id-1) + '">';
					if(data.minYN == 'N')
					{
						$html += '<div class="smallImageRightButton"></div>';
					}
					$html += '</div>';
					$html += ' </div> </div>';

					document.getElementById('showImage').innerHTML = $html;
					document.getElementById("showImage").style.display = "block";
					document.getElementById("viewImage").style.display = "block";
					}});
		
		}
			
		});

$(document).on('click',  "[id^=Mission]", function(){
		var $listPage = $(this).prop('id');
		var $ImageID = $listPage.substring(7, $listPage.length);
		$ImageID = parseInt($ImageID);
		if(!isNaN($ImageID) && typeof($ImageID) === 'number')
		{
			$.ajax({
				url:'/gallery/ContentMission',
				data: {id : $ImageID},
				type: "GET",
				cache: true,
				jsonp:false,
				dataType: 'json',
				success: function(data){
					//retrieve data
					$html = '<div class ="ImageContainer">';
					$html += '<div class="CloseButtonContainer">';
					$html += '<div class="CloseButton"></div>';
					$html += '</div>';
					$html += '<div class="ImageContentContainer">';
					if(data.before == null)
					{
						$html += '<div class="ImageContentButtonContainer">';
					}
					else
					{
						$html += '<div class="ImageContentButtonContainer">';
						$html += '<div class="smallImageLeftButton" id="viewBigNextImageMission' + data.before.id  +'"></div>';
					}
					$html += '</div>';
					$html += '<div class="ImageContent">' +
						'<div class="mainImage" style="background-image:url(\'' + data.current.image + '\')">' +
						'<div class="ImageBodyContainer">' +
						'<div class="ImageBody">' + data.current.body +'</div>' +
						'</div>' + 
						'</div></div>';
					if(data.after == null)
						$html += '<div class="ImageContentButtonContainer">';
					else
					{
						$html += '<div class="ImageContentButtonContainer">';
						$html += '<div class="smallImageRightButton" id="viewBigNextImageMission' + data.after.id  +'"></div>';
					}
					$html += '</div>';
					$html += '</div>';
					$html += '<div class ="EmptyMargin"> &nbsp; </div>';
					$html += '<div class="ImageWrapper">';
					$html += '<div class ="SmallImageContentButtonContainer" id="viewSmallNextImageMission' + eval(data.contents[0].id+1) + '">';
					if(data.maxYN == 'N')
					{
						$html += '<div class="smallImageLeftButton"></div>';
					}
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
						$html += '<img src="' + data.contents[$count].smallimage + '" width="100%" height="100%" id="viewBigNextImageMission' + data.contents[$count].id + '">';
						$html += '</div></div>';
						$count++;
					}
					$html += '<div class="SmallImageBoxFiller" style="width:3%"> </div>';

					$html += '</div>';
					$html += '</div>';
					$html += '<div class ="SmallImageContentButtonContainer" id="viewSmallNextImageMission' + eval(data.contents[data.count-1].id-1) + '">';
					if(data.minYN == 'N')
					{
						$html += '<div class="smallImageRightButton"></div>';
					}
					$html += '</div>';
					$html += ' </div> </div>';

					document.getElementById('showImage').innerHTML = $html;
					document.getElementById("showImage").style.display = "block";
					document.getElementById("viewImage").style.display = "block";
			}});
			
		}
	});

$(document).on('click',  "[id^=Event]", function(){
		var $listPage = $(this).prop('id');
		var $ImageID = $listPage.substring(5, $listPage.length);
		$ImageID = parseInt($ImageID);
		if(!isNaN($ImageID) && typeof($ImageID) === 'number')
		{
			$.ajax({
				url:'/gallery/ContentEvent',
				data: {id : $ImageID},
				type: "GET",
				cache: true,
				jsonp:false,
				dataType: 'json',
				success: function(data){
					//retrieve data
					$html = '<div class ="ImageContainer">';
					$html += '<div class="CloseButtonContainer">';
					$html += '<div class="CloseButton"></div>';
					$html += '</div>';
					$html += '<div class="ImageContentContainer">';
					if(data.before == null)
					{
						$html += '<div class="ImageContentButtonContainer">';
					}
					else
					{
						$html += '<div class="ImageContentButtonContainer">';
						$html += '<div class="smallImageLeftButton" id="viewBigNextImageEvent' + data.before.id  +'"></div>';
					}
					$html += '</div>';
					$html += '<div class="ImageContent">' +
						'<div class="mainImage" style="background-image:url(\'' + data.current.image + '\')">' +
						'<div class="ImageBodyContainer">' +
						'<div class="ImageBody">' + data.current.body +'</div>' +
						'</div>' + 
						'</div></div>';
					if(data.after == null)
						$html += '<div class="ImageContentButtonContainer">';
					else
					{
						$html += '<div class="ImageContentButtonContainer">';
						$html += '<div class="smallImageRightButton" id="viewBigNextImageEvent' + data.after.id  +'"></div>';
					}
					$html += '</div>';
					$html += '</div>';
					$html += '<div class ="EmptyMargin"> &nbsp; </div>';
					$html += '<div class="ImageWrapper">';
					$html += '<div class ="SmallImageContentButtonContainer" id="viewSmallNextImageEvent' + eval(data.contents[0].id+1) + '">';
					if(data.maxYN == 'N')
					{
						$html += '<div class="smallImageLeftButton"></div>';
					}
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
						$html += '<img src="' + data.contents[$count].smallimage + '" width="100%" height="100%" id="viewBigNextImageEvent' + data.contents[$count].id + '">';
						$html += '</div></div>';
						$count++;
					}
					$html += '<div class="SmallImageBoxFiller" style="width:3%"> </div>';

					$html += '</div>';
					$html += '</div>';
					$html += '<div class ="SmallImageContentButtonContainer" id="viewSmallNextImageEvent' + eval(data.contents[data.count-1].id-1) + '">';
					if(data.minYN == 'N')
					{
						$html += '<div class="smallImageRightButton"></div>';
					}
					$html += '</div>';
					$html += ' </div> </div>';

					document.getElementById('showImage').innerHTML = $html;
					document.getElementById("showImage").style.display = "block";
					document.getElementById("viewImage").style.display = "block";
					}});
			
		}
	});

$(document).on('click',  "[id^=Before2016]", function(){
		var $listPage = $(this).prop('id');
		var $ImageID = $listPage.substring(5, $listPage.length);
		$ImageID = parseInt($ImageID);
		if(!isNaN($ImageID) && typeof($ImageID) === 'number')
		{
			$.ajax({
				url:'/gallery/ContentBefore2016',
				data: {id : $ImageID},
				type: "GET",
				cache: true,
				jsonp:false,
				dataType: 'json',
				success: function(data){
					//retrieve data
					$html = '<div class ="ImageContainer">';
					$html += '<div class="CloseButtonContainer">';
					$html += '<div class="CloseButton"></div>';
					$html += '</div>';
					$html += '<div class="ImageContentContainer">';
					if(data.before == null)
					{
						$html += '<div class="ImageContentButtonContainer">';
					}
					else
					{
						$html += '<div class="ImageContentButtonContainer">';
						$html += '<div class="smallImageLeftButton" id="viewBigNextImageBefore2016' + data.before.id  +'"></div>';
					}
					$html += '</div>';
					$html += '<div class="ImageContent">' +
						'<div class="mainImage" style="background-image:url(\'' + data.current.image + '\')">' +
						'<div class="ImageBodyContainer">' +
						'<div class="ImageBody">' + data.current.body +'</div>' +
						'</div>' + 
						'</div></div>';
					if(data.after == null)
						$html += '<div class="ImageContentButtonContainer">';
					else
					{
						$html += '<div class="ImageContentButtonContainer">';
						$html += '<div class="smallImageRightButton" id="viewBigNextImageBefore2016' + data.after.id  +'"></div>';
					}
					$html += '</div>';
					$html += '</div>';
					$html += '<div class ="EmptyMargin"> &nbsp; </div>';
					$html += '<div class="ImageWrapper">';
					$html += '<div class ="SmallImageContentButtonContainer" id="viewSmallNextImageBefore2016' + eval(data.contents[0].id+1) + '">';
					if(data.maxYN == 'N')
					{
						$html += '<div class="smallImageLeftButton"></div>';
					}
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
						$html += '<img src="' + data.contents[$count].smallimage + '" width="100%" height="100%" id="viewBigNextImageBefore2016' + data.contents[$count].id + '">';
						$html += '</div></div>';
						$count++;
					}
					$html += '<div class="SmallImageBoxFiller" style="width:3%"> </div>';

					$html += '</div>';
					$html += '</div>';
					$html += '<div class ="SmallImageContentButtonContainer" id="viewSmallNextImageBefore2016' + eval(data.contents[data.count-1].id-1) + '">';
					if(data.minYN == 'N')
					{
						$html += '<div class="smallImageRightButton"></div>';
					}
					$html += '</div>';
					$html += ' </div> </div>';

					document.getElementById('showImage').innerHTML = $html;
					document.getElementById("showImage").style.display = "block";
					document.getElementById("viewImage").style.display = "block";
					}});
			
		}
	});

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
	else if($parsingHeader.indexOf('Mission') > -1)
	{
		$header = 'Mission';
		$id = $parsingHeader.substring(7, $parsingHeader.length);
	}
	else if($parsingHeader.indexOf('Event') > -1)
	{
		$header = 'Event';
		$id = $parsingHeader.substring(5, $parsingHeader.length);
	}
	else if($parsingHeader.indexOf('Before2016') > -1)
	{
		$header = 'Before2016';
		$id = $parsingHeader.substring(10, $parsingHeader.length);
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
				$html += '<div class="CloseButton"></div>';
				$html += '</div>';
				$html += '<div class="ImageContentContainer">';
				if(data.before == null)
				{
					$html += '<div class="ImageContentButtonContainer">';
				}
				else
				{
					$html += '<div class="ImageContentButtonContainer">';
					$html += '<div class="smallImageLeftButton" id="viewBigNextImage' + $header + data.before.id  + '"></div>';
				}
				$html += '</div>';
				$html += '<div class="ImageContent">' +
				'<div class="mainImage" style="background-image:url(\'' + data.current.image + '\')">' +
				'<div class="ImageBodyContainer">' +
				'<div class="ImageBody">' + data.current.body +'</div>' +
				'</div>' + 
				'</div></div>';
				if(data.after == null)
					$html += '<div class="ImageContentButtonContainer">';
				else
				{
					$html += '<div class="ImageContentButtonContainer">';
					$html += '<div class="smallImageRightButton" id="viewBigNextImage' + $header + data.after.id  + '"></div>';
				}
				$html += '</div>';
				$html += '</div>';
				$html += '<div class ="EmptyMargin"> &nbsp; </div>';
				$html += '<div class="ImageWrapper">';
				$html += '<div class ="SmallImageContentButtonContainer" id="viewSmallNextImage' + $header + eval(data.contents[0].id+1) + '">';
				if(data.maxYN == 'N')
				{
					$html += '<div class="smallImageLeftButton"></div>';
				}
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
				$html += '<div class ="SmallImageContentButtonContainer" id="viewSmallNextImage' + $header + eval(data.contents[data.count-1].id-1) + '">'
				if(data.minYN == 'N')
				{ 
					$html += '<div class="smallImageRightButton"></div>';
				}
				$html +='</div>';
				$html += ' </div> </div>';

				document.getElementById('showImage').innerHTML = $html;
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
	else if($parsingHeader.indexOf('Event') > -1)
	{
		$header = 'Event';
		$id = $parsingHeader.substring(5, $parsingHeader.length);
	}
	else if($parsingHeader.indexOf('Mission') > -1)
	{
		$header = 'Mission';
		$id = $parsingHeader.substring(7, $parsingHeader.length);
	}
	else if($parsingHeader.indexOf('Before2016') > -1)
	{
		$header = 'Before2016';
		$id = $parsingHeader.substring(10, $parsingHeader.length);
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
				if(data.maxYN == 'N')
				{
					$html += '<div class="smallImageLeftButton"></div>';
				}
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
				if(data.minYN == 'N')
				{
					$html += '<div class="smallImageRightButton"></div>';
				}
				$html += '</div>';
				$('.ImageWrapper').html($html);
				
				document.getElementById("showImage").style.display = "block";
				document.getElementById("viewImage").style.display = "block";
				}});
});
$(document).on('click',  ".CloseButton", function(){
	document.getElementById("showImage").style.display = "none";
	document.getElementById("viewImage").style.display = "none";
});

function removeImage()
{
	document.getElementById("showImage").style.display = "none";
	document.getElementById("viewImage").style.display = "none";
}

$(document).on('click', ".editContainer", function(e, data) {
	//$id = e.currentTarget.data.id;
	//console.log($id);
	console.log(e.currentTarget.closest('div').dataset.id);
	id = e.currentTarget.closest('div').dataset.id;
	window.location.href = '/gallery/editGallery/' + id;
});

$(document).on('click', ".closeContainer", function(e, data) {
	id = e.currentTarget.closest('div').dataset.id;
	e.stopPropagation();
	$.ajax({
		url:'/gallery/removeGallery',
			data: {id : id},
			type: "GET",
			cache: true,
			jsonp:false,
			dataType: 'json',
			success: function(data){
				alert("Done");
				location.reload();
			}
	});
});