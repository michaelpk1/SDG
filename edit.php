<?php
  session_start();

  if (!$_SESSION['logged_in']){
    $_SESSION['email'];
  }else {
    // header("location: login.php");
  }

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

<?php 
  ini_set('error_reporting', E_ALL);
  ini_set('display_errors',1);

  include('config.php');


  if(isset($_POST['btnupdate'])){
      $user= $_POST['userid'];
      $fn = $_POST['txtfn'];
      $ln = $_POST['txtln'];
      $email = $_POST['txtemail'];
    //   $pwd = $_POST['pwd'];
    //   $con_pwd = $_POST['con_pwd'];

    //   echo " <pre>";
    //   exit(print_r($_POST));
    //   echo " </pre>";

                    

            $upquery =  "UPDATE users SET firstname='$fn', lastname='$ln', email='$email' WHERE `ID` = $user";
            $upresult = mysqli_query($conn,$upquery);
            if(!$upresult){
                die(mysqli_error($conn));
            } else {
                echo "<script>window.location.replace('public_html/index.php')</script>";
                // echo "<script>alert('information update')</script>";
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
                    <?php
                        if(isset($_SESSION['id'])){
                    ?>
                        <li class="nav-item">
                          <a class="nav-link" href="logout.php">Logout</a>
                        </li>
                    <?php
                        }else{
                    ?>
                      <li class="nav-item">
                        <a class="nav-link" href="signup.php">Register</a>
                      </li>   
                      <li class="nav-item">
                          <a class="nav-link" href="login.php">Login</a>
                      </li>
                    <?php
                        }
                    ?>
                    <!-- <li class="nav-item">
                        <a href="components.html" class="ml-4 nav-link btn btn-primary btn-sm rounded">Components</a>
                    </li> -->
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

<?php
        if (isset($_GET['action'])){
            $userid = $_GET['action'];
            $query = " SELECT * FROM users WHERE `ID` = '$userid'";
            $result = mysqli_query($conn,$query);

            while($row = mysqli_fetch_assoc($result)){
0 
            
            // $id = $row['No'];
                // echo $row['username'];

            //   echo "<pre>";
            //   exit(print_r($row));
            //   echo "</pre>";
            // }  

         
    ?>
<main>
    <form action="edit.php" method="POST" style="width: 400px; margin: auto">
            <div class="form-group">
              <label for="exampleInputEmail1">First Name</label>
              <input type="text" name="txtfn" class="form-control" value="<?php echo $row['firstname'] ?>" id="exampleInputEmail1" aria-describedby="emailHelp">
              <input type="hidden" name="userid" class="form-control" value="<?php echo $row['ID'] ?>" id="exampleInputEmail1" aria-describedby="emailHelp">
              <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Last Name</label>
              <input type="text" name="txtln" class="form-control" value="<?php echo $row['lastname'] ?>" id="exampleInputEmail1" aria-describedby="emailHelp">
              <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Email address</label>
              <input type="email" name="txtemail" class="form-control" value="<?php echo $row['email'] ?>" id="exampleInputEmail1" aria-describedby="emailHelp">
              <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
            </div>
            <button type="submit" name="btnupdate" class="btn btn-primary">UpDate</button>
          </form>
    <?php
       }
    }
    ?>
</main>
 
  <!-- Contact Section -->
  <section id="contact" class="section mt-3 has-img-bg pb-0">
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