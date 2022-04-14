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
			<h1>Who are you?</h1>
			<p>Select what you are looking for</p>
		</div>
      	<div class="buttons">
			<button class="blackbutton"> 
				<a href="donation.php">			
				<p class="colorButton">Donor</p>
				</a>
			</button>
			<button class="blackbutton"><a href="Benificiary.php">
				<p class="colorButton">Beneficiary</p>
				</a>
			</button>
		</div>

	<div class="home3">
		<div class="div1">	<img src="../img/homeAccueil.png" alt=""></div>
		<div class="div2"> <p>Giftle is a newbord startup created by a group of students from France, Bulgaria, Lebanon, Morocco and Vietnam. Our objectif is to connect donors of digital equipment in working order with beneficiaries who are in need. These entities can be companies, institutions or organizations.</p></div>
	</div>
    </main>

<?php
	include "include/footer.php";
?>

</body>
</html>
