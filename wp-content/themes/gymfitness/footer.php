        <footer class="footer contenedor">
            <hr>
            <div class="contenido-footer">
                <?php
                $args = array(
                    'theme_location' => 'menu-principal',
                    'container' => 'nav',
                    'container_class' => 'menu-principal'
                );
                wp_nav_menu($args);
                ?>
            </div>
            <p class="copyright">Todos los derechos reservados. GymFitness <?php echo get_bloginfo('name') . " " . date('y'); ?></p>
        </footer>
        
        <?php wp_footer(); ?>

        </body>
        </html>