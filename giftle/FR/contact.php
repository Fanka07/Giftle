<!DOCTYPE html>
<html>
<head>
	<title>Contact</title>

	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,400;0,600;0,700;1,500&family=Roboto:wght@200;300;400&display=swap" rel="stylesheet">
	<link rel="stylesheet"  href="css/Contact.css">
</head>
<?php include './include/header.php' ?>
<body>

    <div class="divv1">
	<div class="contact">

		<h2 class="contact--header">Contact</h2>

		<div class="contact--info">

			<p class="contact--info__text">Nom</p>

				<input id="nameInput" class="contactInput" type="text" name="">

			<p class="contact--info__text">Objet</p>

				<input id="objectInput" class="contactInput" type="text" name="">

			<p class="contact--info__text">Email</p>

				<input id="emailInput" class="contactInput" type="text" name="">

			<p class="contact--info__text">Message</p>

				<textarea id="messageInput" class="contactInput--lg" type="text" name=""></textarea>

			<a class="button" href="#">Register</a>

		</div>



	</div>
    </div>
	<div class="giftleInfo">


		<p class="giftleInfo--text">Address : 1 Rue de Chablis, 93017 Bobigny</p>

		<p class="giftleInfo--text">Tel : 06 46 79 34 90</p>
		
	</div>
    <?php include './include/footer.php' ?>
</body>
</html>