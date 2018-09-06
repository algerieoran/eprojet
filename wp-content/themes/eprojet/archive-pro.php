<?php
   get_header();
?>  

 

   <div class="col-lg-9">

    <?php

       if (have_posts()) :
            while (have_posts()) : the_post();
    ?>           
            <div class="row cat-info">
                <div class="col-lg-3">
                    <a href="<?php the_permalink(); ?>"><img src="<?php the_field('photo'); ?>" class="img-fluid"></a>
                </div>

                <div class="col-lg-9">
                    <h4>
                        <a href="<?php the_permalink(); ?>"><?php the_title();  ?></a>
                    </h4>                    
                    <div>
                        <span>Le code postal : </span><?php the_field('code_postal'); ?>  
                    </div> 
                    <div>
                    <span>La ville : </span><?php the_field('ville'); ?>
                    </div>               
                </div>
            </div>        
            
    <?php
            endwhile;
            
        else:

            echo '<p>Aucune annonce ne correspond à vos critères...</p>';

       endif;

    ?>    
    </div> 

    <div class="col-lg-3">
       <?php
        get_sidebar('droite');  // inclusion de sidebar-droite.php
       ?>
    </div>
   
   <?php

        get_footer();

        wp_reset_query();   // on n'oublie pas de restaurer la requête principale

    ?>