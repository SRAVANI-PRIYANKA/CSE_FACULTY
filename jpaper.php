<?php include 'connect.php'; ?>
<?php
echo "1";
if (!empty($_POST)) {
    if (($_FILES['certificate']['name'] != "")) {
        $uploaddir = 'upload/';
        $uploadfile = $uploaddir . basename($_FILES['certificate']['name']);
        echo "2";
        if (move_uploaded_file($_FILES['certificate']['tmp_name'], $uploadfile)) {
            $faculty_name = $_POST['faculty_name'];
            $eid = $_POST['eid'];
            $type_jon = $_POST['type_jon'];
            $noj = $_POST['noj'];
            $nop = $_POST['nop'];
            $co_author = $_POST['co_author'];
            $vol_no = $_POST['vol_no'];
            $issue_no = $_POST['issue_no'];
            $date = $_POST['date'];
            $impact = $_POST['impact'];
            $type_of = $_POST['type_of'];
            echo "exe";
            $sql = "INSERT INTO paperjon 
   VALUES ('','{$faculty_name}','{$eid}','{$type_jon}', '{$noj}', '{$nop}','{$co_author}','{$vol_no}','{$issue_no}','{$date}','{$impact}','{$type_of},'{$uploadfile}')";
            if (mysqli_query($conn, $sql)) {
                header("Location: /cs/z/paper.php?status='success'");
            } else {
                header("Location: /cs/z/paper.php?status='failed'");
            }
        } else {
            header("Location: /cs/z/paper.php?status='upload failed'");
        }
        mysqli_close($conn);
    }
}
?>