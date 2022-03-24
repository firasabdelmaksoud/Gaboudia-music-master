
    <!-- ##### Header Area Start ##### -->
    <header class="header-area">
        <!-- Navbar Area -->
        <div class="musica-main-menu">
            <div class="classy-nav-container breakpoint-off">
                <div class="container-fluid">
                    <!-- Menu -->
                    <nav class="classy-navbar justify-content-between" id="musicaNav">

                        <!-- Nav brand -->
                       <p> <strong> Gaboudia-music </strong>  </p>

                        <!-- Navbar Toggler -->
                        <div class="classy-navbar-toggler">
                            <span class="navbarToggler"><span></span><span></span><span></span></span>
                        </div>

                        <!-- Menu -->
                        <div class="classy-menu">

                            <!-- close btn -->
                            <div class="classycloseIcon">
                                <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                            </div>

                            <!-- Nav Start -->
                            <div class="classynav">
                                <ul>
                                    <li><a href="index.php">acceuil</a></li>
                                    <li><a href="ajoutReclamationproduit.html">contactez-nous</a></li>
                                    
                                    <?php 
                                $log=session_start();
                                 if(isset($_SESSION['login_user']))
                               {echo "<li><a href='account.php'>Mon Compte</a></li><li><a href='logout.php'>Deconnecter</a></li>";
                                        }
                                  else
                                   {
                                   echo "<li><a href='SeConnecter.php'>Se Connecter</a></li><li><a href='ajouterUtilisateur.php'>S'inscrire</a></li>";
                                      }
                                    ?>

                                    <li><a href="ajouterLivraison.php">livraison</a></li>
                                    <li><a href="#">panier</a>
                                        <ul class="dropdown">
                                            <li><a href="index.php">acceuil</a></li>
                                            <li><a href="about-us.html"> </a></li>
                                            <li><a href="concert-tours.html">Concert &amp; Tours</a></li>
                                            <li><a href="blog.html">News</a></li>
                                            <li><a href="contact.html">Contact</a></li>
                                            <li><a href="elements.html">Elements</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#">produits</a>
                                        <div class="megamenu">
                                            <ul class="single-mega cn-col-4">
                                                <li><a href="index.php">Home</a></li>
                                                <li><a href="about-us.html">About Us</a></li>
                                                <li><a href="concert-tours.html">Concert &amp; Tours</a></li>
                                                <li><a href="blog.html">News</a></li>
                                                <li><a href="contact.html">Contact</a></li>
                                                <li><a href="elements.html">Elements</a></li>
                                            </ul>
                                            <ul class="single-mega cn-col-4">
                                                <li><a href="index.php">Home</a></li>
                                                <li><a href="about-us.html">About Us</a></li>
                                                <li><a href="concert-tours.html">Concert &amp; Tours</a></li>
                                                <li><a href="blog.html">News</a></li>
                                                <li><a href="contact.html">Contact</a></li>
                                                <li><a href="elements.html">Elements</a></li>
                                            </ul>
                                            <ul class="single-mega cn-col-4">
                                                <li><a href="index.php">Home</a></li>
                                                <li><a href="about-us.html">About Us</a></li>
                                                <li><a href="concert-tours.html">Concert &amp; Tours</a></li>
                                                <li><a href="blog.html">News</a></li>
                                                <li><a href="contact.html">Contact</a></li>
                                                <li><a href="elements.html">Elements</a></li>
                                            </ul>
                                            <ul class="single-mega cn-col-4">
                                                <li><a href="index.php">Home</a></li>
                                                <li><a href="about-us.html">About Us</a></li>
                                                <li><a href="concert-tours.html">Concert &amp; Tours</a></li>
                                                <li><a href="blog.html">News</a></li>
                                                <li><a href="contact.html">Contact</a></li>
                                                <li><a href="elements.html">Elements</a></li>
                                            </ul>
                                        </div>
                                    </li>
                                   
                                </ul>

                                <!-- Social Button -->
                                <div class="top-social-info">
                                    <a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a>
                                    <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                    <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                    <a href="#"><i class="fa fa-dribbble" aria-hidden="true"></i></a>
                                    <a href="#"><i class="fa fa-behance" aria-hidden="true"></i></a>
                                    <a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                                </div>

                            </div>
                            <!-- Nav End -->
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- ##### Header Area End ##### -->