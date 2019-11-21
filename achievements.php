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
                                        <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Competitive</a>
                                        <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">Awards</a>
                                        <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-xmode" role="tab" aria-controls="nav-profile" aria-selected="false">Others</a>
                                      </div>
                                    </nav>
                                    <div class="tab-content" id="nav-tabContent">
                                      <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                                        <form>
                                          <center>
                                            <u>
                                              <h1 >Competitive</h1>
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
                              <label  class="col-md-4 form-control-label" >Competitive Type:</label>
                              <div class="col-md-5">
                                 <select name="competitive"
                                    class="form-control input-md">
                                    <option value="NET">NET</option>
                                    <option value="SET">SET</option>
                                    <option value="GATE">GATE</option>
                                 </select>
                              </div>
                           </div>
                           
                           <div class="form-group row">
                              <label  class="col-md-4 form-control-label" >Year: </label> 
                              <div class="col-md-5"><input class="form-control input-md" type="date" name="year"></div>
                           </div>
                           <div class="form-group row">
                              <label  class="col-md-4 form-control-label" >Upload Certificate:</label>
                              <div class="col-md-5"><input name="certificate" class="form-control input-md" type="file" id="myFile"></div>
                           </div>
                           
                              
                                          <center><button>submit</button></center>
                                        </form>
                                      </div>
                                      <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                                        <form>
                                          <center>
                                            <u>
                                              <h1 >Awards</h1>
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
                              <label  class="col-md-4 form-control-label" >Name of the Award :</label>
                              <div class="col-md-5"><input class="form-control input-md" type="text" name="award"></div>
                           </div>
                           <div class="form-group row">
                              <label  class="col-md-4 form-control-label" >Issued By :</label>
                              <div class="col-md-5"><input class="form-control input-md" type="text" name="issue"></div>
                           </div>
                                   
                                   <div class="form-group row">
                              <label  class="col-md-4 form-control-label" >Date and Year::</label>
                              <div class="col-md-5"><input class="form-control input-md" type="date" name="date"></div>
                           </div>
                                   
                                   <div class="form-group row">
                              <label  class="col-md-4 form-control-label" >Venue :</label>
                              <div class="col-md-5"><input class="form-control input-md" type="text" name="venue"></div>
                           </div>
                                   
                                   <div class="form-group row">
                              <label  class="col-md-4 form-control-label" >Upload:</label>
                              <div class="col-md-5"><input class="form-control input-md" type="file" name="certificate"></div>
                           </div>
                              
                                          <center><button>submit</button></center>
                                        </form>
                                      </div>
                                      <div class="tab-pane fade" id="nav-xmode" role="tabpanel" aria-labelledby="nav-profile-tab">
                                        <form>
                                          <center>
                                            <u>
                                              <h1 >Others</h1>
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
                              <label  class="col-md-4 form-control-label" >Name of the Achievement :</label>
                              <div class="col-md-5"><input class="form-control input-md" type="text" name="achievement"></div>
                           </div>
                           <div class="form-group row">
                              <label  class="col-md-4 form-control-label" >Issued By :</label>
                              <div class="col-md-5"><input class="form-control input-md" type="text" name="issue"></div>
                           </div>
                                   
                                   <div class="form-group row">
                              <label  class="col-md-4 form-control-label" >Date and Year::</label>
                              <div class="col-md-5"><input class="form-control input-md" type="date" name="date"></div>
                           </div>
                                   
                                   <div class="form-group row">
                              <label  class="col-md-4 form-control-label" >Venue :</label>
                              <div class="col-md-5"><input class="form-control input-md" type="text" name="venue"></div>
                           </div>
                                   
                                   <div class="form-group row">
                              <label  class="col-md-4 form-control-label" >Upload:</label>
                              <div class="col-md-5"><input class="form-control input-md" type="file" name="certificate"></div>
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