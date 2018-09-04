
     </div> <!-- cette balise ferme un div ouvert dans header.php -->
    </section> <!-- cette balise ferme une section ouverte dans header.php -->

    <footer class="container-fluid align-items-center">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <!-- code à venir (widgets) -->
                </div>

                <div class="col-lg-4">
                    <p>&copy; Mes petites annonces - 2018</p>
                </div>

                <div class="col-lg-4">
                    <!-- code à venir (menus-->
                </div>


            </div><!-- fin .row -->
        </div><!-- fin .container -->
    </footer>
    <?php 
    wp_footer();// permet d'inclure les éventuelles script avant la fermeture  du body s'ils sont déclarés dans le fichier functions.php. Cette inclusion est obligatoire.
    ?>
    </body>
    </html>
    