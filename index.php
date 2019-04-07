<?php
include "config.php";

?>
<!DOCTYPE html>
<html lang="fr">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>EMO &copy; Expert Medical Opinion </title>
  <link rel="shortcut icon" href="img/EMO1.png">

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom fonts for this template -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
  <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>

  <!-- Custom styles for this template -->
  <link href="css/agency.min.css" rel="stylesheet">
  <link href="./css/style.css" rel="stylesheet">

</head>
<style>
.footer{
  position: absolute;
    right: 0;
    z-index: 999999;
}
.footer a{
  color: white;
}
.footer img{
  height: 36px;
  cursor: pointer;
}
</style>

<body id="page-top">
  <!-- Loader -->
  <div>
      <button  id="myBtn" title="Go to top"><i class="fa fa-chevron-up"></i></button>
  </div>
      
  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
    <div class="container">
      <a class="navbar-brand js-scroll-trigger " href="#page-top" > <img  class="logo" src="img/EMO1.png"></a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <?php echo $lang['menu'] ?>
        <i class="fas fa-bars"></i>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        
        <ul class="navbar-nav text-uppercase ml-auto">
            <li class="nav-item">
                <a class="nav-link js-scroll-trigger" href="#about"><?php echo $lang['demarche'] ?></a>
            </li>
            <li class="nav-item">
                <a class="nav-link js-scroll-trigger" href="#approche"><?php echo $lang['connaitre'] ?></a>
              </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#portfolio"><?php echo $lang['services'] ?></a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#contact"><?php echo $lang['contact'] ?></a>
          </li>
          <li class="nav-item">
           <div class="footer">
             <a href="index.php?lang=fr"><img src="./icons/france.png" alt=""></a>
             <a href="index.php?lang=en"><img src="./icons/united-kingdom.png" alt=""></a>
             <a href="index.php?lang=ar"><img src="./icons/morocco.png" alt=""></a>

          </li>
        </ul>
      </div>
    </div>
  </nav>
  <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="././img/cccc.jpg" class="d-block w-100" alt="...">
          <div class="carousel-caption">
              <h2 class="animated flip" ><?php echo $lang['confort'] ?></h2>
              <a class="btn btn-primary btn-xl text-uppercase js-scroll-trigger" href="#about"><?php echo $lang['consulter'] ?></a>
            </div>
        </div>
        <div class="carousel-item">
          <img src="././img/art1.jpg" class="d-block w-100" alt="...">
          <div class="carousel-caption">
              <h2 class="animated flip" >
              </h2>
              <a class="btn btn-primary btn-xl text-uppercase js-scroll-trigger" href="#approche"><?php echo $lang['a propos'] ?></a>
            </div>
        </div>
        <div class="carousel-item">
          <img src="././img/ding.jpg" class="d-block w-100" alt="...">
          <div class="carousel-caption">
              <h2 class="animated flip" ></h2>
              <a class="btn btn-primary btn-xl text-uppercase js-scroll-trigger" href="#portfolio"><?php echo $lang['service'] ?></a>
            </div>
        </div>
      </div>
      <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>



