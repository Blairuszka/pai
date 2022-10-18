<!DOCTYPE html>
    <head>
        <title>gay gay gay</title>
        <meta charset="utf-8">
    </head>
    <body>
		<form action="./awooga.php" method="POST">
		<select name="GRA">
		<option value="gre nr1">gra nr1</option>
		<option value="gre nr2">gra nr3</option>
		<option value="gre nr3">gra nr3</option>
		<input type="number" name="godz" />
		</select>
		<input type="submit" />
		</form>
        <?php
		function godz1($aa, $bb){
			if($aa<=5 and $aa>=1 and $bb=="gre nr1"){
				echo " Jesteś amatorem w tą gre byqu XD.";
			}
			elseif ($aa<=12 and $aa>=6 and $bb=="gre nr1"){
				echo " Jesteś dobuy w tą gre ziomuś.";
			}
			elseif ($aa>12 and $bb=="gre nr1"){
				echo " No byqu kurwa specjalistą jesteś.";
			}
			elseif($aa<=10 and $aa>=1 and $bb=="gre nr2"){
				echo " No nie wiem jak ci to powiedzieć nie umiesz w to grać po prostu xD.";
			}
			elseif ($aa<=24 and $aa>=11 and $bb=="gre nr2"){
				echo " No średni jesteś deklu.";
			}
			elseif ($aa>24 and $bb=="gre nr2"){
				echo " No i elegancko byqu łanie grasz.";
			}
			elseif($aa<=20 and $aa>=1 and $bb=="gre nr3"){
				echo " Nie graj w tą gre nigdy więcej jesteś koszmarny.";
			}
			elseif ($aa<=48 and $aa>=21 and $bb=="gre nr3"){
				echo " No zły nie jestes a;e dobry też nie xD.";
			}
			else{
				echo " Dobdże jest mordo.";
			}
		}
		if(isset($_POST['GRA'])){
		echo "Wybrałeś " . $_POST['GRA'].".";
		}
		if(isset($_POST['godz'])){
		echo " Masz przegrane " .(int)$_POST['godz']." godziny/in w tą gre no life'ie.";
		$A=(int)$_POST['godz'];
		$B=$_POST['GRA'];
		$aa=$A;
		$bb=$B;
		godz1($aa, $bb);
		}
        ?>
    </body>
</html>