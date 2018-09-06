<?php
//-----------------------------------
// Création des zones de widgets :
function eprojet_init_sidebar(){  // notre fonction qui contient la déclaration des zones de widgets
    register_sidebar(array(
        'name'         => 'région entête',  // nom qui apparait dans le BO
        'id'           => 'region-entete',  //identifiant unique de la zone pour pouvoir l'appeler dans un template
        'description'  => 'Cette zone de widget est en entête de la page d\'accueil'  // description qui apparait dans le BO
    ));

    register_sidebar(array(
        'name'         => 'Colonne de droite',  // nom qui apparait dans le BO
        'id'           => 'colonne-droite',  //identifiant unique de la zone pour pouvoir l'appeler dans un template
        'description'  => 'Cette zone de widget est dans la barre latérale de droite'  // description qui apparait dans le BO
    ));

    register_sidebar(array(
        'name'         => 'Footer de gauche',  // nom qui apparait dans le BO
        'id'           => 'footer-gauche',  //identifiant unique de la zone pour pouvoir l'appeler dans un template
        'description'  => 'ici on peut mettre un widget'  // description qui apparait dans le BO
    ));
}


add_action('widgets_init', 'eprojet_init_sidebar');  //j'exécute ma fonction nommée "eprojet_init_sidebar" lors  de l'initiation des widgets effectuée par WP : notre fonction est accrochée à celle du coeur de WP (hook)



// ------------------------------------------
// Création des zones de menus :
function eprojet_init_menu(){
    register_nav_menu('primary', 'menu principal');  // on déclare une zone de menu d'id "primary" et de nom "menu principal" dans le BO.

    register_nav_menu('secondary', 'menu secondaire');
}

add_action('init', 'eprojet_init_menu');  // WP exécute notre fonction register_nav_menu lors de son initiation (='init').