<?php

use Dom\Mysql;

 include('includes/header.php') ?>

 <h4 class="bg-dark text-white text-center px-2 py-2">Your Dashboard</h4>
<div class="container-fluid m-0 p-0">
  <div class="row">
    <div class="col mb-3 ">
      <div class="card">
        <div class="card-body">
          <div class="d-flex my-2  btn btn-success" style="width: 50px; height: 50px; border-radius: 50%;"></div>
          <?php  ?>
          <h5 class="card-title text-dark"> <span><?php  echo countUsers();  ?></span> Active Users</h5>
          <p class="card-text">  These are the list of Active Users!</p>
          <a href="stat-users.php" class="btn btn-primary">Check Users</a>
        </div>
      </div>
    </div>

    <div class="col mb-3 ">
      <div class="card">

        <div class="card-body">
          <div class="d-flex my-2 btn btn-dark " style="width: 50px; height: 50px; border-radius: 50%;"></div>

          <h5 class="card-title text-dark "> <span><?php  echo countBookings();  ?></span> is currently booked in!</h5>
          <p class="card-text">For Booking Purposes!</p>
          <a href="booking.php" class="btn btn-primary">Check Booking </a>
        </div>
      </div>
    </div>
  </div>
</div>


<?php include('includes/footer.php') ?>
