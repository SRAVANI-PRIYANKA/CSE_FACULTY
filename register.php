<?php include 'connect.php'; ?>

<?php
if (!empty($_POST)) {
    $eid = $_POST['eid'];
    $name = $_POST['name'];
    $profession = $_POST['profession'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $department = $_POST['department'];
    $college = $_POST['college'];
    $sql = "INSERT INTO faculty 
VALUES ('{$eid}','{$name}', '{$profession}', '{$email}','{$password}','{$department}','{$college}')";
    echo $sql;
    if (mysqli_query($conn, $sql)) {
        echo "New Account Created successfully";
        $_SESSION["name"] = $name;
        $_SESSION["eid"] = $eid;
        $_SESSION["email"] = $email;
        if (isset($_SESSION["name"])) {
            header("Location: /cs/z/home.php");
        }
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
    mysqli_close($conn);
}
?>
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Aditya Space</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.css" rel="stylesheet">

</head>

<body class="bg-gradient-primary">

  <div class="container">

    <div class="card o-hidden border-0 shadow-lg my-5">
      <div class="card-body p-0">
        <!-- Nested Row within Card Body -->
        <div class="row">
          <div class="col-lg-5 d-none d-lg-block bg-register-image"></div>
          <div class="col-lg-7">
            <div class="p-5">
              <div class="text-center">
                <h1 class="h4 text-gray-900 mb-4">Create an Account!</h1>
              </div>
              <form class="user" action="" method="POST">
              
                       <div class="form-group row">
                   <div class="col-sm-6 mb-3 mb-sm-0">
                    <input type="text" name="name" class="form-control form-control-user" id="exampleFirstName" placeholder="Full Name">
                  </div>
                     <div class="col-sm-6">
                    <input type="password"  name="password" class="form-control form-control-user" id="exampleLastName" placeholder="Password">
                  </div>
                </div>
                  <div class="form-group row">
                  <div class="col-sm-6 mb-3 mb-sm-0">
                    <input type="text" name="eid" class="form-control form-control-user" id="exampleFirstName" placeholder="Employee Id">
                  </div>
                     <div class="col-sm-6">
                    <input type="text"  name="profession" class="form-control form-control-user" id="exampleLastName" placeholder="Profession">
                  </div>
                </div>

                <div class="form-group">
                   <input type="email" name="email" class="form-control form-control-user" id="exampleInputPassword" placeholder="Email">
                </div>
                <div class="form-group row">
                  <div class="col-sm-6 mb-3 mb-sm-0">
  <label class="col-md-6 control-label" for="department">Department</label>
  <div class="col-md-6">
    <select id="department" name="department" class="form-control">
      <option value="CSE">CSE</option>
      <option value="ECE">ECE</option>
      <option value="EEE">EEE</option>
      <option value="MECH">MECH</option>
      <option value="CIVIL">CIVIL</option>
      <option value="IT">IT</option>
      <option value="PETROLEUM">PETROLEUM</option>
    </select>
  </div>

                  </div>
                  <div class="col-sm-6">
                     <label class="col-md-6 control-label" for="department">Department</label>
  <div class="col-md-6">
    <select id="college" name="college" class="form-control">
      <option value="AEC">AEC</option>
      <option value="ACET">ACET</option>
      <option value="ACOE">ACOE</option>
     
    </select>
  </div>
                  </div>
                </div>
                <button class="btn btn-primary btn-user btn-block">
               Register
                </button>
               
              </form>
              <hr>
           
            </div>
          </div>
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

</body>

</html>
