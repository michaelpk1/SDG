<?php
 ini_set('error_reporting', E_ALL);
 ini_set('display_errors',1);
$errorMessage = "";
 include("config.php");
    if(isset($_POST['btnlogin'])){
        $email = $_POST['useremail'];
        $pwd = $_POST['userpwd'];
        
      
        $query = "SELECT * FROM users WHERE email = '$email'";
        $result = mysqli_query($conn,$query);
      
        if(mysqli_num_rows($result) < 1 ){
            $errorMessage ='<div id="errorMsg" class="alert alert-danger" role="alert">
                              <strong>Incorrect Username/Email or Password</strong><a class="close" data-dismiss="alert">&times;</a>
                            </div>';
                              
                              
          }elseif(mysqli_num_rows($result) > 0){
      
            while($row =  mysqli_fetch_assoc($result)){
              $hashed_password = $row['password'];
              $id = $row['ID'];
              $user_firstname = $row['firstname'];
              // $user_lastname = $row['lastname'];
            }
      
            // dehash password and compare
            $check_password = password_verify($pwd, $hashed_password);
      
            if(!$check_password){
              
              $errorMessage ='<div id="errorMsg" class="alert alert-danger" role="alert">
                                <strong>Incorrect Username/Email or Password</strong><a class="close" data-dismiss="alert">&times;</a>
                              </div>';
                              
                             
            }else{
      
                // User is valid, create sessions
                session_start();
                // $_SESSION['user_id']
                $_SESSION['user_identity'] = $email;
                $_SESSION['id']=TRUE;
                $_SESSION['logged_in'] = $id;
                
                // set cookies
                // $duration = time(60 * 60 * 24 * 365);

                
            
                // setcookie('User', $user_id, $duration);
                // setcookie('Password', $password, $duration);

                header("Location: public_html/index.php");

        }
      }

  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="public_html/assets/vendors/themify-icons/css/themify-icons.css">
    <!-- Bootstrap + LeadMark main styles -->
	<link rel="stylesheet" href="public_html/assets/css/leadmark.css">
</head>
<body>

    <!-- page Navigation -->
    <nav class="navbar custom-navbar navbar-expand-md navbar-light fixed-top" data-spy="affix" data-offset-top="10">
        <div class="container">
            <a class="navbar-brand" href="public_html/index.php">
                <img src="public_html/assets/imgs/logo.svg" alt="public_html/index.php">
            </a>
            <button class="navbar-toggler ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">                     
                    <li class="nav-item">
                        <a class="nav-link" href="signup.php">Register</a>
                    </li>   <li class="nav-item">
                        <a class="nav-link" href="login.php">Login</a>
                    </li>
    
                </ul>
            </div>
        </div>
    </nav>
    <!-- End Of Second Navigation -->


    <!-- Page Header -->
    <header class="header">
        <div class="overlay">
        <h1 class="subtitle">THE LIFE CHANGERS</h1>

            <h1 class="title">PARTNERSHIP FOR THE GOALS</h1>  
        </div>  
        <div class="shape">
            <svg viewBox="0 0 1500 200">
                <path d="m 0,240 h 1500.4828 v -71.92164 c 0,0 -286.2763,-81.79324 -743.19024,-81.79324 C 300.37862,86.28512 0,168.07836 0,168.07836 Z"/>
            </svg>
        </div>  
        <div class="mouse-icon"><div class="wheel"></div></div>
    </header>
    <!-- End Of Page Header -->


<div class="container mt-5">
    <?=$errorMessage ?>
          <form action="login.php" method="POST" style="width: 400px; margin: auto">
            <div class="form-group">
              <label for="exampleInputEmail1">Email address</label>
              <input type="email" name="useremail" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
              <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1">Password</label>
              <input type="password" name="userpwd" class="form-control" id="exampleInputPassword1">
            </div>
            <button type="submit" name="btnlogin" class="btn btn-primary">Submit</button>
          </form>
      </div>
    <!-- Contact Section -->
    <section id="contact" class="mt-3 section has-img-bg pb-0">
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
                <p class="mb-0 small">&copy; <script>document.write(new Date().getFullYear())</script>, The life Changer Created By <a href="https://www.codeplateaufollows.com" target="_blank">codeplateaufollows.</a>  All rights reserved </p>     
            </footer>
            <!-- End of Page Footer -->  
        </div>
    </section>
	
	<!-- core  -->
    <script src="public_html/assets/vendors/jquery/jquery-3.4.1.js"></script>
    <script src="public_html/assets/vendors/bootstrap/bootstrap.bundle.js"></script>

    <!-- bootstrap 3 affix -->
	<script src="public_html/assets/vendors/bootstrap/bootstrap.affix.js"></script>

    <!-- Isotope -->
    <script src="public_html/assets/vendors/isotope/isotope.pkgd.js"></script>

    <!-- LeadMark js -->
    <script src="public_html/assets/js/leadmark.js"></script>
</body>
</html>