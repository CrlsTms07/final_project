<?php include('includes/header.php') ?>

<h4 class="bg-dark text-white text-center px-2 py-2">Update User</h4>

<div class="row">
  <div class="col-md-12">
    <div class="card">
      <div class="card-header">
        <h4>
          Edit User
          <a href="users.php" class="btn btn-danger float-end">Go Back</a>
        </h4>
      </div>

      <div class="card-body">
        
        <form action="code.php" method="POST">
          <?php 
            $result = checkId('id');
            if (!is_numeric($result)) {
              echo '<h5>' . $result .'</h5>';
              return false;
            }

            $user = getById('user_info', checkId('id'));

            if($user['status'] == 200) {

              ?>

                <input type="hidden" name="user_id" value="<?= $user['data']['user_id']; ?>" required>


                <div class="form-floating mb-3">
                  <input type="text" class="form-control" id="name" name="name" value="<?= $user['data']['name']; ?>" required placeholder="cruz">
                  <label for="name" class="form-label">Name</label> 
                </div>

                <div class="form-floating mb-3">
                  <input type="text" class="form-control" id="username" name="username" value="<?= $user['data']['username']; ?>" required placeholder="joseptcruz12">
                  <label for="username" class="form-label">Username</label>
                </div>

                <div class="form-floating mb-3">
                  <input type="email" class="form-control" id="email" name="email" required value="<?= $user['data']['email']; ?>" placeholder="example@gmail.com">
                  <label for="email" class="form-label">Email address</label>

                </div>

                <div class="form-floating mb-3">
                  <input type="password" class="form-control" id="password" name="password" value="<?= $user['data']['password']; ?>" required placeholder="wewqe">
                  <label for="password" class="form-label">Password</label>
                </div>

                
                <div class="d-grid">
                  <button class="btn btn-warning fs-5" type="submit" name="updateUser">Update</button>
                </div>
              <?php

            } else {
              echo '<h5>' .$user['message']. '</h5>';
            }
          ?>


          

         

        </form>

      </div>
    </div>
  </div>
</div>


<?php include('includes/footer.php') ?>
