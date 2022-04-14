
<!DOCTYPE html>
<html>
<head>
	<title>Giftle</title>

	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,400;0,600;0,700;1,500&family=Roboto:wght@200;300;400&display=swap" rel="stylesheet">
	<script src="https://use.fontawesome.com/e2689d5f0f.js"></script>
	<link rel="stylesheet" type="text/css" href="css/detail.css">
</head>
<body>
<?php include './include/header.php' ?>
<?php
    $id = isset($_GET['id']) ? $_GET['id'] : '';
    $sql = "SELECT * FROM product where id = $id";
    $result = mysqli_query($conn,$sql);
    $count = mysqli_num_rows($result);
    if($count > 0){
        foreach ($result as $key => $value) {}
        ?>
    
<div class="container">
	<div class="mainImg">
        <img class="mainImg--img img-fluid" src="../img/macbook.png">	
	</div>
	<main class="product">
		<h2 class="product--info__header"><?= $value['productModel'] ?></h2>
		<section class="product--info">
			<div class="product--info__subInfo">
				<div class="subInfo--stock">
					<p class="subInfo--stock__inStock">In Stock</p>
					<img class="subInfo--stock__favImg" src="images/heart.png">
					<p class="subInfo--stock__favText">Favoris</p>
				</div>

				<div class="subInfo--stockInfo">

					<p class="subInfo--stockInfo__stats">Statement : Good</p>

					<p class="subInfo--stockInfo__location">Location : <?= $value['location'] ?></p>
					
				</div>

				<div class="subInfo--reserve">

					<div class="subInfo--reserve__purchase">

						<div class="numSelector">

							<input id="purchaseNum" type="text" value="1" name="">

							<div class="numArrows">

								<i class="fa fa-arrow-up" id="upArrow" aria-hidden="true"></i>

								<i class="fa fa-arrow-down" id="downArrow" aria-hidden="true"></i>

							</div>

							<h2 class="purchase--reserveText">RESERVE</h2>

							<a href="#" class="purchase--button">I take it</a>


						
						</div>

					</div>

					<div class="subInfo--reserve__rating">

						<img class="rating--stars" src="images/yStar.png">

						<img class="rating--stars" src="images/yStar.png">

						<img class="rating--stars" src="images/yStar.png">

						<img class="rating--stars" src="images/yStar.png">

						<img class="rating--stars" src="images/gStar.png">

					</div>
					
				</div>

				<div class="linkInfo">

					<div class="subInfo--reserve__link">

						<p class="reserve--link__text">You want to create a link with your donor?</p>

						<a href="#" class="purchase--button">Link</a>

						
					</div>

				</div>

				
			</div>

			

		</section>

		<aside class="sideInfo">
				
				<div class="sideInfo--extra__details">

					<p class="details--header">Caracteristics</p>

					<div class="details--specs">
						
						<div class="details--specs__item">
							
							<p class="specs--item__text">CPU : <?= $value['cpu'] ?> </p>

						</div>

						<div class="details--specs__item">
							
							<p class="specs--item__text">Resolution : <?= $value['category'] ?></p>

						</div>

						<div class="details--specs__item">
							
							<p class="specs--item__text">Display size : <?= $value['technical'] ?></p>

						</div>


						<div class="details--specs__item">
							
							<p class="specs--item__text">Years : <?= date("Y",strtotime($value['date'])) ?></p>

						</div>

					</div>
					
				</div>

				<div class="sideInfo--chat">

					<p class="sideInfo--chat__header">Chat</p>

					<div class="sideInfo--chat__body"></div>

					<input id="chatInput" type="text" name="">
					
				</div>


			</aside>

	</main>

</div>

	<script type="text/javascript" src="js/detail.js"></script>
    <div>&ensp;</div>
    <?php include './include/footer.php' ?>
</body>
</html>
<?php
}else{
    ?>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h3>No product detail</h3>
            </div>
        </div>
    </div>
    <?php
}
?>