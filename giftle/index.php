<?php
    session_start();
   if(isset($_GET['lang'])){
       if(($_GET['lang'])==('en')||($_GET['lang']=='en')||($_GET['lang']=='bul')) {
           $lang=$_GET['lang'];
           $_SESSION['lang']=$lang;
       };
   };
   if (isset($_SESSION["lang"])){
       $lang=$_SESSION['lang'];
   }
   else {
       $lang = 'en';
   }
   if ($lang='en'){
       header('Location:./EN/');
   } else if($lang='fr'){
       header('Location:./FR/');
   }
else if($lang='bul'){
    header('Location:./BUL/');
}
   ;
?>
   