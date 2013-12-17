<?php
header('Content-type: text/html; charset=UTF-8');
?>

<!-- PLAYER VIDEO -->

<div class="player">
    <div class="wrap">
        <iframe frameborder="0" id="consultation" width="920" height="480" src="http://www.dailymotion.com/embed/video/<?php echo $video['id_daily'];?>?logo=0&startscreen=html&html"></iframe>
        <div class="bottomBloc">
            <div class="title">
                <h3><?php echo $video["vide_name"]; ?></h3>
                <h4>&nbsp;de <?php echo $video["vide_created_by"]; ?></h4>
            </div>
            <!--<div class="like">
                <h4><?php /*echo $video["vide_rate"]; */?></h4>
                <a href="index.php?action=adore">
                    <img src="img/coeur.jpg" alt="coeur">
                    <h6>J'adore !</h6>
                </a>
            </div>-->
        </div>
    </div>
</div>

<article>

    <!-- PAROLES -->

	<div class="wrap paroles">

        <?php
        if (isset($video["vide_paroles"]) && strlen($video["vide_paroles"])>2)
        {
            echo '<h3>Paroles de la comptine :</h3>';
        }
        ?>


        <p id="paroles">

            <?php echo nl2br($video["vide_paroles"]); ?>

        </p>
	</div>

    <div class="wrap">
        <div id="disqus_thread"></div>

        <script type="text/javascript">

            /* * * CONFIGURATION VARIABLES: EDIT BEFORE PASTING INTO YOUR WEBPAGE * * */
            var disqus_shortname = 'laboiteacomptines'; // required: replace example with your forum shortname

            /* * * DON'T EDIT BELOW THIS LINE * * */
            (function() {
                var dsq = document.createElement('script'); dsq.type = 'text/javascript'; dsq.async = true;
                dsq.src = '//' + disqus_shortname + '.disqus.com/embed.js';
                (document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(dsq);
            })();
        </script>

        <noscript>Please enable JavaScript to view the <a href="http://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>
    </div>

</article>
		
