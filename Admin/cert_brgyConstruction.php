<?php include 'navbar.php'; ?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Barangay Construction Clearance</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="dashboard.php">Home</a></li>
              <li class="breadcrumb-item active">Barangay Construction Clearance</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">

            <!-- Main content -->
            <div class="invoice p-3 mb-3" id="printElement" style="border: none;">

              <!-- CERTIFICATE HEADER -->
              <?php include 'certificate-Header.php'; ?>
              <!-- END CERTIFICATE HEADER -->

                <style>
                    div.row div.col-4 p.lead {
                      font-size: 15px;
                    }
                    div.row div.col-4 p.name {
                      font-size: 10px;
                      margin-top: -10px;
                    }
                     div.row div.col-4 p.role {
                      margin-top: -25px;
                      font-size: 10px;
                    }
                    div.row div.col-8 .row p.name, div.row div.col-8 p.names {
                      font-size: 10px;
                    }
                    div.row div.col-8 .row p.name {
                      margin-top: -21px;
                    }
                </style>

                <div class="row p-0">
                  <div class="col-12" style="line-height: 18px;">
                    <!-- BACKGROUND LOGO -->
                      <img src="../images/logo.png" alt="" width="80%" class="position-absolute" style="opacity: .15; top: 100px; left: 72px;">
                      <div class="row">
                        <div class="col-sm-7 invoice-col text-start">
                          <small>Clearance No:__________</small><br>
                        </div>
                        <div class="col-sm-5 invoice-col text-right" style="line-height: 15px;">
                          <small>Control No:__________</small><br>
                          <small>Issued on: __________</small>
                        </div>
                      </div>

                      <h4 class="text-center mt-3 mb-3">BARANGAY CLEARANCE</h4>

                      <p class="text-sm m-0" style="text-indent: 30px; text-align: justify; ">Clearance is hereby granted to <b>SAMPLE NAME</b> with present address at # 0083 Road 4, Pildera II, NAIA Pasay City to <b>construct/renovate/operate/excavate/install</b> as follows:</p>
                      <p class="text-sm mt-2" style="text-indent: 30px; text-align: justify;">Described here under subject to the requirements provided under existing ordinance and other pertinent laws and related implementing administrative resolutions.</p>

                      <div class="row p-0">
                        <div class="col-12 table-responsive">
                          <table class="table table-striped table-sm text-sm table-bordered text-center">
                            <thead>
                            <tr>
                              <th rowspan="2">Kind</th>
                              <th rowspan="2">Clearance fee</th>
                              <th colspan="2">Resolution</th>
                              <th colspan="2">Application</th>
                              <th>Remarks</th>
                            </tr>
                            <tr>
                              <th>No.</th>
                              <th>Schedule</th>
                              <th>No.</th>
                              <th>Date</th>
                              <th></th>
                            </tr>
                            </thead>
                            <tbody>
                              <tr>
                                <td>1</td>
                                <td>Call of Duty</td>
                                <td>455-981-221</td>
                                <td>El snort testosterone trophy driving gloves handsome</td>
                                <td>$64.50</td>
                                <td>El snort testosterone trophy driving gloves handsome</td>
                                <td>$64.50</td>
                              </tr>
                              <tr>
                                <td>1</td>
                                <td>Call of Duty</td>
                                <td>455-981-221</td>
                                <td>El snort testosterone trophy driving gloves handsome</td>
                                <td>$64.50</td>
                                <td>El snort testosterone trophy driving gloves handsome</td>
                                <td>$64.50</td>
                              </tr>
                            </tbody>
                          </table>
                        </div>
                      </div>

                      <div class="row p-0">
                        <div class="col-12 m-0" >
                          <p class="text-sm" style="margin-top: -10px;"><strong>Attested by:</strong></p>
                        </div>

                        <div class="col-6">
                            <div class="text-center">
                              <p style="border-bottom: 1px solid grey; width: auto;"><strong>HON. JAN REY B. ARELLANO</strong></p>
                              <p class="text-sm" style="margin-top: -15px;">Chairman, Committee on Infrastructure</p>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="text-center">
                              <p style="border-bottom: 1px solid grey; width: auto;"><strong>HON. MICHAEL F. DAWAL</strong></p>
                              <p class="text-sm" style="margin-top: -15px;">Punong Barangay</p>
                            </div>
                        </div>
                      </div>

                      <h4 class="text-center">CLEARANCE</h4>
                      <p class="text-sm" style="font-style: italic; text-align: justify;">Note: This clearance shall be pasted conspicuously at the place where the business is located shall be presented and/or surrendered to competent authority on demand.</p>

                      <p class="text-sm" style="font-style: italic; text-align: justify;">NOT TRANSFERRABLE AND NOT VALID without the corresponding receipt/s. Subject for revocation without prior notice for any violation of the condition of the governing status.</p>
                      <br>
                      <h4 class="text-center">OWNER'S COPY</h4>
                  </div>
                </div>

                <div class="row">
                  <div class="col-4 d-flex justify-content-center mt-3">
                      <img src="../images/pasay.png" alt="" width="100" class="position-absolute" style="top:-20px">
                  </div>
                  <div class="col-12 text-center" style="margin-top: 60px;">
                    <div class="dropdown-divider"></div>
                    <small class="text-danger text-center" style="font-style: italic;font-size: 10px;"><strong>A mark erasure or alteration of any entry invalidates this clearance/Not valid without official dry seal/Expires in ninety(90) days from the date of issue.</strong></small>
                  </div>
                </div>
                

            </div>


              <!-- this row will not appear when printing -->
              <div class="row no-print">
                <div class="col-12">
                  <button id="printButton"type="button" class="btn btn-primary" style="margin-right: 5px;"><i class="fas fa-print"></i> Print</button>
                </div>
              </div>
            </div>
            
          </div>
        </div>
      </div>
    </section>
   
  </div>
 

<script src="print.js"> </script>
<?php include 'footer.php'; ?>
 