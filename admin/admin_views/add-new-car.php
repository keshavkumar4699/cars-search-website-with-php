<div class="container mt-5 text-center">
    <form>
      <div class="row g-2 mb-3 mt-5">
        <div class="col-md">
          <div class="form-floating">
            <input type="text" class="form-control" name="carName" id="carName" placeholder="Mercedes Benz">
            <label for="carName">Car Name</label>
          </div>
        </div>
        <div class="col-md">
          <div class="form-floating">
            <input type="text" class="form-control" name="price" id="price" placeholder="1,00,000">
            <label for="price">Car Price(₹)</label>
          </div>
        </div>
        <div class="col-md">
          <div class="form-floating">
            <select class="form-select" name="category" id="category" aria-label="Floating label select example">
              <option selected disabled>Car Category</option>
              <option value="SUV">SUV</option>
              <option value="Hatchback">Hatchback</option>
              <option value="Sadan">Sadan</option>
            </select>
            <label for="category">Choose Category</label>
          </div>
        </div>
      </div>
      <div class="row g-3">
        <div class="col-3">
          <p type="text" readonly class="form-control-plaintext">Choose image to upload</p>
        </div>
        <div class="mb-3 col-9">
          <input class="form-control" type="file" name="image" id="image" multiple>
        </div>
      </div>
      <div class="col-auto">
        <button type="submit" name="submit" class="btn btn-primary mb-3">Upload New Car</button>
      </div>
    </form>
  </div>