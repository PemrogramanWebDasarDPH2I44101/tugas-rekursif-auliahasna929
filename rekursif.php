<?php
function rekursif($a) {
	$a --;
	if ($a > 0) rekursif($a);
	echo"*";
}
function rekursif1($a) {
	rekursif($a);
	echo "<br>";
	$a --;
	if ($a>0)
		rekursif1($a);
}
rekursif1(5);

//no2 

function recursive($a,$c) {
  global $col;
  recursive1($col, $a, $c);
  echo "<br>";
  if (++$a < $col) {
    recursive($a, $c);
  }
}
function recursive1($a, $h, $b) {
  global $col; 
  if ($a > $col - $h - 1) {
    echo "$b";
    recursive1($a - 1, $h, $b +1);
  }
}
$col = 5;
recursive(0,1);
?>
