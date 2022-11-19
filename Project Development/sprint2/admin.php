<?php
$con=new mysqli('localhost','root','','Project');
if(isset($_POST['submit']))
{
    $name=$_POST['name'];
    $pass=$_POST['password'];
    $sql="insert into admin (email,password) values('$name','$pass')";
    $result=mysqli_query($con,$sql);
    if($result)
    {
      echo '<script>alert("Added Successfully")</script>';
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
<body>
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
        <span class="amenu" id="ahome"><b>Home</b></span>
        <span class="amenu" id="aproject"><b>Project</b></span>
        <span class="amenu" id="aAdd User" ><b>Add User</b></span>
        <span class="amenu" id="logout"><b>LogOut</b></span>
    </div>
</nav>
<div id="ad-container"  style="display:flex; justify-content:center; align-items:center; ">
<p>WELOCME ADMIN..!</p>
</div>
<div id="ad-container1" class="ad-container1">
  <div class="ad-container">
    <table>
      <h1 style="color: white; padding-bottom: 19px;">PROJECTS<span id="org-name"></span></h1>
      <tr><th>
        organisation
      </th>
      <th>
        Data name
      </th>
      <th>
        Comment
      </th>
      <th>
        Data
      </th>
      <th>
        Download
      </th>
      <th>
        status
      </th>
      <th>solution</th>
    </tr>
    <tr>
      <td>ibm</td>
      <td>form</td>
      <td> Lorem ipsum dolor sit amet consectetur, adipisicing elit. Commodi inventore autem maiores! repudiandae illum omnis, odio, eius odit vero fugit, sunt quia?</td>
      <td>form.pdf</td>
      <td>Download</td>
      <td >
        <input type="text">
        <button>submit</button>
      </td>
      <td >
        <input type="text">
        <button>submit</button>
      </td>
    </tr>
    </table>
  </div>
</div>
<div id="ad-container2" class="ad-container2" style="height: 88vh;">
<form  method="post" style="margin-left:530px; margin-top:120px;">
  <h1 style="color:rgb(255,194,0);padding-left:50px;">ADD ADMIN</h1>
                    <input class="input" type="email" placeholder="Enter the Gmail" name="name"> 
                    <input class="input" type="password" placeholder="Password" name="password">
                    <button class="button" name="submit">Add admin</button> 
            </form> 
</div>

 <script>
  const aprojects = document.getElementById('ad-container1');
const aadd = document.getElementById('ad-container2');
const arequest = document.getElementById('ad-container3');
const ahome = document.getElementById('ad-container');
const amenus = document.querySelectorAll('.amenu');
let admenu='';
amenus.forEach((amenu)=>{
    amenu.addEventListener('click',(e)=>{
        admenu = e.target.innerHTML;
        console.log(admenu);
        if(admenu=='Projects')
        {
            console.log(admenu);
            ahome.style.display="none";
            // arequest.style.display="none";
            aadd.style.display="none";
            aprojects.style.display="block";
            
        }
        else if(admenu=='Add User')
        {
            console.log(admenu);
            ahome.style.display="none";
            // arequest.style.display="none";
            aadd.style.display="block";
            aprojects.style.display="none";
        }
        if(admenu=='Project')
        {
            console.log(admenu);
            ahome.style.display="none";
            // arequest.style.display="block";
            aadd.style.display="none";
            aprojects.style.display="block";
        }
        if(admenu=='Home')
        {
            console.log(admenu);
            ahome.style.display="block";
            // arequest.style.display="none";
            aadd.style.display="none";
            aprojects.style.display="none";
        }
        if(admenu=='LogOut')
        {
            console.log(admenu);
           window.location.href="index.html";
        }
    })
})
 </script>
</body>
</html>