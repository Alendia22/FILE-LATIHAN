<?php
	$tampil = "";

		if ($_SERVER["REQUEST_METHOD"] == "POST") {
			$bil = $_POST["bil"];
			<?php
	$tampil = "";

		if ($_SERVER["REQUEST_METHOD"] == "POST") {
			$bil = $_POST["bil"];
			
			if ($bil % 2 == 0){ //Kondisi
			    echo "$bil Merupakan Bilangan Genap"; //Kondisi true
		}else {
			    echo "$bil Merupakan Bilangan Ganjil"; //Kondisi false
		}
	}

			if ($bil % 2 == 0){ //Kondisi
			    echo "$bil Merupakan Bilangan Genap"; //Kondisi true
		}else {
			    echo "$bil Merupakan Bilangan Ganjil"; //Kondisi false
		}
	}
?>