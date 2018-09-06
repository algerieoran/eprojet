<?php
    get_header();   // inclusion de header.php
?>



    <?php
        if(have_posts()) :
            while (have_posts()) : the_post();
    ?>
                <h2 class="col-lg-12"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                <div class="col-lg-12"><?php the_content(); ?></div>
                

    <?php

            endwhile;

        else :
            echo '<p>Aucun contenu ne correspond à votre demande...</p>';
        endif;
    ?>

<?php 
//Afichage de la dernière annonce parue :

// On fait notre propre requête en BDD pour sélectionner le premier post de type "annonce" :


$arg = array (
    'post_type'          => 'annonce',   // slug du CPT "annonce"
    'posts_per_page'     => 1           // correspond à LIMIT  1 dans SQL pour sélectionner le premier élément

);
$query = query_posts($arg);

//SELECT * FROM post WHERE post_type = 'annonce' ORDER BY date DESC LIMIT 1


?>

<div class="col-lg-6">
<h2>Dernière annonce</h2>
<?php
    if(have_posts()) : 
        while (have_posts()) : the_post();
?>
    <div>
        <a href="<?php the_permalink(); ?>">
            <img src="<?php the_field('photo'); ?>" class="img-fluid">
        </a>
        <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
        <div>Au prix de <?php the_field('prix'); ?> euros</div>
    </div>

<?php
        endwhile;
    else : 
        echo'Pas encore d\'annonce...';

    endif;
?>
</div>

<?php 
//Afichage de la dernière annonce parue :

// On fait notre propre requête en BDD pour sélectionner le premier post de type "annonce" :


$arg = array (
    'post_type'          => 'pro',   // slug du CPT "annonce"
    'posts_per_page'     => 3           // correspond à LIMIT  1 dans SQL pour sélectionner le premier élément

);
$query = query_posts($arg);

//SELECT * FROM post WHERE post_type = 'annonce' ORDER BY date DESC LIMIT 1


?>

<div class="col-lg-6">
<h2>les trois derniers professionnels inscrits :</h2>
<?php
    if(have_posts()) : 
        while (have_posts()) : the_post();
?>
    <div>
        <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
        <p>Au prix de <?php the_field('ville'); ?> </p>
        <p>Au prix de <?php the_field('code_postal'); ?> </p>
    </div>

<?php
        endwhile;
    else : 
        echo'Pas encore d\'annonce...';

    endif;
?>
</div>







<?php
    get_footer();  // inclusion de footer.php
?>
<?php
wp_reset_query();  // on n'oublie pa