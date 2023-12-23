
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

<?php
$full_name = ($_GET['x']);

$Carehome_Location = ($_GET['y']);

require_once("connect.php");

$sql="SELECT * FROM users WHERE full_name = '".$full_name."'";
$result = mysqli_query($conn,$sql);

if(mysqli_num_rows($result)>0){

  echo "<table>";
  while($row = mysqli_fetch_array($result)) {

    ?>
    <tbody>
    <tr>
    <th>Full Name</th>
    <th>Carehome Location</th>
    <th>Room Number</th>
    <th>Date of Birth</th>
    </tr>
    <tr>

      <td id="full_name"><?php echo $full_name; ?> </td>
      <td id="care_home"><?php echo $Carehome_Location; ?> </td>
      <td id="room_num"><?php echo $row['room_ID']; ?> </td>
      <td id="DOB"><?php echo $row['DOB']; ?> </td>

    <?php
    }
    ?>
    </tbody>
    </table>

    <br>
    <button onclick="resident_overview()">Confirm Selection</button>
    <?php



}
else{echo"failed";}
?>


<?php
mysqli_close($conn);
?>
</body>
</html>
