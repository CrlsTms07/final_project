<?php 
require 'config/connection.php';
session_start();

if (!isset($_SESSION['user_id'])) {
  header("Location: login.php");
  exit();
}
?>

<!DOCTYPE html>
  <html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Receipt</title>
    <link rel="stylesheet" href="resources/styles/styles.css">
    <link rel="stylesheet" href="receipt.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet">
  </head>
  <body style=" position: relative;  background-color:rgb(223, 223, 223);">
    <?php 
      $currentDateTime = date("Y-m-d H:i:s"); 
    ?>

    <a href="index.php">
        <div class="btn btn-primary" style="position: absolute; top: 1.3rem; left: 26rem; ">Go back</div>    
    </a>    
    


    <div class="invoice-wrapper" id="print-area">
      <div class="invoice">
          <div class="invoice-container">
              <div class="invoice-head">
                  <div class="invoice-head-top">
                      <div class="invoice-head-top-right">
                          <h3>Receipt</h3>
                      </div>
                  </div>
                  <div class="hr"></div>
                  <div class="invoice-head-middle">
                      <div class="invoice-head-middle-left text-start">
                          <p><span class="text-bold">Date:</span> <?php echo $currentDateTime; ?>  </p>
                      </div>
                      <div class="invoice-head-middle-right text-end">
                          <p><spanf class="text-bold">Invoice No:</span>16789</p>
                      </div>
                  </div>
                  <div class="hr"></div>
                  <div class="invoice-head-bottom">
                      <div class="invoice-head-bottom-left">
                          <ul>
                              <li class='text-bold'>Invoiced To:</li>
                              <li> <?php echo $_SESSION['name'];  ?> </li>
                              <li> <?php echo $_SESSION['address'];  ?> </li>
                              <li> <?php echo $_SESSION['email'];  ?> </li>
                              <li> <?php echo $_SESSION['phone'];  ?>  </li>
                          </ul>
                      </div>
                      <div class="invoice-head-bottom-right">
                          <ul class="text-end">
                              <li class='text-bold'>Pay To:</li>
                              <li>The Moon Spa</li>
                              <li></li>
                              <li>Cavite,  Philippines</li>
                              <li>MoonSpa@gmail.com</li>
                          </ul>
                      </div>
                  </div>
              </div>
              <div class="overflow-view">
                  <div class="invoice-body">
                      <table>
                          <thead>
                              <tr>
                                  <td class="text-bold">Service</td>
                                  <td class="text-bold">Type</td>
                                  <td class="text-bold">Location</td>
                                  <td class="text-bold">Date</td>
                                  <td class="text-bold">Price</td>
                              </tr>
                          </thead>
                          <tbody>
                              <tr>
                                  <td> <?php echo $_SESSION['service'];  ?>  </td>
                                  <td>  <?php echo $_SESSION['type'];  ?>   </td>
                                  <td> <?php echo $_SESSION['address'];  ?>  </td>
                                  <td> <?php echo $_SESSION['date'];  ?>   </td>
                                <td> <?php echo number_format($_SESSION['price'], 2); ?></td>
                              </tr>

                          </tbody>
                      </table>
                            <?php
                            $subtotal = $_SESSION['price'];
                            $tax = $subtotal * 0.1;
                            $total = $subtotal + $tax;
                            ?>

                      <div class="invoice-body-bottom">
                          <div class="invoice-body-info-item border-bottom">
                              <div class="info-item-td text-end text-bold">Sub Total:</div>
                                <div class="info-item-td text-end">₱<?php echo number_format($subtotal, 2); ?></div>
                          </div>
                          <div class="invoice-body-info-item border-bottom">
                                 <div class="info-item-td text-end text-bold">Tax (10%):</div>
                                <div class="info-item-td text-end">₱<?php echo number_format($tax, 2); ?></div>
                          </div>
                          <div class="invoice-body-info-item">
                              <div class="info-item-td text-end text-bold">Total:</div>
                                <div class="info-item-td text-end">₱<?php echo number_format($total, 2); ?></div>
                          </div>
                      </div>
                  </div>
              </div>
              <div class="invoice-foot text-center">
                  <p><span class="text-bold text-center">NOTE:&nbsp;</span>This is computer generated receipt and does not require physical signature.</p>

                  <div class="invoice-btns">
                      <button type="button" class="invoice-btn" onclick="printInvoice()">
                          <span>
                              <i class="fa-solid fa-print"></i>
                          </span>
                          <span>Print</span>
                      </button>
                  </div>
              </div>
          </div>
      </div>
    </div>
    
    <script src="receipt.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous"></script>
  </body>
</html>