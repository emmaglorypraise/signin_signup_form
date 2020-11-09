<?php include('server.php') ?>
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
 
  <div class="container">
    <div class="row">
      <div class="col-md-12 justify-content-center align-items-center">
        <div class=" body-wrapper">
          <div class="text-wrapper text-center py-3">
          <h1>Welcome To TalentPool</h1>
          <p>Hire capable hands to do your company's dirty work...</p>
          </div>
          <ul class="nav nav-tabs justify-content-center .nav-fill" id="myTab" role="tablist">
            <li class="nav-item" role="presentation">
              <a class="nav-link active" id="signin-tab" data-toggle="tab" href="#signin" role="tab" aria-controls="signin" aria-selected="true">Sign In</a>
            </li>
            <li class="nav-item" role="presentation">
              <a class="nav-link" id="signup-tab" data-toggle="tab" href="#signup" role="tab" aria-controls="signup" aria-selected="false">Sign Up</a>
            </li>
          </ul>
          <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade show active" id="signin" role="tabpanel" aria-labelledby="signin-tab">
              <div class="row">
                <div class="col-md-6">
                  <img src="./assets/image/undraw_sign_in_e6hj.svg" alt="sign in image" class="img-fluid">
                </div>
                <div class="col-md-6">
                  <form class="mt-5" method="post" action="index.php"  >
                  <?php include('errors.php'); ?>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Name</label>
                      <input type="text" name="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Email" required>
                     
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword1">Password</label>
                      <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Enter Password" required>
                    </div>
                    <button type="submit" class="btn btn-primary" name="login_user">Sign In</button>
                    <a href="/welcome.html" target="_blank" rel="noopener noreferrer"></a>
                  </form>
                </div>
              </div>
            </div>

            <div class="tab-pane fade" id="signup" role="tabpanel" aria-labelledby="signup">
              <div class="row">
                <div class="col-md-6">
                  <form class="mt-5" action="index.php" method="post">
                  <?php include('errors.php'); ?>
                    <div class="form-group">
                      <label for="exampleInputname">Name</label>
                      <input type="text" name="name" class="form-control" value="<?php echo $name; ?>" aria-describedby="name" placeholder="Enter Name" required>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Email Address</label>
                      <input type="email" name="email" class="form-control" value="<?php echo $email; ?>" aria-describedby="emailHelp" placeholder="Enter Email" required>
                      <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword1">Password</label>
                      <input type="password" name="password_1" class="form-control" placeholder="Enter Password" required> 
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword1">Confirm Password</label>
                      <input type="password" name="password_2" class="form-control" placeholder="Confirm Password" required>
                    </div>
                    <div class="form-group form-check">
                      <input type="checkbox" class="form-check-input" id="exampleCheck1" required>
                      <label class="form-check-label" for="exampleCheck1" >I agree to all Terms & Conditions</label>
                    </div>
                    <button type="submit" class="btn btn-primary" name="reg_user">Sign Up</button>
                  </form>
                </div>
                <div class="col-md-6">
                  <img src="./assets/image/undraw_mobile_login_ikmv.svg" alt="sign up image" class="img-fluid">
                </div>
              </div>
            </div>
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