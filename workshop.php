<?php include 'connect.php'; ?>
<?php
   if (!empty($_POST)) {
       if (($_FILES['certificate']['name'] != "")) {
           $uploaddir = 'upload/';
           $uploadfile = $uploaddir . basename($_FILES['certificate']['name']);
           if (move_uploaded_file($_FILES['certificate']['tmp_name'], $uploadfile)) {
               $faculty_name = $_POST['faculty_name'];
               $eid = $_POST['eid'];
               $academic_year = $_POST['academic_year'];
               $event_attended = $_POST['event_attended'];
               $institute_organized = $_POST['institute_organized'];
               $event_place = $_POST['event_place'];
               $from_date = $_POST['from_date'];
               $to_date = $_POST['to_date'];
               $total_days = $_POST['total_days'];
               $remarks = $_POST['remarks'];
               $sql = "INSERT INTO workshops 
      VALUES ('','{$faculty_name}','{$eid}','{$academic_year}', '{$event_attended}', '{$institute_organized}','{$event_place}','{$from_date}','{$to_date}','{$total_days}','{$uploadfile}','{$remarks}')";
               if (mysqli_query($conn, $sql)) {
                   echo "<div class='alert alert-warning alert-dismissible fade show' role='alert'>
     <strong>hurray !</strong> Workshop Successfully added
     <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
       <span aria-hidden='true'>&times;</span>
     </button>
   </div>";
               } else {
                   echo "<div class='alert alert-warning alert-dismissible fade show' role='alert'>
     <strong>Error</strong>" . mysqli_error($conn) . "<button type='button' class='close' data-dismiss='alert' aria-label='Close'>
       <span aria-hidden='true'>&times;</span>
     </button>
   </div>";
               }
           } else {
               echo "<div class='alert alert-warning alert-dismissible fade show' role='alert'>
     <strong>Error</strong>While Uploading<button type='button' class='close' data-dismiss='alert' aria-label='Close'>
       <span aria-hidden='true'>&times;</span>
     </button>
   </div>";
           }
           mysqli_close($conn);
       }
   }
   ?>
