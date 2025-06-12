<?php include('includes/header.php') ?>
<h4 class="bg-dark text-white text-center px-2 py-2"> Edit / Delete Users</h4>

<div class="row">
  <div class="col-md-12">
    <div class="card">
      <div class="card-header">
        <h4>
          User Lists
          <a href="users-create.php" class="btn btn-primary float-end">Add Users</a>
        </h4>
      </div>

      <div class="card-body table-responsive m-0 p-0">
                <?php alertMessage(); ?>

        <table class="table table-striped table-bordered table-hover">
          <thead>
            <tr class="text-center align-middle">
              <th class="text-dark">Id</th>
              <th class="text-dark">Name</th>
              <th class="text-dark">Username</th>
              <th class="text-dark">Email</th>
              <th class="text-dark">Password</th>
              <th class="text-dark">Action</th>
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
                    <td>
                    <a href="users-edit.php?id=<?= $user_item['user_id'];?>" class="btn btn-success">Edit</a>
                    <a href="users-delete.php?user_id=<?= $user_item['user_id'];?>" class="btn btn-danger" onclick="return confirm('are you sure you want to delete this data?');">Delete</a>

                    </td>
                  </tr>
                  <?php
                }

              } else {
                ?>

                <tr class="text-center align-middle"> 
                <td colspan="7 "> No record Found</td>
                </tr>
                <?php
              }
            ?>
            <!-- <tr>
              <td>1</td>
              <td>name</td>
              <td>1dssd</td>
              <td>1dd</td>
              <td>2223293dfifj</td>
              <td>
                <a href="users-edit.php" class="btn btn-success">Edit</a>
                <a href="users-delete.php" class="btn btn-danger">Delete</a>

              </td>
            </tr> -->
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>


<?php include('includes/footer.php') ?>
