<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="./assets/css/user-list.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
  <div class="container">
    <h3 class="text-center mt-4">Users List</h3>
    <table class="table table-hover mt-4">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">Name</th>
          <th scope="col">Phone</th>
          <th scope="col">Email</th>
          <th scope="col">Address</th>
          <th scope="col">City</th>
          <th scope="col">State</th>
          <th scope="col">Zip</th>
          <th scope="col">Car Categories</th>
          <th scope="col">Operations</th>
        </tr>
      </thead>
      <tbody>
        <?php
        include('./admin_config/connect.php');
        //select query
        $sql = "select * from tb_user";
        $result = mysqli_query($con, $sql);
        $row=0;
        while ($row = mysqli_fetch_assoc($result)) {
          $id = $row['id'];
          $name = $row['name'];
          $phone = $row['phone'];
          $email = $row['email'];
          $address = $row['address'];
          $city = $row['city'];
          // $state = $row['state'];
          $zip = $row['zip'];
          $carCategories = $row['car_category'];
          echo 
          '<tr>
            <th scope="row">'.$id.'</th>
            <td>'.$name.'</td>
            <td>'.$phone.'</td>
            <td>'.$email.'</td>
            <td>'.$address.'</td>
            <td>'.$city.'</td>
            <td></td>
            <td>'.$zip.'</td>
            <td>'.$carCategories.'</td>
            <td><a href="update.php?updateid='.$id.'" class="btn btn-success">Update</a></td>
            <td><a href="./admin_models/user-deletion.php?deleteid='.$id.'" class="btn btn-danger">Delete</a></td>
          </tr>';
          // <!--<td>'.$state.'</td>-->
          // <!---->
        }
        ?>
      </tbody>
    </table>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>