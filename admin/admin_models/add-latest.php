<?php
include '../admin_config/connect.php';
if (UPLOAD_ERR_OK === $_FILES["image"]["error"]){

  $name=$_POST['name'];
  $price=$_POST['price'];
  $category=$_POST['category'];

  $image = $_FILES['image'];
  $imagefilename=$image['name'];
  $imagefileerror=$image['error'];
  $imagefiletemp=$image['tmp_name'];
  $filename_seprate=explode('.',$imagefilename);
  $file_extension=strtolower(end($filename_seprate));
  $extension=array('jpeg', 'jpg', 'png');

  if(in_array($file_extension, $extension)){
    $upload_image='../resources/images/latest_cars/'.$imagefilename;
    move_uploaded_file($imagefiletemp, $upload_image);
    $sql="insert into tb_latest_cars (carName, price, category, image) values ('$name','$price','$category','$upload_image')";
    $result=mysqli_query($con, $sql);
    if($result){
      header('location: ../../admin/addLatestCar.php');
    }
    else{
      die(mysqli_error($con));
    }
  }
} else {
  echo "error";
  exit;
}
?>