<?php
session_start();
?>
<html>
<title>Domain</title>
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
<body>
	
<?php
if($_SESSION['sess_user']) {
?>
		<center><h1>CHOOSE YOUR DOMAIN</h1></center>
		<table border="1" cellpadding="10" cellspacing="1" width="500" align="center">
		<tr class="tablerow">
		<td align="center">
		<button style="width:150px; height:50px" onclick="window.location='game.php';" name="DS" >Data Structures</button></br></br>
		</td>
		</tr>
		<tr class="tablerow">
		<td align="center">
		<button style="width:150px; height:50px" onclick="window.location='dbmsgame.php';" name="DBMS">DBMS</button></br></br>
		</td>
		</tr>
		<tr class="tablerow">
		<td align="center">
		<button style="width:150px; height:50px" onclick="window.location='nwgame.php';" name="nw">Networks</button></br></br>
		</td>
		</tr>
		<tr class="tablerow">
		<td align="center">
		<button style="width:150px; height:50px" onclick="window.location='osgame.php';" name="OS">Operating System</button></br></br>
		</td>
		</tr>
		</table>

<?php
}
?>
</body>
</html>
