<?php include('includes/header.php') ?>

<h4 class="bg-dark text-white text-center px-2 py-2">Booking Logs</h4>

<div class="row">
  <div class="col-md-12">
    <div class="card">


      <div class="card-body table table-responsive">
                <?php alertMessage(); ?>

        <table class="table table-bordered table-striped ">
          <thead>
            <tr class="text-center align-middle">
              <th class="text-dark">Id</th>
              <th class="text-dark">Name</th>
              <th class="text-dark">User ID</th>
              <th class="text-dark">Phone Number</th> 
              <th class="text-dark">Address</th>
              <th class="text-dark">Service Provided</th>
              <th class="text-dark">Date</th>
              <th class="text-dark">Preffered Type</th>

            </tr>
          </thead>
          <tbody>
            <?php 
              $booking_info = getBookingInfo('booking_info');

              if(mysqli_num_rows($booking_info) > 0) {
                
                foreach($booking_info as $booking_item) {
                  ?>
                  <tr class="text-center align-middle"> 
                    <td ><?=  $booking_item['id']; ?> </td>
                    <td ><?=  $booking_item['name']; ?> </td>
                    <td ><?=  $booking_item['user_id']; ?> </td>
                    <td ><?=  $booking_item['phone']; ?></td>
                    <td ><?=  $booking_item['address']; ?> </td>
                    <td ><?=  $booking_item['service_provided']; ?> </td>
                    <td ><?=  $booking_item['date']; ?> </td>
                    <td ><?=  $booking_item['preffered_type']; ?> </td>
                  </tr>
                  <?php
                }

              } else {
                ?>

                <tr class="text-center align-middle"> 
                  <td colspan="7"> No record Found</td>
                </tr>
                <?php
              }
            ?>
          
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>


<?php include('includes/footer.php') ?>