<section id="about">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 text-center">
          <h2 class="section-heading text-uppercase"><?php echo $lang['passage'] ?></h2>
          <h3 class="section-subheading text-muted"></h3>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-12">
          <ul class="timeline">
            <li>
              <div class="timeline-image">
                <img class="rounded-circle img-fluid" src="img/about/integrative-functional.jpg" alt="">
              </div>
              <div class="timeline-panel">
                <div class="timeline-heading">
                   <!-- <h4>2009-2011</h4>  -->
                  <h4 class="subheading"><?php echo $lang['1'] ?></h4>
                </div>
                 <div class="timeline-body">
                  <!-- <p class="text-muted">Deposer votre dossier</p> -->
                </div> 
              </div>
            </li>
            <li class="timeline-inverted">
              <div class="timeline-image">
                <img class="rounded-circle img-fluid" src="img/about/appareil-digital-bureau-collegues-1161465.jpg" alt="">
              </div>
              <div class="timeline-panel">
                <div class="timeline-heading">
                  <!-- <h4>March 2011</h4>  -->
                  <h4 class="subheading"><?php echo $lang['2'] ?></h4>
                </div>
                 <div class="timeline-body">
                  <!-- <p class="text-muted">L'agence envoit le dossier aux centres medicaux</p> -->
                </div> 
              </div>
            </li>
            <li>
              <div class="timeline-image">
                <img class="rounded-circle img-fluid" src="img/about/3.jpg" alt="">
              </div>
              <div class="timeline-panel">
                <div class="timeline-heading">
                  <!-- <h4>December 2012</h4>  -->
                  <h4 class="subheading"><?php echo $lang['3'] ?></h4>
                </div>
                 <div class="timeline-body">
                  <!-- <p class="text-muted">Communiquer les resultats de client</p> -->
                </div> 
              </div>
            </li>
            <li class="timeline-inverted">
              <div class="timeline-image">
                <h4><?php echo $lang['4'] ?></h4>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </section>
 
  <div class="services-section">
      <div class="inner-width">
        <h1 class="section-title"><?php echo $lang['Nous connaitre'] ?></h1>
        <div class="border"></div>
        <div class="services-container">

          <div class="service-box">
            <div class="service-icon">
              <i class="far fa-hospital"></i>
            </div>
            <div class="service-title"><?php echo $lang['historique'] ?></div>
            <div class="service-desc">
            <?php echo $lang['fonde'] ?>    
            </div>
          </div>

          <div class="service-box">
            <div class="service-icon">
              <i class="fas fa-heartbeat"></i>
            </div>
            <div class="service-title"><?php echo $lang['Composition'] ?></div>
            <div class="service-desc">
            <?php echo $lang['comp'] ?>
            </div>
          </div>

          <div class="service-box">
            <div class="service-icon">
              <i class="fas fa-x-ray"></i>
            </div>
            <div class="service-title"><?php echo $lang['creation'] ?></div>
            <div class="service-desc">
            <?php echo $lang['cre'] ?>            </div>
          </div>

          <div class="service-box">
            <div class="service-icon">
              <i class="fas fa-user-md"></i>
            </div>
            <div class="service-title"><?php echo $lang['langue'] ?></div>
            <div class="service-desc">
            <?php echo $lang['lan'] ?>
              </div>
          </div>

         
        </div>
      </div>
    </div>
<!-- Portfolio -->
<section class="bg-light" id="portfolio">
  <div class="container">
    <div class="row">
      <div class="col-lg-12 text-center">
        <h2 class="section-heading text-uppercase"><?php echo $lang['serv'] ?></h2>
        <h3 class="section-subheading text-muted"><?php echo $lang['ser'] ?></h3>
      </div>
    </div>
    <div class="row">
      <div class="col-md-4 col-sm-6 portfolio-item">
        <a class="portfolio-link" data-toggle="modal" href="#portfolioModal4">
          <div class="portfolio-hover">
            <div class="portfolio-hover-content">
              <i class="fas fa-plus fa-3x"></i>
            </div>
          </div>
          <img class="img-fluid" src="img/portfolio/sfit_py_1910_p2_py_1.JPG" alt="">
        </a>
        <div class="portfolio-caption">
          <h4><?php echo $lang['Avis'] ?></h4>
          <p class="text-muted"><?php echo $lang['avis'] ?></p>
        </div>
      </div>
      <div class="col-md-4 col-sm-6 portfolio-item">
        <a class="portfolio-link" data-toggle="modal" href="#portfolioModal5">
          <div class="portfolio-hover">
            <div class="portfolio-hover-content">
              <i class="fas fa-plus fa-3x"></i>
            </div>
          </div>
          <img class="img-fluid" src="img/portfolio/assurance_medicale-01.jpg" alt="">
        </a>
        <div class="portfolio-caption">
          <h4><?php echo $lang['Assurances'] ?></h4>
          <p class="text-muted"><?php echo $lang['Ass'] ?></p>
        </div>
      </div>
      <div class="col-md-4 col-sm-6 portfolio-item">
        <a class="portfolio-link" data-toggle="modal" href="#portfolioModal6">
          <div class="portfolio-hover">
            <div class="portfolio-hover-content">
              <i class="fas fa-plus fa-3x"></i>
            </div>
          </div>
          <img class="img-fluid" src="img/portfolio/scope-and-chart.jpg" alt="">
        </a>
        <div class="portfolio-caption">
          <h4><?php echo $lang['Check up'] ?></h4>
          <p class="text-muted"><?php echo $lang['Check'] ?></p>
        </div>
      </div>
    </div>
  </div>
</section>
  
 

  <!-- Contact -->
  <section id="contact">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 text-center">
          <h2 class="section-heading text-uppercase"><?php echo $lang['info'] ?>
