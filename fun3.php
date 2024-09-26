<?php
 function startWith($bigstr , $smlstr)
 {
    return strpos($bigstr,$smlstr)==0;
 }
 function findPosition($bigstr , $smlstr)
 {
    return strpos($bigstr , $smlstr);
 }
function compareString($bigstr,$smlstr,$n)
{
    $bigstr = substr(strtolower($bigstr),0,$n);
    $smlstr = substr(strtolower($smlstr),0,$n);
    return $bigstr === $smlstr;
}
?>