<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="<?php  bloginfo('charset'); ?>">  <!-- la fonction bloginfo() fournit les infos sur le site , ici elle fait un echo de son charset -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php  bloginfo('name'); ?></title>  <!-- ici, on fait un echo du nom du site qui est paramétré dans le back-office > réglage genéral > titre du site -->
    <!-- CSS bootstrap 4 -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <!-- CSS du thème -->
    <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/style.css">  <!--  ici, on fait un echo du chemin du dossier du thème actif dans lequel on est  -->

    <?php
        wp_head(); // intègre des élément indisponsables à WP comme des fichier CSS & JS inclus dans function.php, ou la barre d'administration en front quand on est connecté en tant qu'admin. cette fonction estb obligatoire ici.
    ?>

</head>
<body <?php body_class(); ?>> <!-- on affiche les classes de la balise body générées automatiquement par WP -->

    <header>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container">
                <div class="row" style="width:100%">
                    <div class="navbar-brand col-lg-3">
                        <a href="<?php bloginfo('url'); ?>"><?php bloginfo('name'); ?></a><!-- bloginfo('url') fait un echo de l'url du site paramétrée dans BO> réglage > général >url -->
                    </div>

                    <p class="col-lg-9 texte-description"><?php bloginfo('description'); ?></p><!-- fait un echo du slogan paramétré dans BO(BO=back-office)> réglage > général >slogan -->

                    <div class="col-lg-12">
                        <!-- ici le menu de navigation -->
                    </div>
                </div><!-- fin .row -->
            </div><!-- fin .container -->
        </nav>
    </header>

    <!-- ici le bandeau -->

    <section class="container">
        <div class="row"><!-- attention : ces deux balises sont fermées dans le fichier footer.php -->

   
