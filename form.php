<?php 
    $count =1;
    // for($i=0;$i<count($array_1);$i=$i+1){
    //     echo $array_1[$i];
    // }
    // $assoc1 = ["name"=>"salman", "roll"=>20];

    // foreach($assoc1 as $key=>$val){
    //     echo $key."<br>";
    //     // echo $val."<br>";
    // }

    // echo $assoc1["roll"]; //numbering index

    include 'db_config.php';

    if(isset($_POST['submit'])){
        
        $name = $_POST['uname'];
        $email = $_POST['email'];
        $name_size = strlen($name);
        $email_size = strlen($email);
        if($name_size == 0 || $email_size==0){
            echo "Field can not be empty";
        }
        else{
            $sql = "INSERT INTO demo_user (name, email) VALUES('$name','$email')";
            $query = mysqli_query($con,$sql);
            if($query){
                echo "inserted successfully";
            }
            else{
                echo "failed";
            }
            
        }

        
        
        
    }

    $sql = "SELECT * FROM demo_user";
    $query = mysqli_query($con,$sql);
    
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
        <input type="text" name="uname" id=""><br><br>
        <label for="">email</label>
        <input type="email" name="email" id=""><br><br>
        <input type="submit" value="add" name="submit">
    </form>


    <h1>User Data</h1>
    <table>
        <tr>
            <th>SL</th>
            <th>Name</th>
            <th>Email</th>
            <th>Action</th>
        </tr>
        <?php
            $count =1;
            while($row = mysqli_fetch_assoc($query)){
               
            
        ?>
        <tr>
            <td><?= $count ?></td>
            <td><?= $row['name'] ?></td>
            <td><?= $row['email'] ?></td>
            <td><a href="edit.php?id=<?= $row['id']; ?>" target="_blank">Edit</a><a
                    href="delete.php?id=<?= $row['id']; ?>">Delete</a></td>
        </tr>
        <?php
            $count = $count+1;
            }
        ?>
    </table>

</body>

</html>