<?php 
 $count = 0; 
 $num = 2; 
 while($count < 10 ) 
 { 
 $div_count=0; 
 for($i=2; $i<$num; $i++) 
 { 
 if(($num%$i)==0) 
 { 
 $div_count++; 
 } 
 } 
 if($div_count==0) 
 { 
 echo $num." "; 
 $count=$count+1; 
 } 
 $num=$num+1; 
 } 
 ?> 
