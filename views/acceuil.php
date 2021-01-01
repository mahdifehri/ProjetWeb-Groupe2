<?php
session_start();

$loggedIn = false;

if (isset($_SESSION['loggedIn']) && isset($_SESSION['name'])) {
    $loggedIn = true;
}
$conn = new mysqli('localhost', 'root', '', 'healing');
// ajout d'un utilisateur
include '../controller/register.php';
//Login
include '../controller/login.php';
//structure login
include '../controller/loginform.php';
//structure ajout utilisateur
include '../controller/registerform.php';



?>

<!DOCTYPE html>
<html lang="en">
<head>

     <title>healthing</title>
<!--

Template healthing

http://www.tooplate.com/view/2098-health

-->
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=Edge">
     <meta name="description" content="">
     <meta name="keywords" content="">
     <meta name="author" content="Tooplate">
     <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

     <link rel="stylesheet" href="assets/css/bootstrap.min.css">
     <link rel="stylesheet" href="assets/css/font-awesome.min.css">
     <link rel="stylesheet" href="assets/css/animate.css">
     <link rel="stylesheet" href="assets/css/owl.carousel.css">
     <link rel="stylesheet" href="assets/css/owl.theme.default.min.css">

     <!-- MAIN CSS -->
     <link rel="stylesheet" href="assets/css/tooplate-style.css">

