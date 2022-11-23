<title>BMS | System Users</title>
<?php include 'navbar.php'; ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row">
          <div class="col-sm-6">
            <h1>System Users</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">System Users</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- /.col -->
          <div class="col-md-12">
            <div class="card">
              <div class="card-header p-2">
                <button type="button" class="ml-2 btn bg-gradient-primary" data-toggle="modal" data-target="#add_users"><i class="bi bi-plus-circle"></i> Add</button>
              </div>
              <div class="card-body p-3">

                 <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>Full name</th>
                    <th>Contact number</th>
                    <th>Email</th>
                    <th>Usertype</th>
                    <th>Tools</th>
                  </tr>
                  </thead>
                  <tbody id="users_data">
                    <tr>
                      <?php 
                        $sql = mysqli_query($conn, "SELECT * FROM users WHERE (user_type='Admin' || user_type='Staff')");
                        while ($row = mysqli_fetch_array($sql)) {
                      ?>
                        <td><?php echo ' '.$row['firstname'].' '.$row['middlename'].' '.$row['lastname'].' '.$row['suffix'].' '; ?></td>
                        <td><?php echo $row['contact']; ?></td>
                        <td><?php echo $row['email']; ?></td>
                        <td>
                          <?php 
                              if($row['user_type'] == "Admin") {
                                echo '<span class="badge bg-gradient-primary">'.$row['user_type'].'</span>';
                              } else {
                                echo '<span class="badge bg-gradient-success">'.$row['user_type'].'</span>';
                              }
                          ?>
                        </td>
                        <td>
                          <button type="button" class="btn btn-sm bg-gradient-success" data-toggle="modal" data-target="#update<?php echo $row['user_Id']; ?>"><i class="fa-solid fa-pen-to-square"></i></button>
                              <button type="button" class="btn btn-sm bg-gradient-warning" data-toggle="modal" data-target="#password<?php echo $row['user_Id']; ?>"><i class="fa-solid fa-lock"></i></button>
                              <button type="button" class="btn btn-sm bg-gradient-danger" data-toggle="modal" data-target="#delete<?php echo $row['user_Id']; ?>"><i class="fa-solid fa-trash-can"></i></button>
                        </td> 
                    </tr>
                    <?php include 'users_update_delete.php'; } ?>
                  </tbody>
                  <tfoot>
                      <tr>
                        <th>Full name</th>
                        <th>Contact number</th>
                        <th>Email</th>
                        <th>Usertype</th>
                        <th>Tools</th>
                      </tr>
                  </tfoot>
                </table>

              </div><!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->


<?php include 'users_add.php'; ?>
<?php include 'footer.php'; ?>
