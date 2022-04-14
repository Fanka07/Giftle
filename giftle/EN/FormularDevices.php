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
             <h3>Category</h3>
            <div>    <input type="text" name="category" placeholder="Example: Screen" STYLE='color=#25DB99'/> </div>
            <h3>Product Model</h3>
            <div>   <input type="text" name="productModel" placeholder="Example: MacBook"/></div>
            <h3>Technical characteristics</h3>
            <div>  <input  id="technical" type="text" name="technical" placeholder='Example: Screen size 5"' /></div>
            <h3>Date of manufacture</h3>
            <div>    <input type="text" name="date" placeholder=" aaaa-mm-jj"/></div>
            </br>
         <div class="containerSubmit" >  <input id="submit" type="submit" value="SUBMIT"/></div> 
</form>
    </div>

    <?php include "include/footer.php"; ?>
</main>  
</body>
</html>