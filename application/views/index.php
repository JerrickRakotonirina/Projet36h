<?php

?>
<!-- Header -->
<header id="head">
	<div class="container">
		<div class="row">
			<h1 class="lead" style="font-weight: bold;">Tous les produits</h1>
		</div>
	</div>
</header>
<!-- /Header -->

<!-- Intro -->
<div class="row">
	<div class="col-lg-4 col-md-8 col-sm-8">
		<div class="footer__newslatter">
			<form action="<?php echo site_url('Recherche') ?>" method="get">
				<input type="text" placeholder="Search here" name="titre">
				<select name="cat" class="site-btn">
					<option value="0">Tous</option>
					<?php foreach ($categorie as $row) { ?>
						<option value="<?php echo $row['id_categorie']; ?>"><?php echo $row['nom_categorie']; ?></option>
					<?php } ?>
				</select>
				<button type="submit" class="site-btn">Search</button>

			</form>
		</div>
	</div>
</div>
<!-- /Intro-->

<!-- Highlights - jumbotron -->
<div class="jumbotron top-space">
	<div class="container">
		<div class="row">
			<?php foreach ($tableau as $tab) { ?>

				<div class="col-md-3 col-sm-6 highlight">
					<div class="h-caption"><img src="assets/images/<?php echo $tab['photo']; ?>" alt="X" width="150px" height="150px"></div>
					<div class="h-caption">
						<h4><?php echo $tab['titre']; ?></h4>
					</div>
					<div class="h-body text-center">
						<p>Ar <?php echo $tab['prix_estimatif']; ?></p>
						<form action="TraitementProposition" method="post">
							<input type="hidden" name="objet2" value="<?php echo $tab['id_objet']; ?>">
							Your objects
							<select name="objet1" class="">
								<?php foreach ($myobjet as $row) { ?>
									<option value="<?php echo $row['id_objet']; ?>"><?php echo $row['titre']; ?></option>
								<?php } ?>
							</select>
							<button value="submit" class="btn btn-primary">Exchange »</button>
						</form>
					</div>
				</div>
			<?php } ?>
		</div> <!-- /row  -->

	</div>
</div>
<!-- /Highlights -->

<!-- container -->