</h2>
          <h2 class="section-subheading text-muted"><?php echo $lang['ecrire'] ?>

</h2>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-12">
          <form id="contactForm" action="mail.php" method="post" name="sentMessage" onsubmit=" return validation()">
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <input class="form-control" name="name" type="text" placeholder="<?php echo $lang['nom'] ?>" required="required" data-validation-required-message="<?php echo $lang['nm'] ?>">
                  <p class="help-block text-danger"></p>
                </div>
                <div class="form-group">
                  <input class="form-control" name="email" type="email" placeholder="<?php echo $lang['email'] ?>" required="required" data-validation-required-message="<?php echo $lang['mail'] ?>">
                  <p class="help-block text-danger"></p>
                </div>
                <div class="form-group">
                  <input class="form-control" name="phone" type="tel" placeholder="<?php echo $lang['email'] ?>" required="required" data-validation-required-message="<?php echo $lang['numero'] ?>">
                  <p class="help-block text-danger"></p>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <textarea class="form-control" name="message" placeholder="<?php echo $lang['msg'] ?>" required="required" data-validation-required-message="<?php echo $lang['mssg'] ?>"></textarea>
                  <p class="help-block text-danger"></p>
                </div>
              </div>
              <div class="clearfix"></div>
              <div class="col-lg-12 text-center">
                <div id="success"></div>
                <button id="sendMessageButton"  name="submit" class="btn btn-primary btn-xl text-uppercase" type="submit"><?php echo $lang['Envoyer'] ?></button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </section>

  <!-- Footer -->
  <footer>
    <div class="container">
      <div class="row">
        <div class="col-md-4">
          <span class="copyright"> <font size="-1">&copy; <?php echo $lang['copy right'] ?></font></span>
        </div>
        <div class="col-md-4">
          <ul class="list-inline social-buttons">
			  <li class="list-inline-item">
                  <!-- Button to Open the Modal -->
                  <a data-toggle="modal" data-target="#myModal" >
                    <i class="fas fa-map-marker-alt"></i>
                  </a>

            </li>
		     <li class="list-inline-item">
              <a href="#">
                <i class="fab fa-twitter"></i>
              </a>
            </li>
            <li class="list-inline-item">
              <a href="https://www.linkedin.com/company/dr-2/about/" target="_blank">
                  <i class="fab fa-linkedin-in" size:2x></i>
              </a>
            </li>
          </ul>
        </div>
        <div class="col-md-4">
          <ul class="info text-left">
            <li>
              <i class="fa fa-envelope"></i> <span class="text-muted">info@expertmedicalopinion.es</span>
            </li>
            <li>
              <i class="fa fa-phone"></i> <span class="text-muted">+212 539 342 031 </span>
            </li>
      </div>
    </div>
  </footer>

  <!-- Portfolio Modals -->

  


     <!-- The Modal -->
      <div class="modal" id="myModal">
     <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
			<button type="button" class="close" data-dismiss="modal">&times;</button>
          
          
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2218.257107771315!2d-5.810768216946622!3d35.780439805879425!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xc46ebe5faa17ddce!2sDR2+-+Data+Research+%26+Results!5e0!3m2!1sar!2sma!4v1552049403676" width="470" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
         
        </div>
		  
		   <div class="row text-center">
        <div class="col-md-6">
          <a class="btn-floating blue accent-1"><i class="fas fa-map-marker-alt"></i></a>
			<p><?php echo $lang['residence'] ?></p>
          <p><?php echo $lang['loc'] ?></p>
        </div>

        <div class="col-md-6">
          <a class="btn-floating blue accent-1"></a>
		    	<p><i class="fas fa-phone"></i> +212 539 342 031</p>

        <br/>
        <button class="btn btn-primary" data-dismiss="modal" type="button">
          <i class="fas fa-times"></i>
          <?php echo $lang['Fermer'] ?></button>
        </div>
        
      </div>
    </div>
  </div>

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Plugin JavaScript -->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Contact form JavaScript -->
  <script src="js/jqBootstrapValidation.js"></script>
  <script src="js/contact_me.js"></script>

  <!-- Custom scripts for this template -->
  <script src="js/agency.min.js"></script>
  <script src="js/test.js"></script>
  <script src="https://code.jquery.com/jquery-3.3.1.js"></script>

</body>
</html>
