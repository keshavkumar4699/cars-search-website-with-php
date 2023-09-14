<?php
include '../admin_config/connect.php';
if (UPLOAD_ERR_OK === $_FILES["bannerImage"]["error"]){
  $image = $_FILES['bannerImage'];
  print_r($image);
  echo "<br>";
  $imagefilename=$image['name'];
  print_r($imagefilename);
  echo "<br>";
  $imagefileerror=$image['error'];
  print_r($imagefileerror);
  echo "<br>";
  $imagefiletemp=$image['tmp_name'];
  print_r($imagefiletemp);
  echo "<br>";
  $filename_seprate=explode('.',$imagefilename);
  print_r($filename_seprate);
  echo "<br>";
  $file_extension=strtolower(end($filename_seprate));
  print_r($file_extension);
  echo "<br>";
  getcwd();
  $extension=array('jpeg', 'jpg', 'png');
  if(in_array($file_extension, $extension)){
    $upload_image='../resources/images/banner_images/'.$imagefilename;
    move_uploaded_file($imagefiletemp, $upload_image);
    $sql="insert into tb_banner_images (image) values ('$upload_image')";
    $result=mysqli_query($con, $sql);
    if($result){
      header('location: ../../admin/addBanner.php');
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