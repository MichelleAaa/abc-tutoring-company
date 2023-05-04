</main>
<footer class="container-fluid mt-5 mb-2">
    <div class="row px-0 pt-4 d-flex justify-content-center mx-0">
        <div class="col-5 col-md-4 d-flex justify-content-start flex-column text-left px-0 mx-0">
            <h3 class="footer-headline"><?php esc_html_e( 'Site Links', 'abc-tutoring' ); ?></h3>
            <ul class="footer-ul">
                <li>
                    <a class="footer-item" href="<?php echo esc_url(site_url('/tutoring-services')); ?>"><?php esc_html_e( 'Tutoring Services', 'abc-tutoring' ); ?></a>
                </li>
                <li>
                    <a class="footer-item" href="<?php echo esc_url(site_url('/test-prep-services')); ?>"><?php esc_html_e( 'Test Prep Services', 'abc-tutoring' ); ?></a>
                </li>
                <li>
                    <a class="footer-item" href="<?php echo esc_url(site_url('/blog')); ?>"><?php esc_html_e( 'Blog', 'abc-tutoring' ); ?></a>
                </li>
                <li>
                    <a class="footer-item" href="<?php echo esc_url(site_url('/about-us')); ?>"><?php esc_html_e( 'About Us', 'abc-tutoring' ); ?></a>
                </li>
                <li>
                    <a class="footer-item" href="<?php echo esc_url(site_url('/contact-us')); ?>"><?php esc_html_e( 'Contact Us', 'abc-tutoring' ); ?></a>
                </li>
            </ul>
        </div>
        <div class="col-7 col-sm-5 pl-0 ml-0 pr-3">
            <div class="d-flex justify-content-end">
                <div class="text-right">
                    <h3 class="footer-headline"><?php esc_html_e( 'Contact Us', 'abc-tutoring' ); ?></h3>
                    <a href="<?php echo esc_url('http://facebook.com/'); ?>" class="social-color-facebook mx-2"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                    <a href="<?php echo esc_url('http://twitter.com/'); ?>" class="social-color-twitter mx-2"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                    <a href="<?php echo esc_url('http://youtube.com/'); ?>" class="social-color-youtube mx-2"><i class="fa fa-youtube" aria-hidden="true"></i></a>
                    <a href="<?php echo esc_url('https://www.linkedin.com/'); ?>" class="social-color-linkedin mx-2"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                    <a href="<?php echo esc_url('http://instagram.com/'); ?>" class="social-color-instagram ml-2"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                </div>
            </div>
        </div>
    </div>
    <div class="row pl-0 ml-0 d-flex justify-content-center">
        <div class="col-10">
            <p><?php esc_html_e( '&copy; Copyright', 'abc-tutoring' ); ?> <?php echo date("Y") ?><?php esc_html_e( '. All Rights Reserved.', 'abc-tutoring' ); ?></p>
        </div>
    </div>
</footer>

<!-- Allows js files to be loaded: -->
<?php wp_footer(); ?> 
</body>
</html>