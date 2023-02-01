<footer class="container-fluid mt-5">
    <div class="row d-flex justify-content-center">
        <div class="col-4">
            <h3 class="footer-headline">Site Links</h3>
            <ul class="footer-ul">
                <li>
                    <a class="footer-item" href="<?php echo site_url('/tutoring-services'); ?>">Tutoring Services</a>
                </li>
                <li>
                    <a class="footer-item" href="<?php echo site_url('/test-prep-services'); ?>">Test Prep Services</a>
                </li>
                <li>
                    <a class="footer-item" href="<?php echo site_url('/blog'); ?>">Blog</a>
                </li>
                <li>
                    <a class="footer-item" href="<?php echo site_url('/about-us'); ?>">About Us</a>
                </li>
                <li>
                    <a class="footer-item" href="<?php echo site_url('/contact-us'); ?>">Contact Us</a>
                </li>
            </ul>
        </div>
        <div class="col-4 text-left text-nowrap mb-5">
            <h3 class="footer-headline">Contact Us</h3>
            <a href="http://facebook.com/" class="social-color-facebook mx-2"><i class="fa fa-facebook" aria-hidden="true"></i></a>
            <a href="http://twitter.com/" class="social-color-twitter mx-2"><i class="fa fa-twitter" aria-hidden="true"></i></a>
            <a href="http://youtube.com/" class="social-color-youtube mx-2"><i class="fa fa-youtube" aria-hidden="true"></i></a>
            <a href="https://www.linkedin.com/" class="social-color-linkedin mx-2"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
            <a href="http://instagram.com/" class="social-color-instagram mx-2"><i class="fa fa-instagram" aria-hidden="true"></i></a>
        </div>
    </div>
</footer>

<!-- wp_footer() gives WP the ability to load JS files. Also, in this case, it adds in the black WP menu bar at the top of the page. -->
<?php wp_footer(); ?>
</body>
</html>