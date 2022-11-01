<?php
  session_start();

  if (!$_SESSION['id']){
    $_SESSION['user_identity'];
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

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="public_html/assets/css/leadmark.css">
  <link rel="stylesheet" href="public_html/assets/css/app.css">
  <link rel="stylesheet" href="public_html/assets/vendors/bootstrap-4/css/bootstrap.min.css">
</head>
<body>
<header>
  <nav class="navbar navbar-expand-lg navbar-light bg-primary">
    <a class="navbar-brand text-light" href="index.php"> The Life Changer</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav move-item">
        <li class="nav-item active">
          <a class="nav-link text-light" href="index.php">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-light" href="about.php">About</a>
        </li>
        <li cRlass="nav-item">
          <a class="nav-link text-light" href="contact.php">Contact</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-light " href="target.php">Target</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-light " href="team.php">Team</a>
        </li>

        <?php
          if($_SESSION['id']){
        ?>
            <a class="nav-link dropdown-toggle" id="UserDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
              <img class="img-xs rounded-circle ml-2" id="userImg" src="" alt="Profile image">
            </a>
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="UserDropdown">
              <div class="dropdown-header text-center">
                <!-- <img class="img-md rounded-circle" src="" alt="Profile image"> -->
                <p class="mb-1 mt-3"><?=$user; ?><span class="font-weight-normal"><?php //echo $_SESSION['user_lastname']; ?></span></p>
                <p class="font-weight-light text-muted mb-0"><?=$_SESSION['user_identity'] ?></p>
              </div>
              <a class="dropdown-item" href="edit.php?action=<?php echo $_SESSION['id'] ?>"><i class="dropdown-item-icon icon-user text-primary"></i> My Profile <span class="badge badge-pill badge-danger"></span></a>
              <!-- <a class="dropdown-item"><i class="dropdown-item-icon icon-speech text-primary"></i> Messages</a>
              <a class="dropdown-item"><i class="dropdown-item-icon icon-energy text-primary"></i> Activity</a>
              <a class="dropdown-item"><i class="dropdown-item-icon icon-question text-primary"></i> FAQ</a> -->
              <a href="logout.php" class="dropdown-item btn btn-danger"><i class="dropdown-item-icon icon-power text-primary"></i> LogOut</a>
            </div>
            </li>
            <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="collapse" data-target="offcanvas">
              <span class="icon-menu"></span>
            </button>
        <?php
          }else{    
        ?>
            <li class="nav-item">
              <a class="nav-link text-light" href="login.php">Login</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-light" href="signup.php">Sign Up</a>
            </li>
        <?php
          }
        ?>
              
      </ul> 
    </div>
  </nav>
</header>
<main>
  <div class="main-info">
    <img src="public_html/assets/imgs/headerpk.jpg" class="header-img" style="" alt="">
   <div class="h3 bg-primary text-light">
      <marquee style="background:black;" >For Donations</marquee>
      <h3>ACCOUNT NAME: <b>The Life Changer</b></h3>
      <h3>ACCOUNT NUMBER:<b>0773498404</b></h3>
      <h3>BANK NAME:<b>ACCESS BANK</b></h3>
    </div>
  </div>
</main>
<footer>
  <!-- <img src="pk.jpg" alt="" srcset=""> -->
  <div class="footer-img">
    <div class="footer-txt">
      <div class="container-footer">
        <div class="from-info">
            <h3 class="from-heading">Phone</h3>
            <p>+23407069449467</p>
            <h3 class="from-heading">Address</h3>
            <p>12 OLD BUKURU ROAD PLATEAU STATE JOS, NIGERIA</p>
            <h3 class="from-heading">Email</h3>
            <p>lifechanger@gmail.com</p>
        </div>
        <div class="form">
            <form action="">
              <h3 class="h3-drop">Drop Us A Line </h3>
              <input type="text" name="" placeholder="Name">
              <input type="text" name="" placeholder="Email">
              <input type="text" name="" placeholder="Subject"><br>
              <textarea placeholder="Message"></textarea> 
              <button class="btnb" type="submit"><a class="a-email" href="emmanuelmichaelpk3@gmail.com">Send</a></button>

            </form>
        </div>
      </div>
    </div>
  </div>
</footer>
    
 <script src="public_html/assets/vendors/bootstrap-4/js/jquery.js"></script>
  <script src="public_html/assets/vendors/bootstrap-4/js/bootstrap.min.js"></script>
</body>
</html>