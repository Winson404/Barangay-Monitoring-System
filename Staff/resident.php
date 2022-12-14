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
              <li class="breadcrumb-item"><a href="resident.php">Home</a></li>
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
                <a href="resident_add.php" class="btn btn-sm bg-primary ml-2"><i class="fa-sharp fa-solid fa-square-plus"></i> New Resident</a>
                <a href="export.php?export=resident" class="btn btn-sm bg-success float-right mr-2"><i class="fa-solid fa-file-excel"></i> Export</a>
                <!-- <div class="card-tools mr-1 mt-3">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                </div> -->
              </div>
              <div class="card-body p-3">
                 <!-- <table id="example1" class="table table-bordered table-hover text-sm"> -->
                 <table id="exampleUser" class="table table-bordered table-hover text-sm">
                  <thead>
                  <tr> 
                    <th>PHOTO</th>
                    <th>NAME</th>
                    <th>GENDER</th>
                    <th>SECTOR</th>
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
                            <a data-toggle="modal" data-target="#viewphoto<?php echo $row['residenceId']; ?>">
                              <img src="../images-residence/<?php echo $row['image']; ?>" alt="" width="25" height="25" class="img-circle d-block m-auto">
                            </a href="">
                        </td>
                        <td><?php echo ' '.$row['firstname'].' '.$row['middlename'].' '.$row['lastname'].' '.$row['suffix'].' '; ?></td>
                        <td><?php echo $row['gender']; ?></td>
                        <td><?php echo $row['sector']; ?></td>
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
                          <a class="btn btn-primary btn-sm" href="resident_view.php?residenceId=<?php echo $row['residenceId']; ?>"><i class="fas fa-folder"></i> View</a>
                          <a class="btn btn-info btn-sm" href="resident_update.php?residenceId=<?php echo $row['residenceId']; ?>"><i class="fas fa-pencil-alt"></i> Edit</a>
                          <button type="button" class="btn bg-danger btn-sm" data-toggle="modal" data-target="#delete<?php echo $row['residenceId']; ?>"><i class="fas fa-trash"></i> Delete</button>
                          <?php if($row['qrCode'] != ''): ?>
                          <button type="button" class="btn bg-dark btn-sm" data-toggle="modal" data-target="#qr<?php echo $row['residenceId']; ?>"><i class="fa-solid fa-qrcode"></i> QR</button>
                          <?php endif; ?>
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
<!-- <script>
  window.addEventListener("load", window.print());
</script> -->