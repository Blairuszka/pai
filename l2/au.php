<html>
<body>
<?php
/*for($a=1; $a<=10; ++$a){
	echo "<br>";
	for($b=1; $b<=10; ++$b){
		echo $a."*".$b."=".$a*$b;
		echo "<br>";
	}
}
*/

for($s=1; $s<=6; ++$s){
	echo "<br>";
	for($w=1; $w<=5; ++$w){
		if($s==1 OR $s==6 or $w==1 or $w==5){
			echo "*";
		}
		else{
			echo "_";
		}
	}
}
?>
</body>
</html>

