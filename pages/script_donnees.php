<?php include("includes/connexion_db.inc.php"); ?>

		<h1>Scripts pour collecter les données </h1>
			<?php
					$resultat = $mysqli->query("SELECT * from produits");
					while($donnee=$resultat->fetch_assoc()){
						$id=$donnee['id'];
						$nom=$donnee['nom'];
						echo "<center><li><a href='?page=pages/script_donnees.php&id=$id'>$nom</a></li></center><br>

            ";
					}


					if(isset($_GET['id']) && !empty($_GET['id'])){
						$id=$_GET['id'];
						$resultat_id = $mysqli->query("SELECT * from produits where id='$id'");

						echo "<h3>Details de l'element avec l'Id: $id</h4>";

            if ($resultat_id == 0){
              echo '

              <h4>Une Erreur est survenue</h4>';
            } else {
              while($donnee=$resultat_id->fetch_assoc()){
                  echo '<center><table><tr><tr>';
                  foreach ($donnee as $key) {
                    echo '<td>'.array_search($key, $donnee).'</td>';
                  }
                  echo '</tr><tr>';
                  foreach ($donnee as $key) {
                    echo '<td>'.$key.'</td>';
                  }
                  echo '</tr></table></center>';
                }

            }

					}
			?>
