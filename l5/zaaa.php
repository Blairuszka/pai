<?php
/* $products = array(
                'paper' => array(
                    'copier' => "Do kserokopiarek i uniwersalny",
                    'inkjet' => "Do drukarek atramentowych",
                    'laser' => "Do drukarek laserowych",
                    'photo' => "Papier fotograficzny"),
                'pens' => array(
                    'ball' => "Długopisy",
                    'hilite' => "Markery przezroczyste",
                    'marker' => "Markery zwykłe"),
                'misc' => array(
                    'tape' => "Taśmy klejące",
                    'glue' => "Kleje",
                    'clips' => "Spinacze")
                );
            echo "<pre>";
        
            foreach($products as $section => $items)
                foreach($items as $key => $value)
                    echo "$section: \t $key \t ($value)<br>";
            echo "</pre>"; 
			echo $products['misc']['tape'];
			echo "<br>";
			echo $products['pens']['ball'];
			echo "<br>";
			echo $products['paper']['copier'];
			echo "<br>";
			echo "<br>";
			
			foreach($products as $section => $items)
                foreach($items as $key => $value)
				if($key=='copier' or $key=='ball' or $key=='tape')
                    echo "$section: \t $key \t ($value)<br>"; */


/*echo $products['misc']['glue']; jeśli oddwołujesz się do konkretnej wartości*/
    $chessboard = array(
        array('w','s','g','h','k','g','s','w'),
        array('p','p','p','p','p','p','p','p'),
        array(' ',' ',' ',' ',' ',' ',' ',' '),
        array(' ',' ',' ',' ',' ',' ',' ',' '),
        array(' ',' ',' ',' ',' ',' ',' ',' '),
        array(' ',' ',' ',' ',' ',' ',' ',' '),
        array('P','P','P','P','P','P','P','P'),
        array('W','S','G','H','K','G','S','W'),
    );
    echo "<pre>";
	
	$chessboard [5][0] = 'P';
	$chessboard [6][0] = '';
    foreach($chessboard as $row)
    {
        foreach($row as $piece)
            echo "$piece ";
        echo "<br>";
    }

    echo "</pre>";
	/*echo $chessboard[7][3]; jeśli oddwołujesz się do konkretnej wartości */




?>