<?php
include '../config/connect.php';
if(isset($_POST['submit']) && !empty($_POST['submit'])) {
  $name = $_POST['name'];
  $phone = $_POST['phone'];
  $email = $_POST['email'];
  $address = $_POST['address'];
  $city = $_POST['city'];
  // $state = $_POST['state'];
  $zip = $_POST['zip'];
  // $state = $_POST['state'];

  //insert query
  $sql = "insert into tb_user (name, phone, email, address, city, zip) values ('$name','$phone','$email','$address','$city','$zip')";
  

  $result = mysqli_query($con, $sql);
  if ($result) {
    header('Location: ' . $_SERVER['HTTP_REFERER']);
    exit;
  } else {
    die(mysqli_error("error" + $con));
  }
} else {
  echo "error";
  exit;
}
