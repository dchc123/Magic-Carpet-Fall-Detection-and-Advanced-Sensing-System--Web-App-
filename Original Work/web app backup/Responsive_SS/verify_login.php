<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<title>Search results</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<link rel="stylesheet" type="text/css" href="style.css"/>
</head>
<body>
	<?php
	require_once 'connect.php';

	$username = $_POST['username'];
	$password = $_POST['password'];
	// gets value sent over search form

	$username = htmlspecialchars($username);
	$password = htmlspecialchars($password);

	// changes characters used in html to their equivalents, for example: < to &gt;

  $username = mysqli_real_escape_string($conn, $username);
  $password = mysqli_real_escape_string($conn, $password);
	// makes sure nobody uses SQL injection

	$sql = "SELECT * FROM login_details WHERE username LIKE '$username' AND password LIKE '$password'";

	$raw_results = mysqli_query($conn, $sql);

	$results_count = mysqli_num_rows($raw_results);
		// * means that it selects all fields, you can also write: `id`, `title`, `text`
		// articles is the name of our table

		if($results_count > 0){ // if one or more rows are returned do following

			while($results_array = mysqli_fetch_array($raw_results)){

				if($results_array['first_login']==FALSE){
					switch ($results_array['admin_access']) {
						case 0:
						header("Location: resident_overview.html");
						break;
						case 1:
						header("Location: room_select.php");
						break;
						case 2:
						header("Location: carehome_room_select.php");
						break;
					}
				}
				else{
					echo "reset login-detials";
				}

			}


			 		//echo $results_array['username'] . "<br>";
					//header("Location: resident_overview.html");
		 }

	 else{ // if there is no matching rows do following
			echo "No results";
	}

			?>
		</body>
		</html>