<!DOCTYPE html>
<html lang="en">
   <?php include 'head.php'; ?>
   <body id="page-top">
      <!-- Page Wrapper -->
      <div id="wrapper">
         <!-- Sidebar -->
         <?php include 'sidebar.php'; ?>
         <!-- End of Sidebar -->
         <!-- Content Wrapper -->
         <div id="content-wrapper" class="d-flex flex-column">
            <!-- Main Content -->
            <div id="content">
               <!-- Topbar -->
               <?php include 'nav.php'; ?>
               <!-- End of Topbar -->
               <!-- Begin Page Content -->
               <div class="container-fluid">
                  <!-- Content Row -->
                  <div class="row jumbotron">
                     <form class="align-items-center" enctype="multipart/form-data" method="POST" action="">
                        <fieldset>
                           <center>
                              <u>
                                 <h1 >Workshops</h1>
                              </u>
                           </center>
                           <div class="form-group row">
                              <label  class="col-md-4 form-control-label" >Name Of The Faculty:</label>
                              <div class="col-md-5"><input readonly="true" class="form-control input-md" name="faculty_name"  value="<?php echo $_SESSION["name"] ?>" type="text"></div>
                           </div>
                           <div class="form-group row">
                              <label  class="col-md-4 form-control-label" >Emp Id:</label>
                              <div class="col-md-5"><input readonly="true" class="form-control input-md"   value="<?php echo $_SESSION["eid"] ?>" type="text" name="eid"></div>
                           </div>
                           <div class="form-group row">
                              <label  class="col-md-4 form-control-label" >Choose Academic year</label>
                              <div class="col-md-5"> <input class="form-control  input-md" id="year" type="text" name="academic_year" >
                              </div>
                           </div>
                           <div class="form-group row">
                              <label  class="col-md-4 form-control-label" >Event Attended:</label>
                              <div class="col-md-5">
                                 <select name="event_attended"
                                    class="form-control input-md">
                                    <option value="FDP/FIP">FDP/FIP</option>
                                    <option value="WORKSHOP">WORKSHOP</option>
                                    <option value="TRAINING">TRAINING</option>
                                 </select>
                              </div>
                           </div>
                           <div class="form-group row">
                              <label  class="col-md-4 form-control-label" >Title of the event</label>
                              <div class="col-md-5"><input class="form-control input-md" type="text" name=""></div>
                           </div>
                           <div class="form-group row">
                              <label  class="col-md-4 form-control-label" >Name Of The Institute Organised The Event</label>
                              <div class="col-md-5"><input class="form-control input-md" type="text" name="institute_organized"></div>
                           </div>
                           <div class="form-group row">
                              <label  class="col-md-4 form-control-label" >Place Of The Event Organised</label>
                              <div class="col-md-5"><input class="form-control input-md" type="text" name="event_place"></div>
                           </div>
                           <div class="form-group row">
                              <label  class="col-md-4 form-control-label" >Duration Date-from: </label> 
                              <div class="col-md-5"><input class="form-control input-md" type="date" name="from_date"></div>
                           </div>
                           <div class="form-group row">
                              <label  class="col-md-4 form-control-label" >Duration Date-to:</label>  
                              <div class="col-md-5"><input class="form-control input-md" type="date" name="to_date"></div>
                           </div>
                           <div class="form-group row">
                              <label  class="col-md-4 form-control-label" >Total Number Of Days: </label>
                              <div class="col-md-5"><input  class="form-control input-md" type="number" name="total_days" min="1" max="100">
                              </div>
                           </div>
                           <div class="form-group row">
                              <label  class="col-md-4 form-control-label" >Upload Certificate:</label>
                              <div class="col-md-5"><input name="certificate" class="form-control input-md" type="file" id="myFile"></div>
                           </div>
                           <div class="form-group row">
                              <label  class="col-md-4 form-control-label" >Remarks</label>
                              <div class="col-md-5"><input class="form-control input-md" type="text" name="remarks"></div>
                           </div>
                           <center><button>submit</button></center>
                  </div>
                  </fieldset>
                  </form>
               </div>
               <!-- /.container-fluid -->
            </div>
            <!-- End of Main Content -->
            <!-- Footer -->
            <footer class="sticky-footer bg-white">
               <div class="container my-auto">
                  <div class="copyright text-center my-auto">
                     <span>Copyright &copy; Your Website 2019</span>
                  </div>
               </div>
            </footer>
            <!-- End of Footer -->
         </div>
         <!-- End of Content Wrapper -->
      </div>
      <!-- End of Page Wrapper -->
      <!-- Scroll to Top Button-->
      <a class="scroll-to-top rounded" href="#page-top">
      <i class="fas fa-angle-up"></i>
      </a>
      <!-- Logout Modal-->
      <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
         <div class="modal-dialog" role="document">
            <div class="modal-content">
               <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                  <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">×</span>
                  </button>
               </div>
               <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
               <div class="modal-footer">
                  <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                  <a class="btn btn-primary" href="/cs/z/logout.php">Logout</a>
               </div>
            </div>
         </div>
      </div>
      <!-- Bootstrap core JavaScript-->
      <script src="vendor/jquery/jquery.min.js"></script>
      <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
      <!-- Core plugin JavaScript-->
      <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
      <!-- Custom scripts for all pages-->
      <script src="js/sb-admin-2.min.js"></script>
      <!-- Page level plugins -->
      <script src="vendor/chart.js/Chart.min.js"></script>
      <!-- Page level custom scripts -->
      <script src="js/demo/chart-area-demo.js"></script>
      <script src="js/demo/chart-pie-demo.js"></script>
      <script type="text/javascript">
         $("#year").datepicker({
          format: "yyyy",
          viewMode: "years", 
          minViewMode: "years"
         });
      </script>
   </body>
</html>