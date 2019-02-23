<?php
session_start();
$res=$_POST['options'];
echo $res;
echo $_POST['options'];
if($_SESSION['ans']==$res && $_SESSION['level']<4)
header("Location:game.php");
else if($_SESSION['ans']!=$res)
header("Location:lost.php");
else
header("Location:win.php");
?>