<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge"
       <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <!-- Site Icons -->
    <link rel="shortcut icon" type="image" href="assets/Logo/logo_original.jpg" />
    <link rel="apple-touch-icon" href="images/apple-touch-icon.png">
    <!--font-->
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Nothing+You+Could+Do" />
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <!-- Pogo Slider CSS -->
    <link rel="stylesheet" href="assets/css/pogo-slider.min.css">
	<!-- Site CSS -->
    <link rel="stylesheet" href="assets/css/style.css">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="assets/css/responsive.css">
</head>
<body id="home" data-spy="scroll" data-target="#navbar-wd" data-offset="98">

	<!-- Start header -->
	<header class="top-header">
		<nav class="navbar header-nav navbar-expand-lg">
            <div class="container-fluid">
				<a class="navbar-brand" href="http://PROJETDPGRAINES.info/index.php"><img src="assets/Logo/logo_original.jpg" width="150" height="150"alt="logo"></a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-wd" aria-controls="navbar-wd" aria-expanded="false" aria-label="Toggle navigation">
					<span></span>
					<span></span>
					<span></span>
				</button>
                <div class="collapse navbar-collapse justify-content-around" id="navbar-wd">
                    <ul class="navbar-nav">
<!--                        <li><a class="nav-link active" href="http://PROJETDPGRAINES.info/index.php">Accueil</a></li>-->
                        <li><a class="nav-link dropdown-toggle" href="http://PROJETDPGRAINES.info/marques.php" id="navbarDropdown"role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Marques</a>
                               <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="#">Action</a>
                             <a class="dropdown-item" href="#">Another action</a>
                             <a class="dropdown-item" href="#">Something else here</a>
                            </div>
                        </li>
                        <li><a class="nav-link" href="http://PROJETDPGRAINES.info/deco.php">Conseil déco</a></li>
                        <li><a class="nav-link dropdown-toggle" href="http://PROJETDPGRAINES.info/deco.php" id="navbarDropdown"role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Produits</a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                             <a class="dropdown-item" href="#">Action</a>
                             <a class="dropdown-item" href="#">Another action</a>
                             <a class="dropdown-item" href="#">Something else here</a>
                        </li>
			<li><a class="nav-link" href="http://PROJETDPGRAINES.info/contact.php">Contact</a></li>
                    </ul>
                            <form class="form-inline">
	                     <input class="form-control mr-sm-2" type="search" placeholder="Rechercher" aria-label="Search">
	                     <button class="btn btn-outline-secondary my-2 my-sm-0" type="submit">Valider</button>
	                  </form>
                </div>
            </div
        </nav>
	</header>
	<!-- End header --

<?php
include 'footer.php';
?>