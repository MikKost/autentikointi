<?php include('./controllers/register.php'); ?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="./css/style.css">
    <link href="https://getbootstrap.com/docs/5.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="css/carousel.css?v=1.0" rel="stylesheet">
    
    <title>Luo tili</title>
    <!-- jQuery + Bootstrap JS -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    
</head>

<body>
   
<header>
<?php include('header.php'); ?>
</header>

   <main>
       
    <div class="App">
        <div class="vertical-center">
            <div class="inner-block">
                <form action="" method="post">
                    <h3>Luo tili</h3>

                    <?php echo $success_msg; ?>
                    <?php echo $email_exist; ?>

                    <?php echo $email_verify_err; ?>
                    <?php echo $email_verify_success; ?>

                    <div class="form-group mb-3">
                        <label>Etunimi</label>
                        <input type="text" class="form-control" name="firstname" id="firstName" />

                        <?php echo $fNameEmptyErr; ?>
                        <?php echo $f_NameErr; ?>
                    </div>

                    <div class="form-group mb-3">
                        <label>Sukunimi</label>
                        <input type="text" class="form-control" name="lastname" id="lastName" />

                        <?php echo $l_NameErr; ?>
                        <?php echo $lNameEmptyErr; ?>
                    </div>

                    <div class="form-group mb-3">
                        <label>Sähköposti</label>
                        <input type="email" class="form-control" name="email" id="email" />

                        <?php echo $_emailErr; ?>
                        <?php echo $emailEmptyErr; ?>
                    </div>

                    <div class="form-group mb-3">
                        <label>Salasana</label>
                        <input type="password" class="form-control" name="password" id="password" />

                        <?php echo $_passwordErr; ?>
                        <?php echo $passwordEmptyErr; ?>
                    </div>

                    <button type="submit" name="submit" id="submit" class="btn btn-outline-primary btn-lg btn-block">Sign up
                    </button>
                </form>
            </div>
        </div>
    </div>
<div class="container marketing">
    <hr class="featurette-divider">
</div>
    <footer class="container">
  <?php include('footer.php'); ?>
  </footer>
  </main>
</body>

</html>