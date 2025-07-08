<?php 

	session_start();
	if (empty($_SESSION['pseudo_admin']) || empty($_SESSION['passwd_admin']) ) {
		header("location:index.php");
	}
	if (isset($_GET["note"]) && $_GET["note"]==1){
		print "Opération bien effectué !";
	}
	require("configbase.php");
	require("../functions.php"); 
?>
<!DOCTYPE html>
<html>
<head>
	<title>Admin kodiarandroa</title>
	<link rel="stylesheet" type="text/css" href="css/styles.css">
	<script type="text/javascript" src="js/ajax.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<meta name='viewport' content='width=device-width, initial-scale=1'>
	<link rel='stylesheet' type='text/css' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css' >
	<script type='text/javascript' src='https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js'></script>
	<script type='text/javascript' src='https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js'></script>
	<script type="text/javascript" src="js/navigation.js"></script>
	<script type="text/javascript" src="js/main.js"></script>
</head>

<body>
	<div>
		<nav class="navbar navbar-inverse">
  			<div class="container-fluid">
    			<div class="navbar-header">
      				<a class="navbar-brand" href="#">Admin kodiarandroa</a>
    			</div>
    			<ul class="nav navbar-nav">
    				<li class="active"><a href="#">Home</a></li>
    				<li><a href="#">Statistiques</a></li>
   			   		<li><a href="#">Commentaires</a></li>
   				</ul>
   				<form method="post" action="deconnexion.php">
  			 	<ul class="nav navbar-nav navbar-right">
  			    	<li><a href="#"><span class="glyphicon glyphicon-user"></span> <?php echo $_SESSION['pseudo_admin']; ?></a></li>
  			    	<li><a href="deconnexion.php"><span class="glyphicon glyphicon-log-out"></span> Logout</button></a>
  			  	</ul>
  			  </form>
 			</div>
		</nav> 
	</div>


	<div class="container-fluid">
		<div class="container">
			<div class="menu1">
				<ul class="list-group list-group-flush">
					<li class="list-group-item" onclick="afficher('validation')">Validation<span class="badge">
					<?php print nombre('moto');?></span></li>
					<li class="list-group-item" onclick="afficher('recherche')">Recherche</li>
				</ul>
			</div>

			<div class="nav2" id="validation">
				<div class="menu2">
					<div class="vertical-menu">
						<?php 
							$req = $connexion -> query("SELECT * FROM $base.`moto`");
						?>
						<ul class="list-group list-group-flush">
						<?php
							while ($donnee = $req -> fetch() ) {
								?>
				 				<li id="num_moteur" onclick="rechercher(<?php print $donnee['id_moto94267'];?>,'contenu','recherche.php')"> <?php print $donnee['numero_moteur94267']; ?> </li>
							<?php
							}
						?>
						</ul>
					</div>
				</div>
			</div>

			<div class="nav2" id="recherche">
				<div style="margin-bottom: 40px;">
					<input type="text" name="txt_find" id="id_find">
				</div>
			</div>
			<div id="contenu"></div>

		</div>
	</div>

		<script type="text/javascript">
			afficher('validation');
		</script>

</body>
</html>