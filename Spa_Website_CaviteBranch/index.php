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
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="resources/styles/styles.css">
  </head>
  
  <body>
    
    <div>
      <?php include('header.php');?>

      <div class="container-fluid position-relative  py-3 my-5">

          <div id="carouselExampleCaptions" class="carousel slide carousel-fade" data-bs-ride="carousel">
            <div class="carousel-indicators">
              <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
              <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
              <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
              <div class="carousel-item active" data-bs-interval="2500">
                <video id="playSmooth" class="d-block w-100" style="object-fit: cover; height: 55rem;" autoplay muted loop>
                  <source src="resources/videos/home-videoo2.mp4" type="video/mp4" >
                </video>
                <div class="carousel-caption">
                  <h5 class="fs-1 my-5  text-dark">RELAX YOUR BODY</h5>
                  <p class= "fs-4 " style= "color: black">Let your muscles soften and your stress melt away. Take a deep breath and feel the tension leave your body. True peace begins when your body is fully relaxed!</p>
                </div>
              </div>

              <div class="carousel-item" data-bs-interval="2500">
                <video class="d-block w-100" style="object-fit: cover; height: 55rem;" autoplay muted loop>
                  <source src="resources/videos/home-videoo3.mp4" >
                </video>
                <div class="carousel-caption ">
                  <h5 class="fs-1 my-5 text-dark">STAY PEACE</h5>
                  <p class= "fs-4 " style= "color: black">At our spa, we help you keep calm and let go of stress. Our treatments are designed to soothe your body and mind deeply. You’ll carry that peaceful feeling with you long after your visit!</p>
                </div>
              </div>
              <div class="carousel-item" data-bs-interval="2500">
                <video class="d-block w-100" style="object-fit: cover; height: 55rem;" autoplay muted loop>
                  <source src="resources/videos/home-videoo1.mp4" >
                </video>
                <div class="carousel-caption ">
                  <h5 class="fs-1 my-5  text-dark">LET THE STRESS GO AWAY</h5>
                  <p class= "fs-4 " style= "color: black">Let the soothing touch of the spa melt away your stress and tension. Close your eyes and breathe deeply as calm begins to settle in. Feel your worries fade, leaving you refreshed and completely relaxed!</p>
                </div>
              </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>

      </div>
    </div>

    <div class="container">
      <section>
        <div class="container-fuild">
          <h1 id="services" class="row justify-content-center py-5 text-dark">OUR SERVICES</h1>
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
                  - Improves quality sleep.</p>
                <a href="booking.php" class="btn btn-primary">Book Now</a> <br>
                <br>
                <br>
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
              </p>
                <a href="booking.php" class="btn btn-primary">Book Now</a> <br>
                <br>
                <br>
                <br>
                <br>
                <p>Price: ₱1800</p>
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
                  - Improves skin texture and firmness.  <br>
                  - Reduces the appearance of enlarged pores. <br>
                  - Decreases stretch marks and acne scarring.   <br>
                  - Brightens the texture and tone of skin. <br>
                  - Improves topical product absorption.
                </p>
                <a href="booking.php" class="btn btn-primary">Book Now</a><br>
                <br>
                <br>
                <p>Price: ₱2000</p>
              </div>
            </div>
            
            <div class="card my-4">
              <img src="resources/images/home-img.jpg" height="500" class="card-img-top object-fit-cover" alt="...">
              <div class="card-body">
                <h5 class="card-title">What Is Moon Spa? </h5>
                <div class="card-body">
                  "Relax. Refresh. Renew". Here at Moon Spa, we invite you to step into a world filled with soothing scents, gentle care, and pure calm. Whether you’re here for a rejuvenating facial, a relaxing massage, or simply a peaceful break, you deserve this special moment. Our expert therapists are dedicated to helping you unwind and feel your best. Thank you for choosing Moon Spa we’re honored to be part of your journey to wellness and relaxation. </div>
                </div>
                <div class="card-footer text-body-secondary text-center">
                  <span>Thank you for choosing MoonSpa!</span>
                </div>
              </div>
            </div>

          </div>
        </div>
      </section>
    </div>



  </body>
</html>


<?php 
  include('footer.php');
?>

