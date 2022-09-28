<?php
/*$pt=66;

if($pt>0 && $pt<=37){
	echo "dostałeś ocene 1";
}
elseif ($pt>40 && $pt<=54){
	echo "dostałeś ocene 2";
}
elseif($pt>55 && $pt<=69){
	echo "dostałeś ocene 3";
}
elseif($pt>70 && $pt<=84){
	echo "dostałeś ocene 4";
}
elseif($pt>85 && $pt<=94){
	echo "dostałeś ocene 5";
}
else{
	echo "dostałeś ocene 6";
}
*/

for($f=-11; $f<=11; $f++){
	if($f%5==0){
		continue;
	}
	echo $f;
	echo "<br>";
}
?>