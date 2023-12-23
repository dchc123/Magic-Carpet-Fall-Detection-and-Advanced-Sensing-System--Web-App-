

<?php
$q = ($_GET['q']);

require_once("connect.php");

//mysqli_select_db($conn,"salussense");
$sql="SELECT Carehome_ID FROM Carehomes WHERE Carehome_Location = '".$q."'";
$result = mysqli_query($conn,$sql);

// echo "<table>
// <tr>
// <th>Carehome_ID</th>
// </tr>";
// while($row = mysqli_fetch_array($result)) {
//   echo "<tr>";
//   echo "<td>" . $row['Carehome_ID'] . "</td>";
//   echo "</tr>";
//   $care_homeid = $row['Carehome_ID'];
// }
// echo "</table>";
// echo $care_homeid;

while($row = mysqli_fetch_array($result)) {
  $care_homeid = $row['Carehome_ID'];
}

$sql2="SELECT full_name FROM users WHERE Carehome_ID = '".$care_homeid."'";
$result2 = mysqli_query($conn,$sql2);

$resident_options = mysqli_fetch_all($result2,MYSQLI_ASSOC);

?>


<select name="Residents" onchange="UpdateRoomSelection()" id="Residents">
  <option value="room selection">Select Resident</option>
  <?php
  foreach ($resident_options as $option) {
    ?>
    <option><?php echo $option['full_name']; ?> </option>
    <?php
  }
  ?>
</select>

<?php

// while($row2 = mysqli_fetch_assoc($result2)) {
//   $resident = $row2['Resident_Name'];
// }
//
// echo $resident;

mysqli_close($conn);
?>
</body>
</html>
