<!-- Header -->
<header id="head">
		<div class="container">
			<div class="row">
				<h1 class="lead">Gestion des Catégories</h1>
			</div>
		</div>
</header>
<!-- /Header -->

<div class="container">

<div class="jumbotron top-space">
		<div class="container">
        <ol class="breadcrumb">
			<li class="active">Liste des catégories</li>
		</ol>
        <?php foreach($categorie as $row){ ?>
			<div class="row" style="border: 1px solid black;">
                    <div class="col-md-12 col-sm-6 highlight">
					    <div class="h-caption">
                            <div class="h-body text-center">     
                                <h3><?php echo $row['nom_categorie']; ?></h3>     
                            </div>
                        </div>
					    
				    </div>         
			</div> <!-- /row  -->
        <?php } ?>
		</div>
</div>

    <div class="row">
			
			<!-- Article main content -->
			<article class="col-xs-12 maincontent">
				
				<div class="col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
					<div class="panel panel-default">
						<div class="panel-body">
							<h3 class="thin text-center">Ajouter une catégorie </h3>
							<hr>
							
							<form action="<?php echo site_url("Categorie/traitement_categorie"); ?>" method="post">
								<div class="top-margin">
									<label>Nom</label>
									<input type="text" class="form-control" name="nomcategorie" required>
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
