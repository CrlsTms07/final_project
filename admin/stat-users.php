<?php include('includes/header.php') ?>

<h4 class="bg-dark text-white text-center px-2 py-2">Current Users</h4>


<div class="row">
  <div class="col-md-12">
    <div class="card">


      <div class="card-body table table-responsive">
                <?php alertMessage(); ?>

        <table class="table table-bordered table-striped">
          <thead>
            <tr class="text-center align-middle ">
              <th class="text-dark">Id</th>
              <th class="text-dark">Name</th>
              <th class="text-dark">Username</th>
              <th class="text-dark">Email</th>
              <th class="text-dark">Password</th>
              <th class="text-dark">Registration Date</th>
            </tr>
          </thead>
          <tbody>
            <?php 
              $user_info = getAllData('user_info');

              if(mysqli_num_rows($user_info) > 0) {
                
                foreach($user_info as $user_item) {
                  ?>
                  <tr class="text-center align-middle"> 
                    <td ><?=  $user_item['user_id']; ?> </td>
                    <td ><?=  $user_item['name']; ?> </td>
                    <td ><?=  $user_item['username']; ?> </td>
                    <td ><?=  $user_item['email']; ?> </td>
                    <td ><?=  $user_item['password']; ?> </td>
                    <td ><?=  $user_item['reg_date']; ?> </td>
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
