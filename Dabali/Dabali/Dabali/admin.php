<?php
require_once("connexion_start_inc.php");
$requete="SELECT * FROM user";
$result=$pdo->query($requete);
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>DABALI RESTAURATION</title>
    <meta charset="utf-8">
    <?php include("links.php");?>
    <link rel="stylesheet" type="text/css" href="../css/monstyle.css">
  </head>
  <body>
  	<div class="container">
  		<div class="panel panel-success">
  		<div class="panel-heading">Rechercher un utilisateur</div>
  		<div class="panel-body">le contenu du panneau</div>
  		</div>
  	
  		<div class="panel panel-primary">
  		<div class="panel-heading">La liste des utilisateurs</div>
  		<div class="panel-body">
  			<table class="table table-striped table-bordered">
  				<thead>
  					<tr>
  						<th>Numero</th><th>Utilisateur</th><th>Email</th><th>Mot de passe</th><th>Actions</th>
  					</tr>
  				</thead>
  				<tbody>
  						<?php while($user=$result->fetch()){ ?>
  							<tr>
  								<td><?php echo $user['id_user']?></td>
  								<td><?php echo $user['login']?></td>
  								<td><?php echo $user['email']?></td>
  								<td><?php echo $user['pwd']?></td>
  								<td>
  									<a href="edituser.php">
  										<span class="glyphicon glyphicon-edit"></span>
  									</a>
  									&nbsp;
  									<a onclick="return confirm('Etes vraiment sûr de supprimer cet utilisateur ?')" href="suppruser.php">
  										<span class="glyphicon glyphicon-trash"></span>
  									</a>
  									
  								</td>
  							</tr>
  						<?php } ?>
  				</tbody>
  			</table>
  		</div>
  		</div>
  		
  	</div>

  </body>
  </html>