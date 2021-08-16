<?php
$con=mysqli_connect('localhost','root','1234');
     mysqli_select_db($con,'studentdatabse');
     $sql="DELETE FROM studentdetails WHERE regdno='$_GET[id]'";
     if(mysqli_query($con,$sql))
        header("refresh:1;url=deleteitems.php");
     else 
        echo "Not Deleted";
?>