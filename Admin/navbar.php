<?php
    include '../config.php';
    if(isset($_SESSION['admin_Id'])) {
    $id = $_SESSION['admin_Id'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>BMS | Dashboard</title>
  <!---FAVICON ICON FOR WEBSITE--->
  <link rel="shortcut icon" type="image/png" href="images/logo.jpg">
  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../plugins/fontawesome-free/css/all.min.css">
  <!-- Font Awesome -->
  <script src="../plugins/fontawesome-free/js/font-awesome-ni-erwin.js" crossorigin="anonymous"></script>
  <!-- Tempusdominus Bootstrap 4 -->
  <!-- <link rel="stylesheet" href="css/tempudsdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css"> -->
  <!-- iCheck -->
  <!-- <link rel="stylesheet" href="css/icheck-bootstrap/icheck-bootstrap.min.css"> -->
  <!-- JQVMap -->
  <!-- <link rel="stylesheet" href="css/jqvmap/jqvmap.min.css"> -->
  <!-- overlayScrollbars -->
  <!-- <link rel="stylesheet" href="css/overlayScrollbars/css/OverlayScrollbars.min.css"> -->
  <!-- Daterange picker -->
  <!-- <link rel="stylesheet" href="css/daterangepicker/daterangepicker.css"> -->
  <!-- summernote -->
  <!-- <link rel="stylesheet" href="css/summernote/summernote-bs4.min.css"> -->
  <!-- Theme style -->
  <link rel="stylesheet" href="../dist/css/adminlte.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="../plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="../plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="../plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
  <!-- Theme style -->

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
<style>
  body {
    font-family: 'Roboto', sans-serif;
  }
  .modal-content{
    -webkit-box-shadow: 0 5px 15px rgba(0,0,0,0);
    -moz-box-shadow: 0 5px 15px rgba(0,0,0,0);
    -o-box-shadow: 0 5px 15px rgba(0,0,0,0);
    box-shadow: 0 5px 15px rgba(0,0,0,0);
  }
</style>
</head>
<!-- LIGHT MODE -->
<!-- <body class="hold-transition sidebar-mini layout-fixed"> -->
<!-- DARK MODE -->
<!-- <body class="hold-transition dark-mode sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">  -->
<body class="hold-transition sidebar-mini  layout-fixed layout-navbar-fixed layout-footer-fixed"> 
<div class="wrapper">

  <!-- Preloader -->
  <!-- <div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__shake" src="dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60">
  </div> -->

  <!-- Navbar -->
  <!-- LIGHT MODE -->
  <!-- <nav class="main-header navbar navbar-expand navbar-white navbar-light"> -->
  <nav class="main-header navbar navbar-expand navbar-dark">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="dashboard.php" class="nav-link">Home</a>
      </li>
     <!--  <li class="nav-item d-none d-sm-inline-block">
        <a href="contact-us.php" class="nav-link">Contact</a>
      </li> -->
    </ul>

<?php 
    $users = mysqli_query($conn, "SELECT * FROM users WHERE user_Id='$id'");
    $row = mysqli_fetch_array($users);
?>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">

      <!-- <li class="mt-1">
        <a class="mt-3">Today is <?php //echo date("l"); ?> | <?php// echo date("F d, Y"); ?></a>
      </li> -->
       <!-- Messages Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="fa-solid fa-user"></i> Admin <i class="fa-solid fa-caret-down"></i>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <a href="#" class="dropdown-item">
            <div class="media">
              <!-- <img src="../dist/img/user1-128x128.jpg" alt="User Avatar" class="img-size-50 mr-3 img-circle"> -->
              <img src="../images-users/<?php echo $row['image']; ?>" alt="User Image" class="mr-3 img-circle" height="50" width="50">
              <div class="media-body">
                  <h3 class="dropdown-item-title"><?php echo ' '.$row['firstname'].' '.$row['lastname'].' '.$row['suffix'].' '; ?></h3>
                  <p class="text-sm text-muted"><?php echo $row['user_type']; ?></p>
              </div>
            </div>
          </a>
          <div class="dropdown-divider"></div>
            <a type="button" href="profile.php" class="dropdown-item">&nbsp;<i class="fa-solid fa-gear"></i>&nbsp;&nbsp; Profile settings</a>
          <div class="dropdown-divider"></div>
          <!-- DISPLAY LEFT SIDE - LOGOUT  -->
           <a href="#" class="d-flex justify-content-start dropdown-item dropdown-footer" onclick="logout()">&nbsp;<i class="fa-solid fa-power-off"></i>&nbsp;&nbsp; Logout</a>
          <!-- DISPLAY CENTER -->
          <!-- <a type="button" href="#" class="dropdown-item dropdown-footer" onclick="logout()"><i class="fa-solid fa-power-off"></i>&nbsp;&nbsp; Logout</a> -->
        </div>
      </li>

      <!-- Navbar Search -->
      <!-- <li class="nav-item">
        <a class="nav-link" data-widget="navbar-search" href="#" role="button">
          <i class="fas fa-search"></i>
        </a>
        <div class="navbar-search-block">
          <form class="form-inline">
            <div class="input-group input-group-sm">
              <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
              <div class="input-group-append">
                <button class="btn btn-navbar" type="submit">
                  <i class="fas fa-search"></i>
                </button>
                <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                  <i class="fas fa-times"></i>
                </button>
              </div>
            </div>
          </form>
        </div>
      </li> -->

      <!-- Messages Dropdown Menu -->
      <!-- <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-comments"></i>
          <span class="badge badge-danger navbar-badge">3</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <a href="#" class="dropdown-item">
            <div class="media">
              <img src="../dist/img/user1-128x128.jpg" alt="User Avatar" class="img-size-50 mr-3 img-circle">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  Brad Diesel
                  <span class="float-right text-sm text-danger"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">Call me whenever you can...</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item dropdown-footer">See All Messages</a>
        </div>
      </li> -->

      <!-- Notifications Dropdown Menu -->
      <!-- <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-bell"></i>
          <span class="badge badge-warning navbar-badge">15</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <span class="dropdown-item dropdown-header">15 Notifications</span>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-envelope mr-2"></i> 4 new messages
            <span class="float-right text-muted text-sm">3 mins</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-users mr-2"></i> 8 friend requests
            <span class="float-right text-muted text-sm">12 hours</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-file mr-2"></i> 3 new reports
            <span class="float-right text-muted text-sm">2 days</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
        </div>
      </li> -->

      <!-- FULL SCREEN -->
     <!--  <li class="nav-item">
        <a class="nav-link" data-widget="fullscreen" href="#" role="button">
          <i class="fas fa-expand-arrows-alt"></i>
        </a>
      </li> -->
      <!-- END FULL SCREEN -->
      <!-- <li class="nav-item">
        <a class="nav-link" data-widget="control-sidebar" data-controlsidebar-slide="true" href="#" role="button">
          <i class="fas fa-th-large"></i>
        </a>
      </li> -->
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="dashboard.php" class="brand-link">
      <img src="../dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3">
      <span class="brand-text font-weight-light ml-1">iCensus</span>
      <br>
      <span class="brand-text text-sm ml-5 font-weight-light">&nbsp;&nbsp;&nbsp;Pasig City - Brgy. 193</span>
    </a>


    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-4 pb-2 pt-2 mb-3 d-flex">
        <div class="image">
          <?php if($row['image'] == ""): ?>
          <img src="../dist/img/avatar.png" alt="User Avatar" class="img-size-50 img-circle">
          <?php else: ?>
          <img src="../images-users/<?php echo $row['image']; ?>" alt="User Image" style="height: 34px; width: 34px; border-radius: 50%;">
          <?php endif; ?>
        </div>
        <div class="info">
          <a href="profile.php" class="d-block"><?php echo ' '.$row['firstname'].' '.$row['middlename'].' '.$row['lastname'].' '.$row['suffix'].' '; ?></a>
        </div>
      </div>

      

      <!-- SidebarSearch Form -->
      <!--   <div class="form-inline">
          <div class="input-group" data-widget="sidebar-search">
            <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
            <div class="input-group-append">
              <button class="btn btn-sidebar">
                <i class="fas fa-search fa-fw"></i>
              </button>
            </div>
          </div>
        </div> -->

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

          <!-- DROPDOWN NAVIGATION LINK -->
          <!-- <li class="nav-item">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="./index.html" class="nav-link active">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Dashboard v1</p>
                </a>
              </li>
            </ul>
          </li> -->

          <li class="nav-item">
            <a href="dashboard.php" class="nav-link bg-gradient-primary active"><i class="fa-solid fa-gauge"></i><p>&nbsp;&nbsp; Dashboard</p></a>
          </li>
          <li class="nav-item">
            <a href="resident.php" class="nav-link"> <i class="fa-solid fa-user-group"></i><p>&nbsp; Residence</p></a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link"><i class="fa-solid fa-file"></i><p>&nbsp;&nbsp;&nbsp;  Documents</p></a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link"><i class="fa-solid fa-sack-dollar"></i><p>&nbsp;&nbsp; Brgy Income</p></a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link"><i class="fa-solid fa-users"></i><p>&nbsp; Brgy. Profiles</p></a>
          </li>
          <li class="nav-item">
            <a href="users.php" class="nav-link"><i class="fa-solid fa-user-secret"></i><p>&nbsp; Accounts</p></a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link"><i class="fa-solid fa-palette"></i><p>&nbsp; Customize</p></a>
          </li>

        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <script>

    function logout() {
        swal({
          title: 'Are you sure you want to logout?',
          text: "You won't be able to revert this!",
          icon: "warning",
          buttons: true,
          // dangerMode: true,
        })
        .then((willDelete) => {
          if (willDelete) {
            window.location = "../logout.php";
          } else {
          }
        });
    }
</script>

<script src="../sweetalert2.min.js"></script>
<!-- SUCCESS -->
<?php if(isset($_SESSION['message'])) { ?>

    <script>
      swal ({
        title: '<?php echo $_SESSION['message']; ?>',
        text: "<?php echo $_SESSION['text']; ?>",
        icon: "<?php echo $_SESSION['status']; ?>",
        confirmButtonColor: '#3085d6',
        confirmButtonText: "Okay",
        timer: 3000
      });

    </script>
<?php unset($_SESSION['message']); unset($_SESSION['text']); unset($_SESSION['status']); } ?>



<?php
// ------------------------------CLOSING THE SESSION OF THE LOGGED IN USER WITH else statement----------//
    } else {
     header('Location: ../login.php');
    }
?>
