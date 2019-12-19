<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0" />


<title>Dressign</title>

<link href="https://fonts.googleapis.com/css?family=Belgrano" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">
<link href="{{asset('design/css/font-awesome.css')}}" rel="stylesheet" />
<link href="{{asset('design/css/font-awesome.min.css')}}" rel="stylesheet" />
<link href="{{asset('design/css/contactus.css')}}" rel="stylesheet" />
<link href="{{asset('design/css/style.css')}}" rel="stylesheet" />
<link href="{{asset('design/css/fonts.css')}}" rel="stylesheet" />
<link href="{{asset('design/css/animate.css')}}" rel="stylesheet" />
<link href="{{asset('design/css/jquery.fancybox.min.css')}}" rel="stylesheet" />
<link href="{{asset('design/css/bootstrap.min.css')}}" rel="stylesheet" />
<link href="{{asset('design/css/app-default.css')}}" rel="stylesheet" />
<link rel="stylesheet" href="{{asset('design/css/animate.min.css')}}" />
<link rel="stylesheet" href="{{asset('design/css/responsive.css')}}" />
<script src="{{asset('design/js/jquery.min.js')}}"></script>
<script src="{{asset('design/js/jquery.fancybox.min.js')}}"></script>
<script src="{{asset('design/js/script.js')}}"></script>
<script src="https://files.codepedia.info/files/uploads/iScripts/html2canvas.js"></script>
<script src="https://superal.github.io/canvas2image/canvas2image.js"></script>
<link href="{{asset('design/css/measureStyleSheet.css')}}" rel="stylesheet" type="text/css" />
<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<style type="text/css">

	.auto-style1 
		{
		width: 430px;
		margin: 15px 0px 0px 15px;
		}
	.auto-style2#img2 
		{
		float: right;
		width: 422px;
		margin-right: 7px;
		margin-top: 12px;
		}
	</style>
	<style>
* {box-sizing: border-box}
body {font-family: "Lato", sans-serif;}

/* Style the tab */
.tab {
  float: left;
  border: 1px solid #ccc;
  background-color: #f1f1f1;
  width: 10%;
  height: 100%;
}

/* Style the buttons inside the tab */
.tab button {
  display: block;
  background-color: inherit;
  color: black;
  padding: 22px 16px;
  width: 100%;
  border: none;
  outline: none;
  text-align: left;
  cursor: pointer;
  font-size: 17px;
}

/* Change background color of buttons on hover */
.tab button:hover {
  background-color: #ddd;
}

/* Create an active/current "tab button" class */
.tab button.active {
  background-color: #ccc;
}

/* Style the tab content */
.tabcontent {
  float: left;
  padding: 0px 10px;
  border: 1px solid #ccc;
  width: 30%;
  border-left: none;
  height: 600px;
  display: none;
}

