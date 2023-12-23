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

	<?php
	require_once("connect.php");
	?>

<!-- header area -->
    <header class="wrapper clearfix">

        <div id="banner">
        	<div id="logo"><a href="basic.html"><img src="images/rsz_salus_sense_logo.png" alt="logo"></a></div>
        </div>

    </header><!-- end header -->

<section id="page-header" class="clearfix">
		<!-- responsive FlexSlider image slideshow -->
		<div class="wrapper">
			<h1>Administrator - Select the care home and resident you would like to view</h1>
		</div>


</section>


<!-- main content area -->
<div id="main" class="wrapper">

	<!-- content area -->
	<section id="content" class="wide-content">

		<?php

		$sql_carehome = "SELECT Carehome_Location FROM carehomes";

		$raw_results = mysqli_query($conn, $sql_carehome);

		$results_count = mysqli_num_rows($raw_results);
			// * means that it selects all fields, you can also write: `id`, `title`, `text`
			// articles is the name of our table

		if($results_count > 0){ // if one or more rows are returned do following

			 $carehome_options = mysqli_fetch_all($raw_results,MYSQLI_ASSOC);

		} else{ // if there is no matching rows do following
				echo "No results";
		}



		?>

		<div class="row">
			<div class="grid_4">
				<h1 class="first-header">Select a care home</h1>
				<select name="Carehomes" onchange="UpdateRoomOptions()" id="Carehomes">
					<option>Select Carehome</option>
					<?php
					foreach ($carehome_options as $option) {
						?>
						<option><?php echo $option['Carehome_Location']; ?> </option>
						<?php
					}
					?>
				</select>

			</div>


			<div class="grid_4">
				<h1 class="first-header">Select a Resident</h1>
					<div  id="Resident_Header">

					</div>

			</div>



			<script>
			function UpdateRoomOptions() {
				var str = document.getElementById("Carehomes").value;

				if (str == "") {
					document.getElementById("Resident_Header").innerHTML = "";
					return;
				} else {
					var xmlhttp = new XMLHttpRequest();
					xmlhttp.onreadystatechange = function() {
						if (this.readyState == 4 && this.status == 200) {
							document.getElementById("Resident_Header").innerHTML = this.responseText;
						}
					};

					xmlhttp.open("GET","get_residents.php?q="+str,true);
					xmlhttp.send();
				}
			}
			</script>

			<script>
			function UpdateRoomSelection() {
				var str = document.getElementById("Residents").value;
				//console.log(str);

				var str2 = document.getElementById("Carehomes").value;
				//console.log(str2);


					var xmlhttp = new XMLHttpRequest();
					xmlhttp.onreadystatechange = function() {
						if (this.readyState == 4 && this.status == 200) {
							document.getElementById("Resident_Header").innerHTML = this.responseText;

						}
					};

					xmlhttp.open("GET","get_residents_info.php?x="+str+"&y="+str2,true);
					xmlhttp.send();
			}
			</script>

			<script>
         function resident_overview(){
					var full_name = document.getElementById("full_name").innerHTML;
					console.log(full_name);
					var care_home = document.getElementById("care_home").innerHTML;
					console.log(care_home);

					var room_num = document.getElementById("room_num").innerHTML;
					var dob = document.getElementById("DOB").innerHTML;

	 			 	sessionStorage.setItem("full_name", full_name);
					sessionStorage.setItem("care_home", care_home);
					sessionStorage.setItem("room_num", room_num);
					sessionStorage.setItem("dob", dob);
         	window.open("resident_overview.php");
     		}
   		</script>

	</section><!-- end content area -->

</div><!-- #end div #main .wrapper -->


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

</body>
</html>
