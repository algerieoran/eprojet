<?php
    get_header();   // inclusion de header.php
?>



   <div class="col-lg-9">
        <?php
            if(have_posts()) :
                while (have_posts()) : the_post();
        ?>
                    <h2 class="col-lg-12"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                    <div class="col-lg-12"> <?php the_content(); ?> </div>
                    <div class="col-lg-12">Le code postal : <?php the_field('code_postal'); ?> </div>
                    <div class="col-lg-12">La ville : <?php the_field('ville'); ?> </div>
                    <div class="col-lg-12">Le téléphone : <?php the_field('telephone'); ?> </div><br><br>
                    <!-- <div class="col-lg-12"><a href="http://localhost/eprojet/pro/">Retour vers la liste des professionnels :  </a></div> -->
                   
    
        <?php
    
                endwhile;
    
            else :
                echo '<p>Aucun contenu ne correspond à votre demande...</p>';
            endif;
        ?>
                     <p><a href="<?php bloginfo('url'); ?>/pro">Retour vers la liste des professionnels  </a></p>
   </div> 


    <div class="col-lg-3">
        <?php
            get_sidebar('droite');  // inclusion du fichier qui s'appelle sidbar-droite.php
        ?>
    </div>

    




<?php
    get_footer();  // inclusion de footer.php
?>
