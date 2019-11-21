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
            $competitive = $_POST['competitive'];
            $year = $_POST['year'];
            $sql = "INSERT INTO achievementcom
   VALUES ('','{$faculty_name}','{$eid}','{$competitive}', '{$year}', '{$uploadfile}')";
             if (mysqli_query($conn, $sql)) {
                   echo "<div class='alert alert-warning alert-dismissible fade show' role='alert'>
     <strong>hurray !</strong>  Successfully added
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

   /*
            if (mysqli_query($conn, $sql)) {
                header("Location: /cs/z/achievements.php?status='success'");
                echo "1";
            } else {
                header("Location: /cs/z/achievements.php?status='failed'");
                echo "0";
            }
        } else {
            header("Location: /cs/z/achievements.php?status='upload failed'");
            echo "00";
        }
        mysqli_close($conn);
    }
}
?>
*?/