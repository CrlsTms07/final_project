<?php include('includes/header.php') ?>

<h4 class="bg-dark text-white text-center px-2 py-2">Audit Logs</h4>

<div class="row">
  <div class="col-md-12">
    <div class="card">


      <div class="card-body table table-responsive">
                <?php alertMessage(); ?>

        <table class="table table-bordered table-striped t">
          <thead>
            <tr class="text-center align-middle">
              <th class="text-dark">Id</th>
              <th class="text-dark">Action</th>
              <th class="text-dark">From</th>
              <th class="text-dark">Data</th>
              <th class="text-dark">At</th>
             

            </tr>
          </thead>
          <tbody>
            <?php 
              $audit_log = getAuditLog('auditLog');

              if(mysqli_num_rows($audit_log) > 0) {
                
                foreach($audit_log as $audit_item) {
                  ?>
                  <tr class="text-center align-middle"> 
                    <td ><?=  $audit_item['id']; ?> </td>
                    <td ><?=  $audit_item['action']; ?> </td>
                    <td ><?=  $audit_item['table_name']; ?> </td>
                    <td ><?=  $audit_item['deleted_data']; ?> </td>
                    <td ><?=  $audit_item['deleted_at']; ?> </td>
                   
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
