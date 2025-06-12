<?php include('includes/header.php') ?>


<div class="row">
  <div class="col-md-12">
    <div class="card">
      <div class="card-header">
        <h4>
          Add User
          <a href="users.php" class="btn btn-danger float-end">Go Back</a>
        </h4>
      </div>

      <div class="card-body">

        <?php alertMessage(); ?>

        <form action="code.php" method="POST">
          <div class="col-md-6">
          </div>
          

          <div class="form-floating mb-3">
            <input type="text" class="form-control" id="name" name="name" required placeholder="cruz">
            <label for="name" class="form-label">Name</label>
          </div>

          <div class="form-floating mb-3">
            <input type="text" class="form-control" id="username" name="username" required placeholder="joseptcruz12">
            <label for="username" class="form-label">Username</label>
          </div>

          <div class="form-floating mb-3">
            <input type="email" class="form-control" id="email" name="email" required placeholder="example@gmail.com">
            <label for="email" class="form-label">Email address</label>

          </div>

          <div class="form-floating mb-3">
            <input type="text" class="form-control" id="password" name="password" required placeholder="wewqe">
            <label for="password" class="form-label">Password</label>
          </div>

          
          <div class="d-grid">
            <button type="submit" name="saveUser" class="btn btn-primary fs-5">Save</button>
          </div>

        </form>

      </div>
    </div>
  </div>
</div>


<?php include('includes/footer.php') ?>
