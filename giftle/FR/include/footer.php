
<head>
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
<style>
@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap');
*{
	margin:0;
	padding:0;
	box-sizing: border-box;
}
.container1{
	max-width: 1170px;
	margin:auto;
}
.row{
	display: flex;
	flex-wrap: wrap;
}
ul{
	list-style: none;
}
.footer{
	background-color: #1C1C1C;
    padding: 70px 0;
	line-height: 1.5;
	font-family: 'Poppins', sans-serif;
	padding-left:2em;
}
.footer-col{
   width: 25%;
   padding: 0 15px;
}
.footer-col h4{
	font-size: 18px;
	color: white;
	text-transform: capitalize;
	margin-bottom: 35px;
	font-weight: 500;
	position: relative;
}
.footer-col h4::before{
	content: '';
	position: absolute;
	left:0;
	bottom: -10px;
	background-color: #9CE6CB;
	height: 2px;
	box-sizing: border-box;
	width: 50px;
}
.footer-col ul li:not(:last-child){
	margin-bottom: 10px;
}
.footer-col ul li a{
	font-size: 16px;
	text-transform: capitalize;
	color: white;
	text-decoration: none;
	font-weight: 300;
	color: white;
	display: block;
	transition: all 0.3s ease;
}
.footer-col ul li a:hover{
	color:#25DB99;
	padding-left: 8px;
}
.footer-col .social-links a{
	display: inline-block;
	height: 40px;
	width: 40px;
	background-color: rgba(255,255,255,0.2);
	margin:0 10px 10px 0;
	text-align: center;
	line-height: 40px;
	border-radius: 50%;
	color: white;
	transition: all 0.5s ease;
}
.footer-col .social-links a:hover{
	background-color:#25DB99;
}

/*responsive*/
@media(max-width: 767px){
  .footer-col{
    width: 50%;
    margin-bottom: 30px;
}
}
@media(max-width: 574px){
  .footer-col{
    width: 100%;
}
}

  </style>
</head>


  <footer class="footer">
  	 <div class="container1">
  	 	<div class="row">
  	 		<div class="footer-col">
  	 			<h4>entreprise</h4>
  	 			<ul>
  	 				<li><a href="#">nos services</a></li>
  	 				<li><a href="#">politique de confidentialité</a></li>
  	 				<li><a href="#">Notre équipe</a></li>
  	 			</ul>
  	 		</div>
  	 		<div class="footer-col">
  	 			<h4>Obtenir de l'aide</h4>
  	 			<ul>
  	 				<li><a href="#">FAQ</a></li>
  	 				<li><a href="#">changer d'appareil</a></li>
  	 				<li><a href="#">retourner un appareil</a></li>
  	 			</ul>
  	 		</div>
  	 	
  	 		<div class="footer-col">
  	 			<h4>Suivez-nous</h4>
  	 			<div class="social-links">
  	 			<a  target="_blank" href="https://www.youtube.com/channel/UC2KZ7kxV-kgFJnpndWatgwQ"><i class="fab fa-youtube"></i></a>
  	 				<a target="_blank" href="https://twitter.com/2022Giftle"><i class="fab fa-twitter"></i></a>
  	 				<a  target="_blank" href="https://www.instagram.com/giftle2022/"><i class="fab fa-instagram"></i></a>
  	 				
  	 			</div>
  	 		</div>
  	 	</div>
  	 </div>
  </footer>


</html>
