<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Carsdekho</title>
  <link rel="stylesheet" href="./assets/css/index.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
  <!-- header -->
  <?php include '_header.php';?>
  <!-- banner -->
  <div id="banner">
    <!-- carousel -->
    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="true">
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
          aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
          aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
          aria-label="Slide 3"></button>
      </div>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="./resources/images/banner_1.jpg" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
          <img src="./resources/images/banner_2.jpg" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
          <img src="./resources/images/banner_3.jpg" class="d-block w-100" alt="...">
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
        data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
        data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
    <!-- form -->
    <div id="banner-form">
      <form>
        <div class="row mb-3">
          <label for="inputName" class="col-sm-2 col-form-label">Name</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" id="inputName" name="name">
          </div>
        </div>
        <div class="row mb-3">
          <label for="inputPhone" class="col-sm-2 col-form-label">Phone</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" id="inputPhone" name="phone">
          </div>
        </div>
        <div class="row mb-3">
          <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
          <div class="col-sm-10">
            <input type="email" class="form-control" id="inputEmail3">
          </div>
        </div>
        <div class="row mb-3" id="Address">
          <label for="inputAddress" class="col-sm-2 col-form-label">Address</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
          </div>
        </div>
        <div class="row g-3">
          <div class="col-md-6">
            <label for="inputCity" class="form-label">City</label>
            <input type="text" class="form-control" id="inputCity">
          </div>
          <div class="col-md-4">
            <label for="inputState" class="form-label">State</label>
            <select id="inputState" class="form-select">
              <option selected>Choose...</option>
              <option>...</option>
            </select>
          </div>
          <div class="col-md-2">
            <label for="inputZip" class="form-label">Zip</label>
            <input type="text" class="form-control" id="inputZip">
          </div>
        </div>
        <fieldset class="row mb-3">
          <legend class="col-form-label col-sm-4 pt-0">Choose car categories</legend>
          <div class="col-sm-8">
            <div class="form-check">
              <input class="form-check-input" type="checkbox" name="choose-car" id="gridCheck1" value="hatchback">
              <label class="form-check-label" for="gridCheck1">
                Hatchback
              </label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="checkbox" name="choose-car" id="gridCheck2" value="sadan">
              <label class="form-check-label" for="gridCheck2">
                Sadan
              </label>
            </div>
            <div class="form-check disabled">
              <input class="form-check-input" type="checkbox" name="choose-car" id="gridCheck3" value="SUV">
              <label class="form-check-label" for="gridCheck3">
                SUV
              </label>
            </div>
          </div>
        </fieldset>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
    </div>
  </div>

  <div class="display_slider">
    <h4>Most Searched Cars</h4>
    <div class="slider_section">
      <?php
      for ($x = 0; $x <= 6; $x++) { ?>
      <div class="card car-card" style="width: 15rem;">
        <img src="./resources/images/car_1.jpg" class="card-img-top" alt="car 1">
        <div class="card-body">
          <p id="car-name" class="card-text">Mercedes M5</p>
          <p id="car-price" class="card-title">₹ 12,00,000</p>
          <a href="#" class="btn btn-primary">Get Offers</a>
        </div>
      </div>
      <?php } ?>
    </div>
  </div>

  <div class="display_slider">
    <h4>Latest Cars</h4>
    <div class="slider_section">
      <?php
      for ($x = 0; $x <= 6; $x++) { ?>
      <div class="card car-card" style="width: 15rem;">
        <img src="./resources/images/car_1.jpg" class="card-img-top" alt="car 1">
        <div class="card-body">
          <p id="car-name" class="card-text">Mercedes M5</p>
          <p id="car-price" class="card-title">₹ 12,00,000</p>
          <a href="#" class="btn btn-primary">Get Offers</a>
        </div>
      </div>
      <?php } ?>
    </div>
  </div>

  <!-- footer -->
  <?php include '_footer.php';?>
  <script src="./assets/js/index.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
    crossorigin="anonymous"></script>
</body>

</html>