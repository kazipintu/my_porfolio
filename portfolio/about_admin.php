<?php 
    include 'db_config.php';
    $status = '';
    if(isset($_POST['submit'])){
        $name = $_POST['name'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $linkdin = $_POST['linkdin'];
        $fb = $_POST['fb'];
        $git = $_POST['git'];
        $research = $_POST['research'];
        $address = $_POST['address'];
        $image = $_POST['image'];

        $sql = "INSERT INTO about (name, email, phone, address, linkedin, facebook, github, research, image) VALUES ('$name','$email','$phone','$address','$linkdin','$fb','$git','$research','$image')";
         $query = mysqli_query($con,$sql);
         if($query){
            $status = "Inserted Successfully";
         }
         else{
          $status = "Failed! Something went Wrong";
         }
    }


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Majestic Admin</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="admin_design/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="admin_design/vendors/base/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="admin_design/css/style.css">
    <!-- endinject -->
    <link rel="shortcut icon" href="admin_design/images/favicon.png" />
</head>

<body>
    <div class="container-scroller">
        <!-- partial:../../partials/_navbar.html -->
        <?php include 'head_nav.php'; ?>
        <!-- partial -->
        <div class="container-fluid page-body-wrapper">
            <!-- partial:../../partials/_sidebar.html -->
            <?php include 'side_nav.php'; ?>
            <!-- partial -->
            <div class="main-panel">
                <div class="content-wrapper">
                    <div class="row">
                        <div class="col-12 grid-margin stretch-card">
                            <div class="card">
                                <span><?php echo $status; ?></span>
                                <div class="card-body">
                                    <h4 class="card-title">About Me</h4>
                                    <form class="forms-sample" method="POST" action="about_admin.php">
                                        <div class=" form-group">
                                            <label for="exampleInputName1">Name</label>
                                            <input type="text" class="form-control" id="exampleInputName1"
                                                placeholder="Name" name="name">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail3">Email address</label>
                                            <input type="email" class="form-control" id="exampleInputEmail3"
                                                placeholder="Email" name="email">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputPassword4">Phone</label>
                                            <input type="phone" class="form-control" id="exampleInputPassword4"
                                                placeholder="Phone" name="phone">
                                        </div>

                                        <div class="form-group">
                                            <label for="exampleInputCity1">Linkedin</label>
                                            <input type="text" class="form-control" id="exampleInputCity1"
                                                placeholder="Linkedin" name="linkdin">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputCity1">Facebook</label>
                                            <input type="text" class="form-control" id="exampleInputCity1"
                                                placeholder="Facebook" name="fb">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputCity1">Github</label>
                                            <input type="text" class="form-control" id="exampleInputCity1"
                                                placeholder="Github" name="git">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputCity1">Research Profile</label>
                                            <input type="text" class="form-control" id="exampleInputCity1"
                                                placeholder="Research Profile" name="research">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleTextarea1">Address</label>
                                            <textarea class="form-control" id="exampleTextarea1" rows="4"></textarea name="address">
                                        </div>
                                        <div class="form-group">
                                            <label>Image upload</label>
                                            <input type="file" name="img[]" class="file-upload-default">
                                            <div class="input-group col-xs-12">
                                                <input type="text" class="form-control file-upload-info" disabled
                                                    placeholder="Upload Image" name="image">
                                                <span class="input-group-append">
                                                    <button class="file-upload-browse btn btn-primary"
                                                        type="button">Upload</button>
                                                </span>
                                            </div>
                                        </div>
                                        <button type="submit" class="btn btn-primary me-2" name="submit">Submit</button>
                                        
                                    </form>
                                </div>
                            </div>
                        </div>


                    </div>
                </div>
                <!-- content-wrapper ends -->
                <!-- partial:../../partials/_footer.html -->
                <footer class="footer">
                    <div class="d-sm-flex justify-content-center justify-content-sm-between">
                        <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright © <a
                                href="https://www.bootstrapdash.com/" target="_blank">bootstrapdash.com </a>2021</span>
                        <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Only the best <a
                                href="https://www.bootstrapdash.com/" target="_blank"> Bootstrap dashboard </a>
                            templates</span>
                    </div>
                </footer>
                <!-- partial -->
            </div>
            <!-- main-panel ends -->
        </div>
        <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="admin_design/vendors/base/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- inject:js -->
    <script src="admin_design/js/off-canvas.js"></script>
    <script src="admin_design/js/hoverable-collapse.js"></script>
    <script src="admin_design/js/template.js"></script>
    <!-- endinject -->
    <!-- Custom js for this page-->
    <script src="admin_design/js/file-upload.js"></script>
    <!-- End custom js for this page-->
</body>

</html>