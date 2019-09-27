<?php
	function getName($surName,$lastName){
		echo "Übungsblatt für $surName $lastName";
	}

	function getExercise($exercises){
		foreach ($_SESSION["exercises"] as $i => $j) {
			include ("exercises/ex".$i.".php");
		}	
	}
	
	function getSorry(){
		include("sorry.php");
	}

?>
