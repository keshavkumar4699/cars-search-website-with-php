<?php
include './admin_config/connect.php';
$id = $_GET['updateid'];
$sql = "Select * from tb_user where id=$id";
$result = mysqli_query($con, $sql);
$row = mysqli_fetch_assoc($result);

$id = $row['id'];
$name = $row['name'];
$phone = $row['phone'];
$email = $row['email'];
$address = $row['address'];
$city = $row['city'];
// $state = $row['state'];
$zip = $row['zip'];
// $carCategories = $row['car_category'];

if(isset($_POST['update'])){
  $name = $_POST['name'];
  $phone = $_POST['phone'];
  $email = $_POST['email'];
  $address = $_POST['address'];
  $city = $_POST['city'];
  // $state = $_POST['state'];
  $zip = $_POST['zip'];
  // $carCategories = $_POST['car_category'];

  $sql="update tb_user set name='$name', phone='$phone', email='$email', address='$address', city='$city', zip='$zip' where id=$id";
  $result=mysqli_query($con, $sql);
  if(!$result){
    die(mysqli_error($con));
  } else {
    header('location: ../user-list.php');
  }
}

?>