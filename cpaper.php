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
            $con_type = $_POST['con_type'];
            $noc = $_POST['noc'];
            $nop = $_POST['nop'];
            $venue= $_POST['venue'];
            $from_date = $_POST['from_date'];
            $to_date = $_POST['to_date'];
            $no_of_days = $_POST['no_of_days'];
            $choose = $_POST['choose'];
            $type_jon = $_POST['type_jon'];
            $noj = $_POST['noj'];
            $co_author = $_POST['co_author'];
            $vol_no = $_POST['vol_no'];
            $issue_no = $_POST['issue_no'];
            $date = $_POST['date'];
            $impact = $_POST['impact'];
            $type_of = $_POST['type_of'];
            echo "exe";
            $sql = "INSERT INTO papercon 
   VALUES ('','{$faculty_name}','{$eid}', '{$con_type}', '{$noc}', '{$nop}', '{$venue}', '{$from_date}', '{$to_date}', '{$no_of_days}', '{$choose}','{$type_jon}', '{$noj}','{$co_author}','{$vol_no}','{$issue_no}','{$date}','{$impact}','{$type_of},'{$uploadfile}')";
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