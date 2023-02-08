
    <!-- Header -->
	<header id="head">
		<div class="container">
			<div class="row">
				<h1 class="lead">Mes objets</h1>
			</div>
		</div>
	</header>
	<!-- /Header -->
		
	<!-- Highlights - jumbotron -->
	<div class="jumbotron top-space">
		<div class="container">
			
			<div class="row">
                <?php foreach($myobjet as $row){ ?>
                    <div class="col-md-3 col-sm-6 highlight">
					    <div class="h-caption"><img src="assets/images/<?php echo $row['photo']; ?>" alt="image not found"></div>
					    <div class="h-body text-center">
						    <h4><?php echo $row['titre']; ?></h4>
					    </div>
				    </div>         
                <?php } ?>
			</div> <!-- /row  -->
		
		</div>
	</div>
    <br>
	<!-- /Highlights -->

	<!-- container -->
	<div class="container">

    <div class="row">
			
			<!-- Article main content -->
			<article class="col-xs-12 maincontent">
				
				<div class="col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
					<div class="panel panel-default">
						<div class="panel-body">
							<h3 class="thin text-center">Ajouter un nouvel objet</h3>
							<p class="text-center text-muted">C'est ici que vous allez ajouter vos objets pour pouvoir les échanger avec un objet d'autres personnes</p>
							<hr>
							
							<form action="<?php echo site_url("Mes_objets/traitement_mes_objets"); ?>" method="post" enctype="multipart/form-data">
								<div class="top-margin">
									<label>Titre</label>
									<input type="text" class="form-control" name="titre" required>
								</div>
								<div class="top-margin">
									<label>Photo</label>
									<input type="file" class="form-control" name="photo" required>
								</div>
                                <div class="top-margin">
									<label>Prix estimatif</label>
									<input type="number" min="0" class="form-control" name="prix" required>
								</div>
                                <div class="top-margin">
									<label>Catégorie</label>
									<select name="categorie">
                                    <?php foreach($categorie as $row){ ?>
                                        <option value="<?php echo $row['id_categorie']; ?>"><?php echo $row['nom_categorie']; ?></option>
                                    <?php } ?>
                                    </select>
								</div>
								<hr>

								<div class="row">
									<div class="col-lg-4 text-right">
										<button class="btn btn-action" type="submit">Ajouter</button>
									</div>
								</div>
							</form>
						</div>
					</div>

				</div>
				
			</article>
			<!-- /Article -->

		</div>

</div>	<!-- /container -->
