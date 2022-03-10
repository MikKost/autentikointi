<!DOCTYPE html>
<html lang="fi">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <title>Projekti</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/carousel/">

    <!-- Bootstrap core CSS -->
<link href="https://getbootstrap.com/docs/5.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <link href="css/carousel.css?v=1.0" rel="stylesheet">
    <link href="css/style2.css?v=1.0" rel="stylesheet" type="text/css" />
  

  </head>
  <body>
    
<header>
<?php include('header.php'); ?>
</header>

<main>
    
  <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active">
      <div class="kuva">
        <img class="d-block w-100" src="kuvat/tokyo.jpeg" alt="First slide">
        <div class="leipateksti">
          <div class="carousel-caption text-start">
            <h1>Tapaa uusia ihmisiä!</h1>
            <p>Miltä tuntuisi viettää unohtumaton ravintolailta uusien paikallisten kavereiden kanssa hyvän ruoan tai juoman parissa?</p>
            <p><a class="btn btn-lg btn-primary" href="signup.php">Rekisteröidy jo tänään!</a></p>
          </div>
        </div>
        </div>
      </div>
      <div class="carousel-item">
      <div class="kuva">
      <img class="d-block w-100" src="kuvat/seoul.jpeg" alt="Second slide">
      <div class="leipateksti">
          <div class="carousel-caption">
            <h1>Vietä ilta paikallisten tapaan.</h1>
            <p>Sovelluksen käyttäminen on helppoa! Valitse vain missä ja kenen kanssa haluat mennä kokemaan autenttisia ravintolaelämyksiä ja syö ja juo, kuten paikalliset.</p>
            <p><a class="btn btn-lg btn-primary" href="/Projekti/#info">Lue lisää</a></p>
          </div>
        </div>
        </div>
      </div>
      <div class="carousel-item">
      <div class="kuva">
      <img class="d-block w-100" src="kuvat/hong_kong.jpeg" alt="Third slide">
      <div class="leipateksti">
          <div class="carousel-caption text-end">
            
            <h1>Laajennamme toimintaamme jatkuvasti.</h1>
            <p>Sovelluksemme palvelut laajenevat yhä useampaan maahan ja kaupunkiin. Voit esittää meille paikkatoiveita ja me teemme kaikkemme vastataksemme toiveeseesi!</p>
            <p><a class="btn btn-lg btn-primary" href="#">Selaa maita ja kaupunkeja</a></p>
          </div>
        </div>
      </div>
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>


  <!-- Marketing messaging and featurettes
  ================================================== -->
  <!-- Wrap the rest of the page in another container to center all the content. -->

  <div class="container marketing">

    <!-- Three columns of text below the carousel -->
    <div class="row">
      <div class="col-lg-4">
        <svg class="bd-placeholder-img rounded-circle" width="140" height="140" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 140x140" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#777"/><text x="50%" y="50%" fill="#777" dy=".3em">140x140</text></svg>

        <h2>Testi</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        <p><a class="btn btn-secondary" href="#">Linkki &raquo;</a></p>
      </div><!-- /.col-lg-4 -->
      <div class="col-lg-4">
        <svg class="bd-placeholder-img rounded-circle" width="140" height="140" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 140x140" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#777"/><text x="50%" y="50%" fill="#777" dy=".3em">140x140</text></svg>

        <h2>Testi</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        <p><a class="btn btn-secondary" href="#">Linkki &raquo;</a></p>
      </div><!-- /.col-lg-4 -->
      <div class="col-lg-4">
        <svg class="bd-placeholder-img rounded-circle" width="140" height="140" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 140x140" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#777"/><text x="50%" y="50%" fill="#777" dy=".3em">140x140</text></svg>

        <h2>Testi</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        <p><a class="btn btn-secondary" href="#">Linkki &raquo;</a></p>
      </div><!-- /.col-lg-4 -->
      
    </div><!-- /.row -->

    

    <!-- START THE FEATURETTES -->

    <hr class="featurette-divider">

    <div class="row featurette">
      <div class="col-md-7">
        <h2 class="featurette-heading">Testi <span class="text-muted">Testi</span></h2>
        <p class="lead">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
      </div>
      <div class="col-md-5">
        <svg class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 500x500" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#eee"/><text x="50%" y="50%" fill="#aaa" dy=".3em">500x500</text></svg>

      </div>
    </div>

    <hr class="featurette-divider">

    <div class="row featurette">
      <div class="col-md-7 order-md-2">
        <h2 class="featurette-heading">Testi <span class="text-muted">Testi</span></h2>
        <p class="lead">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
      </div>
      <div class="col-md-5 order-md-1">
        <svg class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 500x500" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#eee"/><text x="50%" y="50%" fill="#aaa" dy=".3em">500x500</text></svg>

      </div>
    </div>

    <hr class="featurette-divider">

    <div class="row featurette">
      <div class="col-md-7">
        <h2 class="featurette-heading">Testi. <span class="text-muted">Testi.</span></h2>
        <p class="lead">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
      </div>
      <div class="col-md-5">
        <svg class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 500x500" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#eee"/><text x="50%" y="50%" fill="#aaa" dy=".3em">500x500</text></svg>

      </div>
    </div>

    <hr class="featurette-divider">
    <h2 id="info">Mikä on Projekti?</h2>
    
    
<p class="fs-5 col-md-8">Onko sinulle koskaan ulkomailla ollessasi käynyt niin, että jonakin iltana et vain jaksaisi mennä samaan tuttuun ravintolaan syömään kuin aiemminkin - tai sitten et vain haluaisi viettää iltaasi täyteen ängetyssä turistiloukussa, joka ei ole aitoa paikallista kulttuuria nähnytkään? 
  Entäs jos taas olet ihmisenä vain ujomman puoleinen ja haluaisit kokeilla jotakin uutta, mutta pelkäät iltasi pysähtyvän kielimuuriin tai et vain tiedä minne lähtisit? Tai sitten et muuten vain ole kovinkaan halukas kokeilemaan uusia asioita ilman ulkopuolista tukea? 
  Kuinka mahtavaa se olisikaan, mikäli sinulla olisi reissun aikana mukanasi kaveri joka tietää paikan parhaat ravintolat
  tai kuumimmat menomestat? </p>
  
  <p class="fs-5 col-md-8">Projekti pyrkii vastaamaan juuri tähän! Voit nyt helposti valita itsellesi paikallisen asiantuntijan, joka tuntee kohdemaasi ravintolat, yökerhot tai baarit. 
Mikäli siis epäautenttiset turistirysät, huonot ja ylihintaiset ravintolat tai korkea kielimuuri paikallisväestön kanssa ja siitä johtuvat kiusalliset tilanteet eivät nappaa, lataa Projekti-sovellus ja vietä unohtumaton ravintolailta paikalliseen tapaan paikallisen kielitaitoisen asiantuntijan seurassa! </p>


<hr class="col-3 col-md-2 mb-5">

<div class="row g-5">
  <div class="col-md-6">
    <h2>Lisää tietoa</h2>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
    
  </div>

  <div class="col-md-6">
    <h2>Vielä lisää tietoa</h2>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
    
  </div>
</div>



<hr class="featurette-divider">
    <!-- /END THE FEATURETTES -->

  </div><!-- /.container -->


  <!-- FOOTER -->
  <footer class="container">
  <?php include('footer.php'); ?>
  </footer>
</main>
      
  </body>
 
</html>