<?php
session_start();
$res=$_POST['option'];
echo $res;
echo $_POST['option'];
if($_SESSION['ans']==$res && $_SESSION['level']<4)
header("Location:dbmsgame.php");
else if($_SESSION['ans']!=$res)
header("Location:dbmslost.php");
else
header("Location:win.php");
?>