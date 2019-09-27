<?php SESSION_START();
	$_SESSION["surName"] = $_POST["surName"]; 
	$_SESSION["lastName"] =$_POST["lastName"];
	$_SESSION["exercises"] = $_POST["exercises"];
	include "script/func.php";
?>
<!doctype html>
<html lang="de">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Übungsblatt</title>
    <link rel="stylesheet" href="w3_mod.css">
  </head>
 <body>
	<div class="w3-container w3-center w3-border">
		<h1>
			<?php if( (empty($_SESSION["surName"]) == 0)  && (empty($_SESSION["lastName"]) == 0) ){
				 getName($_SESSION["surName"],$_SESSION["lastName"]);
			 }
			 else{
				echo "";
			} 
			 ?>
		</h1>
	</div>	
	<div class="w3-container w3-border">
		<?php
			if (empty($_SESSION["exercises"]) == 0){ 
			getExercise($_SESSION["exercises"]);
			}
			else{
			getSorry();
			}
		?>	
	</div>
 </body>
</html>
