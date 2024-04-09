<?php
$connect= mysqli_connect("localhost","root","","buntu_mike");
 $id= $_GET['deleteid'];
 $delete= "DELETE FROM information WHERE information_id='$id'";
$query= mysqli_query($connect,$delete);
header("location:select.php");
  
?>  