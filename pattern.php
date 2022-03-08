<?php

//program to print the fabbinacci series in the php


//    0 1 1 2 3 5 8 13 21 .....

$n1 = 0;
$n2 = 1;
$digit = 0;
for($i=1; $i<=8; $i++){
     echo $n1;
	 $n1= $n1+$n2;
	 $n2 = $digit;
	 $digit = $n1;
	 echo "<br>";
}