<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="css/Benificiary.css" rel="stylesheet">
</head>
<body>
<?php include './include/header.php' ?>
<?php 

$user='giftle';
$pass ='DB0yCyToXBwg';
     
try{
    $db = new PDO("mysql:host=localhost;dbname=giftle" , $user, $pass);
    $requete = 'SELECT * from devices';
    $result = $db->query($requete);
    echo "<div class='container'>";
    foreach($db->query($requete)as $row){
     
      afficherLigne($row);
      
    }echo "</div>";
}catch(PDOException $e)
{
print "Erreur:" . $e->getMessage()."<br/>";
die();
}

function afficherLigne($row){
    echo "<div class='blackCard'>";
    echo "</br> </br>";  
    echo  "<div class='title'>". $row['Category'].'</div>'.'<br>'; 
    echo 'Product Model: '. $row['ProductModel'].'<br>'; 
    echo 'Date of Manufacture: ' .$row['dateManufacture'].'<br>';
    echo "<div class='miniContainer'>".$row['technicalcharacteristics'].'</div>'.'<br>';
    echo '<div class="popup" onclick="myPopup()">Reserve
        <span class="popuptext" id="myPopup">Succesful</span>
        </div>';
    echo "</div>";
}

?>


</div>
<?php include './include/footer.php' ?>
<script src="js/popup.js"></script>
</body>
</html>