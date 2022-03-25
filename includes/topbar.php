<?php 
 session_start();
 include './head.php'; 


 if(isset($_SESSION)){
    $sql="SELECT * FROM `admin` WHERE email='$name'";
   
    $data = mysqli_query($conn,$sql);
   
   
    if(mysqli_num_rows($data) !=0){
       while($row = mysqli_fetch_assoc($data)){  ?>
<nav class="bg-light text-dark p-3 " 
    <div><strong ><?php echo $row['name'] ?></strong></div>
</nav>

 
 <?php
   }
}
}

?>

<hr>
 
   

