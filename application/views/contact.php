<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<!DOCTYPE html>
<!DOCTYPE html>
<html lang="en">

<?php include 'head.php' ?>

<body>

    <!-- ======= Header ======= -->
    <?php include 'menu.php' ?>
    <!-- ======= Hero Section ======= -->

    <main id="main">
    <section id="breadcrumbs" class="breadcrumbs">
            <div class="container">

                <div class="d-flex justify-content-between align-items-center">
                   
                    <ol>
                        <li>Contact Us</li>
                    </ol>
                </div>

            </div>
        </section><!-- End Breadcrumbs -->
        <section id="contact" class="contact" style="margin-top:50px;">
            <div class="container">

                <div class="row justify-content-center" data-aos="fade-up">

                    <div class="col-lg-10">

                        <div class="info-wrap">
                            <div class="row">
                                <div class="col-lg-4 info">
                                    <i class="bi bi-geo-alt"></i>
                                    <h4>Location:</h4>
                                    <p>Oyugis Town, Homabay county. Kenya.</p>
                                </div>

                                <div class="col-lg-4 info mt-4 mt-lg-0">
                                    <i class="bi bi-envelope"></i>
                                    <h4>Email:</h4>
                                    <p><a href="mailto:info@sepke.org">info@sepke.org</a></p>
                                </div>

                                <div class="col-lg-4 info mt-4 mt-lg-0">
                                    <i class="bi bi-phone"></i>
                                    <h4>Call:</h4>
                                    <p><a href="tel:+254 724 361 678">+254 724 361 678</a></p>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>
                <div class="container justify-content-center mt-3" data-aos="fade-up">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d31917.28805723458!2d34.719200038862226!3d-0.5087976120970567!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x182b279b6ab5af51%3A0x8ddd1a4ab4fffa75!2sOyugis!5e0!3m2!1sen!2ske!4v1611233154764!5m2!1sen!2ske" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                </div>
                <div class="row mt-5 justify-content-center" data-aos="fade-up">
                    <div class="col-lg-10">
                        <form  method="post" role="form" class="php-email-form">
                            <div class="row">
                                <div class="col-md-6 form-group">
                                    <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
                                </div>
                                <div class="col-md-6 form-group mt-3 mt-md-0">
                                    <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
                                </div>
                            </div>
                            <div class="form-group mt-3">
                                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
                            </div>
                            <div class="form-group mt-3">
                                <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
                            </div>                            
                            <div class="text-center "><button id="submitbtn" class="btn-success p-2 mt-2" style="border-radius: 24px;">Send Message</button></div>
                        </form>
                    </div>

                </div>

            </div>
        </section><!-- End Contact Section -->
        
        <div class="container-fliud p-2" data-aos="fade-up">

            <div class="row content">
                <div class="col-lg-9" data-aos="fade-right">
                    <h3>
                        Help us continue to empower youths in Kenya and worldwide.
                    </h3>
                </div>                
            </div>

        </div>
    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    <?php include 'footer.php' ?>
    <script>
          $(document).ready(function() {
            $("#submitbtn").click(function (event) {
                event.preventDefault();
                event.stopImmediatePropagation();
                var formValues = $(this).serialize();

                $.post("/Home/contactpost", formValues, function(data) {
                    // Display the returned data in browser
                    
                });
            });
        });
        </script>
</body>

</html>