</head>
<body id="top" data-spy="scroll" data-target=".navbar-collapse" data-offset="50">

     <!-- PRE LOADER -->
     <section class="preloader">
          <div class="spinner">

               <span class="spinner-rotate"></span>
               
          </div>
     </section>


     <!-- HEADER -->
     <?php
     include 'header.php';
     ?>

     <!-- HOME -->
     <section id="home" class="slider" data-stellar-background-ratio="0.5">
          <div class="container">
               <div class="row">

                         <div class="owl-carousel owl-theme">
                              <div class="item item-first">
                                   <div class="caption">
                                        <div class="col-md-offset-1 col-md-10">
                                             <h3>Let's make your life happier</h3>
                                             <h1>Healthy Living</h1>
                                        </div>
                                   </div>
                              </div>

                              <div class="item item-second">
                                   <div class="caption">
                                        <div class="col-md-offset-1 col-md-10">
                                             <h3>Aenean luctus lobortis tellus</h3>
                                             <h1>New Lifestyle</h1>
                                        </div>
                                   </div>
                              </div>

                              <div class="item item-third">
                                   <div class="caption">
                                        <div class="col-md-offset-1 col-md-10">
                                             <h3>Pellentesque nec libero nisi</h3>
                                             <h1>Your Health Benefits</h1>
                                        </div>
                                   </div>
                              </div>
                         </div>

               </div>
          </div>
     </section>


     <!-- ABOUT -->
     <section id="about">
          <div class="container">
               <div class="row">

                    <div class="col-md-6 col-sm-6">
                         <div class="about-info">
                              <h2 class="wow fadeInUp" data-wow-delay="0.6s">Bienvenue chez <i class="fa fa-h-square"></i>ealing.tn </h2>
                              
                              </div>
                         </div>
                    </div>
                    
               </div>
          </div>
     </section>


     <!-- TEAM -->
     <section id="team" data-stellar-background-ratio="1">
          <div class="container">
               <div class="row">

                    <div class="col-md-6 col-sm-6">
                         <div class="about-info">
                              <h2 class="wow fadeInUp" data-wow-delay="0.1s">nos médecins</h4>
                         </div>
                    </div>

                    <div class="clearfix"></div>

                    <div class="col-md-4 col-sm-6">
                         <div class="team-thumb wow fadeInUp" data-wow-delay="0.2s">
                              <img src="assets/images/team-image1.jpg" class="img-responsive" alt="">

                                   <div class="team-info">
                                        <h3>Ouni Mohamed </h3>
                                        <p>Médecin générale</p>
                                        <div class="team-contact-info">
                                             <p><i class="fa fa-phone"></i> 70250560</p>
                                             <p><i class="fa fa-envelope-o"></i> <a href="#">générale@gmail.com</a></p>
                                        </div>
                                        <ul class="social-icon">
                                             <li><a href="#" class="fa fa-linkedin-square"></a></li>
                                             <li><a href="#" class="fa fa-envelope-o"></a></li>
                                        </ul>
                                   </div>

                         </div>
                    </div>

                    <div class="col-md-4 col-sm-6">
                         <div class="team-thumb wow fadeInUp" data-wow-delay="0.4s">
                              <img src="assets/images/team-image2.jpg" class="img-responsive" alt="">

                                   <div class="team-info">
                                        <h3>Mahdi Fehri</h3>
                                        <p>Psychiatrie</p>
                                        <div class="team-contact-info">
                                             <p><i class="fa fa-phone"></i> 72631502</p>
                                             <p><i class="fa fa-envelope-o"></i> <a href="#">Psychiatrie@company.com</a></p>
                                        </div>
                                        <ul class="social-icon">
                                             <li><a href="#" class="fa fa-facebook-square"></a></li>
                                             <li><a href="#" class="fa fa-envelope-o"></a></li>
                                             <li><a href="#" class="fa fa-flickr"></a></li>
                                        </ul>
                                   </div>

                         </div>
                    </div>

                    <div class="col-md-4 col-sm-6">
                         <div class="team-thumb wow fadeInUp" data-wow-delay="0.6s">
                              <img src="assets/images/team-image3.jpg" class="img-responsive" alt="">

                                   <div class="team-info">
                                        <h3>Fatma Ben Abdlaziz</h3>
                                        <p>Pédiatrie</p>
                                        <div class="team-contact-info">
                                             <p><i class="fa fa-phone"></i> 71503603</p>
                                             <p><i class="fa fa-envelope-o"></i> <a href="#">Pédiatrie@company.com</a></p>
                                        </div>
                                        <ul class="social-icon">
                                             <li><a href="#" class="fa fa-twitter"></a></li>
                                             <li><a href="#" class="fa fa-envelope-o"></a></li>
                                        </ul>
                                   </div>

                         </div>
                    </div>
                    
               </div>
          </div>
     </section>


   

     <!-- MAKE AN APPOINTMENT -->
     <section id="appointment" data-stellar-background-ratio="3">
          <div class="container">
               <div class="row">

                    <div class="col-md-6 col-sm-6">
                         <img src="assets/images/appointment-image.jpg" class="img-responsive" alt="">
                    </div>

                    <div class="col-md-6 col-sm-6">
                         <!-- CONTACT FORM HERE -->
                         <form id="appointment-form" role="form" method="post" action="#">

                              <!-- SECTION TITLE -->
                              <div class="section-title wow fadeInUp" data-wow-delay="0.4s">
                                   <h2>Reservé votre rendez_vous</h2>
                              </div>

                              <div class="wow fadeInUp" data-wow-delay="0.8s">
                                   <div class="col-md-6 col-sm-6">
                                        <label for="name">Nom</label>
                                        <input type="text" class="form-control" id="name" name="name" placeholder="Full Name">
                                   </div>

                                   <div class="col-md-6 col-sm-6">
                                        <label for="email">Email</label>
                                        <input type="email" class="form-control" id="email" name="email" placeholder="Your Email">
                                   </div>

                                   <div class="col-md-6 col-sm-6">
                                        <label for="date">sélectionner une date</label>
                                        <input type="date" name="date" value="" class="form-control">
                                   </div>

                                   <div class="col-md-6 col-sm-6">
                                        <label for="select">Sélectionnez un département</label>
                                        <select class="form-control">
                                             <option>Cardiologie</option>
                                             <option>Médecine générale</option>
                                             <option>Médecine interne</option>
                                             <option>Psychiatrie</option>
											 <option>Gériatrie</option>
                                             <option>Médecine dentaire</option>
                                             <option>Rhumatologi</option>
                                             <option>Pédiatrie</option>
                                        </select>
                                   </div>

                                   <div class="col-md-12 col-sm-12">
                                        <label for="telephone">Telephone</label>
                                        <input type="tel" class="form-control" id="phone" name="phone" placeholder="Phone">
                                        <label for="Message">Message supplémentaire</label>
                                        <textarea class="form-control" rows="5" id="message" name="message" placeholder="Message"></textarea>
                                        <button type="submit" class="form-control" id="cf-submit" name="submit">Envoyer</button>
                                   </div>
                              </div>
                        </form>
                    </div>

               </div>
          </div>
     </section>

  


     <!-- FOOTER -->
     <footer data-stellar-background-ratio="5">
          <div class="container">
               <div class="row">

                    <div class="col-md-4 col-sm-4">
                         <div class="footer-thumb"> 
                              <h4 class="wow fadeInUp" data-wow-delay="0.4s">Informations de contact</h4>
                             

                              <div class="contact-info">
                                   <p><i class="fa fa-phone"></i> 72450560</p>
								   <p><i class="fa fa-phone"></i> 71000100</p>
                                   <p><i class="fa fa-envelope-o"></i> <a href="#">healing.admiiiin@gmail.com</a></p>
                              </div>
                         </div>
                    </div>

                   

                    <div class="col-md-4 col-sm-4"> 
                         <div class="footer-thumb">
                              <div class="opening-hours">
                                   <h4 class="wow fadeInUp" data-wow-delay="0.4s">Horaires d'ouvertures</h4>
                                   <p>Lundi- Vendredi<span>06:00 - 22:00 </span></p>
                                   <p>Samedi <span>09:00  - 20:00 </span></p>
                                   <p>Dimanche <span>08:00 - 18:00</span></p>
                              </div> 

                              <ul class="social-icon">
                                   <li><a href="#" class="fa fa-facebook-square" attr="facebook icon"></a></li>
                                   <li><a href="#" class="fa fa-twitter"></a></li>
                                   <li><a href="#" class="fa fa-instagram"></a></li>
                              </ul>
                         </div>
                    </div>

                    <div class="col-md-12 col-sm-12 border-top">
                         <div class="col-md-4 col-sm-6">
                              <div class="copyright-text"> 
                                   <p>Copyright &copy; 2020 Healthing.tn </p>
                              </div>
                         </div>
                         <div class="col-md-6 col-sm-6">
                              <div class="footer-link"> 
                                   <a href="#">Paramètres</a>
                                   <a href="#">Aide</a>
                                   <a href="#">Conditions générales</a>
                                   <a href="#">Confidentialité</a>
                              </div>
                         </div>
                         <div class="col-md-2 col-sm-2 text-align-center">
                              <div class="angle-up-btn"> 
                                  <a href="#top" class="smoothScroll wow fadeInUp" data-wow-delay="1.2s"><i class="fa fa-angle-up"></i></a>
                              </div>
                         </div>   
                    </div>
                    
               </div>
          </div>
     </footer>

     <!-- SCRIPTS -->
     <script src="assets/js/jquery.js"></script>
     <script src="assets/js/bootstrap.min.js"></script>
     <script src="assets/js/jquery.sticky.js"></script>
     <script src="assets/js/jquery.stellar.min.js"></script>
     <script src="assets/js/wow.min.js"></script>
     <script src="assets/js/smoothscroll.js"></script>
     <script src="assets/js/owl.carousel.min.js"></script>
     <script src="assets/js/custom.js"></script>

</body>
</html>