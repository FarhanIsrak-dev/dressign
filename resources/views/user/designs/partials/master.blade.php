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
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

    <!-- Compiled and minified JavaScript -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
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
  border: 1px solid #ccc;
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
  border: 2px solid #ccc;
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
}

</style>

</head>
<body>

	@yield('content')
    </p>
        <div class="clearfix"></div>
        <div class="col-xs-10 col-sm-4 col-md-4 col-lg-4">
            <button type="submit" class="btn btn-success"><strong>Submit</strong></button>

        </div>
    </form>
    
    <div class="clearfix"></div>

    <br /><br />
	</div>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script>

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