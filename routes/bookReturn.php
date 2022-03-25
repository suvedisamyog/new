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
            <div class="col-md-12  card-header">
                <form class="d-flex m-5" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
                    <input class="form-control me-2" type="search" name="reg" value="<?php echo $_GET['search']; ?>" placeholder="Enter Registration Number Here" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit" name="search" id="search">Search</button>
                </form>



                <?php

               {
                    $registration = $_POST["reg"];
                    $sql = "select * from library where regi=$registration order by time desc ";
                    $data = mysqli_query($conn, $sql);
                    $total = mysqli_num_rows($data);
                    if ($total != 0) {
                ?>

                        <table class="table table-bordered  table-hover black  " id="Book-table">
                            <thead>
                                <tr>
                                    <th>Books</th>
                                    <th>ISBN </th>
                                    <th> Issued Date </th>
                                    <th>Return </th>




                                </tr>
                            </thead>
                            <?php
                            while ($row = mysqli_fetch_assoc($data)) { ?>
                                <tbody>
                                    <tr>
                                    <td><?php echo $row['bookname']; ?></td>
                                    <td><?php echo $row['isbn']; ?></td>
                                    <td><?php echo $row['issue']; ?></td>
                                    <!-- <td><?php echo $row['']; ?></td> -->
                                    </tr>
                                </tbody>

                                <!-- <i class="fa-solid fa-rotate-left"></i> -->


                    <?php
                            }
                        }
                        else{ 
                            echo`
                            <div class="modal" tabindex="-1">
                            <div class="modal-dialog">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <h5 class="modal-title">Modal title</h5>
                                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                  <p>Modal body text goes here.</p>
                                </div>
                                <div class="modal-footer">
                                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                  <button type="button" class="btn btn-primary">Save changes</button>
                                </div>
                              </div>
                            </div>
                          </div>
`;
                        }
                    }

                    ?>

<!-- gfgdfgd -->

                   

            </div>
        </div>
    </div>
</div>

<?php include '../includes/footer.php'; ?>