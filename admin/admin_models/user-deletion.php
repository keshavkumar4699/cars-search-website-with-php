<?php
include '../admin_config/connect.php';

$id = $_GET['deleteid'];
$sql = "delete from tb_user where id=$id";
$result = mysqli_query($con, $sql);
if(!$result){
  die(mysqli_error($con));
} else {
  header('location: ../admin/user-list.php');
}
?>