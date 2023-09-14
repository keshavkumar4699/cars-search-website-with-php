<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
  <h1 class="text-center">Admin</h1>
  <div class="container">
    <div class="list-group">
      <button type="button" class="list-group-item list-group-item-action" onclick="location.href='user-list.php'">Manage User</button>
      <button type="button" class="list-group-item list-group-item-action" onclick="location.href='addBanner.php'">Manage Banners</button>
      <button type="button" class="list-group-item list-group-item-action" onclick="location.href='addLatestCar.php'">Manage Latest Cars</button>
      <button type="button" class="list-group-item list-group-item-action" onclick="location.href='addMostSearchedCar.php'">Most Searched Cars</button>
    </div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
    crossorigin="anonymous"></script>
</body>

</html>