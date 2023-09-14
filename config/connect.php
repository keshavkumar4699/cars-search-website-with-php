<?php
  $con = mysqli_connect('localhost', 'root', '', 'carsden');
  if(!$con){
    die(mysqli_error("error"+$con));
  }
?>