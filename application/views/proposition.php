<!-- Header -->
<header id="head">
	<div class="container">
		<div class="row">
			<h1 class="lead">Mes Propositions</h1>
		</div>
	</div>
</header>
<!-- /Header -->

<div class="jumbotron top-space">
	<div class="container">

		<div class="row">
			<?php foreach ($tableau as $tab) { ?>
				<div class="col-md-6 col-sm-6 highlight">
					<div class="h-caption">
						<h4>
							<i class="fa fa-smile-o fa-5"></i>
							<p><?php echo $tab['nom1'] ?></p>
							<p><?php echo $tab['objet1'] ?></p>
						</h4>
					</div>
					<div class="h-body text-center">
					</div>
				</div>

				<div class="col-md-6 col-sm-6 highlight">
					<div class="h-caption">
						<h4>
							<i class="fa fa-smile-o fa-5"></i>
							<p><?php echo $tab['nom2'] ?></p>
							<p><?php echo $tab['objet2'] ?></p>
						</h4>
					</div>
					<div class="h-body text-center">
					</div>
				</div>

				<div class="col-lg-5 text-right">
					<a href=""> Accepter </a>
				</div>

				<div class="col-lg-3 text-right">
					<a href=""> Refuser </a>
				</div>
			<?php } ?>


		</div> <!-- /row  -->

	</div>
</div>