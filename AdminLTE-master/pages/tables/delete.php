<?php 
include'configure.php';

$id=$_GET['rn'];
$query="DELETE from `members` where id='$id'";

$data=mysqli_query($con,$query);

if($data){
   
    echo '<script type="text/javascript"> alert("Your entry Has Been Deleted") </script>';
    header('Location: https://industry-panel.herokuapp.com/AdminLTE-master/pages/tables/data.php');
}
else{
    echo "<script> alert('Sorry..!! Something Went Wrong') </script>";
}
?>
