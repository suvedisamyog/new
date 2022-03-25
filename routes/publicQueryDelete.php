<?php 

require '../connection.php';
  $id=$_GET['id'];

$query="DELETE FROM `public` WHERE email='$id'";
$result=mysqli_query($conn,$query);
echo "
<script>alert('Deleted successfully')</script>
";
header('location:./publicQuery.php');

?>