<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from freakpixels.com/portfolio/brio/ by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 28 Nov 2014 06:53:29 GMT -->
<head>
  
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Tio-Learning</title>

	<meta name="description" content="">
	<meta name="author" content="Akshay Kumar">

	<!-- Bootstrap core CSS -->
	<link rel="stylesheet" href="assets/css/bootstrap/bootstrap.css" /> 
      <link rel="stylesheet" href="assets/css/app/timeline.css" />

	<!-- Calendar Styling  -->
    <link rel="stylesheet" href="assets/css/plugins/calendar/calendar.css" />
    
    <!-- Fonts  -->
    <link href='http://fonts.googleapis.com/css?family=Raleway:400,500,600,700,300' rel='stylesheet' type='text/css'>
    
    <!-- Base Styling  -->
    <link rel="stylesheet" href="assets/css/app/app.v1.css" />

	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <script type="text/javascript" src="assets/js/jquery.js"></script>
	<script type="text/javascript" src="assets/js/jquery-ui-1.7.2.custom.min.js"></script>
	<script src="assets/js/jquery.validate.min.js" type="text/javascript"></script>
	<script type="text/javascript">
 
		var ajaxRequest;
function getAjax() //fungsi cek apakah web browser mendukung AJAX
{
	try
	{
		// Opera 8.0+, Firefox, Safari
		ajaxRequest = new XMLHttpRequest();
	}
	catch (e)
	{
		// Internet Explorer Browsers
		try
		{
			ajaxRequest = new ActiveXObject("Msxml2.XMLHTTP");
		}
		catch (e) 
		{
			try
			{
				ajaxRequest = new ActiveXObject("Microsoft.XMLHTTP");
			}
			catch (e)
			{
				// Something went wrong
				alert("Your browser broke!");
				return false;
			}
		}
	}
}

