<?php
include '../config/connect.php';
if(isset($_POST['submit']) && !empty($_POST['submit'])) {
  $name = $_POST['name'];
  $phone = $_POST['phone'];
  $email = $_POST['email'];
  $address = $_POST['address'];
  $city = $_POST['city'];
  $state = $_POST['state'];
  $zip = $_POST['zip'];
  $categories = $_POST['chooseCategory'];
  $allCategories=implode(",", $categories);

  //insert query
  $sql = "insert into tb_user (name, phone, email, address, city, state, zip, car_category) values ('$name','$phone','$email','$address','$city','$state','$zip', '$allCategories')";
  

  $result = mysqli_query($con, $sql);
  if ($result) {
    header('location:' . $_SERVER['HTTP_REFERER']);
    exit;
  } else {
    die(mysqli_error("error" + $con));
  }
} else {
  echo "error";
  exit;
}
