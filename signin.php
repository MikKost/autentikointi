<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link rel="stylesheet" href="css/style.css">
    <link href="https://getbootstrap.com/docs/5.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="css/carousel.css?v=1.0" rel="stylesheet">

    <title>Kirjaudu sisään</title>
    <!-- jQuery + Bootstrap JS -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    
    
</head>

<body>

    <!-- Header -->
    <header>
    <?php include('header.php'); ?>
    </header>
<main>
    <!-- Login script -->
    <?php include('./controllers/login.php'); ?>

    <!-- Login form -->
    <div class="App">
        <div class="vertical-center">
            <div class="inner-block">

                  <form action="controllers/login.php" method="post">
                    <h3>Kirjaudu sisään</h3>

                    <?php echo $accountNotExistErr; ?>
                    <?php echo $emailPwdErr; ?>
                    <?php echo $verificationRequiredErr; ?>
                    <?php echo $email_empty_err; ?>
                    <?php echo $pass_empty_err; ?>

                    <div class="form-group mb-3">
                        <label>Sähköposti</label>
                        <input type="email" class="form-control" name="email_signin" id="email_signin" />
                    </div>

                    <div class="form-group mb-3">
                        <label>Salasana</label>
                        <input type="password" class="form-control" name="password_signin"
                            id="password_signin" />
                    </div>

                    <button type="submit" name="login" id="sign_in" class="btn btn-outline-primary btn-lg btn-block">Kirjaudu sisään</button>
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