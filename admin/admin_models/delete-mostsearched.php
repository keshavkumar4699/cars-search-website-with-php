<?php
include '../admin_config/connect.php';

$id = $_GET['deleteid'];
$imagesql="select image from tb_most_searched_cars where id=$id";
$image=mysqli_query($con, $imagesql);
$imagelocation=mysqli_fetch_assoc($image);
$sql = "delete from tb_most_searched_cars where id=$id";
$result = mysqli_query($con, $sql);
  
if (!unlink($imagelocation['image'])) {
  echo ("image cannot be deleted due to an error");
}
else {
  echo ("image deleted");
}

if(!$result){
  die(mysqli_error($con));
} else {
  header('location: ../../admin/addMostSearchedCar.php');
}
?>