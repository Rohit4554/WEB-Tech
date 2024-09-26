<?php
 function generateGreet($sname= null , $cname = null , $gmessage=null)
 {
 $defaultGreet = "Hello";
  $defaultsname = "Student";
  $defaultcname = "To Your College";

  if(!$gmessage)
   {
    $gmessage= $defaultGreet;
   }

   if(!$sname)
   {
    $sname = $defaultsname;   
   }

   if(!$cname)
   {
    $cname = $defaultcname;
   }
   return "$gmessage $sname from $cname";
}
?>