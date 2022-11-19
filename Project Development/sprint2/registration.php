<?php


$con = new mysqli('localhost','root','','project');
if(isset($_POST['submit']))
{
    $name = $_POST['name'];
    $email = $_POST['email'];
    $organization = $_POST['orgname'];
    $password = $_POST['pass'];
    
    $sql="insert into `user` (email,password) values('$email','$password')";
    $result = mysqli_query($con,$sql);
    if($result)
    {
        echo '<script>alert("Registered successfully")</script>';   
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employee Attrition</title>
    <link rel="stylesheet" href="./style.css">
</head>
<body style="background-image:url(./images/Untitled-design-19.png);background-size:contain ; backdrop-filter:blur(2.5px);">
    <nav >
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
    <span id="home">Home</span>
        <span id="admin">Admin</span>
        <span id="register" >Register</span>
        <span id="about">About us</span>
        <span id="contact">Contact us</span>
    </div>
</nav>
<div class="container ">
        <div class="con" >
            <div class="reg">
                <form autocomplete="off" class="regform" action="registration.php"  method="post"> 
                    <h1 style="color:rgb(255,194,35); width:250px ; text-align: center;
                    " >Register Form</h1>
                    <div class="inputbox">
                        <input type="text" name="name" required="required"><span>Name</span></div>
                        <div class="inputbox">   <input type="email" name="email" required="required"><span>Email id</span></div>
                            <div class="inputbox">  <input type="text" name="orgname" required="required"><span>Organization name</span></div>
                                <div class="inputbox">  <input type="password" id="rpass" name="pass" required="required"><span>Password</span></div>
                                <div class="inputbox">  <input type="password" id="rcpass" name="pass" required="required"><span>Re-enter Password</span></div>
                                <div class="checkbox">
                                    <input id="checkbox" type="checkbox"><span style="margin-left: 5px; color:rgb(255,194,35);">Confirm</span>
                                </div>
                                <button  name="submit" id="rsubmit">Register </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script>
        const rpass = document.getElementById('rpass');
const rcpass = document.getElementById('rcpass');
const rsubmit = document.getElementById('rsubmit');
const checkbox = document.querySelector('#checkbox');
checkbox.addEventListener('change',()=>
{
    if(rpass.value == rcpass.value)
{
    rsubmit.disabled = false;
}
else{
    alert("Passsword does not match");
    rsubmit.disabled = true;
    checkbox.checked = false;

}
})
    </script>
    <script src="./index.js"></script>
</body>
</html>



