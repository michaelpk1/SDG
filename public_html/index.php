<?php
  session_start();

//   if (!$_SESSION['logged_in']){
//     header("location: login.php");
//   }

  $user= $email = $lastname = "";
  // denied the browsers 

  if (isset($_GET['login'])){
    if ($_GET['login'] == 'successful'){
      $user = $_SESSION['user_firstname'];
      $id = $_SESSION['logged_in'];
      $email = $_SESSION['user_identity'];
      // $user = $_SESSION['user_lastname'];
    }
  }
 
?>

<!DOCTYPE html>
<html lang="en"> 
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Start your development with LeadMark landing page.">
    <meta name="author" content="Devcrud">
    <title>LeadMark Landing page | Free Bootstrap 4.3.x landing page</title>
    <!-- font icons -->
    <link rel="stylesheet" href="assets/vendors/themify-icons/css/themify-icons.css">
    <!-- Bootstrap + LeadMark main styles -->
	<link rel="stylesheet" href="assets/css/leadmark.css">
</head>
<body data-spy="scroll" data-target=".navbar" data-offset="40" id="home">

    <!-- page Navigation -->
    <nav class="navbar custom-navbar navbar-expand-md navbar-light fixed-top" data-spy="affix" data-offset-top="10">
        <div class="container">
            <a class="navbar-brand" href="index.php">
                <img src="assets/imgs/logo.svg" alt="">
            </a>
            <button class="navbar-toggler ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">                     
      
                    <?php
                        if(isset($_SESSION['id'])){
                    ?>
                    <li class="nav-item">
                        <a class="nav-link" href="#service">Our Service</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#about">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#portfolio">our portfolio</a>
                    </li>
                    <!-- <li class="nav-item">
                        <a class="nav-link" href="#blog">Blog</a>
                    </li> -->
                    <li class="nav-item">
                        <a class="nav-link" href="#contact">Contact</a>
                    </li>
                        <li class="nav-item">
                          <a class="nav-link" href="../logout.php">Logout</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="../edit.php?action=<?=$_SESSION['logged_in'] ?>">Edit</a>
                        </li>
                        <li class="nav-item">
                          <span class="nav-link" href="../edit.php?action="><?=$_SESSION['user_identity'] ?></span>
                        </li>
                    <?php
                        }else{
                    ?>
                      <li class="nav-item">
                        <a class="nav-link" href="../signup.php">Register</a>
                      </li>   
                      <li class="nav-item">
                          <a class="nav-link" href="../login.php">Login</a>
                      </li>
                    <?php
                        }
                    ?>

                </ul>
            </div>
        </div>
    </nav>
    <!-- End Of Second Navigation -->

    <!-- Page Header -->
    <header class="header">
        <div class="overlay">
            <h1 class="subtitle">THE LIFE CHANGERS</h1>
            <h1 class="title">PARTNERSHIPS FOR THE GOALS</h1>  
        </div>  
        <div class="shape">
            <svg viewBox="0 0 1500 200">
                <path d="m 0,240 h 1500.4828 v -71.92164 c 0,0 -286.2763,-81.79324 -743.19024,-81.79324 C 300.37862,86.28512 0,168.07836 0,168.07836 Z"/>
            </svg>
        </div>  
        <div class="mouse-icon"><div class="wheel"></div></div>
    </header>
    <!-- End Of Page Header -->

    <?php
        if(isset($_SESSION['id'])){
    ?>
     <!-- Service Section -->
     <section  id="service" class="section pt-0">
        <div class="container">
            <h6 class="section-title text-center">Our Service</h6>
            <h6 class="section-subtitle text-center mb-5 pb-3">Partnerships for the goals.</h6>

            <div class="row">
                <div class="col-md-4">
                    <div class="card mb-4 mb-md-0">
                        <div class="card-body">
                            <small class="text-primary font-weight-bold">01</small>
                            <h5 class="card-title mt-3"> Partnership for the goals<h5>
                            <p class="mb-0">Strengthen the means of implementation and revitalize the global partnership for sustainable development</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card mb-4 mb-md-0">
                        <div class="card-body">
                            <small class="text-primary font-weight-bold">02</small>
                            <h5 class="card-title mt-3"> Project Management <h5>

                            <p class="mb-0">TLC has trained leaders who can manage projects.
                                 We have a team who can work with all SDGoals, within our given 
                                 constraints.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card mb-4 mb-md-0">
                        <div class="card-body">
                            <small class="text-primary font-weight-bold">03</small>
                            <h5 class="card-title mt-3">Consultancy<h5>
                            <p class="mb-0">We provide professional expert advice to help companies or organisations achieve their goals in security, marketing, financial control, digital transformation, human resources and in many other specialized fields....</p>
                        </div>
                    </div>
                </div>              
            </div>
        </div>
    </section>
    <!-- End OF Service Section -->

    <!-- About Section -->
    <section class="section" id="about">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-md-6 pr-md-5 mb-4 mb-md-0">
                    <h6 class="section-title mb-0">About Organisation</h6>
                    <h6 class="section-subtitle mb-4">The Life Changer</h6>
                    <p>We are a group of individuals working based on the <b>SDG</b> goal 17 which is 
                        <b>PARTNERSHIP FOR THE GOALS</b> and we are out to render help to people around us 
                        who cant afford the necessary  amenities of life.. we are out to <b>MAKE A DIFFERENCE.....
                        </b> </p>
                    <img src="assets/imgs/teamone" alt="" class="w-100 mt-3 shadow-sm">
                </div>
                <div class="col-md-6 pl-md-5">
                    <div class="row">
                        <div class="col-6">
                            <img src="assets/imgs/teamone" alt="" class="w-100 shadow-sm">
                        </div>
                        <div class="col-6">
                            <img src="assets/imgs/teamtwo" alt="" class="w-100 shadow-sm">
                        </div>
                        <div class="col-12 mt-4">
                           <p><b>Our Approach: </b> To supports rural and urban residents taking the lead to build their community's future through technology</p>
                            <p><b>Our Vision:</b> Our vision is  building and improving partnership on the sustainable development goals in communities. 
                            To strengthen cooperation between developing and underdeveloped states.</p>
                            <p><b>Our Goals:</b> Our Goal is to create awareness of the SDGs in every home and have at least one tech person in every family on Plateau State by 2025</p>
                        </div>
                    </div>
                </div>
            </div>              
        </div>
    </section>
    <!-- End OF About Section -->

    <!-- Portfolio Section -->
    <section id="portfolio" class="section portfolio-section">
        <div class="container">
            <h6 class="section-title text-center">Our Portfolio</h6>
            <h6 class="section-subtitle mb-5 text-center">partnership for the goals</h6>
            <div class="filters">
                <a href="#" data-filter=".new" class="active">
                    Staffs
                </a>
                <a href="#" data-filter=".advertising">
                    Advertising
                </a>
                <a href="#" data-filter=".branding">
                    Branding
                </a>
                <!-- <a href="#" data-filter=".web">
                    Web
                </a> -->
            </div>
            <div class="portfolio-container"> 
                <div class="col-md-6 col-lg-4 web new">
                    <div class="portfolio-item">
                        <img src="assets/imgs/Rit.jpg" class="img-fluid" alt="Download free bootstrap 4 admin dashboard, free boootstrap 4 templates">
                        <div class="content-holder">
                            <a class="img-popup" href="assets/imgs/web-1.jpg"></a>
                            <div class="text-holder">
                                <h6 class="title">Board Member</h6>
                                <p class="subtitle">RIT</p>
                                <p>Rit is an Enginner in the making,a junior developer at code plateau and Co Director.She is an advocate
                                for demystifying technology to benefit eve</p>
                            </div>
                        </div>   
                    </div>             
                </div>
                <div class="col-md-6 col-lg-4 web new">
                    <div class="portfolio-item">
                        <img src="assets/imgs/chunji.jpg" class="img-fluid" alt="Download free bootstrap 4 admin dashboard, free boootstrap 4 templates">
                        <div class="content-holder">
                            <a class="img-popup" href="assets/imgs/web-2.jpg"></a>
                            <div class="text-holder">
                            <h6 class="title">Board Member</h6>
                            <p class="subtitle">Chunji</p>
                            <p class="subtitle">Chunji is a digital marketer,consultant, a promoter and a developer at code plateau.He is
                                passionate about sustainable developer through technology
                            </p>
                           
                        </div>
                        </div> 
                    </div>                         
                </div>
                <div class="col-md-6 col-lg-4 web new">
                    <div class="portfolio-item">
                        <img src="assets/imgs/molkyes.jpg" class="img-fluid" alt="Download free bootstrap 4 admin dashboard, free boootstrap 4 templates">
                        <div class="content-holder">
                            <a class="img-popup" href="assets/imgs/web-2.jpg"></a>
                            <div class="text-holder">
                                <h6 class="title">Board Member</h6>
                                <p class="subtitle">Molkyes</p>
                                <p class="subtitle">Molkyes is a board member and a developer at code plateau who is passionate about creating connections,facilating
                                    collaboartion and holds strong value of joy in everything he dies
                                </p>

                            </div>
                        </div> 
                    </div>                         
                </div>
                <div class="col-md-6 col-lg-4 web new">
                    <div class="portfolio-item">
                        <img src="assets/imgs/yeipyeng.jpg" class="img-fluid" alt="Download free bootstrap 4 admin dashboard, free boootstrap 4 templates">                         
                        <div class="content-holder">
                            <a class="img-popup" href="assets/imgs/web-2.jpg"></a>
                            <div class="text-holder">
                                <h6 class="title">Board Member</h6>
                                <p class="subtitle">Yeipyeng</p>
                                <p class="subtitle">Yeipyeng is a developer that is passionate about creating a world where every young girl and woman is empowered
                                     with  digital skill to make a difference.Acknowledges the role technology plays in connecting residents and organization
                                </p>

                            </div>
                        </div>    
                    </div>              
                </div> 
                <div class="col-md-6 col-lg-4 web">
                    <div class="portfolio-item">
                        <img src="assets/imgs/yeipyeng.jpg" class="img-fluid" alt="Download free bootstrap 4 admin dashboard, free boootstrap 4 templates">
                        <div class="content-holder">
                            <a class="img-popup" href="assets/imgs/web-4.jpg"></a>
                            <div class="text-holder">
                            </div>
                        </div>
                    </div>                                                     
                </div>
                <div class="col-md-6 col-lg-4 web new">
                    <div class="portfolio-item">
                        <img src="assets/imgs/buddam.jpg" class="img-fluid" alt="Download free bootstrap 4 admin dashboard, free boootstrap 4 templates">
                        <div class="content-holder">
                            <a class="img-popup" href="assets/imgs/web-2.jpg"></a>
                            <div class="text-holder">
                                <h6 class="title">Board Member</h6>
                                <p class="subtitle">Buddam</p>
                                <p class="subtitle">Buddam is a community worker,a developer and a board member.she embrace collaboration passionately
                                     to manifest inclusive and positive change
                                </p>

                            </div>
                        </div> 
                    </div>                         
                </div>
                <div class="col-md-6 col-lg-4 web new">
                    <div class="portfolio-item">
                        <img src="assets/imgs/an.jpg" class="img-fluid" alt="Download free bootstrap 4 admin dashboard, free boootstrap 4 templates">
                        <div class="content-holder">
                            <a class="img-popup" href="assets/imgs/web-2.jpg"></a>
                            <div class="text-holder">
                                <h6 class="title">Board Member</h6>
                                <p class="subtitle">Anthony</p>
                                <p class="subtitle">Anthony is a Diplomatic Historian in the making,a Tech Enthusiast.he is inspired to connect resource to a positive difference
                                     locally and globally with skills in project management,, grant writing, teaching,development and strategic planning
                                </p>
                                <p></p>

                            </div>
                        </div> 
                    </div>                         
                </div>
                <div class="col-md-6 col-lg-4 web new">
                    <div class="portfolio-item">
                        <img src="assets/imgs/john.jpg" class="img-fluid" alt="Download free bootstrap 4 admin dashboard, free boootstrap 4 templates">
                        <div class="content-holder">
                            <a class="img-popup" href="assets/imgs/web-2.jpg"></a>
                            <div class="text-holder">
                                <h6 class="title">Board Member</h6>
                                <p class="subtitle">John</p>
                               <p class="subtitle">John is a tech specialist who specializes in designing websites to meet nonprofit
                                 and community needs. He is advocate for Gender eqaulity and climate action
                               </p>

                            </div>
                        </div> 
                    </div>                         
                </div>
                <div class="col-md-6 col-lg-4 web">
                    <div class="portfolio-item">
                        <img src="assets/imgs/" class="img-fluid" alt="Download free bootstrap 4 admin dashboard, free boootstrap 4 templates">
                        <div class="content-holder">
                            <a class="img-popup" href="assets/imgs/web-4.jpg"></a>
                            <div class="text-holder">
                                <h6 class="title"></h6>
                                <p class="subtitle"></p>
                            </div>
                        </div>
                    </div>                                                     
                </div>

                <!-- <div class="col-md-6 col-lg-4 advertising"> 
                    <div class="portfolio-item">
                        <img src="assets/imgs/advertising-1.jpg" class="img-fluid" alt="Download free bootstrap 4 admin dashboard, free boootstrap 4 templates">                               
                        <div class="content-holder">
                            <a class="img-popup" href="assets/imgs/advertising-1.jpg"></a>
                            <div class="text-holder">
                                <h6 class="title">ADVERSITING</h6>
                                <p class="subtitle">Expedita corporis doloremque velit in totam!</p>
                            </div>
                        </div>
                    </div>                                                       
                </div>  -->
                <div class="col-md-6 col-lg-4 web new">
                    <div class="portfolio-item">
                        <img src="assets/imgs/pk.jpg" class="img-fluid" alt="Download free bootstrap 4 admin dashboard, free boootstrap 4 templates">  
                       <div class="content-holder">
                            <a class="img-popup" href="assets/imgs/web-3.jpg"></a>
                            <div class="text-holder">
                                <h6 class="title">Board Member</h6>
                                <p class="subtitle">Michael</p>
                                <p class="subtitle">Michael is tech guru,web developer at code code plateau.He is also an advocate for zero
                                hunger and sustainable agriculture through technology
                                </p>

                            </div>
                        </div>
                    </div>                                                     
                </div>
                <div class="col-md-6 col-lg-4 advertising new">
                    <div class="portfolio-item">
                        <img src="assets/imgs/code.jpg" class="img-fluid" alt="Download free bootstrap 4 admin dashboard, free boootstrap 4 templates">       
                       <div class="content-holder">
                            <a class="img-popup" href="assets/imgs/advertising-3.jpg"></a>
                            <div class="text-holder">
                                <h6 class="title">code plateau</h6>
                                <p class="subtitle">technology</p>
                                <p class="subtitle">we train people on technology</p>

                            </div>
                        </div>
                    </div>                                                       
                </div> 
                <!-- <div class="col-md-6 col-lg-4 advertising new"> 
                    <div class="portfolio-item">
                        <img src="assets/imgs/advertising-4.jpg" class="img-fluid" alt="Download free bootstrap 4 admin dashboard, free boootstrap 4 templates">            
                        <div class="content-holder">
                            <a class="img-popup" href="assets/imgs/advertising-4.jpg"></a>
                            <div class="text-holder">
                                <h6 class="title">Advertisement</h6>
                                <p class="subtitle">Available on request</p>
                                
                            </div>
                        </div>
                    </div>
                            
                </div>  -->
                <!-- <div class="col-md-6 col-lg-4 branding new">
                    <div class="portfolio-item">
                        <img src="assets/imgs/branding-1.jpg" class="img-fluid" alt="Download free bootstrap 4 admin dashboard, free boootstrap 4 templates">                        
                        <div class="content-holder">
                            <a class="img-popup" href="assets/imgs/branding-1.jpg"></a>
                            <div class="text-holder">
                                <h6 class="title">Advertisement</h6>
                                <p class="subtitle">Available on request</p>



                            </div>
                        </div> 
                    </div>
                </div>  -->
                <div class="col-md-6 col-lg-4 branding">
                    <div class="portfolio-item">
                        <img src="assets/imgs/branding-2.jpg" class="img-fluid" alt="Download free bootstrap 4 admin dashboard, free boootstrap 4 templates">  
                        <div class="content-holder">
                            <a class="img-popup" href="assets/imgs/branding-2.jpg"></a>
                            <div class="text-holder">
                                <h6 class="title">Advertisement</h6>
                                <p class="subtitle">Available on reques</p>
                        

                            </div>
                        </div>
                    </div>                                                     
                </div> 
                <!-- <div class="col-md-6 col-lg-4 branding new">
                    <div class="portfolio-item">
                        <img src="assets/imgs/branding-3.jpg" class="img-fluid" alt="Download free bootstrap 4 admin dashboard, free boootstrap 4 templates">   
                        <div class="content-holder">
                            <a class="img-popup" href="assets/imgs/branding-3.jpg"></a>
                            <div class="text-holder">
                                <h6 class="title">Advertisement</h6>
                                <p class="subtitle">Available on reques</p>
                                

                            </div>
                        </div>
                    </div>                                                    
                </div>  -->
                <div class="col-md-6 col-lg-4 branding">
                    <div class="portfolio-item">
                        <img src="assets/imgs/branding-4.jpg" class="img-fluid" alt="Download free bootstrap 4 admin dashboard, free boootstrap 4 templates">                      
                        <div class="content-holder">
                            <a class="img-popup" href="assets/imgs/branding-4.jpg"></a>
                            <div class="text-holder">
                                <h6 class="title">Advertisement</h6>
                                <p class="subtitle">Available on reques</p>
                                

                            </div>
                        </div>
                    </div>                                                      
                </div> 
                <div class="col-md-6 col-lg-4 branding">
                    <div class="portfolio-item">
                        <img src="assets/imgs/branding-5.jpg" class="img-fluid" alt="Download free bootstrap 4 admin dashboard, free boootstrap 4 templates">          
                        <div class="content-holder">
                            <a class="img-popup" href="assets/imgs/branding-5.jpg"></a>
                            <div class="text-holder">
                                <h6 class="title">Advertisement</h6>
                                <p class="subtitle">Available on reques</p>
                                

                            </div>
                        </div>
                    </div>                                                   
                </div>
            </div>   
        </div>            
    </section>

    <section class="section" id="testmonial">
        <div class="container">
            <h6 class="section-title text-center mb-0">Volunteers</h6>
            <h6 class="section-subtitle mb-5 text-center">What Our Volunteers Says</h6>
            <div class="row">
                <div class="col-md-4 my-3 my-md-0">
                    <div class="card">
                        <div class="card-body">
                            <div class="media align-items-center mb-3">
                                <img class="mr-3" src="assets/imgs/Ruth.jpg" alt="">
                                <div class="media-body">
                                    <h6 class="mt-1 mb-0">Ruth</h6>
                                    <small class="text-muted mb-0">Business woman</small>     
                                </div>
                            </div>
                            <p class="mb-0">To build a better world word,we need to be supportive,empathetic,inventive,passionate and above all cooperative.

</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 my-3 my-md-0">
                    <div class="card">
                        <div class="card-body">
                            <div class="media align-items-center mb-3">
                                <img class="mr-3" src="assets/imgs/bawa.jpg" alt="">
                                <div class="media-body">
                                    <h6 class="mt-1 mb-0">Bawa </h6>
                                    <small class="text-muted mb-0">Code Plateau Instructor</small>      
                                </div>
                            </div>
                            <p class="mb-0">international investment and support is needed to ensure innovative technological development,fair trade and market access,especially for developing countries. </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 my-3 my-md-0">
                    <div class="card">
                        <div class="card-body">
                            <div class="media align-items-center mb-3">
                                <img class="mr-3" src="assets/imgs/bangat.jpg" alt="">
                                <div class="media-body">
                                    <h6 class="mt-1 mb-0">Bankat Mananaf</h6>
                                    <small class="text-muted mb-0">Code Plateau Instructor</small>        
                                </div>
                            </div>
                            <p class="mb-0">The Global Goals can  only be met if we work together.international investment and support is needed
                                 to ensure innovative technological development,fair trade and market access,especially for developing countries.
                                 To build  a better world word,we need to be supportive,empathetic,inventive,passionate and above all cooperative.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End of Testmonial Section -->

    <!-- Contact Section -->
    <section id="contact" class="section has-img-bg pb-0">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-5 my-3">
                    <h6 class="mb-0">Phone</h6>
                    <p class="mb-4">+23407069449467</p>

                    <h6 class="mb-0">Address</h6>
                    <p class="mb-4">12 old bukuru road plateau state</p>

                    <h6 class="mb-0">Email</h6>
                    <p class="mb-0">thelifechanger@gmail.com</p>
                    <p></p>
                </div>
                <div class="col-md-7">
                    <form>
                        <h4 class="mb-4">Drop Us A Line</h4>
                        <div class="form-row">
                            <div class="form-group col-sm-4">
                                <input type="text" class="form-control text-white rounded-0 bg-transparent" name="name" placeholder="Name">
                            </div>
                            <div class="form-group col-sm-4">
                                <input type="email" class="form-control text-white rounded-0 bg-transparent" name="Email" placeholder="Email">
                            </div>
                            <div class="form-group col-sm-4">
                                <input type="text" class="form-control text-white rounded-0 bg-transparent" name="subject" placeholder="Subject">
                            </div>
                            <div class="form-group col-12">
                                <textarea name="message" id="" cols="30" rows="4" class="form-control text-white rounded-0 bg-transparent" placeholder="Message"></textarea>

                            </div>
                            <div class="form-group col-12 mb-0">
                                <button type="submit" class="btn btn-primary rounded w-md mt-3">Send</button>
                            </div>                          
                        </div>                          
                    </form>
                </div>
            </div>
            <!-- Page Footer -->
            <footer class="mt-5 py-4 border-top border-secondary">
                <p class="mb-0 small">&copy; <script>document.write(new Date().getFullYear())</script>, The life Changer Created By <a href="emmanuelmichaelpk3@gmail.com" target="_blank">codeplateaufollows.</a>  All rights reserved </p>     
            </footer>
            <!-- End of Page Footer -->  
        </div>
    </section>
    <?php
        }
    ?>
	
	<!-- core  -->
    <script src="assets/vendors/jquery/jquery-3.4.1.js"></script>
    <script src="assets/vendors/bootstrap/bootstrap.bundle.js"></script>

    <!-- bootstrap 3 affix -->
	<script src="assets/vendors/bootstrap/bootstrap.affix.js"></script>

    <!-- Isotope -->
    <script src="assets/vendors/isotope/isotope.pkgd.js"></script>

    <!-- LeadMark js -->
    <script src="assets/js/leadmark.js"></script>

</body>
</html>
