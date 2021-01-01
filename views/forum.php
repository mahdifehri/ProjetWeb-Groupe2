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

//creation de la structure commentaire
include '../controller/createcommentrow.php';
//affichage des commentaires
include '../controller/readcomments.php';
// ajout d'un commentaire
include '../controller/addcomment.php';
//Nombre de commentaire 
include '../controller/numcomment.php';


?>

<!DOCTYPE html>
<html lang="en">
<head>

     <title>Health Template - News Page</title>
<!--

Template 2098 Health

http://www.tooplate.com/view/2098-health

-->
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=Edge">
     <meta name="description" content="">
     <meta name="keywords" content="">
     <meta name="author" content="Tooplate">
     <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

     <link rel="stylesheet" href="../css/bootstrap.min.css">
     <link rel="stylesheet" href="../css/magnific-popup.css">

     <link rel="stylesheet" href="../css/font-awesome.min.css">
     <link rel="stylesheet" href="../css/animate.css">

     <link rel="stylesheet" href="../css/owl.carousel.css">
     <link rel="stylesheet" href="../css/owl.theme.default.min.css">
     <link rel="stylesheet" href="../css/style.css">
     <!-- MAIN CSS -->
     <link rel="stylesheet" href="../css/tooplate-style.css">
    <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"> -->

</head>


<body id="top" data-spy="scroll" data-target=".navbar-collapse" data-offset="50">


     <!-- PRE LOADER -->
     <section class="preloader">
          <div class="spinner">

               <span class="spinner-rotate"></span>
               
          </div>
     </section>

     <?php
     include 'header.php';
     ?>

     <!-- NEWS DETAIL -->
     
     <section id="news-detail" data-stellar-background-ratio="0.5">
          <div class="container">




               <div class="row">

                    <div class="col-md-8 col-sm-7">
                         <!-- NEWS THUMB -->
                         <div class="news-detail-thumb">
                              <h4>FORUM</h4>
                              <h5><b id="numComments"><?php echo $numComments ?> Comments</b></h5>
                              <div class="col-md-12">
                                <textarea class="col-md-9"class="form-control" id="mainComment" placeholder="Add Public Comment" cols="30" rows="2"></textarea>
                                <button   class="btn-primary btn" onclick="isReply = false;" id="addComment">Add Comment</button>
                              </div>
                        
                              <div class="userComments">

</div>
                              

                                <div class="row replyRow" style="display:none">
                                  <div class="col-md-8">
                                    <textarea class="form-control" id="replyComment" placeholder="Add Public Comment" cols="30" rows="1"></textarea><br>
                                     <button style="float:right" class="btn-primary btn" onclick="isReply = true;" id="addReply">Add Reply</button>
                                     <button style="float:right" class="btn-default btn" onclick="$('.replyRow').hide();">Close</button>
                                  </div>
                                </div>

                        
                            
                        
                         </div>
                    </div>

                    <div class="col-md-4 col-sm-5">
                         <div class="news-sidebar">
                              <div class="news-author">
                                   <h4>About the author</h4>
                                   <p>Lorem ipsum dolor sit amet, maecenas eget vestibulum justo imperdiet, wisi risus purus augue vulputate voluptate neque.</p>
                              </div>

                              <div class="recent-post">
                                   <h4>Recent Posts</h4>

                                        <div class="media">
                                             <div class="media-object pull-left">
                                                  <a href="#"><img  src="../images/news-image.jpg" class="img-responsive" alt=""></a>
                                             </div>
                                             <div class="media-body">
                                                  <h4 class="media-heading"><a href="#">Introducing a new healing process</a></h4>
                                             </div>
                                        </div>

                                        <div class="media">
                                             <div class="media-object pull-left">
                                                  <a href="#"><img  src="../images/news-image.jpg" class="img-responsive" alt=""></a>
                                             </div>
                                             <div class="media-body">
                                                  <h4 class="media-heading"><a href="#">About Amazing Technology</a></h4>
                                             </div>
                                        </div>
                              </div>

                              <div class="news-categories">
                                   <h4>Categories</h4>
                                        <li><a href="#"><i class="fa fa-angle-right"></i> Dental</a></li>
                                        <li><a href="#"><i class="fa fa-angle-right"></i> Cardiology</a></li>
                                        <li><a href="#"><i class="fa fa-angle-right"></i> Health</a></li>
                                        <li><a href="#"><i class="fa fa-angle-right"></i> Consultant</a></li>
                              </div>

                              <div class="news-ads sidebar-ads">
                                   <h4>Sidebar Banner Ad</h4>
                              </div>

                              
                         </div>
                    </div>
                    
               </div>
          </div>
     </section>
     
         


     <?php
     include 'footer.php';
     ?>


     <!-- SCRIPTS -->
     <script src="../js/jquery.js"></script>
     <script src="../js/bootstrap.min.js"></script>
     <script src="../js/jquery.sticky.js"></script>
     <script src="../js/jquery.stellar.min.js"></script>
     <script src="../js/jquery.magnific-popup.min.js"></script>
     <script src="../js/magnific-popup-options.js"></script>
     <script src="../js/wow.min.js"></script>
     <script src="../js/smoothscroll.js"></script>
     <script src="../js/owl.carousel.min.js"></script>
     <script src="../js/custom.js"></script>
    <!-- <script src="http://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script> -->
     <?php
     include '../js/forumscript.php';
     ?>
</body>
</html>
