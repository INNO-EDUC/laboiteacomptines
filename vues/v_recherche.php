

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


<!-- PRESENTATION DE LA BOITE A COMPTINES -->

<div id="presentation">
    <div class='wrap'>
        <h1>Bienvenue sur la boîte à comptines !</h1>
        <h1>Vous trouverez ici de petites chansons pour vous accompagner dans l'éducation de vos enfants.</h1>
    </div>
</div>


<div class="wrapBig">

    <!-- CATEGORY -->

    <aside class="blocBig">

        <h1>Les catégories :</h1>

        <ul id="categories">
            <li><a href="http://laboiteacomptines.fr/index.php?action=confRecherche&cat=classique" title="Grands classiques"><img src="img/category/classique.jpg" alt=""></a></li>
            <li><a href="http://laboiteacomptines.fr/index.php?action=confRecherche&cat=corps" title="Découvrir le corps"><img src="img/category/corps.jpg" alt=""></a></li>
            <li><a href="http://laboiteacomptines.fr/index.php?action=confRecherche&cat=main" title="La main et ses 5 doigts"><img src="img/category/mains.jpg" alt=""></a></li>
            <li><a href="http://laboiteacomptines.fr/index.php?action=confRecherche&cat=gym" title="Un peu de gymnastique"><img src="img/category/gym.jpg" alt=""></a></li>
            <li><a href="http://laboiteacomptines.fr/index.php?action=confRecherche&cat=saut" title="Sur les genoux je saute"><img src="img/category/sauts.jpg" alt=""></a></li>
            <li><a href="http://laboiteacomptines.fr/index.php?action=confRecherche&cat=math" title="Les maths pour bébé"><img src="img/category/maths.jpg" alt=""></a></li>
            <li><a href="http://laboiteacomptines.fr/index.php?action=confRecherche&cat=monde" title="Le monde environnant"><img src="img/category/monde.jpg" alt=""></a></li>
            <li><a href="http://laboiteacomptines.fr/index.php?action=confRecherche&cat=animal" title="Comment font les animaux"><img src="img/category/animaux.jpg" alt=""></a></li>
            <div class='clearfix'></div>
        </ul>

        <h5>pour apprendre <br> par thème</h5>

    </aside>

    <!-- SUGGESTIONS VIDEOS -->

    <?php

    if (isset($added))
    {
        if ($added===1)
        {
            echo '<script>alert("La video à bien été ajoutée")</script>';
        }
        else
        {
            echo '<script>alert("Erreur lors de l\'ajout de la video")</script>';
        }
    }

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
