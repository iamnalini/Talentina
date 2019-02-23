<?php
session_start();
?>
<html>
<head>
<title>GAME RESULT</title>
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
<td align="center">GAME RESULTS</td>
</tr>
<tr class="tablerow">
<td>
<?php
if($_SESSION['sess_user']) {
?>
Super!!!!!! <?php echo $_SESSION['sess_user']; ?><br>
you have won........<br></td>
</tr>
<tr class="tablerow">
<td>
Your SCORE: <?php echo $_SESSION['level']; ?><br>
</td>
</tr>
<tr class="tablerow">
<td>
Click here to <a href="logout.php" title="Logout">Logout.
</td>
</tr>
<?php
}
?>

</body></html>