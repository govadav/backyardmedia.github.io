
<!--
    - Backyard Media 
    - Filename: Aboutus.html
    - created for about us page
    - @author: Chatsuda Rattarasan
    - @author: Ngoc Tran
    - Copyright (c) 2018 Backyard Media Company & XN TEAM (Chatsuda Rattarasan, Ngoc Tran, Haocheng Li)
    - Date: May 29 2018   
    - For the full copyright and license information, please view the LICENSE
--> 

<?php
require_once './phpControl/Includes/authenticate.php'
?>
<!Doctype html>
<html>
   
    <head>
         
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Backyard Media</title>
        <link rel="stylesheet" href="style.css">
         <link rel="stylesheet" href="css/aboutus.css">
       
        <!-- Bootstrap CSS --> 
        <link rel="stylesheet" href="bootstrap/dist/css/bootstrap.min.css">
        
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
        <script type="text/javascript" src="js/popper.min.js"></script>
        <script type="text/javascript" src="bootstrap/dist/js/bootstrap.min.js"></script> 
        <script type="text/javascript" src="js/nav.js"></script>  
        <!--animate-->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
        <!-- <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/animate.css/3.1.0/animate.min.css"> -->
        <script src="js/animated.js" type="text/javascript"></script> 
        <!--waypoints-->
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/2.0.4/waypoints.min.js"></script>
       
    </head>
   
    
    <body>

       
     <!-- header starts here -->
        <header>

        <!-- navigation bar start here  -->
        <nav class="navbar fixed-top navbar-expand-lg bg-custom">
            <a class="navbar-brand mx-md-2" href="index.php">
                <img src="img/logo.png">
            </a>
            <button class="navbar-toggler custom-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="fas fa-bars fa-2x white"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item mr-md-4 mx-0">
                        <a class="nav-link" href="AboutUs.php">AboutUs</a>
                    </li>
                    <li class="nav-item dropdown mr-md-4 mx-0">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Podcasts
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="#">News</a>
                                <a class="dropdown-item" href="#">Laws</a>
                                <a class="dropdown-item" href="#">Technology</a>
                                <a class="dropdown-item" href="#">Art</a>
                                <a class="dropdown-item" href="#">All</a>
                            </li>
                    <li class="nav-item mr-md-4 mx-0">
                            <a class="nav-link" href="#">Blog</a>
                        </li>
                    <li class="nav-item mr-md-4 mx-0">
                        <a class="nav-link" href="Faqs.php">Faqs</a>
                    </li>
                    <li class="nav-item mr-md-4 mx-0">
                            <a class="nav-link" href="contact.php">Contact Us</a>
                    </li>
                </ul>
                <?php
                    // check if user login or not
                    if (isset($_SESSION['username']))
                    {
                        // if user already login, it will come here
                        echo "<p class='blue'>";
                        echo "<i class='fas fa-user fa-2x blue mr-2'></i>";
                        echo   htmlentities($_SESSION['username']);
                        echo "</p>";

                        include './phpControl/includes/logout_button.php';
                    
                    }
                    else{
                        //if not
                        echo "<div class='loginbtn'>";
                        echo "<a href='login.php' class='d-inline btnstyle' role='button'>Log in</a>";
                        echo "</div>";
                        echo "<div class='vl mx-2'></div>";
                        echo "<div class='Signupbtn'> ";
                        echo  "<a href='Signup.php' class='d-inline btnstyle' role='button'>Sign Up</a>";
                        echo "</div>";
                    }
                ?>
            </div>
        </nav>
        <!--- end of header Navigation---->
        
        </header>
        
    <!-- end of the header -->
            
            

        <!-- Body content start here-->
        <h1 class="pagetitle">MEET OUR TEAM</h1>
      
        <div class="AllAboutus container">
            <!-- Amira info-->
            <div class="info row">
                <div class="mt-4 col-sm-12 col-md-4 d-flex justify-content-center">
                    <img class="img-aboutus rounded" src="img/amira.jpeg"> 
                </div>
                
                <div class="col-sm-12 col-md-8">
                    <article>
                        <h2 class="mx-3 mt-4 Name">Amira Valliani</h2>
                        <h5 class="mx-3 subtitle">CO-FOUNDER</h5>
                        <div class="description os-animation" data-os-animation="fadeInRight" data-os-animation-delay="0s">
                            <p>
                                Born and raised in California, Amira Valliani is the co-founder of Backyard Media Company.
                                She also is co-founder of Comet Squares, which makes pocket squares for the 21st century 
                                man who wants to look formal, fun, and fly. Before Backyard, Amira started and ran two 
                                businesses while in graduate school. One was Airbnbros, a company that helped students
                                monetize their apartments while they were away on break. The other was Zomida, which made
                                it easy to buy homecooked food from people in your neighborhood. 
                            </p>
                            <br>
                            <p >
                                Previously, Amira was an aide at the White House and the State Department under the Obama Administration. 
                                She has also done stints at Airbnb and PepsiCo. Amira holds an MPA/MBA from the Harvard Kennedy 
                                School of Government and the Wharton school at the University of Pennsylvania and a BA from Yale, 
                                where she studied political science. Amira's a certified scuba diver who loves eating and Netflixing 
                                in her spare time. 
                            </p>
                            
                        </div>
                        
                        
                    </article>
                    
                </div>
            </div>

            <hr>
            <!-- Sanberg info-->
            <div class="info row">
                
                <div class="mt-4 col-sm-12 col-md-4 d-flex justify-content-center">
                    <img class="img-aboutus rounded" src="img/sanberg.png">
                </div>
                
                <div class="col-sm-12 col-md-8">
                    <article>
                            <h2 class="mx-3 mt-4 Name">Meredith Sandberg</h2>
                            <h5 class="mx-3 subtitle">CO-FOUNDER</h5>
                            
                            <div class="description os-animation" data-os-animation="fadeInRight" data-os-animation-delay="0s">
                                <p>
                                        Hailing from Salt Lake City, Utah, Meredith is the co-founder of Backyard Media Company as well as a full-time student completing her MBA/MPA at the Wharton School at the University of Pennsylvania and Harvard Kennedy School of Government.
                                </p>
                                <p>
                                        Before graduate school, Meredith served in the United States Navy as a surface warfare officer with a nuclear power focus. She worked on two different ships, as well as in the Pentagon as a speechwriter for the first female four-star admiral in the Navy's history.
                                </p>
                                <p>
                                        Meredith graduated from Harvard with a degree in human evolutionary biology. 
                                </p>
                                <p>
                                        Meredith loves traveling - she's proud to be able to say she's been to all 50 states and all 7 continents! In her spare time, Meredith also mentors women veterans who are transitioning from active duty - helping them to find good educational opportunities to augment their leadership experience.
                                </p>
                            </div>
                        
                        </article>
                </div>
        
            </div>

            <hr>
            <!-- Libby info-->
            <div class="info row">
                
                <div class="mt-4 col-sm-12 col-md-4 d-flex justify-content-center">
                    <img class="img-aboutus rounded" src="img/libby.png">
                </div>
                
                <div class="col-sm-12 col-md-8">
                
                    <article>
                        <h2 class=" mx-3 mt-4 Name">Libby Gormley</h2>
                        <h5 class=" mx-3 subtitle">REPORTER</h5>
                        
                        <div class="description os-animation" data-os-animation="fadeInRight" data-os-animation-delay="0s">
                            <p>A Massachusetts native, Libby is a reporter for Backyard Media. Before Backyard,
                                    Libby worked as the audio production intern for Chicago Public Media’s radio
                                    program, Sound Opinions, a show about music. Libby graduated from Elon
                                    University with a degree in print and online journalism. She also works as a nanny
                                    for two young children and as an editor for a book about child development.</p>
                            <p>In her spare time Libby enjoys scrolling PetFinder.com and reading Ina Garten
                                    cookbooks.</p>
                        </div>
                    
                    </article>
                
                </div>
                
            </div>
            
            <hr>
            <!-- Falero info-->
            <div class="info row">
                
                <div class="mt-4 col-sm-12 col-md-4 d-flex justify-content-center">
                    <img class="img-aboutus rounded" src="img/falero.jpg">
                </div>
                
                <div class="col-sm-12 col-md-8">
                    <article>
                        <h2 class="mx-3 mt-4 Name">Michael Falero</h2>
                        <h5 class="mx-3 subtitle">PODCAST REPORTER</h5>
                        <div class="description os-animation" data-os-animation="fadeInRight" data-os-animation-delay="0s">
                            <p>Originally from Charlotte, North Carolina, Michael is a podcast producer and freelance radio journalist. He produces Backyard Media's local politics podcast, Backyard Cambridge, and manages Backyard Media's blog and social media content.</p>
                            <p>Michael graduated from the University of North Carolina at Chapel Hill with a degree in Global Studies, focusing on European politics and French language. While in school he also spent time in China and the United Kingdom. Before transitioning to podcasting and radio, Michael worked in the tech industry as a content writer.</p>
                            <p>Michael loves travelling any chance he can get (his current favorite place is Iceland). He also listens to far too many podcasts, and is guaranteed to mention or suggest one in the course of a conversation</p>
                        </div>
                        </article>
                    
                </div>
                
            </div>
            
            <hr>
            
            <!-- Melissa info-->
            <div class="info row">
                    
                    <div class="mt-4 col-sm-12 col-md-4 d-flex justify-content-center">
                        <img class="img-aboutus rounded" src="img/melissa.jpg">
                    </div>
                
                    <div class="col-sm-12 col-md-8">
                        <article>
                            <h2 class="mx-3 mt-4 Name">Melissa McNickles</h2>
                            <h5 class="mx-3 subtitle">STAFF</h5>
                            <div class="description os-animation" data-os-animation="fadeInRight" data-os-animation-delay="0s">
                                <p class="d-flex">Originally from Worcester, Massachusetts, Melissa has been a Boston transplant for the past seven years. She is a full-time graduate student at Northeastern University, where is is studying professional journalism. She graduated from the University of Massachusetts Boston in 2015 with a degree in psychology. In addition to her studies, Melissa is the associate education director at the Boys & Girls Clubs of Dorchester, where is has been working since 2011. Her strong interest in local and community journalism stems from the many hours she's spent in Dorchester's vibrant neighborhoods. Melissa has previously written for the Dorchester Reporter. </p>
                                <p class="d-flex">In her spare time, Melissa is a dedicated dog mom and an avid nature lover. She enjoys cycling, running, hiking and gardening.</p>
                            </div>
                        </article>
                    </div>
            </div>
        </div>


        

        <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
        <script src='https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/jquery-ui.min.js'></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/2.0.5/waypoints.min.js"></script>
        
        <!-- <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script> -->
    </body>
    
    
    <!--- Footer part -->
        
    <footer>
        <div>
            <!-- <img src="img/logo.png"> -->
            <p class="copy_right">Copyright © Backyard Media 2018</p>
            <div class="d-flex justify-content-center">
            <a href="https://www.facebook.com/backyardmediacompany/" class="facebook fab fa-facebook-square fa-2x mr-2"></a>
            <a href="#" class="twitter fab fa-twitter-square fa-2x"></a>
            </div>
        </div>
    </footer>

    <!-- End of the footer  -->

</html>
