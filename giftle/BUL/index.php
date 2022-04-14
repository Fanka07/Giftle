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
			<h1>Кой си ти?</h1>
			<p>Изберете това, което търсите</p>
		</div>
      	<div class="buttons">
			<button class="blackbutton"> 
				<a href="donation.php">			
				<p class="colorButton">Донор</p>
				</a>
			</button>
			<button class="blackbutton"><a href="Benificiary.php">
				<p class="colorButton">Бенефициент</p>
				</a>
			</button>
		</div>

	<div class="home3">
		<div class="div1">	<img src="../img/homeAccueil.png" alt=""></div>
		<div class="div2"> <p>Giftle е новобранд стартъп, създаден от група студенти от Франция, България, Ливан, Мароко и Виетнам. Нашата цел е да свържем донори на цифрово оборудване в работно състояние с бенефициенти, които се нуждаят. Тези субекти могат да бъдат компании, институции или организации.</p></div>
	</div>
    </main>

<?php
	include "include/footer.php";
?>

</body>
</html>
