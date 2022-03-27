<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>students</title>
</head>
<style>
    html {
        overflow-x: hidden;
    }

    body {
        overflow-x: hidden;
    }
    .card{
        box-shadow: 1px 1px 0px #999,
                2px 2px 0px #999,
                3px 3px 0px #999,
                4px 4px 0px #999,
                5px 5px 0px #999,
                6px 6px 0px #999;;
    }
</style>

<body>
    <?php
    require '../connection.php';
    $sql = "select * from students where registration='104'";
    $data = mysqli_query($conn, $sql);
    if (mysqli_num_rows($data) != 0) {
        while ($row = mysqli_fetch_assoc($data)) {


    ?>
    
    <div class="card ">
        <div class="card-header text-center">
            <h4>
                Personal Details
            </h4>
            <div class="container-fluid  m-5">
                <div class="row ">
                    <div class="col-md-6 col-lg-4">
                        <div class="card" style="width: 18rem;">
                            <img class="card-img-top " src="../img/download (1).jpg" alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title">college name</h5>
                                <p class="card-text"><?php echo $row['name'];?></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-8">
                        <div class="row ">
                            <div class="col-md-4 col-10 me-5 mt-4  ">
                                <div class="mb-5 mt-4">
                                    <div class="form-group">
                                        <label>Registration Number</label>
                                        <input type="text" class="form-control"value="<?php echo $row['registration'];?>" disabled>
                                    </div>
                                </div>
                                <div>
                                    <div class="form-group">
                                        <label>Email</label>
                                        <input type="text" class="form-control" value="<?php echo $row['email'];?>" disabled>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-10 mt-4">
                                <div class=" mt-4 mb-5">
                                    <div class="form-group">
                                        <label>Phone Nuber</label>
                                        <input type="text" class="form-control" value="<?php echo $row['phone'];?>" disabled>
                                    </div>
                                </div>
                                <div>
                                    <div class="form-group">
                                        <label>Address</label>
                                        <input type="text" class="form-control" value="<?php echo $row['address'];?>" disabled>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row mt-4">
                    <div class="col-10 col-md-3   mb-5">
                        <div class="form-group">
                            <label>Course</label>
                            <input type="text" class="form-control" value="<?php echo $row['course'];?>" disabled>
                        </div>
                    </div>
                    <div class="col-10 col-md-3  mb-5 ">
                        <div class="form-group">
                            <label>DOB</label>
                            <input type="text" class="form-control" value="<?php echo $row['dob'];?>" disabled>
                        </div>
                    </div>
                    <div class="col-10 col-md-3  mb-5 ">
                        <div class="form-group">
                            <label>Enrolled Year</label>
                            <input type="text" class="form-control" value="<?php echo $row['enrollyear'];?>" disabled>
                        </div>
                    </div>
                    <div class="col-10 col-md-3   ">
                        <div class="form-group">
                            <label>Gender</label>
                            <input type="text" class="form-control" value="<?php echo $row['gender'];?>" disabled>
                        </div>
                    </div>

                </div>


            </div>




            </div>
            </div>  
    <?php
        }
    }
    ?>
  <div>
    <div class="card      ">
        <div class="card-header text-center">
            <h4>Books Holdings</h4>
        </div>
       
        <table class="table table-responsive table-bordered  table-hover text-center ">
            <thead class="thead-dark" >
                <tr>
                    <th>Book Name</th>
                    <th>ISBN Number</th>
                    <th>Issued Date</th>
                </tr>
            </thead>
            <tbody>
            <?php
$sql1="SELECT * FROM library WHERE regi='104'";
$result = mysqli_query($conn,$sql1);
if(mysqli_num_rows($result)!=0){
    while($col=mysqli_fetch_assoc($result)){

  
    ?>
                <tr>
                    <td><?php echo $col['bookname'];?></td>
                    <td><?php echo $col['isbn'];?></td>
                    <td><?php echo $col['issue'];?></td>
                </tr>
                <?php
  }
}
?>
            </tbody>
        </table>
      
    </div>
</div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
</body>

</html>