<?php
include 'connect.php';
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
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
            <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
          </div>

          <!-- Content Row -->
          <div class="container-fluid">
  <div class="card shadow ">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Workshops </h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                         <th>Event attended</th>
                      <th>Institute organized</th>
                      <th>Event place</th>
                      <th>Dates</th>
                      <th>Total days</th>
                      <th>Certificate</th>
                      <th>Delete</th>
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                    
                        <th>Event attended</th>
                      <th>Institute organized</th>
                      <th>Event place</th>
                      <th>Dates</th>
                      <th>Total days</th>
                      <th>Certificate</th>
                      <th>Delete</th>
                    </tr>
                  </tfoot>
                       <tbody>
                  <?php
$sql = "SELECT * FROM `workshops` WHERE eid = '{$_SESSION["eid"]}' ";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo '<tr>
                    
                      <td>' . $row["event_attended"] . '</td>
                      <td>' . $row["institute_organized"] . '</td>
                      <td>' . $row["event_place"] . '</td>
                      <td>' . $row["from_date"] . ' to ' . $row["to_date"] . ' </td>
                      <td>' . $row["total_days"] . '</td>
                      <td>  <a class="btn btn-primary btn-sm" href="/cs/z/'.$row["certificate"].'">
               <i class="material-icons">open_in_browser</i>
                </a></td>
                 <td>  <a class="btn btn-danger btn-sm" href="/cs/z/delete_workshop.php?k=
               ' . $row["wid"] . '">
              <i class="material-icons">delete</i>
                </a></td>
                    </tr>';
    }
} else {
    echo "0 results";
}
$conn->close();
?>
                  </tbody>
            
                </table>
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
  <script src="vendor/datatables/jquery.dataTables.min.js"></script>
  <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>

  <!-- Page level custom scripts -->
  <script src="js/demo/datatables-demo.js"></script>


</body>

</html>

