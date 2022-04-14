<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="css/index.css" rel="stylesheet">
</head>
<body>
    <?php include './include/header.php' ?>
    <!DOCTYPE html>
    <main>
    	<div class="home">
			<h1>Qui êtes-vous ?</h1>
			<p>Sélectionnez ce que vous recherchez</p>
		</div>
      	<div class="buttons">
			<button class="blackbutton"> 
				<a href="donation.php">			
				<p class="colorButton">Donateur</p>
				</a>
			</button>
			<button class="blackbutton"><a href="Benificiary.php">
				<p class="colorButton">Bénéficiaire</p>
				</a>
			</button>
		</div>

	<div class="home3">
		<div class="div1">	<img src="../img/homeAccueil.png" alt=""></div>
		<div class="div2"> <p>Giftle est une startup newbord créée par un groupe d'étudiants de France, Bulgarie, Liban, Maroc et Vietnam. Notre objectif est de mettre en relation des donateurs d'équipements numériques en état de marche avec des bénéficiaires qui sont dans le besoin. Ces entités peuvent être des entreprises, des institutions ou des organisations.</p></div>
	</div>
    </main>

<?php
	include "include/footer.php";
?>

</body>
</html>
