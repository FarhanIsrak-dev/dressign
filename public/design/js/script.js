$(document).ready(function()
	{
	if($("body").height() < 652)
		{
		var height = $("body").height() - 100;	
		
		$("#tobe-usedin-mobile").css("height", height + "px");
		}
		
	$("#measurement-details").submit(function(e)
		{
		e.preventDefault();
		
		var formData = new FormData($("#measurement-details")[0]);
		$.ajax({
			url: window.location.origin + "/getChildImgs.php",
			type: "POST",
			data: formData,
			contentType: false,
			processData: false,
			success: function(data)
				{
				$("[name='measurement-id']").val(data);
				$(".close-measure").trigger("click");
				}
			});
		});
		
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
		
		$.ajax({
			url: window.location.origin + "/getChildImgs.php",
			type: "POST",
			data: { clothId:$(this).find("img").attr("image_id"), clothType:$(this).find("img").attr("image-type") },
			success: function(data)
				{
				$(".cloth-title-description .cloth-title-description-child").html($(data).filter(".get-custom-alltext").html());
				if($(data).hasClass("get-custom-allsizes"))
					{
					$("#size-form-modal .modal-body-data").html($(data).filter(".get-custom-allsizes").html());
					
					var appendSizeHTML = '#size-form-modal';
					$(appendSizeHTML).addClass("in");
					$(appendSizeHTML).css("display","block");
					}
				}
			});
		
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
	$("body").on("click",".slider_selection .selection-item",function()
		{
		var imgType = $(this).find("img").attr("image-type");
		var imgID = $(this).find("img").attr("image-id");
		$(".list-group").show();
		$.ajax({
			url: window.location.origin + "/getChildImgs.php",
			type: "POST",
			data: { catType:imgType, catId:imgID },
			success: function(data)
				{
				$(".slider-selected-child-action").html(data);
				}
			});
		});
	//$(".slider_selection .selection-item").eq(0).trigger("click");
	
	$("#get-all-products").click(function()
		{
		$(".list-group").show();
		$.ajax({
			url: window.location.origin + "/getChildImgs.php",
			type: "POST",
			data: { getProducts:"getProducts" },
			success: function(data)
				{
				$(".slider-selected-child-action").html(data);
				$(".slider-selected-child-action").show();
				}
			});
		});
	$("body").on("click","#add-product-tocart",function()
		{
		html2canvas($("#front-img"), {
            onrendered: function(canvas) 
				{
                var getImageBase64 = Canvas2Image.convertToPNG(canvas);
                
				sendCartData($(getImageBase64).attr("src"));
				}
			});
		});
	$("body").on("click",".close-measure",function()
		{
		$(".mask-measurement").hide();
		});
	$("body").on("click","#measurements-popup",function()
		{
		$(".mask-measurement").show();
		});
	$("body").on("click",".product-selection-item",function()
		{
		var pId = $(this).find("img").attr("product-id");
		$("[name='selected-product-id']").val(pId);
		$.ajax({
			url: window.location.origin + "/getChildImgs.php",
			type: "POST",
			data: { getProductItems:"getProductItems", productId:pId },
			success: function(data)
				{
				if($("#left-side-otheroptions-inner").length > 0)
					{
					$("#left-side-otheroptions-inner").html(data);
					}
				else
					{
					$(".left-side-options.slider_selection").append("<div id='left-side-otheroptions-inner'>" + data + "</div>");
					}
				}
			});
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
		
	$("body").on("click",".size-modal-close", function()
		{
		$("#size-form-modal").removeClass("in");
		$("#size-form-modal").css("display","none");
		});
	$("body").on("click","#show-right-help", function()
		{
		if($(".cloth-title-description.right-inthe-bottom").css("left") == "0px")
			{
			$(".cloth-title-description.right-inthe-bottom").css("left","-240px");
			}
		else
			{
			$(".cloth-title-description.right-inthe-bottom").css("left","0px");
			}
		});
	$("body").on("click",".tab.size-selection-item", function()
		{
		$(".selected-size-details").html($(this).html());
		$(".size-modal-close").trigger("click");
        
        var formData = new FormData($("#customer-designed-options")[0]);
        formData.append('stampClothId',$(this).find("img").attr("parent-image-id"));
        formData.append('stampClothType',$(this).find("img").attr("parent-image-type"));
        formData.append('getStampSpots',"");
        
        $.ajax({
            url: window.location.origin + "/getChildImgs.php",
            type: "POST",
            data: formData,
            contentType: false,
            processData: false,
            success: function(data)
                {
				var getHtml = $(data).filter(".main-spot-single").html();
				if(getHtml != "")
					{
					$("#front-img .slider-container-show .main-spot-single").addClass("main-spot-single-showhide");
					$("#front-img .slider-container-show .main-spot-single").html(getHtml);
					}
				else
					{
					$("#front-img .slider-container-show .main-spot-single").removeClass("main-spot-single-showhide");
					}
				}
            });
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
	
function sendCartData(getImageBase64)
	{
	var mId = $("[name='measurement-id']").val();
	var formData = new FormData($("#customer-designed-options")[0]);
	formData.append('addProductCart',"addProductCart");
	formData.append('imgBase64',getImageBase64);
	formData.append('addProductCart',"addProductCart");
	
	$.ajax({
		url: window.location.origin + "/getChildImgs.php",
		type: "POST",
		data: formData,
		contentType: false,
		processData: false,
		success: function(data)
			{
			window.location = data;
			}
		});
	}