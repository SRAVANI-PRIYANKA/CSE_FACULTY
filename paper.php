<?php
session_start();
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
            <!-- Page Heading -->
           
            <!-- Content Row -->
            <div class="row">
            <div class="container">
            <div class="row">
            <div class="col-md-12">
            <nav>
            <div class="nav nav-tabs nav-fill" id="nav-tab" role="tablist">
            <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Journal</a>
            <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">Conference</a>
            </div>
            </nav>
            <div class="tab-content" id="nav-tabContent">
            <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
            <form>
              <center>
                              <u>
                                 <h1 >Journal</h1>
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
                      <label class="col-md-4 form-control-label">Journal type</label>
                       <div class="col-md-5">
            <select class="form-control input-md" >
            <option>National</option>
            <option>International</option>
            </select></div>
            </div>      
             <div class="form-group row">
            <label class="col-md-4 form-control-label">Name of the Journal:</label>
             <div class="col-md-5"><input class="form-control input-md" type="text" name="noj"></div>
          </div>
           <div class="form-group row">
            <label class="col-md-4 form-control-label">Name of the Paper:</label>
             <div class="col-md-5"><input class="form-control input-md" type="text" name="nop"></div>
          </div>
           <div class="form-group row">
            <label class="col-md-4 form-control-label">Co-author(if any):</label>
             <div class="col-md-5"><input class="form-control input-md" type="text" name="co_author"></div>
          </div>
           <div class="form-group row">
            <label class="col-md-4 form-control-label">Volume no:</label>
             <div class="col-md-5"><input class="form-control input-md" type="text" name="vol_no"></div>
          </div>
           <div class="form-group row">
            <label class="col-md-4 form-control-label">Issue no:</label>
             <div class="col-md-5"><input class="form-control input-md" type="text" name="issue_no"></div>
          </div>
           <div class="form-group row">
            <label class="col-md-4 form-control-label">Year:</label>
             <div class="col-md-5"><input class="form-control input-md" type="Date" name="date"></div>
          </div>
           <div class="form-group row">
            <label class="col-md-4 form-control-label">Impact fact:</label>
             <div class="col-md-5"><input class="form-control input-md" type="text" name="impact"></div>
          </div>
           <div class="form-group row">
            <label class="col-md-4 form-control-label">Type of the for:</label>
              <div class="col-md-5">
            <input  type="checkbox" name="" value="">UGC
            <input  type="checkbox" name="" value="">SCI/SCOPUS
            <input  type="checkbox" name=""value="">WPS
          </div>
            </div>
             <div class="form-group row">
            <label class="col-md-4 form-control-label">Upload:</label>
             <div class="col-md-5"><input class="form-control input-md" type="file" id="myFile"></div>
            </div>
            <center><button>submit</button></center>
            </form>
            </div>
            <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
            <form>
                  <center>
                              <u>
                                 <h1 >Conference</h1>
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
       <label class="col-md-4 form-control-label">Conference Type :</label>
       <div class="col-md-5">
    <select class="form-control input-md">
      <option>National</option>
      <option>International</option></select>
    </select>
</div>
</div>
  <div class="form-group row">
    <label class="col-md-4 form-control-label">Name of the Conference:</label>
     <div class="col-md-5"><input class="form-control input-md"type="text" name="noc">
</div></div>
  <div class="form-group row">
    <label class="col-md-4 form-control-label">Name of the Paper:</label>
     <div class="col-md-5"><input class="form-control input-md"type="text" name="nop">
</div></div>
  <div class="form-group row">
    <label class="col-md-4 form-control-label">Venue of the conference:</label>
     <div class="col-md-5"><input class="form-control input-md"type="text" name="venue">
</div></div>
   <div class="form-group row">
                              <label  class="col-md-4 form-control-label" >Duration Date-from: </label> 
                              <div class="col-md-5"><input class="form-control input-md" type="date" name="from_date"></div>
                           </div>
                           <div class="form-group row">
                              <label  class="col-md-4 form-control-label" >Duration Date-to:</label>  
                              <div class="col-md-5"><input class="form-control input-md" type="date" name="to_date"></div>
                           </div>
  <div class="form-group row">
    <label class="col-md-4 form-control-label">Number of Days:</label>
     <div class="col-md-5"><input class="form-control input-md"type="text" name="no_of_days">
</div></div>
  <div class="form-group row">
    <label class="col-md-4 form-control-label">Is Conference associated with:</label>
     <div class="col-md-5"><input type="radio" name="choose" value="Yes" >Yes
     <input type="radio" name="choose" value="No" > No
</div></div>
     <div class="form-group row">
            <label class="col-md-4 form-control-label">Name of the Journal:</label>
             <div class="col-md-5"><input class="form-control input-md" type="text" name="noj"></div>
          </div>
           <div class="form-group row">
            <label class="col-md-4 form-control-label">Co-author(if any):</label>
             <div class="col-md-5"><input class="form-control input-md" type="text" name="co_author"></div>
          </div>
           <div class="form-group row">
            <label class="col-md-4 form-control-label">Volume no:</label>
             <div class="col-md-5"><input class="form-control input-md" type="text" name="vol_no"></div>
          </div>
           <div class="form-group row">
            <label class="col-md-4 form-control-label">Issue no:</label>
             <div class="col-md-5"><input class="form-control input-md" type="text" name="issue_no"></div>
          </div>
           <div class="form-group row">
            <label class="col-md-4 form-control-label">Year:</label>
             <div class="col-md-5"><input class="form-control input-md" type="Date" name="date"></div>
          </div>
           <div class="form-group row">
            <label class="col-md-4 form-control-label">Impact fact:</label>
             <div class="col-md-5"><input class="form-control input-md" type="text" name="impact"></div>
          </div>
           <div class="form-group row">
            <label class="col-md-4 form-control-label">Type of the for:</label>
              <div class="col-md-5">
            <input  type="checkbox" name="" value="">UGC
            <input  type="checkbox" name="" value="">SCI/SCOPUS
            <input  type="checkbox" name=""value="">WPS
          </div>
            </div>
             <div class="form-group row">
            <label class="col-md-4 form-control-label">Upload:</label>
             <div class="col-md-5"><input class="form-control input-md" type="file" id="myFile"></div>
            </div>
    <center><button>submit</button></center>
   
            </form>

            </div>
            </div>
            </div>
            </div>
            </div>
            </div>
            <!-- Content Row -->
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
   </body>
</html>