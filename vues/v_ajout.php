

<!-- COVER -->

<div class='wrap'>

    <div id="upload_cover"></div>
    <div class='upload_text'>
        <h6 style="font-size: 1.7em;">Créer votre propre comptine et mettez la en ligne sur notre site !</h6>
    </div>

</div>



<!-- FORMULAIRE -->

<div class="wrap frame_pink">
    <form id="ajout_form" method="POST" action="index.php?action=addMovie" enctype="multipart/form-data">

        <div class="c50">

            <div class="field">
                <label >Titre : </label> <input type="text" name="titre" id="titre" class="input"/>
            </div>
            <div class="field">
                <label>Auteur : </label> <input type="text" name="auteur" id="auteur" class="input"/>
            </div>
            <div class="field">
                <label>Type : </label>
                <select name="categorie" class="input" id="type">
                    <option>sélectionnez une catégorie</option>

                    <?php
                    foreach ($categories as $cat)
                    {
                        echo '<option>'.$cat['cate_title'].'</option>';
                    }
                    ?>
                </select>
            </div>
            <div class="field">
                <label for='Video' id="vidéo">Ajouter une video :</label>
                <div class="fileUpload button" style="float: right;">
                    <span>Choisissez un fichier</span>
                    <input class="fichier upload" type="file" capture="camera" accept="video/*" name="video" id="fichier"/>
                </div>
                <input id="uploadFile" disabled="disabled">
            </div>

        </div>


        <div class="c50">

            <div class="field">
                <label id="paroles">Paroles : </label> <textarea class="input" rows="14" cols="40" name="paroles" style="height: 250px;"></textarea>
            </div>

        </div>

        <div class="clearfix"></div>

        <input class="button btn_type3" type="submit" value="Mettre en ligne"/>


    </form>

</div>


<script type="text/javascript">
    document.getElementById("fichier").onchange = function () {
        document.getElementById("uploadFile").value = this.value;
    };
</script>
