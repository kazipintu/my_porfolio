<?php
    include 'db_config.php';

    if(isset($_POST['submit'])){
        $id = $_GET['id'];
        $name = $_POST['uname'];
        $email = $_POST['email'];

        $sql = "UPDATE demo_user SET name='$name', email='$email' WHERE id ='$id'";
        $query = mysqli_query($con,$sql);
        if($query){
            header("location:form.php");
        }
    }
    if(isset($_GET['id'])){
        // echo $_GET['id'];
        $id = $_GET['id'];

        $sql = "SELECT * FROM demo_user WHERE id = '$id'";
        $query = mysqli_query($con,$sql);

        $row = mysqli_fetch_assoc($query);
        
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="#" method="post">
        <label for="">Name</label>
        <input type="text" name="uname" id="" value="<?php echo $row['name']; ?>"><br><br>
        <label for="">email</label>
        <input type="email" name="email" id="" value="<?php echo $row['email']; ?>"><br><br>
        <input type="submit" value="Edit" name="submit">
    </form>

    <?php 
        }
    ?>
</body>

</html>