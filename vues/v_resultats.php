<?php
header('Content-type: text/html; charset=UTF-8');
?>

<!-- COVER (image à changer) -->

<div id="cover"></div>

<!-- RECHERCHE -->

<div class='wrap'>

    <div id='search'>
        <form method="POST" action="http://laboiteacomptines.fr/index.php?action=confRecherche" id="target">
            <input type="text" value="" name="cat" id="keyword" placeholder="entrez le nom de la comptine">
            <input type="submit" value="rechercher" id="submit">
        </form>
    </div>

</div>

<!-- Details de la catégorie -->

<div class='wrap'>



</div>


<p><?= count($list) ?> vidéos ont été trouvées pour la recherche <?= $_REQUEST["cat"] ?> </p>
<div id="list">

  <?php

  foreach ($list as $video)
  {
      echo '<ul class="list_resultat">';
      echo      '<li>';
      echo          '<a href="index.php?action=consulter&idDly='.$video['id_daily'].'">';
      echo              '<img src="'.$video['thumbnail_120_url'].'" id="video">';
      echo          '</a>';
      echo          '<div class="resultats">';
      echo              '<a href="index.php?action=consulter&idDly='.$video['id_daily'].'">';
      echo                  '<h2>'.$video['vide_name'].'</h2>';
      echo              '</a>';
      echo              '<p>Publié le : '.$video['vide_created_at'].' </p>';
      echo              '<p id="auteur">'.$video['vide_created_by'].'</p>';
      echo              '<p id="vues">Nombre de vues '.$video['vide_nbvue'].'</p>';
      echo              '<p></p>';
      echo          '</div>';
      echo      '</li>';
      echo  '</ul>';
  }
	?>

</div>
