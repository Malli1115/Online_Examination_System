<?php
include '../includes/check_user.php';
include '../../database/config.php';

$new_password = $_POST['pass1'];
$new_category = $_POST['category'];

$sql = "UPDATE tbl_users SET password='$new_password',category='$new_category',department='$new_category' WHERE user_id='$myid'";

if ($conn->query($sql) === TRUE) {
	header("location:../profile.php?rp=7823");
} else {
   header("location:../profile.php?rp=1298");
}

$conn->close();
?>
