<!DOCTYPE html>

<html class="no-js">

<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

<title>Simple Responsive Template</title>
<meta name="description" content="Simple Responsive Template is a template for responsive web design. Mobile first, responsive grid layout, toggle menu, navigation bar with unlimited drop downs, responsive slideshow">
<meta name="keywords" content="">

<!-- Mobile viewport -->
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=yes">

<link rel="shortcut icon" href="images/favicon.ico"  type="image/x-icon">

<!-- CSS-->
<!-- Google web fonts. You can get your own bundle at http://www.google.com/fonts. Don't forget to update the CSS accordingly!-->
<link href='http://fonts.googleapis.com/css?family=Droid+Serif|Ubuntu' rel='stylesheet' type='text/css'>

<link rel="stylesheet" href="css/normalize.css">
<link rel="stylesheet" href="js/flexslider/flexslider.css">
<link rel="stylesheet" href="css/basic-style.css">

<!-- end CSS-->

<!-- JS-->
<script src="js/libs/modernizr-2.6.2.min.js"></script>
<!-- end JS-->


</head>

<body id="home">

<!-- header area -->
    <header class="wrapper clearfix">

        <div id="banner">
        	<div id="logo"><a href="basic.html"><img src="images/rsz_salus_sense_logo.png" alt="logo"></a></div>
        </div>

        <!-- main navigation -->
        <nav id="topnav" role="navigation">
          <div class="menu-toggle">Menu</div>
          <ul class="srt-menu" id="menu-main-navigation">
              <li class="current"><a href="basic.html">Overview</a></li>

              <li><a href="basic-internal.html">Fall Information</a></li>

              <li><a href="#">Gait Analysis</a>

              </li>

          </ul>
		</nav><!-- end main navigation -->

    </header><!-- end header -->

<section id="page-header" class="clearfix">
		<!-- responsive FlexSlider image slideshow -->
		<div class="wrapper">
			<h2 id="Header_Info"></h2>
		</div>

</section>

<!-- main content area -->
<div id="main" class="wrapper">


<!-- content area -->
	<section id="content" class="wide-content">
      <div class="row">
        <div class="grid_4">
        	<h1 class="first-header">Brazil!</h1>
            <img src="images/basic-pic1.jpg" />
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
        </div>

        <div class="grid_4">
        	<h1 class="first-header">Mexico!</h1>
            <img src="images/basic-pic2.jpg" />
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
        </div>

        <div class="grid_4">
        	<h1 class="first-header">US!</h1>
            <img src="images/basic-pic3.jpg" />
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
        </div>
	  </div><!-- end row -->
	</section><!-- end content area -->


<!-- footer area -->
<footer>
	<div id="colophon" class="wrapper clearfix">
    	footer stuff
    </div>

</footer><!-- #end footer area -->


<!-- jQuery -->
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="js/libs/jquery-1.9.0.min.js">\x3C/script>')</script>

<script defer src="js/flexslider/jquery.flexslider-min.js"></script>

<!-- fire ups - read this file!  -->
<script src="js/main.js"></script>

<script>
	var full_name = sessionStorage.getItem("full_name");
	var care_home = sessionStorage.getItem("care_home");
	var room_num = sessionStorage.getItem("room_num");
	var dob = sessionStorage.getItem("dob");

	var header = document.getElementById("Header_Info");
	header.innerHTML="Full Name: "+full_name+ " - Care Home Location: "+care_home+ "<br>"+"Room Number: "+room_num+" - DOB: "+dob;
</script>


</body>
</html>
