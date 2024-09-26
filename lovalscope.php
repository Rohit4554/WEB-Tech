<?php
 $a = 4; // global scope, $a is a global varible 
 function assigna () 
 { 
 $a = 0; // local variable $a 
 print "a inside function is $a."; 
 } 
 assigna(); 
 print "a outside of function is $a. "; 
 ?> 