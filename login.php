<title>BMS | Login</title>
<?php include 'navbar.php'; ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    
    <!-- Main content -->
    <div class="content">
      <div class="container">
        <div class="row d-flex justify-content-center">

  <?php 
    if(isset($_POST['changepassword'])) {
    $user_Id = $_POST['user_Id'];
    $cpassword = md5($_POST['cpassword']);
    $update = mysqli_query($conn, "UPDATE users SET password='$cpassword' WHERE user_Id='$user_Id'");
      if($update) {
        $_SESSION['message'] = "Password has been changed. Please login to your account.";
        $_SESSION['text'] = "Successfully changed";
        $_SESSION['status'] = "success";
        include 'sweetalert_messages.php';
        echo '<script>window.history.go(+1); </script>';
  ?>

          <div class="col-lg-4 mt-5">
            <div class="card card-outline card-primary">
              <div class="card-header text-center">
                <a href="#" class="h1"><b>Login</b></a>
              </div>
              <div class="card-body">
                <p class="login-box-msg">Sign in to start your session</p>
                <form action="processes.php" method="post" id="quickForm">
                  <div class="input-group">
                    <input type="email" class="form-control" placeholder="email@gmail.com" name="email" id="email"  onkeydown="validation()" onkeyup="validation()" >
                    <div class="input-group-append">
                      <div class="input-group-text">
                        <span class="fas fa-envelope"></span>
                      </div>
                    </div>
                  </div>
                  <!-- FOR INVALID EMAIL -->
                  <div class="input-group mt-1 mb-3">
                    <small id="text" style="font-style: italic;"></small>
                  </div>
                  <div class="input-group mb-3">
                    <input type="password" class="form-control" placeholder="Password" id="password" name="password" minlength="8" required>
                    <div class="input-group-append">
                      <div class="input-group-text">
                        <span class="fas fa-lock"></span>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-8">
                      <div class="icheck-primary">
                        <input type="checkbox" id="remember" id="remember" onclick="myFunction()">
                        <label for="remember">
                          Show password
                        </label>
                      </div>
                    </div>
                    <div class="col-12">
                      <button type="submit" class="btn bg-gradient-primary btn-block" name="login" id="login">Sign In</button>
                    </div>
                  </div>
                </form>
                <p class="mb-1">
                  <a href="forgot-password.php">I forgot my password</a>
                </p>
                <!-- <p class="mb-0">
                  <a href="register.php" class="text-center">Register a new membership</a>
                </p> -->
              </div>
            </div>
          </div>

  <?php } else { ?>

          <div class="col-lg-4 mt-5">
             <section class="content">
              <div class="error-page">
                <h2 class="headline text-warning"> 404</h2>
                <div class="error-content">
                  <h3><i class="fas fa-exclamation-triangle text-warning"></i> Oops! Page not found.</h3>
                  <p>
                    We could not find the page you were looking for.
                    Meanwhile, you may return to <a href="login.php">login</a> page.
                  </p>
                  <form class="search-form">
                    <div class="input-group">
                      <input type="text" name="search" class="form-control" placeholder="Search">

                      <div class="input-group-append">
                        <button type="submit" name="submit" class="btn btn-warning"><i class="fas fa-search"></i>
                        </button>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
            </section>
          </div>

  <?php } } else { ?>

          <div class="row col-lg-12 card card-outline card-primary mt-5">
              <div class="col-lg-8 ">
                  <!-- <img src="images-signature/1fLSnJV.jpg" alt="" class="img-fluid"> -->
              </div>
              <div class="col-lg-4 ">
                  <div class="card-header text-center">
                    <!-- <a href="login.php" class="h1"><b>Login</b></a> -->
                    <a href="login.php" class="h1">
                      <img src="images/logo.png" alt="logo" class="img-fluid" width="100">
                    </a>
                  </div>
                <div class="card-body">
                  <p class="login-box-msg">Sign in to start your session</p>
                  <form action="processes.php" method="post" id="quickForm">
                    <div class="input-group">
                      <input type="email" class="form-control" placeholder="email@gmail.com" name="email" id="email"  onkeydown="validation()" onkeyup="validation()" >
                      <div class="input-group-append">
                        <div class="input-group-text">
                          <span class="fas fa-envelope"></span>
                        </div>
                      </div>
                    </div>
                    <!-- FOR INVALID EMAIL -->
                    <div class="input-group mt-1 mb-3">
                      <small id="text" style="font-style: italic;"></small>
                    </div>
                    <div class="input-group mb-3">
                      <input type="password" class="form-control" placeholder="Password" id="password" name="password" minlength="8" required>
                      <div class="input-group-append">
                        <div class="input-group-text">
                          <span class="fas fa-lock"></span>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-8">
                        <div class="icheck-primary">
                          <input type="checkbox" id="remember" id="remember" onclick="myFunction()">
                          <label for="remember">
                            Show password
                          </label>
                        </div>
                      </div>
                      <div class="col-12">
                        <button type="submit" class="btn bg-gradient-primary btn-block" name="login" id="login">Sign In</button>
                      </div>
                    </div>
                  </form>
                  <p class="mb-1">
                    <a href="forgot-password.php">I forgot my password</a>
                  </p>
                  <!-- <p class="mb-0">
                    <a href="register.php" class="text-center">Register a new membership</a>
                  </p> -->
                </div>
              </div>
          </div>

          
          

  <?php } ?>

        </div>
      </div>
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

<?php include 'footer.php'; ?>

<script>

  function myFunction() {
  var x = document.getElementById("password");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}


  function validation() {
    var email = document.getElementById("email").value;
    var pattern =/.+@(gmail)\.com$/;
    // var pattern =/.+@(gmail|yahoo)\.com$/;
    if(email.match(pattern)) {
        document.getElementById('text').style.color = 'green';
        document.getElementById('text').innerHTML = '';
        document.getElementById('login').disabled = false;
        document.getElementById('login').style.opacity = (1);
    } 
    else {
        document.getElementById('text').style.color = 'red';
        document.getElementById('text').innerHTML = 'Domain must be @gmail.com';
        document.getElementById('login').disabled = true;
        document.getElementById('login').style.opacity = (0.4);
        
    }
  }
</script>