function edit(id) //fungsi untuk membuka form edit di edit.php
{

	getAjax();
	ajaxRequest.open("GET","edit.php?id="+id);
	ajaxRequest.onreadystatechange = 
		function()
		{
			var targetDiv = document.getElementById("tio"); //membuka edit.php di div edit
			targetDiv.innerHTML = ajaxRequest.responseText;
		}
	ajaxRequest.send(null);
}
function input() //fungsi untuk membuka form edit di edit.php
{
	getAjax();
	ajaxRequest.open("GET","input_buku.php");
	ajaxRequest.onreadystatechange = 
		function()
		{
			var targetDiv = document.getElementById("see"); //membuka edit.php di div edit
			targetDiv.innerHTML = ajaxRequest.responseText;
		}
	ajaxRequest.send(null);
}
function anggota() //fungsi untuk membuka form edit di edit.php
{
  getAjax();
  ajaxRequest.open("GET","anggota.php");
  ajaxRequest.onreadystatechange = 
    function()
    {
      var targetDiv = document.getElementById("see"); //membuka edit.php di div edit
      targetDiv.innerHTML = ajaxRequest.responseText;
    }
  ajaxRequest.send(null);
}
function see() //fungsi untuk membuka form edit di edit.php
{
	getAjax();
	ajaxRequest.open("GET","?url=buku");
	ajaxRequest.onreadystatechange = 
		function()
		{
			var targetDiv = document.getElementById("see"); //membuka edit.php di div edit
			targetDiv.innerHTML = ajaxRequest.responseText;
		}
	ajaxRequest.send(null);
}
function detail(id) //fungsi untuk membuka form edit di edit.php
{
	getAjax();
    ajaxRequest.open("GET","detail.php?id="+id);
	ajaxRequest.onreadystatechange = 
		function()
		{
			var targetDiv = document.getElementById("tio"); //membuka edit.php di div edit
			targetDiv.innerHTML = ajaxRequest.responseText;
		}
	ajaxRequest.send(null);
}
function saya(id) //fungsi untuk membuka form edit di edit.php
{
  getAjax();
    ajaxRequest.open("GET","bukusaya.php?id_anggota="+id);
  ajaxRequest.onreadystatechange = 
    function()
    {
      var targetDiv = document.getElementById("see"); //membuka edit.php di div edit
      targetDiv.innerHTML = ajaxRequest.responseText;
    }
  ajaxRequest.send(null);
}
function detail3(id_peminjam) //fungsi untuk membuka form edit di edit.php
{
  getAjax();
    ajaxRequest.open("GET","detail3.php?id="+id_peminjam);
  ajaxRequest.onreadystatechange = 
    function()
    {
      var targetDiv = document.getElementById("tio2"); //membuka edit.php di div edit
      targetDiv.innerHTML = ajaxRequest.responseText;
    }
  ajaxRequest.send(null);
}
function detail_bukusaya(id) //fungsi untuk membuka form edit di edit.php
{
  getAjax();
    ajaxRequest.open("GET","detail2.php?id="+id);
  ajaxRequest.onreadystatechange = 
    function()
    {
      var targetDiv = document.getElementById("detail2"); //membuka edit.php di div edit
      targetDiv.innerHTML = ajaxRequest.responseText;
    }
  ajaxRequest.send(null);
}
function peminjaman() //fungsi untuk membuka form edit di edit.php
{
  getAjax();
    ajaxRequest.open("GET","peminjaman.php?");
  ajaxRequest.onreadystatechange = 
    function()
    {
      var targetDiv = document.getElementById("peminjaman"); //membuka edit.php di div edit
      targetDiv.innerHTML = ajaxRequest.responseText;
    }
  ajaxRequest.send(null);
}
function pengembalian() //fungsi untuk membuka form edit di edit.php
{
  getAjax();
    ajaxRequest.open("GET","pengembalian.php?");
  ajaxRequest.onreadystatechange = 
    function()
    {
      var targetDiv = document.getElementById("peminjaman"); //membuka edit.php di div edit
      targetDiv.innerHTML = ajaxRequest.responseText;
    }
  ajaxRequest.send(null);
}
function detail_peminjam(id) //fungsi untuk membuka form edit di edit.php
{
  getAjax();
    ajaxRequest.open("GET","detail_peminjam.php?id="+id);
  ajaxRequest.onreadystatechange = 
    function()
    {
      var targetDiv = document.getElementById("tio2"); //membuka edit.php di div edit
      targetDiv.innerHTML = ajaxRequest.responseText;
    }
  ajaxRequest.send(null);
}
</script>

</head>
<body data-ng-app>

	
    <!-- Preloader -->
    <div class="loading-container">
      <div class="loading">
        <div class="l1">
          <div></div>
        </div>
        <div class="l2">
          <div></div>
        </div>
        <div class="l3">
          <div></div>
        </div>
 
        <div class="l4">
          <div></div>
        </div>
      </div>
    </div>
    <!-- Preloader -->
    	
    
	<aside class="left-panel">
    		
            <div class="user text-center">
                  <img src="<?php echo $_SESSION['photo'];?>" class="img-circle" alt="...">
                  <h4 class="user-name"><?php echo $_SESSION['nama'];?></h4>
                  
                  <button class="btn user-login btn-xs dropdown-toggle btn-rounded" type="button" data-toggle="dropdown">
                    <i class="fa fa-circle status-icon"></i> Available <i class="fa fa-angle-down"></i>
                  </button>	 
            </div>
            
            
            
            <nav class="navigation">
            	<ul class="list-unstyled">
                	<li class="active"><a href="./"><i class="fa fa-bookmark-o"></i><span class="nav-label">Home</span></a></li>
                    
                </ul>
            </nav>
            
    </aside>
    <!-- Aside Ends-->
    
    <section class="content">
    	
        <header class="top-head container-fluid">
            <button type="button" class="navbar-toggle pull-left">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
                        
            <ul class="nav-toolbar">
            	
                </li>
                <li class="dropdown"><a href="login/logout.php" ><i class="fa fa-close"></i></a></div></div>
                </li>
            </ul>
        </header>
        <!-- Header Ends -->
