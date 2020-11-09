<?php 
  session_start(); 

  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: login.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: login.php");
  }
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description"
    content="">
  <link href="./assets/css/bootstrap.css" rel="stylesheet" />
  <link href="./assets/css/main.css" rel="stylesheet" />
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <title>Sign-In/Sign Up Form</title>
</head>

<body>


</div>
  <div class="container">
  <div class="content">
  	<!-- notification message -->
  	<?php if (isset($_SESSION['success'])) : ?>
      <div class="error success" >
      	<h3 class="text-center text-success mt-3">
          <?php 
          	echo $_SESSION['success']; 
          	unset($_SESSION['success']);
          ?>
      	</h3>
      </div>
  	<?php endif ?>
    <div class="row">
      <div class="col-md-12 justify-content-center align-items-center">
        <div class="text-center">
          <div class="text-wrapper">
            <!-- logged in user information -->
            <?php  if (isset($_SESSION['name'])) : ?>
            <h2>Hello <strong><?php echo $_SESSION['name']; ?></strong></h2>
            <?php endif ?>
            
         <h1>Welcome to Talent Pool</h1>
          </div>
          <div>
            <img src="./assets/image/undraw_welcome_3gvl.svg" alt="welcome image" class="img-fluid">
          </div>
          <div class="back-link">
            <p><a href="index.php?logout='1'" style="color: red;">Log out</a></p>
          </div>
        </div>
      </div>
    </div>
  </div>


  <script src="./assets/js/jquery.js"></script>
  <script src="./assets/js/popper.js"></script>
  <script src="./assets/js/bootstrap.js"></script>
  <script src="./assets/js/main.js"></script>

</body>

</html>