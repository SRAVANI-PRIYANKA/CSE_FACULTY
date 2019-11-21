<?php
ini_set('error_reporting', E_ALL);
ini_set('display_errors', true);
require_once __DIR__.'/vendor/XLSX/SimpleXLSX.php';
echo '<h1>XLSX to HTML</h1>';
if (!empty($_POST)) {
	
if (isset($_FILES['file'])) {

 $uploaddir = 'upload/';
        $uploadfile = $uploaddir . basename($_FILES['file']['name']);
 if (move_uploaded_file($_FILES['file']['tmp_name'], $uploadfile)) {
   if ( $xlsx = SimpleXLSX::parse( $uploadfile) ) {

      echo '<h2>Parsing Result</h2>';
      echo '<table border="1" cellpadding="3" style="border-collapse: collapse">';
      $dim = $xlsx->dimension();
      $cols = $dim[0];
      foreach ( $xlsx->rows() as $k => $r ) {

      $a= $r[ 0 ] ;
        $s= $r[1] ;
          $x= $r[ 2] ;
          
                          $sql = "INSERT INTO  
   VALUES ('{$a}','{$s}','{$x}','')";
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
      }
   
   } else {
      echo SimpleXLSX::parseError();
   }
}
}
}
?>