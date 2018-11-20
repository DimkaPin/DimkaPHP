<?php

for ($a=0; $a<9; $a++) {

	for ($g=0; $g<10; $g++) {
	echo $mass[$a][$g] = rand (15,35)."|";
	if ($a==2){
		$k=$k+$mass[$a][$g];
}

}
echo "<br/>";
}
echo "<br/>";
echo $k;
echo "<br/>";
echo $mass[2][0]+$mass[2][1]+$mass[2][2]+$mass[2][3]+$mass[2][4]+$mass[2][5]+$mass[2][6]+$mass[2][7]+$mass[2][8]+$mass[2][9];
?>
