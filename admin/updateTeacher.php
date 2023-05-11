<?php

session_start();

    if(!isset($_SESSION['username']))
    {
        header("location:portal.php");
    }
    elseif($_SESSION['usertype']=='student')
    {
        header("location:portal.php");
    }
    elseif($_SESSION['usertype']=='teacher')
    {
        header("location:portal.php");
    }

    $host="localhost";
    $user="root";
    $password="";
    $db="school_managment_db";

    $data=mysqli_connect($host,$user,$password,$db);

    $id=$_GET['teacher_id'];

    $sql="SELECT * FROM users WHERE id='$id' ";

    $result=mysqli_query($data,$sql);

    $info=$result->fetch_assoc();

    if(isset($_POST['update']))
    {

        $name=$_POST['name'];
        $email=$_POST['email'];
        $phone=$_POST['phone'];
        $password=$_POST['password'];


        $query="UPDATE users SET username='$name',email='$email',phone='$phone',password='$password' WHERE id='$id' ";

        $result2=mysqli_query($data,$query);

        if($result2)
        {
            header("location:viewTeacher");
        }


    }


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/adminhome.css">
    <title>admin dashboard</title>
</head>
<body>
    <?php
    include 'headeradmin.php'
    ?>

    <main class="main">
        <h1>UPDATE TEACHER</h1>
        <div>
            <form action="#" method="POST">
                <div>
                    <label for="">USERNAME</label>
                    <input type="text" name="name" value="<?php echo "{$info['username']}"; ?>">
                </div>
                <div>
                    <label for="">Email</label>
                    <input type="email" name="email" value="<?php echo "{$info['email']}"; ?>">
                </div>
                <div>
                    <label for="">Phone</label>
                    <input type="text" name="phone" value="<?php echo "{$info['phone']}"; ?>">
                </div>
                <div>
                    <label for="">Password</label>
                    <input type="text" name="password" value="<?php echo "{$info['password']}"; ?>">
                </div>
                <div>
                    
                    <input type="submit" name="update" value="Update">
                </div>
            </form>
        </div>

    </main>
    
    <?php
    include 'asideAdmin.php'
    ?>

    
</body>
</html>