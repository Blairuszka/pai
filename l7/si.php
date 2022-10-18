<!DOCTYPE html>
    <head>
        <title>;______;</title>
        <meta charset="utf-8">
    </head>
    <body>
	<p>podaj ile masz lat :))))</p>
    <form action="./si.php" method="POST">
        <input type="number" name="wiek" />
	<p>podaj swoje imię i nazwisko :)))))))))))</p>
	    <input type="text" name="imie" />
		<input type="text" name="nazwisko">
	<p>podaj swoją płeć :DDD</p>
		<p><input type="radio" name="plec" value="m" />Mężczyzna</p>
		<p><input type="radio" name="plec" value="k" />Kobieta</p>
		<p><input type="radio" name="plec" value="o" />Other :D</p>
		<input type="submit" />
	</form>
        <?php
			function str($aa){
				if($aa<=17 and $aa>=1){
					echo " Jesteś młody.... jeszcze. XD";
				}
				elseif ($aa<=40 and $aa>=18){
					echo " Jesteś dorosły :/";
				}
				else{
					echo " Jesteś staruchem xD";
				}
			}
			if(isset($_POST['wiek'])){
				echo "Masz " . (int)$_POST['wiek'] . " lat.";
				$A=(int)$_POST['wiek'];
				str($A);	
			}
			if(isset ($_POST['imie'])){
				echo ' Masz na imię '.htmlspecialchars($_POST['imie'])." ".htmlspecialchars($_POST['nazwisko']);
			}
			if(isset($_POST['plec'])){
				if($_POST['plec'] == 'm') echo " Wybrałeś płęć Mężczyzna u go short king";
				elseif($_POST['plec'] == 'k') echo " Wybrałaś płeć Kobieta :0 slayy gurl";
				else echo " Wybrana Other uwu u valid royality";
			}
			
        ?>
    </body>
</html>