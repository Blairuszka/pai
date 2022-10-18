<!DOCTYPE html>
    <head>
        <title>;___________________;</title>
        <meta charset="utf-8">
    </head>
    <body>
	<form action="./kałabummer.php" method="POST">
	<p>wpisz numer.</p>
	<input type="number" name="numer" />
	<input type="submit" />
	</form>
	<br>
	<form action="./kałabummer.php" method="POST">
	<p>napisz coś cokolwiek po prostu</p>
	<input type="text" name="text" />
	<input type="submit" />
	<br>
	<br>
	</form>
		<?php
			$temp = explode(' ', " 1 2 3 4 5 6 7 8 9 10");
			$b=array("1","2","5","6","8","3","7","9","8","10");
			print_r($temp);
			echo "<br>";
			$a=array("blep","plop","plep","bop","blup");
			echo current($a)." ";
			echo next($a)." ";
			echo next($a)." ";
			echo next($a)." ";
			echo next($a)." ";
			echo "<br>";
			$ss = explode(' ',"blep plop plep bop blup");
			print_r($ss);
            sort($b, SORT_NUMERIC);
            sort($a, SORT_STRING);
			echo "<br>";
			echo "<br>";
            $i=0;
            foreach($a as $s){
                echo " $s <br>";
                ++$i;
			}
			echo "<br>";
			echo "<br>";
			$i=0;
			 foreach($b as $v){
                echo " $v <br>";
                ++$i;
			}
			echo "<br>";
			echo "<br>";
			rsort($b, SORT_NUMERIC);
            rsort($a, SORT_STRING);

            $j=0;
            foreach($a as $g){
                echo " $g <br>";
                ++$j;
            }
			echo "<br>";
			echo "<br>";

            $j=0;
            foreach($b as $m){
                echo " $m <br>";
                ++$j;
            }
			echo "<br>";
			echo "<br>";
			$chu=array("1","5","12","7","9");
			$mlep=array("awooga","poop","kawabummer","nje","dipshit");
			echo current($mlep)."<br>";
			next($mlep);
			echo next($mlep);
			reset($mlep);
			echo "<br>";
			echo "<br>";
			echo current($mlep);
			echo "<br>";
			echo "<br>";
			$k=0;
			echo "masz swoje numerki xD: <br>";
			if(isset($_POST['numer'])){
				echo (int)$_POST['numer']."<br>";
			}
			foreach($chu as $cha){
				echo " $cha <br>";
				++$k;
			}
			$kkk=0;
			echo "masz swoje wyraziki xDDDD: <br>";
			if(isset($_POST['text'])){
				echo htmlspecialchars($_POST['text'])."<br>";
			}
			foreach($mlep as $blep){
				echo " $blep <br>";
				++$kkk;
			}
		?>
    </body>
</html>