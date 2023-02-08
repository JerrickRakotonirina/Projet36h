<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport"    content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="author"      content="Sergey Pozhilov (GetTemplate.com)">
	
	<title>Takalo - takalo</title>

	<link rel="shortcut icon" href="assets/images/gt_favicon1.png">
	
	<link rel="stylesheet" media="screen" href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,700">
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/css/font-awesome.min.css">

	<!-- Custom styles for our template -->
	<link rel="stylesheet" href="assets/css/bootstrap-theme.css" media="screen" >
	<link rel="stylesheet" href="assets/css/main.css">
	<!-- <link rel="stylesheet" href="assets/css/style.css"> -->

	<!-- <link rel="stylesheet" href="assests/css2/bootstrap.min.css">
    <link rel="stylesheet" href="assests/css2/font-awesome.min.css">
    <link rel="stylesheet" href="assests/css2/elegant-icons.css">
    <link rel="stylesheet" href="assests/css2/jquery-ui.min.css">
    <link rel="stylesheet" href="assests/css2/magnific-popup.css">
    <link rel="stylesheet" href="assests/css2/owl.carousel.min.css">
    <link rel="stylesheet" href="assests/css2/slicknav.min.css">
    <link rel="stylesheet" href="assests/css2/style.css"> -->

	<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
	<script src="assets/js/html5shiv.js"></script>
	<script src="assets/js/respond.min.js"></script>
	<![endif]-->
</head>
<?php $user=$this->session->userdata('user'); ?>
<body class="home">
	<!-- Fixed navbar -->
	<div class="navbar navbar-inverse navbar-fixed-top headroom" >
		<div class="container">
			<div class="navbar-header">
				<!-- Button for smallest screens -->
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"><span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
				<a class="navbar-brand" href="<?php echo site_url('Home')?>"><img src="assets/images/logo.png" alt="Progressus HTML5 template" width="150px"></a>
			</div>
			<div class="navbar-collapse collapse">
				<ul class="nav navbar-nav pull-right">
					<li><a href="<?php echo site_url('Home')?>">Home</a></li>
					<?php if ($user[0]['est_Admin']==1) { ?>
						<li><a href="<?php echo site_url('Categorie')?>">Gestion Categorie</a></li>
						<li><a href="">Statistiques</a></li>
					<?php }else{ ?>
						<li><a href="<?php echo site_url('Mes_objets')?>">Mes Objets</a></li>
						<li><a href="<?php echo site_url('Proposition')?>">Mes Propositions</a></li>
					<?php } ?>
					<!-- <li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">More Pages <b class="caret"></b></a>
						<ul class="dropdown-menu">
							<li><a href="sidebar-left.php">Left Sidebar</a></li>
							<li class="active"><a href="sidebar-right.php">Right Sidebar</a></li>
						</ul>
					</li> -->
					<?php if ($this->session->userdata('user')) {?>
						<li><a class="btn" href="<?php echo site_url('Signin/disconnect')?>">Deconnexion</a></li>
					<?php }else{ ?>
						<li><a class="btn" href="<?php echo site_url('Signin')?>">SIGN IN / SIGN UP</a></li>
					<?php } ?>
				</ul>
			</div><!--/.nav-collapse -->
		</div>
	</div> 
	<!-- /.navbar -->