

<!DOCTYPE html>
  <html lang="en">
  <head>
    <meta charset="UTF-8">
    <title> Sign Up</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="homehead.css">
  </head>
  <body class="bg-light">

    <nav class="navbar fixed-top bg-body-tertiary" data-bs-theme="dark">
      <div class="container-fluid">
        <span class="navbar-brand mb-0 h1">
          The Moon SPA
        </span>
      </div>
    </nav>
    
    <div class="container mt-5 pt-5">
      <div class="row justify-content-center">
        <div class="col-lg-6">
          <div class="card shadow-lg">
            <div class="card-body">
              <h4 class="card-title text-center mb-4">Create an Account</h4>
              <form action="signup_process.php" method="POST">

                <div class="form-floating mb-3">
                  <input type="text" class="form-control" id="name" name="name" required placeholder="josept">
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
                  <input type="password" class="form-control" id="password" name="password" required placeholder="wewqe">
                  <label for="password" class="form-label">Password</label>
                </div>

                <div class="d-grid">
                  <button type="submit" class="btn btn-primary">Sign Up</button>
                </div>

                <div class="mt-3 text-center">
                  Already have an account? <a href="login.php">Login</a>
                </div>

              </form>
            </div>
          </div>
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
                  - Relieves tense and painful muscles. <br>
                  - Enhances flexibility and blood flow. <br>
                  - Improves quality sleep.
                </p>
              </div>
            </div>


            <div class="card mx-4 col-lg">
              <img src="resources/images/facial-img.jpg" height="200" class="card-img-top object-fit-cover" alt="...">
              <div class="card-body">
                <h5 class="card-title">Facials Treatment</h5>
                <div>
                  Facial treatment that involves washing, exfoliation, impurity extraction, mask application, and moisturizing.  Different skin types and issues, such acne, dryness, or aging indications, are addressed by personalized treatments.  The skin becomes radiant and renewed after receiving a facial, which helps to thoroughly cleanse and revitalize it. </div> <br>
                <p class="card-text">BENEFITS: <br>
                - Cleans pores thoroughly  It eliminates dead skin cells.  <br>
                - The skin is hydrated and nourished. <br>
                - Improves skin texture and tone. <br>
                - Promotes relaxation and stress relief. <br>
                - Can assist in addressing particular skin issues (e.g., dullness, aging, acne).
              </p>
              </div>
            </div>
          
            <div class="card my-4 col-lg">
              <img src="resources/images/Collagen Induction Therapy-img.jpg" height="200" class="card-img-top object-fit-cover" alt="...">
              <div class="card-body">
                <h5 class="card-title">Collagen Induction Therapy</h5>
                <div>
                  LIs a minimally invasive cosmetic technique that involves making tiny, controlled punctures in the skin with a device that has fine needles.  This promotes the body's natural healing process and increases the production of collagen and elastin.  In addition to improving skin texture, it also lessens the visibility of enlarged pores, acne scars, and fine wrinkles.</div> <br>
                <p class="card-text">THE BENEFITS: <br>
                  - Increases natural collagen synthesis.  It lessens wrinkles and fine lines. <br>
                  - Improves skin texture and firmness. <br>
                  - Reduces the appearance of enlarged pores. <br>
                  - Decreases stretch marks and acne scarring.   <br>
                  - Brightens the texture and tone of skin.  <br>
                  - Improves topical product absorption.
                </p>
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
  </body>



</html>

<?php include('footer.php'); ?>



