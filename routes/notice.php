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
<div class="col-4-xxxl col-12">
                        <div class="card height-auto">
                            <div class="card-body">
                                <div class="heading-layout1">
                                    <div class="item-title">
                                        <h3>Create A Notice</h3>
                                    </div>
                                   
                                </div>
                                <form class="container">
                                    <div class="row">
                                        <div class="mt-2 col-12-xxxl col-lg-6 col-12 form-group">
                                            <label>Title</label>
                                            <input type="text" placeholder="" class="form-control">
                                        </div>

                                        
                                        </div>
                                        <div class="mt-5 mb-5 col-12-xxxl col-lg-6 col-12 form-group">
                                            <label>Detail</label>
                                            <input type="text" placeholder="" class="form-control ">
                                          
                                        </div>
                                        <div class=" col-12-xxxl col-lg-6 col-12 form-group">
                                            <label>Image</label>
                                            <input type="file" placeholder="" class="form-control ">
                                          
                                        </div>
                                        <div class="col-12 form-group mg-t-8">
                                            <button type="submit" class="btn btn-success mt-5">publish</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                   
</div>
</div>    
    </div>
</div>

<?php include '../includes/footer.php'; ?>