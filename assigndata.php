<?php
session_start();
$id=$_SESSION['id'];
$moducode=$_POST['moducode'];
$target_path = "admin/assignments/$moducode/$id~~~";  
$target_path = $target_path.basename( $_FILES['file1']['name']);   
  
if(move_uploaded_file($_FILES['file1']['tmp_name'], $target_path)) {  
    header("location:assignsuc.php");  
} else{  
    echo "ERROR, please go back and try again!";  
}  
?>  