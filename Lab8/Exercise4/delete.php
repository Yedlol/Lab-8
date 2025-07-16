<?php
require('db.php');
$ID=$_REQUEST['ID'];
$query = "DELETE FROM new_record WHERE id=$id";
$result = mysqli_query($con,$query) or die (
mysqli_error());
header("Location: view.php");
?>