<?php
session_start();
?>
<html>
<head>
<title>MINI GAME-results</title>
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
</style>
<link rel="stylesheet" type="text/css" href="styles.css" />
</head>
<body>
<table border="0" cellpadding="10" cellspacing="1" width="500" align="center">
<tr class="tableheader">
<td align="center">GAME REULTS</td>
</tr>
<tr class="tablerow">
<td>
<?php
if($_SESSION['sess_user']) {
?>
Sorry!!!!....You have lost the game....<br>
<?php 
$_SESSION['level']=$_SESSION['level']-1;
?>
Your SCORE: <?php echo $_SESSION['level']; ?><br>
</td>
</tr>
<tr class="tablerow">
<td>
<?php $_SESSION['level']=0; ?>
Click here to <a href="osgame.php" title="Game">try again.
</td>
</tr>
<tr class="tablerow">
<td>
Click here to <a href="logout.php" tite="Logout">Logout.
</td>
</tr>
<?php
}
?>

</body></html>