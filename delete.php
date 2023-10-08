<?php
    include 'db_config.php';
    if(isset($_GET['id'])){
        $id = $_GET['id'];
        $sql = "DELETE FROM demo_user WHERE id ='$id'";
        $query = mysqli_query($con,$sql);

        if($query){
            header("location:form.php");
        }
    }
?>