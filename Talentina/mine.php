<!doctype html>  
<html>  
<head>  
<title>Login</title>  
    <style>   
        body{  
              
    margin-top: 100px;  
    margin-bottom: 100px;  
    margin-right: 150px;  
    margin-left: 80px;  
    background-color: azure ;  
    color: palevioletred;  
    font-family: verdana;  
    font-size: 100%  
      
        }  
            h1 {  
    color: indigo;  
    font-family: verdana;  
     
}  
        h3 {  
    color: indigo;  
    font-family: verdana;  
    font-size: 100%;  
} </style>  
</head>  
<body>  
     <center><h1>QUIZ PROGRAM</h1></center>  
   <p><a href="register.php">Register</a> | <a href="mine.php">Login</a></p>  
<center><h3>Login Form</h3></center> 
<form action="" method="POST"> 
<legend>  
    <fieldset>
<table border="0" cellpadding="10" cellspacing="1" width="500" align="center">
<tr class="tableheader">
<td align="center" colspan="2">Enter Login Details</td>
</tr>
<tr class="tablerow">
<td align="right">Username</td>
<td><input type="text" name="username"></td>
</tr>
<tr class="tablerow">
<td align="right">Password</td>
<td><input type="password" name="password"></td>
</tr>
<tr class="tableheader">
<td align="center" colspan="2"><input type="submit" name="submit" value="Submit"></td>
</tr>
</table>
</fieldset>
</legend>  
    
 </form>  
<?php  
if(isset($_POST["submit"])){  
  
if(!empty($_POST['username']) && !empty($_POST['password'])) {  
    $user=$_POST['username'];  
    $pass=$_POST['password'];  
  
    $con=mysqli_connect('localhost','root','') or die(mysql_error());  
    mysqli_select_db($con,'login') or die("cannot select DB");  
  
    $query=mysqli_query($con,"SELECT * FROM up WHERE username='".$user."' AND password='".$pass."'");  
    $numrows=mysqli_num_rows($query);  
    if($numrows!=0)  
    {  
    while($row=mysqli_fetch_assoc($query))  
    {  
    $dbusername=$row['username'];  
    $dbpassword=$row['password'];  
    }  
  
    if($user == $dbusername && $pass == $dbpassword)  
    {  
    session_start(); 
	$_SESSION['level']=0;
    $_SESSION['sess_user']=$user;  
  
    /* Redirect browser */  
    header("Location: domain.php");  
    }  
    } else {  
    echo "Invalid username or password!";  
    }  
  
} else {  
    echo "All fields are required!";  
}  
}  
?>  
</body>  
</html>   
