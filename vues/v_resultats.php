<?php
header('Content-type: text/html; charset=UTF-8');
?>

<!-- COVER (image à changer) -->

<div id="cover" style="height: 200px;"></div>

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

<div id="presentation">
    <div class='wrap catHeader' >

        <img src="img/category/<?= $category['cate_title'] ?>.jpg" alt="<?= $category['cate_title'] ?>"/>
        <p><?= $category['cate_description'] ?></p>

    </div>
</div>

<div class="wrapBig">

    <?php

    foreach ($propositions as $video)
    {
        echo '<div class="bloc">';
        echo '  <a href="index.php?action=consulter&idDly='.$video['id_daily'].'">';
        echo '      <img src="'.$video['thumbnail_120_url'].'" alt="'.$video['vide_name'].'"/>';
        echo '      <div class="informations">';
        echo '          <h3>'.$video['vide_name'].'</h3><h4> de '.$video['vide_created_by'].'</h4>';
        echo '          <legend>'.$video['vide_created_at'].'</legend>';
        echo '          <div class="views"><h4>'.$video['vide_nbvue'].' vues</h4></div>';
        echo '      </div>';
        echo '  </a>';
        echo '</div>';
    }

    ?>

    <div class="clearfix"></div>

</div>
