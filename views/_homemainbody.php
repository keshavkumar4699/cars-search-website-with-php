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
      <form action="./models/user-registration.php" method="post">
        <div class="row mb-3">
          <label for="name" class="col-sm-2 col-form-label">Name</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" id="name" name="name" required>
          </div>
        </div>
        <div class="row mb-3">
          <label for="phone" class="col-sm-2 col-form-label">Phone</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" id="phone" name="phone" required>
          </div>
        </div>
        <div class="row mb-3">
          <label for="email" class="col-sm-2 col-form-label">Email</label>
          <div class="col-sm-10">
            <input type="email" class="form-control" id="email" name="email" required>
          </div>
        </div>
        <div class="row mb-3" id="Address">
          <label for="address" class="col-sm-2 col-form-label">Address</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" id="address" name="address" placeholder="1234 Main St" required>
          </div>
        </div>
        <div class="row g-3">
          <div class="col-md-6">
            <label for="city" class="form-label">City</label>
            <input type="text" class="form-control" id="city" name="city" required>
          </div>
          <div class="col-md-4">
            <label for="state" class="form-label">State</label>
            <select id="state" name="state" class="form-select" required>
              <option selected>Choose...</option>
              <option value="delhi">Delhi</option>
              <option value="mumbai">Mumbai</option>
              <option value="chennai">Chennai</option>
            </select>
          </div>
          <div class="col-md-2">
            <label for="zip" class="form-label">Zip</label>
            <input type="text" class="form-control" id="zip" name="zip" required>
          </div>
        </div>
        <fieldset class="row mb-3">
          <legend class="col-form-label col-sm-4 pt-0">Choose car categories</legend>
          <div class="col-sm-8">
            <div class="form-check">
              <input class="form-check-input" type="checkbox" name="chooseCategory[]" id="chooseCar1" value="hatchback">
              <label class="form-check-label" for="chooseCar1">
                Hatchback
              </label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="checkbox" name="chooseCategory[]" id="chooseCar2" value="sadan">
              <label class="form-check-label" for="chooseCar2">
                Sadan
              </label>
            </div>
            <div class="form-check disabled">
              <input class="form-check-input" type="checkbox" name="chooseCategory[]" id="chooseCar3" value="SUV">
              <label class="form-check-label" for="chooseCar3">
                SUV
              </label>
            </div>
          </div>
        </fieldset>
        <button type="submit" name="submit" value="submit" class="btn btn-primary">Submit</button>
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