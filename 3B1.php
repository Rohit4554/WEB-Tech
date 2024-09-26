<?php
require "fun3.php";
if($_SERVER['REQUEST_METHOD'] == 'GET')
{
    $bigString= $_GET['bigstr'];
    $smallString=$_GET['smlstr'];

    $operation = $_GET['operation'];

    switch($operation)
    {
        case 'start' : if(startWith($bigString,$smallString))
                      {
                       echo "Small String Appeare at the start of big String";
                      }
                      else
                      {
                        echo "Small Sting dose not appear at the start of big string ";
                      }
                      break;
        case 'position' : $pos = findPosition($bigString,$smallString);
                         if($pos === FALSE)
                         {
                            echo "Small string dose not appear in the big stirng";
                         }
                         else
                         {
                            echo "Small String appear in big string at position:".$pos;
                         }
                         break;
        case 'compare' : if(isset($_GET['nchar']) && $_GET['nchar']>0)
                         {
                            $n = intval($_GET['nchar']);
                            if(compareString($bigString,$smallString,$n))
                            {
                                echo "first $n character of both string are Equal:";
                            }
                            else
                            {
                                echo "First $n character of the both strings are not Equal";
                            }
                         }
                         else
                         {
                            echo "Please provide valid no. of character to compare";
                         }  
                         break;
        default :echo "Invalid Option";
                       
    }
}

?>