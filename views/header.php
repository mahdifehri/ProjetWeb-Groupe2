     <!-- HEADER -->
     <header>
          <div class="container">
               <div class="row">

                    <div class="col-md-4 col-sm-3">
                    <p>Welcome to Healing.tn</p>
                    </div>
                         
                    <div class="col-md-8 col-sm-7 text-align-right">
                         <span class="phone-icon"><i class="fa fa-phone"></i> 96-700-780</span>
                         <span class="date-icon"><i class="fa fa-calendar-plus-o"></i> 6:00 AM - 10:00 PM (Mon-Fri)</span>
                         <span class="email-icon"><i class="fa fa-envelope-o"></i> <a href="#">info@healing.tn</a></span>
                    </div>


               </div>
          </div>
     </header>


     <!-- MENU -->
     <section class="navbar navbar-default navbar-static-top" role="navigation">
          <div class="container">

               <div class="navbar-header">
                    <button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                         <span class="icon icon-bar"></span>
                         <span class="icon icon-bar"></span>
                         <span class="icon icon-bar"></span>
                    </button>

                    <!-- lOGO TEXT HERE -->
                    <a href="index.html" class="navbar-brand"><img src="../images/healing.jpg" width="167.875" height="45"></a>
               </div>

               <!-- MENU LINKS -->
               <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-right">
                    <li><a href="acceuil.php" class="smoothScroll">Home</a></li>
                         
                         <li><a href="forum.php" class="smoothScroll">Forum</a></li>
                         <li><a href="#news" class="smoothScroll">News</a></li>
                         <li><a href="#google-map" class="smoothScroll">Contact</a></li>
                         <li><a href="#appointment">Make an appointment</a></li>
                         
          

            <?php
            if (!$loggedIn)
            echo '
                        <a class="btn btn-primary" href="creercompte.php" class="smoothScroll">Register</a>
                        <a class="btn btn-success" href="Login.php" class="smoothScroll">Log In</a>
                        
                ';
               /* echo '
                        <button class="btn btn-primary" data-toggle="modal" data-target="#registerModal">Register</button>
                        <button class="btn btn-success" data-toggle="modal" data-target="#logInModal">Log In</button>
                ';*/
            else
                echo '
                    <a href="../controller/logout.php" class="btn btn-warning">Log Out</a>
                ';
            ?>

                    </ul>
               </div>

          </div>
     </section>
