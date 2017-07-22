<?php	
 $path = 'admin/support/'.$_POST['sid'].'.txt';

    $fh = fopen($path,"a+");
    $string = '
    Name 		- '.$_POST['name'].' | Student Id - '.$_POST['sid'].' | Type - '.$_POST['type'].'<br>
    Problem 	- '.$_POST['problem'].'<br>
    Answer 		- Not answerd yet. Please check again after few hours.<br><br>';

    fwrite($fh,$string); 
    fclose($fh);
   	header("location:supticsuc.php");
 
?>