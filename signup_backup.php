<?php include('./controllers/register.php'); ?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="./css/style.css">
    <link href="https://getbootstrap.com/docs/5.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>PHP User Registration System Example</title>
    <!-- jQuery + Bootstrap JS -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    

</head>

<body>
<header>
<?php include('header.html'); ?>
</header>
   
    <div class="App">
    <div class="modal modal-signin position-static d-block bg-secondary py-2" tabindex="-1" role="dialog" id="modalSignin">
  <div class="modal-dialog" role="document">
    <div class="modal-content rounded-5 shadow">
      <div class="modal-header p-5 pb-4 border-bottom-0">
      <form action="" method="post">
        <!-- <h5 class="modal-title">Modal title</h5> -->
        <h2 class="fw-bold mb-0">Luo tili</h2>

                    <?php echo $success_msg; ?>
                    <?php echo $email_exist; ?>

                    <?php echo $email_verify_err; ?>
                    <?php echo $email_verify_success; ?>

      </div>

      <div class="modal-body p-5 pt-0">
        
        <div class="form-group mb-3">
        <label for="floatingText">Etunimi</label>
        <input type="text" class="form-control rounded-4" name="firstname" id="firstName">
            

                        <?php echo $fNameEmptyErr; ?>
                        <?php echo $f_NameErr; ?>

          </div>
          <div class="form-group mb-3">
          <label for="floatingText">Sukunimi</label>
          <input type="text" class="form-control rounded-4" name="lastname" id="lastName">
            

                        <?php echo $l_NameErr; ?>
                        <?php echo $lNameEmptyErr; ?>

          </div>
          <div class="form-group mb-3">
          <label for="floatingInput">Sähköpostiosoite</label>
          <input type="email" class="form-control rounded-4" name="email" id="email">
            

                        <?php echo $_emailErr; ?>
                        <?php echo $emailEmptyErr; ?>

          </div>
          <div class="form-group mb-3">
          <label for="floatingPassword">Salasana</label>
          <input type="password" class="form-control rounded-4" name="password" id="password">
            

                        <?php echo $_passwordErr; ?>
                        <?php echo $passwordEmptyErr; ?>

          </div>
          <button class="w-100 mb-2 btn btn-lg rounded-4 btn-primary" type="submit">Rekisteröidy</button>
          <small class="text-muted">Rekisteröitymällä hyväksyt käyttöehdot.</small>
          <hr class="my-4">
          <h2 class="fs-5 fw-bold mb-3">Or use a third-party</h2>
          <button class="w-100 py-2 mb-2 btn btn-outline-dark rounded-4" type="submit">
            <svg class="bi me-1" width="16" height="16"><use xlink:href="#twitter"/></svg>
            Sign up with Twitter
          </button>
          <button class="w-100 py-2 mb-2 btn btn-outline-primary rounded-4" type="submit">
            <svg class="bi me-1" width="16" height="16"><use xlink:href="#facebook"/></svg>
            Sign up with Facebook
          </button>
          <button class="w-100 py-2 mb-2 btn btn-outline-secondary rounded-4" type="submit">
            <svg class="bi me-1" width="16" height="16"><use xlink:href="#github"/></svg>
            Sign up with GitHub
          </button>
        
        </form>
      </div>
    </div>
  </div>
</div>
</div>
      
  </body>
</html>

