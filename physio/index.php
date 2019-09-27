<?php SESSION_START();?>
<!doctype html>
<html lang="de">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Physio-Tool</title>
    <link rel="stylesheet" href="w3_mod.css">
  </head>
  <body>
	<div class="w3-container w3-center w3-border">
			<h1>Physio-Tool</h1>
	</div>
	<form method="POST" action="/template.php" class="w3-container">	
	<div class="w3-container w3-border">
		<div class="w3-container w3-border w3-hover-border-teal"><input class="w3-check" type="checkbox" name="exercises[0]" value="1"><p>Übung 1<img src="/img/boxing.png" alt="boxing" class="exercise"/></p></div>
		<div class="w3-container w3-border w3-hover-border-teal"><input class="w3-check" type="checkbox" name="exercises[1]" value="1"><p>Übung 2<img src="/img/backbend.png" alt="backbend" class="exercise"/></p></div>
		<div class="w3-container w3-border w3-hover-border-teal"><input class="w3-check" type="checkbox" name="exercises[2]" value="1"><p>Übung 3<img src="/img/exercising.png" alt="exercising" class="exercise"/></p></div>
		<div class="w3-container w3-border w3-hover-border-teal"><input class="w3-check" type="checkbox" name="exercises[3]" value="1"><p>Übung 4<img src="/img/pushup.png" alt="pushup" class="exercise"/></p></div>
	
	</div>
	<br />
		Vorname:<input class="w3-input" name="surName" type="text">
		Name:<input class="w3-input" name="lastName" type="text">
		<br />
		<button class="w3-btn w3-red" type="submit">Übungsblatt erzeugen</button>
	</form>

	<div class="w3-container w3-center"><a class="credits" href="credits.html">Impressum</a></div>
	 </body>
</html>
