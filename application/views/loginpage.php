<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<!DOCTYPE html>
<!DOCTYPE html>
<html lang="en">

<?php include 'head.php' ?>

<body 
style="background-image: url('assets/img/pic.jpg'); 
    min-height: 100vh;
    background-position: center center;
    background-size: cover;
    background-repeat: no-repeat;
    background-image: url(background.png) cover;
    background-repeat: no-repeat;
    backface-visibility: inherit;
    font-family: Comic Sans;
    font-size: 20px;
    text-align: center;">
    
    <main id="main">

        <!-- ======= Contact Section ======= -->
        <section id="contact" class="">
            <div class="container" data-aos="fade-up">

                <div class="offset-3 col-md-6">
                    <form id="login" action="" method="post" role="form" class="card p-3 w-100" data-aos="fade-up">
                        <div class="section-title">
                            <h2><b>Society Empowerment Project</b></h2>
                            <h3><b>Admin Login</b></h3>
                        </div>
                        <div class="form-group mt-3">
                            <label>Username</label>
                            <br>
                            <input type="text" class="form-control" name="username" id="username" placeholder="Your Username" required>
                        </div>
                        <div class="form-group mt-3">
                            <label>Password</label>
                            <br>
                            <input type="password" class="form-control" name="password" id="password" placeholder="Your Password" required>
                        </div>
                        <!-- <div class="my-3">
                            <div class="loading">Loading</div>
                            <div class="error-message"></div>
                            <div class="sent-message">Your message has been sent. Thank you!</div>
                        </div> -->
                        <div class="text-left"><button class="col-12 btn-success btn-lg mt-4 p-1" type="submit">Sign In</button></div>
                    </form>
                </div>

            </div>

            </div>
        </section><!-- End Contact Section -->

    </main><!-- End #main -->

    <!-- ======= Footer ======= -->

    <?php include 'footer.php' ?>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" crossorigin="anonymous"></script>
    <script>
        $(document).ready(function() {
            $("form").on("submit", function(event) {
                event.preventDefault();
                event.stopImmediatePropagation();
                var formValues = $(this).serialize();
                // console.log(formValues);
                
                $.post("Home/login", formValues, function(data) {
                    // Display the returned data in browser
                    console.log(data);
                    if (data == "Active") {
                        alert('Success!!');
                        window.location.href = 'Home/blogmanage';

                    } else {
                        alert(data);
                        // location.reload();
                    }
                });
            });
        });
    </script>
</body>

</html>