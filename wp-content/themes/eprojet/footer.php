
     </div> <!-- cette balise ferme un div ouvert dans header.php -->
    </section> <!-- cette balise ferme une section ouverte dans header.php -->

    <footer class="container-fluid align-items-center">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <!-- code à venir (widgets) -->
                    <?php
                        dynamic_sidebar('footer-gauche'); // appelle la zone de widget d'id "footer-gauche" déclarée dans functions.php
                    ?>
                </div>

                <div class="col-lg-4">
                    <p>&copy; Mes petites annonces - 2018</p>
                </div>

                <div class="col-lg-4">
                    <!-- code à venir (menus-->
                    <?php
                        wp_nav_menu(array(  // cette fonction permet d'appeler le menu que nous avons déclaré dans functions.php
                            'theme_location'  => 'secondary'  // 
                        )); 

                        // OU : wp_nav_menu('secondary');  // on appelle la zone de menu d'id "secondary" directement dans un string (sans array) quand il n'y a que l'id en argument
                    ?>
                   
                </div>


            </div><!-- fin .row -->
        </div><!-- fin .container -->
    </footer>
    <?php 
    wp_footer();// permet d'inclure les éventuelles script avant la fermeture  du body s'ils sont déclarés dans le fichier functions.php. Cette inclusion est obligatoire.
    ?>
    </body>
    </html>
    