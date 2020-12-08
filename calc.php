<?php
$t= $_GET['t'];
$k= $_GET['k'];
echo "При t=$t,<br>k=$k<br>";
//$z=sin($x)+acos($y)-sqrt($x*$y);
//$z=(((pow($x,2)+3*$y*cos($x-2))/2+sqrt(1+$y*$x))-abs($y-$x));
$w=(((pow($t,2)+3*$k*cos($t-2))/2+sqrt(1+$k*$t))-abs($k-$t));
echo "Результат становить $w";
$exampleFile = fopen("file_aned.txt", "a+");
fwrite($exampleFile, "\nResult if k=$k and t=$t= $w");
fclose($exampleFile);

?>