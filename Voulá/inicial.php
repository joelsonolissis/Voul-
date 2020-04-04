<?php
session_start();
  require_once("conecta.php");
  $nome_cookie = $_SESSION['login'];

 
?>
<!DOCTYPE html>
<html>
<head>
	<meta  charset="UTF-8">
	<title>Voulá</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://fonts.googleapis.com/css?family=Arimo|Montserrat|Noto+Sans|Open+Sans|PT+Sans|PT+Sans+Narrow|Poppins|Quicksand|Raleway|Roboto|Roboto+Mono|Roboto+Slab|Shrikhand|Slabo+27px|Source+Sans+Pro|Tajawal|Titillium+Web|Ubuntu" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="cssinicial.css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
         
        <link rel="stylesheet" type="text/css" href="animate.css">
          <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.css">
          <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
          <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
      

</head>
<body>

<header>
<nav class="navbar navbar-expand-md navbar-dark fixed-top">
		<img src="imagens\VOULÁ.jpg" id="icon">
			
 
			<div class="collapse navbar-collapse" id="navbarCollapse">
				<a href="#">Perfil</a>
                <a href="#">Compras</a>
				<a href="#">Reclamações</a>
			<img src="imagens\default-user.png" class="rounded-circle" alt="Sample image">
			<p class="text-primary" id="nome" name="nome"><?php echo "$nome_cookie";?></p>
			</div>
			


		</nav>
<div class="container" id="shop">
<div class="jumbotron" id="shop">
	<h2>Super Mercados  <span class="badge badge-secondary" id="j">Parceiros</span></h2>
	
	<script type="text/javascript">
	(function($) {
    "use strict";

    // manual carousel controls
    $('.next').click(function(){ $('.carousel').carousel('next');return false; });
    $('.prev').click(function(){ $('.carousel').carousel('prev');return false; });
    
})(jQuery);
</script>
	<section class="container p-t-3">
    <div class="row">
        <div class="col-lg-12">
            <h1></h1>
        </div>
    </div>
</section>
<section class="carousel slide" data-ride="carousel" id="postsCarousel">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 text-md-right lead">
                <a class="btn btn-outline-secondary prev" href="" title="go back"><i class="fa fa-lg fa-chevron-left"></i></a>
                <a class="btn btn-outline-secondary next" href="" title="more"><i class="fa fa-lg fa-chevron-right"></i></a>
            </div>
        </div>
    </div>
    <div class="container p-t-0 m-t-2 carousel-inner">
        <div class="row row-equal carousel-item active m-t-0">
            <div class="col-md-4">
                <div class="card">
                    <div class="card-img-top card-img-top-250">
                        <img class="img-fluid" src="http://i.imgur.com/EW5FgJM.png" alt="Carousel 1">
                    </div>
                    <div class="card-block p-t-2">
                        <h6 class="small text-wide p-b-2">Insight</h6>
                        <h2>
                            <a href>Why Stuff Happens Every Year.</a>
                        </h2>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-img-top card-img-top-250">
                        <img class="img-fluid" src="http://i.imgur.com/Hw7sWGU.png" alt="Carousel 2">
                    </div>
                    <div class="card-block p-t-2">
                        <h6 class="small text-wide p-b-2">Development</h6>
                        <h2>
                            <a href>How to Make Every Line Count.</a>
                        </h2>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-img-top card-img-top-250">
                        <img class="img-fluid" src="http://i.imgur.com/g27lAMl.png" alt="Carousel 3">
                    </div>
                    <div class="card-block p-t-2">
                        <h6 class="small text-wide p-b-2">Design</h6>
                        <h2>
                            <a href>Responsive is Essential.</a>
                        </h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="row row-equal carousel-item m-t-0">
            <div class="col-md-4">
                <div class="card">
                    <div class="card-img-top card-img-top-250">
                        <img class="img-fluid" src="//visualhunt.com/photos/l/1/office-student-work-study.jpg" alt="Carousel 4">
                    </div>
                    <div class="card-block p-t-2">
                        <h6 class="small text-wide p-b-2">Another</h6>
                        <h2>
                            <a href>Tagline or Call-to-action.</a>
                        </h2>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-img-top card-img-top-250">
                        <img class="img-fluid" src="//visualhunt.com/photos/l/1/working-woman-technology-computer.jpg" alt="Carousel 5">
                    </div>
                    <div class="card-block p-t-2">
                        <h6 class="small text-wide p-b-2"><span class="pull-xs-right">12.04</span> Category 1</h6>
                        <h2>
                            <a href>This is a Blog Title.</a>
                        </h2>
                    </div>
                </div>
            </div>
            <div class="col-md-4 fadeIn wow">
                <div class="card">
                    <div class="card-img-top card-img-top-250">
                        <img class="img-fluid" src="//visualhunt.com/photos/l/1/people-office-team-collaboration.jpg" alt="Carousel 6">
                    </div>
                    <div class="card-block p-t-2">
                        <h6 class="small text-wide p-b-2">Category 3</h6>
                        <h2>
                            <a href>Catchy Title of a Blog Post.</a>
                        </h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
	</div>
</div>

</header>
<section id="compra">
<div class="jumbotron">
<h1>Realize a sua compra</h1>
<hr>
</div>
</section>
</body>
</html>