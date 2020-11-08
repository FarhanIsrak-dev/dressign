$(document).ready(function()
	{
	if($("body").height() < 652)
		{
		var height = $("body").height() - 100;	
		
		$("#tobe-usedin-mobile").css("height", height + "px");
		}
		
	$("body").on("click",".list-group-close",function()
		{
		$(".list-group").hide();
		});
	$("body").on("click","#reset-everything",function()
		{
		if($(".slider-container-show .canvas-image").length == 0)
			{
			return;
			}
			
		var r = confirm("You sure you want to reset");
		if(r == true)
			{
			$(".slider-container-show .canvas-image").remove();
			$(".cloth-title-description").html("");
			$(".single-size-append").remove();
			}
		});
	$("body").on("click",".slider-selected-child-action .selection-item",function()
		{
		var imgType = $(this).find("img").attr("image-type");
		var imgSrc = $(this).find("img").attr("src");
		var extraLeft = $(this).find("img").attr("extra-left");
		var extraTop = $(this).find("img").attr("extra-top");
		var pos = "#" + $(this).find("img").attr("style-position") + "-img";
		var imgId = $(this).find("img").attr("image_id");
		
		$(".main-spot-single").removeClass("main-spot-single-showhide");
		$(".maniqueue-selection").hide();
		$(pos).show();
		if(imgType == "shalwar" || imgType == "select-sleeve")
			{
			pos += " .slider-container-show, #back-img .slider-container-show";
			}
		else
			{
			pos += " .slider-container-show";
			}
		
		var styleThing = "";
		if((extraLeft != "" || extraLeft != 0) && (extraTop == "" || extraTop == 0))
			{
			styleThing = " style='left:"+extraLeft+"px'";
			}
		else if(extraLeft == "" && extraTop != "")
			{
			styleThing = " style='top:"+extraTop+"px'";
			}
		else if(extraLeft != "" && extraTop != "")
			{
			styleThing = " style='top:"+extraTop+"px;left:"+extraLeft+"px'";
			}
		
		if($("body").width() < 820)
			{
			$(".list-group").hide();
			}
		
		var imageTop = ""; 		
		var imageLeft = "";
		$(".selected-size-details").html();
		if($(".canvas-image-type-"+imgType).length > 0)
			{
			$(".canvas-image-type-"+imgType).find("img").attr('src',imgSrc);
			
			$(".canvas-image-type-"+imgType).css("left",(extraLeft != "") ? extraLeft + "px" : "");
			$(".canvas-image-type-"+imgType).css("top",(extraTop != "") ? extraTop + "px" : "");
			$("[name='"+imgType+"']").val(imgId);
			$(".single-size-append[spot-stamp-type='"+imgType+"']").remove();
			}
		else if(imgType != "beads" && imgType != "laces" && imgType != "buttons" && imgType != "tussels")
			{
			var newHtml = "<div class='canvas-image canvas-image-type-"+imgType+"' " + styleThing + "><input type='hidden' value='"+imgId+"' name='"+imgType+"' /><img src='"+imgSrc+"' /></div>";
			$(pos).append(newHtml)
			}
		});
	$("body").on("click","#show-right-ttols", function()
		{
		if($(".right.right-inthe-bottom").css("left") == "0px")
			{
			//$(".right.right-inthe-bottom").css("left","-215px");
			}
		else
			{
			//$(".right.right-inthe-bottom").css("left","0px");
			}
		});
	$("body").on("click",".spot-single", function(e)
		{
		if($(".selected-size-details img").length > 0)
			{
			var elm = $(this);
			var xPos = elm.position().left + 2;
			var yPos = elm.position().top - 2;	
			
			var imageHtml = '<div class="single-size-append" spot-stamp-type="'+$(this).attr("stamp-spot-for")+'" style="top:'+yPos+'px;left:'+xPos+'px">' +
							'	<img src="'+$(".selected-size-details img").attr("src")+'" />' +
							'</div>';
			
			$($(this).parents()[3]).find(".slider-container-show").append(imageHtml);
			}
		});
	$("#img1").on('load', function() 
		{
		$(".on-image-load").hide();
		});
	});