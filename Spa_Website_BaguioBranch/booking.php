<?php
session_start();
if (!isset($_SESSION['user_id'])) {
  header("Location: login.php");
  exit();
}

?>



<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Booking Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />
  </head>
  <body class="bg-light">


    <?php 
    include('header.php');
    ?>

    <div class="container mt-5 py-5 col-lg-6 " id="booking-hooker">
      <div class="card shadow rounded-4 ">
        <div class="card-body p-4">
          <h3 class="card-title mb-4 text-center">Book Your Appointment</h3>

          <form action="submit_booking.php" method="POST">
            <div class="form-floating mb-3">
              <input type="text" class="form-control" id="fullname" name="name" required placeholder="justin beiber" />
              <label for="fullname" class="form-label">Full Name</label>  
  
            </div>

            <div class="form-floating mb-3">
              <input type="tel" class="form-control" id="phone" name="phone" required placeholder="29329919"/>
              <label for="phone" class="form-label">Phone Number</label>

            </div>

            <div class="form-floating mb-3">
              <input type="text" class="form-control" id="address" name="address" required placeholder="asjkdasdasjdj"/>
              <label for="address" class="form-label">Address</label>

            </div>  

            <div class="form-floating mb-3">
              <select class="form-select" id= "service" name="service" required>
                 <option value="Aromatherapy Massage">Aromatherapy Massage  - ₱2000</option>
                 <option value="Hot Stone Massage">Hot Stone Massage - ₱2500</option>
                 <option value="Ventosa">Ventosa - ₱3500</option>
              </select>
              <label for="service" class="form-label">Select Service</label>
            </div>

            <div class="form-floating mb-3">
              <input type="date" class="form-control" id="date" name="date" required placeholder="10021"/>
              <label for="date" class="form-label">Preferred Date</label>

            </div>

            <div class="mb-4">
              <label class="form-label">Preferred Type</label>
              
              <div class="form-check">
                <input class="form-check-input" type="radio" name="type" id="Home" value="Home" required />
                <label class="form-check-label" for="Home">At Home</label>
              </div>

              <div class="form-check">
                <input class="form-check-input" type="radio" name="type" id="Commute" value="Commute" />
                <label class="form-check-label" for="Commute">Visit Spa (By Commuting)</label>
              </div>
            </div>

            <div class="d-grid">
              <button type="submit" class="btn btn-primary btn-lg ">Submit Booking</button>
            </div>
          </form>
        </div>
      </div>
    </div>


    <div class="container">
      <section>
        <div class="container-fuild">
          <h1 id="services" class="row justify-content-center py-5">SERVICES</h1>
        </div>

        <div class="container justify-content-center background-color-primary">
          <div class="row justify-content-center">

            <div class="card my-4 col" style="width: 50%;">
              <img src="resources/images/back-massage.png" height="200" class="card-img-top object-fit-cover" alt="...">
              <div class="card-body">
                <h5 class="card-title">Full Body Massage</h5>
                <div>
                 A full body massage is a therapeutic procedure that entails manipulating the soft tissues of the body, usually with a variety of methods such as gliding, tapping, and kneading.  It may also cover the hands and feet. Typically, it covers the neck, shoulders, arms, legs, and back.  In addition to promoting general relaxation and well-being, the massage helps to ease tense muscles, increase circulation, and lower stress.  Lotions or oils used in aromatherapy are frequently utilized to improve the experience!</div>  <br>
                <p class="card-text">BENEFITS: <br>
                  - Stress and anxiety are reduced.  <br>
                  - Relieves tense and painful muscles.  <br>
                  - Enhances flexibility and blood flow. <br>
                  - Improves quality sleep.</p> <br>
                <p>Price: ₱1500</p>
              </div>
            </div>


            <div class="card mx-4 col-lg">
              <img src="resources/images/facial-img.jpg" height="200" class="card-img-top object-fit-cover" alt="...">
              <div class="card-body">
                <h5 class="card-title">Facials Treatment</h5>
                <div>
                 Facial treatment that involves washing, exfoliation, impurity extraction, mask application, and moisturizing.  Different skin types and issues, such acne, dryness, or aging indications, are addressed by personalized treatments.  The skin becomes radiant and renewed after receiving a facial, which helps to thoroughly cleanse and revitalize it. </div> <br>
                <p class="card-text">BENEFITS: <br>
                - Cleans pores thoroughly  It eliminates dead skin cells. <br>  
                - The skin is hydrated and nourished. <br>
                - Improves skin texture and tone. <br>
                - Promotes relaxation and stress relief. <br>
                - Can assist in addressing particular skin issues (e.g., dullness, aging, acne).
              </p> <br>
              <br>
              <br>
              <p>Price: ₱1800 </p>
              </div>
            </div>
          
            <div class="card my-4 col-lg">
              <img src="resources/images/Collagen Induction Therapy-img.jpg" height="200" class="card-img-top object-fit-cover" alt="...">
              <div class="card-body">
                <h5 class="card-title">Collagen Induction Therapy</h5>
                <div>
                   Is a minimally invasive cosmetic technique that involves making tiny, controlled punctures in the skin with a device that has fine needles.  This promotes the body's natural healing process and increases the production of collagen and elastin.  In addition to improving skin texture, it also lessens the visibility of enlarged pores, acne scars, and fine wrinkles.</div> <br>
                <p class="card-text">THE BENEFITS: <br>
                  - Increases natural collagen synthesis  It lessens wrinkles and fine lines. <br>
                  - Improves skin texture and firmness. <br>
                  - Reduces the appearance of enlarged pores. <br>
                  - Decreases stretch marks and acne scarring.   <br>
                  - Brightens the texture and tone of skin. <br>
                  - Improves topical product absorption.
                </p> <br>
                <p> Price: ₱2000</p>
              </div>
            </div>
            
            <div class="card my-4">
              <img src="resources/images/home-img.jpg" height="500" class="card-img-top object-fit-cover" alt="...">
              <div class="card-body">
                <h5 class="card-title">What Is Moon SPA? </h5>
                <div class="card-body">
                  "Relax. Refresh. Renew." <br>
                  Moon Spa is a sanctuary for relaxation and rejuvenation, where you can escape the stresses of daily life.  Our spa offers a variety of services, including massages, facials, and body treatments, all designed to help you unwind and restore your inner peace.  <br>
                   <br>
                </div>
                <div class="card-footer text-body-secondary text-center">
                  Thank you for choosing Moon Spa!
                </div>
              </div>
            </div>

          </div>
        </div>
      </section>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>

<?php 
include('footer.php');
?>

