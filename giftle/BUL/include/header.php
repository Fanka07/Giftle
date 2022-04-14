
   <style>
*{
    margin:0;
    padding:0;
    font-family: 'Montserrat', sans-serif;
}
body{
  overflow-x: hidden;
}
.margin-left{
  margin-left:50%;  
}

.navigation{
  display: grid;
  grid-template-columns: 1fr 2fr 1fr;
  grid-template-rows: 1fr;
  grid-column-gap: 0px;
  grid-row-gap: 0px;
  background-color:#1C1C1C;
  width:100%;
  height:114px;

  align-items:center;
  justify-items:center;
  
}

.navigationDiv1 { grid-area: 1 / 1 / 2 / 2; }
.navigationDiv2 { grid-area: 1 / 2 / 2 / 3; }
.navigationDiv3 { grid-area: 1 / 3 / 2 / 4; }

.navigation ul{
  list-style-type:none;
  text-decoration:none;
  display:flex;
}

.navigationDiv2 ul li a {
  text-decoration:none;
  color:white;
  font-family: 'Roboto', sans-serif;
}

.navigation ul li {
  font-size:20px;
  margin-left:15px;
  margin-right:15px;
 
}

.navigation ul li a:hover{
  color:#25DB99;

}

/*--------------- DROPDOWN LANGUAGES -----------*/
.dropbtn {
  background-color: transparent;
    color: white;
    font-family:'lemon_milkbold'; font-size:20px;
    border: none;
    cursor: pointer;
  }
  
 
  
  .dropdown {
    position: relative;
    display: inline-block;
    

  }
  
  .dropdown-content {
    margin-top:5px;
    display: none;
    position: absolute;
    left:40px;
    min-width: 80px;
    overflow: auto;
    z-index: 1;
   background-color: #1a1a1a;
   border:solid white 1px;
  }
  
  .dropdown-content a {
    color:white;
    padding: 12px 10px;
    text-decoration: none;
    display: block;
  }
  
  .dropdown a:hover { color:#25DB99;}
  
  .show {display: block;}
/* ----------------------------------------------- */
#triangle{
  font-size:10px;
  margin-left:5px;
}

#logoGiftle{
  width:170px;
}

#iconContact{
  width:46px;
}

@media (max-width: 1025px) {
  .dropbtn {
    font-size:16px;
  }
.navigation ul li{
  font-size:16px;
}
#logoGiftle{
  width:120px;
}
 }

@media (max-width: 769px) { 
  .navigation{
    display: flex;
    justify-content: center;
    align-items:center
  }
 .navigation ul li{
   font-size:13px;
   margin-left:5px;
 }

 .dropbtn {
   font-size:13px;
   margin-left:-40px;
 }

 .navigation ul li:nth-child(1){
   margin-left:50px;
 }
 .navigation ul li:nth-child(4){
  margin-right:50px;
}
}

@media (max-width: 550px) { 
  .dropbtn {
    font-size:10px;
  }
  .navigation ul li{
    font-size:10px;
    margin-right:0;
    margin-left:5px;
  }
  .navigation ul li:nth-child(1){
    margin-left:25px;
  }
  .navigation ul li:nth-child(4){
   margin-right:25px;
 }

  #logoGiftle{
    width:55px;
  }
  #iconContact{
    width:20px;
  }
  .dropbtn {margin-left:-20px;}
}

@media (max-width: 500px) { 
.navigation{
  flex-direction:column;
}
#iconContact{
  margin-top:14px;
}
#logoGiftle{
  margin-bottom:14px;
}
}
@media (max-width: 330px) { 
  
  .dropbtn {
    font-size:10px;
  }
  .navigation ul li{
    font-size:10px;
    margin-right:0;
    margin-left:5px;
  }

#triangle{margin-right:10px; font-size:8px;}
}

   </style>
<!--    <base href="http://localhost/GiftleTran/giftle/EN/"> -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"/>
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
</head>
<?php
error_reporting('all');
session_start();
// session_destroy();
  $filepath = realpath(dirname(__FILE__));
  include_once $filepath."/../conn.php";
?>
<body>
<head>
   <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@500&display=swap" rel="stylesheet">
   <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
</head>
    <nav >
        <div class="navigation">
            <div class="navigationDiv1">  <img id="logoGiftle" src="../img/logoGiftle.png" alt="" > </div>
            <div class="navigationDiv2"> 
                <ul>
          <li><a href="index.php"> У дома </a> </li>
          <li> <a href="HowItWorks.php">Как работи?</a></li>
          <li><a href="contact.php">Контакт</a></li>
                 <!--  Dropdown -->
         <div class="dropdown">
            <li><a onclick="dropdownLanguages()" class="dropbtn">Езици<span id="triangle">&#9660;</span> </a></li>
            <div id="myDropdown" class="dropdown-content">
              <a href="../EN/index.php">Английски</a>
              <a href="../FR/index.php">Френски</a>
              <a href="../BUL/index.php">България</a>
            </div>
            </div>
           
                </ul>
            </div>
            <div class="navigationDiv3">  
              <a href="./login.php"> <img id="iconContact" src="../img/iconeContact.png" alt=""></a>
              <?php
              // session_destroy();
                if(isset($_SESSION['userss'])){
                  echo '<p style="color:white;" >'.$_SESSION['userss'].'</p>';
                }
              ?>
            </div>
        </div>
    </nav>
   <script>
       
/* When the user clicks on the button, 
toggle between hiding and showing the dropdown content */
function dropdownLanguages() {
    document.getElementById("myDropdown").classList.toggle("show");

  }
  
  // Close the dropdown if the user clicks outside of it
  window.onclick = function(event) {
    if (!event.target.matches('.dropbtn')) {
      var dropdowns = document.getElementsByClassName("dropdown-content");
      var i;
      for (i = 0; i < dropdowns.length; i++) {
        var openDropdown = dropdowns[i];
        if (openDropdown.classList.contains('show')) {
          openDropdown.classList.remove('show');
        }
      }
    }
  }
  
   </script>
</body>
</html>
