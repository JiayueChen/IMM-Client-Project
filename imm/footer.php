<footer class="footer pt-5">
    <div class="container section-body">
        <div class="row pt-5">
            <div class="pt-5 col-xs-12 col-md-6">
                <img class="school-of-media" src="<?php bloginfo("template_url"); ?>/assets/images/logos/school-of-media-logo.png" alt="school of media logo">
            </div>
            <div class="pt-5 col-xs-12 col-md-6 footer-nav-link">
                <?php wp_nav_menu( array( 'theme_location' => 'primary-menu' ) ); ?>
                <ul>
                    <li class="pt-2 pb-3">
                        <a href="https://www.facebook.com/acInteractiveMediaMgt/" target="_blank">
                            <img class="social-media" src="<?php bloginfo("template_url"); ?>/assets/images/social-media-icons/font-awesome/facebook-brands.svg" alt="Facebook">
                        </a>
                        <a href="https://www.linkedin.com/in/darin-faber-75221b92/" target="_blank">
                            <img class="social-media" src="<?php bloginfo("template_url"); ?>/assets/images/social-media-icons/font-awesome/linkedin-brands.svg" alt="LinkedIn">
                        </a>
                        <a href="https://twitter.com/IMMALGONQUIN" target="_blank">
                            <img class="social-media" src="<?php bloginfo("template_url"); ?>/assets/images/social-media-icons/font-awesome/twitter-square-brands.svg" alt="Twitter">
                        </a>
                        <a href="https://www.youtube.com/user/algonquinIM" target="_blank">
                            <img class="social-media" src="<?php bloginfo("template_url"); ?>/assets/images/social-media-icons/font-awesome/youtube-brands.svg" alt="Youtube">
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="row pt-5 justify-content-md-center">
            <p>This Website was designed by graduates of the program</p>
        </div>
        <div class="row justify-content-md-center">
            <div class="col-6 col-md-3 designer-div">
                <a href="https://www.linkedin.com/in/asmaaelsayed/" target="_blank">
                    <img class="designer pb-3" src="<?php bloginfo("template_url"); ?>/assets/images/designers/asmaa-elsayed.png" alt="Asmaa Elsayed">
                </a>
                <p>Asmaa Elsayed</p>
            </div>
            <div class="col-6 col-md-3 designer-div">
                <a href="https://www.linkedin.com/in/tobisitu/" target="_blank">
                    <img class="designer pb-3" src="<?php bloginfo("template_url"); ?>/assets/images/designers/tobi-situ.png" alt="Tobi Situ">
                </a>
                <p>Tobi Situ</p>
            </div>
            <div class="col-6 col-md-3 designer-div" target="_blank">
                <a href="https://www.linkedin.com/in/jiayuechen/">
                    <img class="designer pb-3" src="<?php bloginfo("template_url"); ?>/assets/images/designers/julia-chen.png" alt="Julia Chen">
                </a>
                <p>Julia Chen</p>

            </div>
            <div class="col-6 col-md-3 designer-div" target="_blank">
                <a href="https://www.linkedin.com/in/jatinderpalsingh/">
                    <img class="designer pb-3" src="<?php bloginfo("template_url"); ?>/assets/images/designers/jatinder-singh.png" alt="Jatinder Singh">
                </a>
                <p>Jatinder Singh</p>
            </div>
        </div>
    </div>
</footer>

<?php wp_footer(); ?>
</body>

</html>
