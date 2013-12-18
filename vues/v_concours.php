<?php
header('Content-type: text/html; charset=UTF-8');
?>

<!-- COVER (image à changer) -->

<div id="cover" style="height: 200px;"></div>

<!-- RECHERCHE -->

<div class='wrap'>

    <div id='search'>
        <form method="POST" action="index.php?action=search" id="target">
            <input type="text" value="" name="searchString" id="keyword" placeholder="entrez le nom de la comptine">
            <input type="submit" value="rechercher" id="submit">
        </form>
    </div>

</div>

<!-- Details de la catégorie -->

<div id="presentation">
    <div class='wrap catHeader' >

        <h1>Concours de la meilleure comptine</h1>
        <p>Description du concours</p>

    </div>
</div>
