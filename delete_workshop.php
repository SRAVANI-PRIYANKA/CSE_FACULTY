<?php include 'connect.php'; ?>

<?php
if (!empty($_GET)) {
    $k = number_format($_GET['k']);
    $sql = "DELETE FROM `workshops` WHERE `workshops`.`wid` = '{$k}' ";
 
    if (mysqli_query($conn, $sql)) {
        header("Location: /cs/z/data.php");
    }
}
?>