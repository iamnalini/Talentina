<?php
session_start();
$level=$_SESSION['level'];
$level=$level+1;
$conn = mysqli_connect("localhost","root","","login");
$result = mysqli_query($conn,"SELECT * FROM qna where qno=$level");
$row = mysqli_fetch_array($result);
$_SESSION['ans']=$row['ans'];
$_SESSION['level']=$level;
?>
<html>
<head>
<title>MINI GAME</title>
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
<form method="post" action="result.php">
<table border="0" cellpadding="10" cellspacing="1" width="500" align="center">
<tr class="tableheader">
<td align="center" colspan="2">Level-<?php echo $level ?></td>
</tr>
<tr class="tablerow">
<td align="left"><?php echo $row['ques']; ?></td>
</tr>
<tr class="tablerow">
<td align="left"><input type="radio" name="options" value="a"><?php echo $row['a']?></td>
</tr>
<tr class="tablerow">
<td align="left"><input type="radio" name="options" value="b"><?php echo $row['b']?></td>
</tr>
<tr class="tablerow">
<td align="left"><input type="radio" name="options" value="c"><?php echo $row['c']?></td>
</tr>
<tr class="tablerow">
<td align="left"><input type="radio" name="options" value="d"><?php echo $row['d']?></td>
</tr>
<tr class="tableheader">
<td align="center" colspan="2"><input type="submit" name="submit" value="Submit"></td>
</tr>
</table>
</body>
</html>       