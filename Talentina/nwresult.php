<?php
session_start();
$res=$_POST['option'];
echo $res;
echo $_POST['option'];
if($_SESSION['ans']==$res && $_SESSION['level']<4)
header("Location:nwgame.php");
else if($_SESSION['ans']!=$res)
header("Location:nwlost.php");
else
header("Location:win.php");
?>