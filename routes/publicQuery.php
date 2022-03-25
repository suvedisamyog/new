<?php 
error_reporting(0);
include '../includes/head.php';

include '../includes/sidNav.php';

?>
<div class="container">
<div class="row">

<div class="col-sm-12">
    <?php include '../includes/topbar.php'; ?>
</div>
<div class="col-sm-12">
<h2 class="black"> Students Detail</h2>
 <?php
 $query="SELECT * FROM public ";
 $data=mysqli_query($conn,$query);

 $total=mysqli_num_rows($data);
 if ($total !=0){
?>
<table class="table table-bordered table-hover black">
<thead>
      <tr> 
      <th>S.N </th>
          <th> Fullname </th> 
          <th>Email </th> 
          <th>Phone no </th> 
          <th>Course </th> 
          <th>Queries </th> 
          <th>Delete </th> 

      </tr>
      </thead>
      <?php
      while($result=mysqli_fetch_assoc($data)){ ?>
        
          <tr>
          <td> <?php echo $result['sn']; ?></td>
          <td> <?php echo $result['name'] ?></td>
          <td> <?php echo $result['email'] ?></td>
          <td> <?php echo $result['phone'] ?></td>
          <td> <?php echo $result['course'] ?></td>
          <td> <?php echo $result['question'] ?></td>
          <td> <a class="btn btn-danger" onclick="return confirm('Are you sure you want to delete ?')" <?php echo " href='./publicQueryDelete.php?id=$result[email]';" ?>>Delete</a></td>
        

            </tr>
          
        <?php  
      }
    }
    else {
        echo 'List is empty';
      }
      ?>
</div>
</div>    
    </div>
</div>

<?php include '../includes/footer.php'; ?>