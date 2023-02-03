<?php
    get_header();
    pageBanner(array(
        'title' => get_the_title(),
        'subtitle' => '',
        'photo' => 'images/screenshot.png'
    ));
?>

    <div class="container-fluid">
        <div class="row d-flex justify-content-center align-items-center">
            <div class="col-11 col-lg-10 col-xl-9">
                <div class="row d-flex justify-content-start align-items-center">
                    <div class="col-12 col-lg-10 col-xl-8">
                        <?php the_content(); ?> 
                    </div>
                    <!-- <div class="col-10 col-xl-5">
                        <form action="/action_page.php">
                            <div class="form-group">
                                <label for="fname">First Name</label>
                                <input type="text" class="form-control" id="fname" name="firstname" placeholder="First Name">
                            </div>
                            <div class="form-group">
                                <label for="lname">Last Name</label>
                                <input type="text" class="form-control" id="lname" name="lastname" placeholder="Last Name">
                            </div>
                            <div class="form-group">
                                <label for="subject">Subject</label>
                                <textarea id="subject" class="form-control" name="subject" placeholder="Enter your message here" style="height:200px"></textarea>
                            </div>
                            <input type="submit" value="Submit" class="btn contact-btn mb-2">
                        </form>
                    </div> -->
                </div>
            </div>
        </div>
    </div>

    <?php get_footer();
?>