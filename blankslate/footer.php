            </div>
            <footer id="footer">
                <div>
                    <h2>Sociale medier</h2>

                    <a href="https://www.facebook.com/antiquisaalborg">
                        <i class="fab fa-facebook-square"></i>
                        <p>@antiquisaalborg</p>
                    </a>
                    
                    <a href="https://www.instagram.com/antiquis_aalborg/">
                        <i class="fab fa-instagram"></i>
                        <p>@antiquis_aalborg</p>
                    </a>

                </div>

                <div class="footer-column">
                    <h2>Om</h2>
                    <a href="<?php echo site_url('/kontakt'); ?>">KONTAKT</a>
                    <a href="<?php echo site_url('/om-antiquis'); ?>">OM ANTIQUIS</a>
                    <a href="#">COOKIES</a>
                    <p>CVR: </p>
                </div>

            </footer>
        </div>
        <?php wp_footer(); ?>
        
        <div id="copyright">
            &copy; <?php echo esc_html( date_i18n( __( 'Y', 'antiquistema' ) ) ); ?> <?php echo esc_html( get_bloginfo( 'name' ) ); ?>
        </div>

    </body>
</html>