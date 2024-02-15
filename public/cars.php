<!-- cars.php -->

<?php
$cars = [
    [
        'id' => 1, 'brand' => 'McLaren', 'model' => 'Mclaren-570s', 'number' => 'VBN-6789', 'capacity' => 2, 'rent' => 200, 'rating' => 3, 'dealer' => 'FastWheels Rentals',
    ],
    [
        'id' => 2, 'brand' => 'Bugatti', 'model' => 'Bugatti-pur-sport', 'number' => 'ABC-1234', 'capacity' => 4, 'rent' => 250, 'rating' => 4, 'dealer' => 'DriveTime Rentals',
    ],
    [
        'id' => 3, 'brand' => 'BMW', 'model' => 'Bmw-baroque-angel', 'number' => 'XYZ-5678', 'capacity' => 5, 'rent' => 180, 'rating' => 4, 'dealer' => 'SwiftRide Rentals',
    ],
    [
        'id' => 4, 'brand' => 'Mitsubishi', 'model' => 'Mitsubishi-Lancer', 'number' => 'GHI-3456', 'capacity' => 7, 'rent' => 150, 'rating' => 3, 'dealer' => 'EZRent Auto',
    ],
]
?>

<?php require 'shared/header.php';?>
<main>
  <section class="py-5 text-center container">
    <div class="row pt-lg-2 pb-lg-5">
      <div class="col-lg-6 col-md-8 mx-auto">
        <h1 class="fw-light h2">All cars</h1>
        <p class="lead text-muted">Discover our diverse rental fleet, tailored to meet your needs. From elegant sedans
          to versatile SUVs, we have the perfect vehicle for your journey. Enjoy seamless service and embark on your
          next adventure with confidence. </p>
        <!-- <p>
          <a href="#" class="btn btn-primary my-2">Main call to action</a>
          <a href="#" class="btn btn-secondary my-2">Secondary action</a>
        </p>   -->
      </div>
    </div>
  </section>

  <div class="album py-5 bg-light">
    <div class="container">

      <?php if (empty($cars)): ?>
      <p>There are no cars to load</p>
      <?php endif;?>
      <div class="row row-cols-1 row-cols-sm-2 row-cols-xl-4 g-3">
        <?php foreach ($cars as $car): ?>
        <div class="col row-element-car">
          <div class="card shadow-sm">
            <div class='mx-auto p-2'>
              <img class='card-image' src="./../assets/images/<?php echo $car['model']; ?>.jpg" alt="mclaren">
            </div>

            <div class="card-body">
              <span class="h5"><?php
$car_model = explode('-', $car['model']);
$car_model = join(' ', $car_model);
echo $car_model;
?></span>
              <p>

              <h3 class="h3 text-dark d-inline">$<?php echo $car['rent']; ?></h3>/day
              </p>

              <!-- <hr class='my-2'> -->
              <p class="card-text my-3">Rent a reliable car for your journey. Comfortable, efficient, and ready to go.
              </p>
              <div class="car-details">
                <table class="table table-sm table-hover">
                  <tbody>
                    <tr>
                      <th scope="row">Vehicle number</th>
                      <td><?php echo $car['number']; ?></td>
                    </tr>
                    <tr>
                      <th scope="row">Capacity</th>
                      <td><?php echo $car['capacity']; ?></td>
                    </tr>
                    <tr>
                      <th scope="row">Rating</th>
                      <td>
                        <?php
$var = $car['rating'];
while ($var--):
?>
                        <img src="./../assets/images/star.svg" alt="star" width='20rem'>
                        <?php endwhile;?>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>

              <button id='<?php echo $car['id']; ?>' type="button"
                class="btn btn-dark rounded-pill w-100 mt-4  mx-auto d-block">Rent now</button>
            </div>
          </div>
        </div>

        <?php endforeach;?>

      </div>
    </div>
  </div>

</main>

<?php require 'shared/footer.php';?>