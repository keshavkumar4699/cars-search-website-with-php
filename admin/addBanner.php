<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>add banner</title>
  <link rel="stylesheet" href="./assets/css/index.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
  <h3 class="text-center mt-5">Upload new Banner Image</h3>
  <div class="container mt-5 text-center">
    <form class="row g-3" action="./admin_models/add-banner.php" method="post" enctype="multipart/form-data">
      <div class="mb-3 col-9">
        <input class="form-control" type="file" id="bannerImage" name="bannerImage">
      </div>
      <div class="col-3">
        <button type="submit" class="btn btn-primary mb-3" name="submit">Upload Banner</button>
      </div>
    </form>
  </div>
  <div>
    <table class="table table-hover">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col" class="col-9 text-center">Banner</th>
          <th scope="col">Operations</th>
        </tr>
      </thead>
      <tbody>
        <?php
          include('./admin_config/connect.php');
          $sql = "select * from tb_banner_images";
          $result = mysqli_query($con, $sql);
          $count=1;
          while($row=mysqli_fetch_assoc($result)){
            $id=$row['id'];
            $image=$row['image'];
            echo '<tr>
              <th scope="row">'.$count.'</th>
              <td><img class="h-25 w-25" src=./resources/'.$image.' alt='.$image.'/></td>
              <td><a href="./admin_models/banner_deletion.php?deleteid='.$id.'" class="btn btn-danger">Delete</a></td>
            </tr>';
            $count++;
          }
        ?>
      </tbody>
    </table>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>