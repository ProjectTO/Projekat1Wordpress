<html lang="en" xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta charset="utf-8" />
<title>Project 1</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<script type="text/javascript" src="http://code.jquery.com/jquery-1.11.0.min.js"></script>

<!-- <link rel="stylesheet" type="text/css" href="css/main-min.css"/>
 -->
<script type="text/javascript">
$(document).ready(function(){ 
    $(".padLista").hide();
    $(".padListaShow").on("click", function(event){
    event.stopPropagation();
    $(".padLista").toggle();
    });
    $('html').click(function() {
    $(".padLista").hide();
});
});
</script>

<?php wp_head(); ?>
</head>

<body>

	<div class="header">
		<div class="colCenter">
		
			<a href="index.html"><img src="wp-content\themes\Projekat 1\img\logo_no_back.png" alt="logo slika"/></a>
			<ul class="desno sakrij">
				<li><a href="#">Pocetna</a></li>
				<li><a href="#">O bazi</a></li>
				<li><a href="#">Aktuelnosti</a></li>
				<li><a href="#">Kontakt</a></li>
			</ul>
            <div class="filter desno">
            <div class="padLista">
                <a href="#">Pocetna</a>
                <a href="#">O bazi</a>
                <a href="#">Aktuelnosti</a>
                <a href="#">Kontakt</a>
            </div>
            <button class="padListaShow" onclick="showHide()"><i class="fa fa-bars"></i></button>
        </div>

    </div>
	</div>