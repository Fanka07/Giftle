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
    <h1>Дарение</h1>
<form action="Databases.php" method="post">
             <h3>Категория</h3>
            <div>    <input type="text" name="category" placeholder="Пример: Екран" STYLE='color=#25DB99'/> </div>
            <h3>Модел на продукта</h3>
            <div>   <input type="text" name="productModel" placeholder="Пример: MacBook"/></div>
            <h3>техническа характеристика</h3>
            <div>  <input  id="technical" type="text" name="technical" placeholder='Пример: Размер на екрана 5"' /></div>
            <h3>Дата на производство</h3>
            <div>    <input type="text" name="date" placeholder=" aaaa-mm-jj"/></div>
            </br>
         <div class="containerSubmit" >  <input id="submit" type="submit" value="ИЗПРАЩАНЕ"/></div> 
</form>
    </div>

    <?php include "include/footer.php"; ?>
</main>  
</body>
</html>