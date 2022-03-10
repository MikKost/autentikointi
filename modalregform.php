<?php include('./controllers/register.php'); ?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/style.css">
    <title>PHP User Registration System Example</title>
    <!-- jQuery + Bootstrap JS -->
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <script type="text/javascript">
    // Example starter JavaScript for disabling form submissions if there are invalid fields
    (function() {
    'use strict';
    window.addEventListener('load', function() {
      // Fetch all the forms we want to apply custom Bootstrap validation styles to
      var forms = document.getElementsByClassName('needs-validation');
      // Loop over them and prevent submission
      var validation = Array.prototype.filter.call(forms, function(form) {
        form.addEventListener('submit', function(event) {
          if (form.checkValidity() === false) {
            event.preventDefault();
            event.stopPropagation();
          }
          form.classList.add('was-validated');
        }, false);
      });
    }, false);
  })();

</script> 
</head>

<body>
   

    <script src="/docs/5.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

      <!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#rekisterointi">
  Open modal
</button>

<!-- Modal -->
<div class="modal fade" id="rekisterointi" tabindex="-1" role="dialog" aria-labelledby="rekisterointiLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="rekisterointiLabel">Luo tili</h5>

                    <?php echo $success_msg; ?>
                    <?php echo $email_exist; ?>

                    <?php echo $email_verify_err; ?>
                    <?php echo $email_verify_success; ?>
                    
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form class="needs-validation" novalidate>
          <div class="form-group">
            <label for="exampleInputEmail1">Etunimi</label>
            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" required>
            <div class="invalid-feedback">

                    <?php echo $fNameEmptyErr; ?>
                    <?php echo $f_NameErr; ?>
            </div>
            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Password</label>
            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" required>
            <div class="invalid-feedback">
              Please enter a password
            </div>
          </div>
          <div class="form-check mb-1">
            <input type="checkbox" class="form-check-input" id="exampleCheck1">
            <label class="form-check-label" for="exampleCheck1">Check me out</label>
          </div>
          <button type="submit" class="btn btn-primary">Submit</button>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
 
<!--<div class="App">-->
<div class="modal fade" id="modalRegisterForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
  aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
    <form class="needs-validation" novalidate>
    <form action="" method="post">
      <div class="modal-header text-center">
      
        <h4 class="modal-title w-100 font-weight-bold">Luo tili</h4>

                    <?php echo $success_msg; ?>
                    <?php echo $email_exist; ?>

                    <?php echo $email_verify_err; ?>
                    <?php echo $email_verify_success; ?>

        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body mx-3">
        <div class="md-form mb-4">
          <i class="fas fa-user prefix grey-text"></i>
          <input type="text" name="firstname" id="firstName" class="form-control validate" required>
          <label data-error="wrong" data-success="right" for="firstname">Etunimi</label>
          <br>
                    <?php echo $fNameEmptyErr; ?>
                    <?php echo $f_NameErr; ?>

        </div>
        <div class="md-form mb-4">
          <i class="fas fa-user prefix grey-text"></i>
          <input type="text" name="lastname" id="lastName" class="form-control validate" required>
          <label data-error="wrong" data-success="right" for="lastname">Sukunimi</label>
          <br> 
                    <?php echo $l_NameErr; ?>
                    <?php echo $lNameEmptyErr; ?>

        </div>
        <div class="md-form mb-4">
          <i class="fas fa-envelope prefix grey-text"></i>
          <input type="email" name="email" id="email" class="form-control validate" required>
          <label data-error="wrong" data-success="right" for="email">Sähköpostiosoite</label>
          <br>
                    <?php echo $_emailErr; ?>
                    <?php echo $emailEmptyErr; ?>

        </div>

        <div class="md-form mb-3">
          <i class="fas fa-lock prefix grey-text"></i>
          <input type="password" name="password" id="password" class="form-control validate" required>
          <label data-error="wrong" data-success="right" for="password">Salasana</label>
            <br>
                    <?php echo $_passwordErr; ?>
                    <?php echo $passwordEmptyErr; ?>
        </div>

      </div>
      <div class="modal-footer d-flex justify-content-center">
      <button type="submit" name="submit" id="submit" class="btn btn-outline-primary btn-lg btn-block">Rekisteröidy</button>
 
    </div>
</form>
    </form> 
    </div>
  </div>
</div>
<!--</div>-->

<div class="text-center">
  <a href="" class="btn btn-default btn-rounded mb-4" data-toggle="modal" data-target="#modalRegisterForm">Launch
    Modal Register Form</a>
</div>
</body>


</html>
