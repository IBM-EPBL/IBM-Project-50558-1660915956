<?php
$con = new mysqli('localhost','root','','project');

if(isset($_POST['submit'])){
    if(isset($_POST['submit']))
{
    $name=$_POST['name'];
    $pass=$_POST['password'];
    $sql="select * from `admin` where email='$name' and password='$pass'";
    // $sql="insert into admin (email,password) values('$name','$pass')";
    $result=mysqli_query($con,$sql);
    if(mysqli_num_rows($result)==1)
    {
        header("location:admin.php");
    }
    else{
        die(mysqli_error($con));
    }
   
}
else{
    echo "error";
}
}
    

?>






<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>admin</title>
    <link rel="stylesheet" href="./style.css">
</head>
<body >
    <nav>
        <div id="lat">
            <div id="logo">
                <img src="./images/logo.png" alt="logo" width="50px" height="40px" style="margin-top: 5px;">
            </div>
            <div id="title">
                <span>Employee</span>
                <span style="color:rgb(209,184,87)">Attririon</span>
            </div>
        </div>
        <div id="menu" style="font-size: large;">
            <span id="home"><b>Home</b></span>
            <span id="admin"><b>Admin</b></span>
            <span id="register" ><b>Register</b></span>
            <span id="about"><b>About us</b></span>
            <span id="contact"><b>Contact us </b></span>
        </div>
    </nav>
    <div class="acontainer" style="margin-top: 80px;
    height: 500px;
    width: 100%;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;">
        <h1 style="color:rgb(255,194,0);">Admin Log In</h1>
        <form autocomplete="off" method="post">
            <input class="input" type="email" placeholder="Enter the Gmail" name="name"> 
            <input class="input" type="password" placeholder="Password" name="password">
            <button class="button" name="submit">Login</button> 
    
        </form> 
    </div>
    <script src="./index.js"></script>
</body>
</html>