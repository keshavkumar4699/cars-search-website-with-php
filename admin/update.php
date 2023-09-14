<?php include './admin_models/user-update.php'?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="./assets/css/index.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
<div class="container">
      <form method="post">
        <div class="row mb-3">
          <label for="name" class="col-sm-2 col-form-label">Name</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" id="name" name="name" value="<?php echo $name ?>">
          </div>
        </div>
        <div class="row mb-3">
          <label for="phone" class="col-sm-2 col-form-label">Phone</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" id="phone" name="phone" value="<?php echo $phone ?>">
          </div>
        </div>
        <div class="row mb-3">
          <label for="email" class="col-sm-2 col-form-label">Email</label>
          <div class="col-sm-10">
            <input type="email" class="form-control" id="email" name="email" value="<?php echo $email ?>">
          </div>
        </div>
        <div class="row mb-3" id="Address">
          <label for="address" class="col-sm-2 col-form-label">Address</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" id="address" name="address" placeholder="1234 Main St" value="<?php echo $address ?>">
          </div>
        </div>
        <div class="row g-3">
          <div class="col-md-6">
            <label for="city" class="form-label">City</label>
            <input type="text" class="form-control" id="city" name="city" value="<?php echo $city ?>">
          </div>
          <div class="col-md-4">
            <label for="inputState" class="form-label">State</label>
            <select id="inputState" class="form-select">
              <option selected>Choose...</option>
              <option>...</option>
            </select>
          </div>
          <div class="col-md-2">
            <label for="zip" class="form-label">Zip</label>
            <input type="text" class="form-control" id="zip" name="zip" value="<?php echo $zip ?>">
          </div>
        </div>
        <fieldset class="row mb-3">
          <legend class="col-form-label col-sm-4 pt-0">Choose car categories</legend>
          <div class="col-sm-8">
            <div class="form-check">
              <input class="form-check-input" type="checkbox" name="chooseCar[]" id="chooseCar1" value="hatchback">
              <label class="form-check-label" for="chooseCar1">
                Hatchback
              </label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="checkbox" name="chooseCar[]" id="chooseCar2" value="sadan">
              <label class="form-check-label" for="chooseCar2">
                Sadan
              </label>
            </div>
            <div class="form-check disabled">
              <input class="form-check-input" type="checkbox" name="chooseCar[]" id="chooseCar3" value="SUV">
              <label class="form-check-label" for="chooseCar3">
                SUV
              </label>
            </div>
          </div>
        </fieldset>
        <button type="submit" name="update" value="update" class="btn btn-primary">Update</button>
      </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
    crossorigin="anonymous"></script>
</body>
</html>