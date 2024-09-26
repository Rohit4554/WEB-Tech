<?php
 require "fun4.php";
 if($_SERVER['REQUEST_METHOD'] == 'GET')
 {
    $sname=$_GET['sname'];
    $cname=$_GET['cname'];
    $gmessage=$_GET['gmessage'];

    $greeting = generateGreet($sname , $cname , $gmessage);
    echo $greeting;
 } 
?>