<?php 
error_reporting(0);
require_once '../connection.php';
include '../includes/head.php';

include '../includes/sidNav.php';

?>
<div class="container">
<div class="row">

<div class="col-sm-12">
    <?php include '../includes/topbar.php'; ?>
</div>
<div class="col-sm-12">
<?php
$gender=array();
$sql="SELECT * FROM `students` ";
$data = mysqli_query($conn, $sql);
if($data!=0){
    while($row = mysqli_fetch_array($data)){
        $gender = $row['gender'];
       
        $faculty = $row['course'];

    }
}
if($gender=="male"){
    echo 'i';
}


?>





</div>
</div>    
    </div>
</div>

<?php include '../includes/footer.php'; ?>