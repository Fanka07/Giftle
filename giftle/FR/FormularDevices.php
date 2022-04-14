<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="css/FormularDevices.css" rel="stylesheet">
</head>
<body>
<?php include './include/header.php' ?>
<main>    
    <div class="donation">
    <h1>Donation</h1>
<form action="Databases.php" method="post">
             <h3>Catégorie</h3>
            <div>    <input type="text" name="category" placeholder="Exemple: Ecran" STYLE='color=#25DB99'/> </div>
            <h3>Modèle du produit</h3>
            <div>   <input type="text" name="productModel" placeholder="Modèle de produit"/></div>
            <h3>Caractéristiques techniques</h3>
            <div>  <input  id="technical" type="text" name="technical" placeholder="Exemple : Taille de l'écran 5" /></div>
            <h3>Date de fabrication</h3>
            <div>    <input type="text" name="date" placeholder=" aaaa-mm-jj"/></div>
            </br>
         <div class="containerSubmit" >  <input id="submit" type="submit" value="Envoyer"/></div> 
</form>
    </div>

    <?php include "include/footer.php"; ?>
</main>  
</body>
</html>