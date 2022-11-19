<?php
$con=new mysqli('localhost','root','','Project');
if(isset($_POST['submit']))
{
    $name=$_POST['name'];
    $pass=$_POST['password'];
    $sql="select * from `user` where email='$name' and password='$pass'";
    $result=mysqli_query($con,$sql);
    if(mysqli_num_rows($result)==1)
    {
        header("location:user.html");
    }
    else{
        echo '<script>alert("email and Password does not match")</script>';
        die(mysqli_error($con));
    }
   
}
else{
    echo "error";
}
?>