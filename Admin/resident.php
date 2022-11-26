<title>BMS | Resident Management</title>
<?php include 'navbar.php'; ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row">
          <div class="col-sm-6">
            <h3>Resident Management</h3>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="dashboard.php">Home</a></li>
              <li class="breadcrumb-item active">Resident Management</li>
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
                <a href="resident_add.php" class="float-right mr-2 btn bg-gradient-primary btn-sm"><i class="fa-sharp fa-solid fa-square-plus"></i> New Resident</a>
              </div>
              <div class="card-body p-3">

                 <table id="example1" class="table table-bordered table-hover text-sm">
                  <thead>
                  <tr> 
                    <th>PHOTO</th>
                    <th>NAME</th>
                    <th>SECTOR</th>
                    <th>GENDER</th>
                    <th>CITIZENSHIP</th>
                    <th>RESIDENT STATUS</th>
                    <th>TOOLS</th>
                  </tr>
                  </thead>
                  <tbody id="users_data">
                    <tr>
                      <?php 
                        $sql = mysqli_query($conn, "SELECT * FROM residence");
                        if(mysqli_num_rows($sql) > 0 ) {
                        while ($row = mysqli_fetch_array($sql)) {
                      ?>
                        <td>
                            <img src="../images-residence/<?php echo $row['image']; ?>" alt="" width="25" height="25" style="margin-left: auto;margin-right: auto;display: block;border-radius: 50%;">
                        </td>
                        <td><?php echo ' '.$row['firstname'].' '.$row['middlename'].' '.$row['lastname'].' '.$row['suffix'].' '; ?></td>
                        <td><?php echo $row['sector']; ?></td>
                        <td><?php echo $row['gender']; ?></td>
                        <td class="text-primary"><?php echo $row['citizenship']; ?></td>
                        <td>
                          <?php 
                            if($row['resident_status'] == 'Perma/Owned') {
                              echo '<i class="fa-solid fa-circle-dot text-primary"></i> '.$row['resident_status'].'';
                            } else {
                              echo '<i class="fa-solid fa-circle-dot text-danger"></i> '.$row['resident_status'].'';
                            }

                          ?>
                        </td>
                        <td>
                          <a class="btn btn-sm bg-gradient-success" href="resident_update.php?residenceId=<?php echo $row['residenceId']; ?>"><i class="fa-solid fa-pen-to-square"></i></a>
                          <button type="button" class="btn btn-sm bg-gradient-danger" data-toggle="modal" data-target="#delete<?php echo $row['residenceId']; ?>"><i class="fa-solid fa-trash-can"></i></button>
                        </td> 
                    </tr>

                    <?php include 'resident_delete.php'; } } else { ?>
                        <td colspan="100%" class="text-center">No record found</td>
                      </tr>
                    <?php }?>

                  </tbody>
                </table>

              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>

<?php include 'footer.php';  ?>