/* Clear floats after the tab */
.clearfix::after {
  content: "";
  clear: both;
  display: table;
}
</style>
</head>
<body>

	@yield('content')
	



        
        <p>
        <br>
        <div class="form-group col-xs-10 col-sm-4 col-md-4 col-lg-4">
            <label for="">Ankle</label>
            <input type="number" class="form-control" name="ankle" placeholder="In Inch" required="">
        </div>
        <div class="form-group col-xs-10 col-sm-4 col-md-4 col-lg-4">
            <label for="">Arm Hole</label>
            <input type="number" class="form-control" name="armhole" placeholder="In Inch" required="">
        </div>
        <div class="form-group col-xs-10 col-sm-4 col-md-4 col-lg-4">
            <label for="">Around Head</label>
            <input type="number" class="form-control" name="aroundhead" placeholder="In Inch" required="">
        </div>
        <div class="form-group col-xs-10 col-sm-4 col-md-4 col-lg-4">
            <label for="">Full Body Kameez Length(Back)</label>
            <input type="number" class="form-control" name="fbklb" placeholder="In Inch" required="">
        </div>
        <div class="form-group col-xs-10 col-sm-4 col-md-4 col-lg-4">
            <label for="">Back Width</label>
            <input type="number" class="form-control" name="backwidth" placeholder="In Inch" required="">
        </div>
        <div class="form-group col-xs-10 col-sm-4 col-md-4 col-lg-4">
            <label for="">Bottom Length</label>
            <input type="number" class="form-control" name="bottomlength" placeholder="In Inch" required="">
        </div>
        <div class="form-group col-xs-10 col-sm-4 col-md-4 col-lg-4">
            <label for="">Bust</label>
            <input type="number" class="form-control" name="bust" placeholder="In Inch" required="">
        </div>
        <div class="form-group col-xs-10 col-sm-4 col-md-4 col-lg-4">
            <label for="">Elbow</label>
            <input type="number" class="form-control" name="elbow" placeholder="In Inch" required="">
        </div>
        <div class="form-group col-xs-10 col-sm-4 col-md-4 col-lg-4">
            <label for="">Front Chest</label>
            <input type="number" class="form-control" name="frontchest" placeholder="In Inch" required="">
        </div>
        <div class="form-group col-xs-10 col-sm-4 col-md-4 col-lg-4">
            <label for="">Full Body Kameez Length(Front)</label>
            <input type="number" class="form-control" name="fbklf" placeholder="In Inch" required="">
        </div>
        <div class="form-group col-xs-10 col-sm-4 col-md-4 col-lg-4">
            <label for="">Shoulder to Waist(Front)</label>
            <input type="number" class="form-control" name="swf" placeholder="In Inch" required="">
        </div>
        <div class="form-group col-xs-10 col-sm-4 col-md-4 col-lg-4">
            <label for="">Full Sleeves</label>
            <input type="number" class="form-control" name="fullsleeve" placeholder="In Inch" required="">
        </div>
        <div class="form-group col-xs-10 col-sm-4 col-md-4 col-lg-4">
            <label for="">Inside Leg</label>
            <input type="number" class="form-control" name="insideleg" placeholder="In Inch" required="">
        </div>
        <div class="form-group col-xs-10 col-sm-4 col-md-4 col-lg-4">
            <label for="">Hips</label>
            <input type="number" class="form-control" name="hip" placeholder="In Inch" required="">
        </div>
        <div class="form-group col-xs-10 col-sm-4 col-md-4 col-lg-4">
            <label for="">Mid Calf</label>
            <input type="number" class="form-control" name="midcalf" placeholder="In Inch" required="">
        </div>
        <div class="form-group col-xs-10 col-sm-4 col-md-4 col-lg-4">
            <label for="">Mid Thigh</label>
            <input type="number" class="form-control" name="midthigh" placeholder="In Inch" required="">
        </div>
        <div class="form-group col-xs-10 col-sm-4 col-md-4 col-lg-4">
            <label for="">Neck to Waist</label>
            <input type="number" class="form-control" name="nw" placeholder="In Inch" required="">
        </div>
        <div class="form-group col-xs-10 col-sm-4 col-md-4 col-lg-4">
            <label for="">Outside Leg</label>
            <input type="number" class="form-control" name="outleg" placeholder="In Inch" required="">
        </div>
        <div class="form-group col-xs-10 col-sm-4 col-md-4 col-lg-4">
            <label for="">Shoulder Size</label>
            <input type="number" class="form-control" name="shoulder" placeholder="In Inch" required="">
        </div>
        <div class="form-group col-xs-10 col-sm-4 col-md-4 col-lg-4">
            <label for="">Shoulder to Elbow</label>
            <input type="number" class="form-control" name="se" placeholder="In Inch" required="">
        </div>
        <div class="form-group col-xs-10 col-sm-4 col-md-4 col-lg-4">
            <label for="">Waist to Heap</label>
            <input type="number" class="form-control" name="wh" placeholder="In Inch" required="">
        </div>
        <div class="form-group col-xs-10 col-sm-4 col-md-4 col-lg-4">
            <label for="">Waist</label>
            <input type="number" class="form-control" name="waist" placeholder="In Inch" required="">
        </div>
        <div class="form-group col-xs-10 col-sm-4 col-md-4 col-lg-4">
            <label for="">Wrist</label>
            <input type="number" class="form-control" name="wrist" placeholder="In Inch" required="">
        </div>
        
    </p>
        
        <div class="clearfix"></div>
        <div class="col-xs-10 col-sm-4 col-md-4 col-lg-4">
            <button type="submit" class="btn btn-default" style="background-color: #9FCDE4"><strong>Submit</strong></button>

        </div>
    </form>
    
    <div class="clearfix"></div>

    <br /><br />
	</div>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script>
var myAjaxUrl = 'https://multife.pk/wp-admin/admin-ajax.php';
$(document).ready(function()
	{
	$("#login-designer-modal").submit(function(e)
		{
		e.preventDefault();
		
		$.ajax({
            type: 'POST',
            dataType: 'json',
            url: myAjaxUrl,
            data: { 
                'action': 'ajaxlogin', //calls wp_ajax_nopriv_ajaxlogin
                'username': $('#username').val(), 
                'password': $('#password').val(), 
                'security': $('#security').val() },
            success: function(data)
				{
				if(!data.loggedin)
					{
					$(".error-input").show();
					}
				else
					{
					$("[name='customer_id']").val(data.user_id);
					$.each(data.usr_measurement, function (index, value)
						{
						if(index == "id")
							{
							$("[name='measurement-id']").val(value);
							}
						else if (!$("[name='"+index+"']").is('select'))
							{
							$("[name='"+index+"']").val(value);
							}
						else
							{
							$("[name='"+index+"'] option[value='"+value+"']").attr('selected', 'selected');
							}
						});
					$("#login_form").hide();
					}
				}
			});
		});
	$(document).ajaxComplete(function() 
		{
		$(".loading-main-class").hide();
		});	
	$(document).ajaxStart(function() 
		{
		$(".loading-main-class").show();
		});	
	$('#login_form').addClass('in');$('#login_form').css('display','block');	});
function openCity(evt, cityName) {
  var i, tabcontent, tablinks;
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablinks");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active", "");
  }
  document.getElementById(cityName).style.display = "block";
  evt.currentTarget.className += " active";
}
</script>
</body>
</html>