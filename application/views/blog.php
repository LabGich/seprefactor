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

        <!-- ======= Breadcrumbs ======= -->
        <section id="breadcrumbs" class="breadcrumbs">
            <div class="container">

                <div class="d-flex justify-content-between align-items-center">
                    <ol>
                        <li>Blog</li>
                    </ol>
                </div>

            </div>
        </section><!-- End Breadcrumbs -->

        <section id="blog" class="blog">
            <div class="container" data-aos="fade-up">

                <div class="row">
                    
                    <div class="col-lg-8 entries">
                        
                        <?php foreach ($dataresult as $value) { ?>
                        <article class="entry">
                            <h2 class="entry-title">
                                <a href="#"><?= $value->title ?></a>
                            </h2>

                            <div class="entry-meta">
                                <ul>
                                    <li class="d-flex align-items-center"><i class="bi bi-person"></i> <a href="#"><?= $value->username ?></a></li>
                                    <li class="d-flex align-items-center"><i class="bi bi-clock"></i> <a href="#"><time datetime="<?= $value->date ?>"><?= $value->date ?></time></a></li>                                    
                                </ul>
                            </div>
                            <div class="entry-content">
                                <?= $value->blogcontent ?>
                            </div>
                        </article>
                        <?php } ?>
                        
                        
                        <div class="blog-pagination">
                            <ul class="justify-content-center">
                                <li><a href="#">1</a></li>
                                <li class="active"><a href="#">2</a></li>
                                <li><a href="#">3</a></li>
                            </ul>
                        </div>

                    </div><!-- End blog entries list -->

                    <div class="col-lg-4">

                        <div class="sidebar">

                            <h3 class="sidebar-title">Search</h3>
                            <div class="sidebar-item search-form">
                                <form action="">
                                    <input type="text">
                                    <button type="submit"><i class="bi bi-search"></i></button>
                                </form>
                            </div><!-- End sidebar search formn-->

                            <h3 class="sidebar-title">Categories</h3>
                            <div class="sidebar-item categories">
                                <ul>
                                    <li><a href="#">Sexualhealth <span>(25)</span></a></li>
                                    <li><a href="#">Communitydevelopment <span>(12)</span></a></li>
                                    <li><a href="#">Hygiene <span>(5)</span></a></li>
                                    <li><a href="#">Soccer <span>(22)</span></a></li>
                                    <li><a href="#">Football <span>(8)</span></a></li>
                                    <li><a href="#">Educaion <span>(14)</span></a></li>
                                </ul>
                            </div><!-- End sidebar categories-->

                            <!-- <h3 class="sidebar-title">Recent Posts</h3>
                            <div class="sidebar-item recent-posts">
                                <div class="post-item clearfix">
                                    <img src="https://www.sepke.meneja.co.ke/assets/img/blog/blog-recent-1.jpg" alt="">
                                    <h4><a href="#">Test Recent to have content </a></h4>
                                    <time datetime="2021-11-01">Sep 21, 2021</time>
                                </div>

                                <div class="post-item clearfix">
                                    <img src="https://www.sepke.meneja.co.ke/assets/img/blog/blog-recent-2.jpg" alt="">
                                    <h4><a href="#">Test Recent to have content </a></h4>
                                    <time datetime="2021-11-01">Sep 21, 2021</time>
                                </div>

                                <div class="post-item clearfix">
                                    <img src="https://www.sepke.meneja.co.ke/assets/img/blog/blog-recent-3.jpg" alt="">
                                    <h4><a href="#">Test Recent to have content </a></h4>
                                    <time datetime="2021-11-01">Sep 21, 2021</time>
                                </div>

                                <div class="post-item clearfix">
                                    <img src="https://www.sepke.meneja.co.ke/assets/img/blog/blog-recent-4.jpg" alt="">
                                    <h4><a href="#">Test Recent to have content </a></h4>
                                    <time datetime="2021-11-01">Sep 21, 2021</time>
                                </div>

                                <div class="post-item clearfix">
                                    <img src="https://www.sepke.meneja.co.ke/assets/img/blog/blog-recent-5.jpg" alt="">
                                    <h4><a href="#">Test Recent to have content </a></h4>
                                    <time datetime="2021-11-01">Sep 21, 2021</time>
                                </div>

                            </div> -->
                            <!-- End sidebar recent posts-->

                            <h3 class="sidebar-title">Tags</h3>
                            <div class="sidebar-item tags">
                                <ul>
                                    <li><a href="#">Communitydevelopment</a></li>
                                    <li><a href="#">Educaion</a></li>
                                    <li><a href="#">Agribusiness</a></li>
                                    <li><a href="#">Sexualhealth</a></li>
                                    <li><a href="#">Mentorship</a></li>
                                    <li><a href="#">Soccer</a></li>
                                    <li><a href="#">Football</a></li>
                                </ul>
                            </div><!-- End sidebar tags-->

                        </div><!-- End sidebar -->

                    </div><!-- End blog sidebar -->

                </div>

            </div>
        </section><!-- End Blog Section -->


        <div class="container-fliud p-2" data-aos="fade-up">

            <div class="row content">
                <div class="col-lg-9" data-aos="fade-right">
                    <h3>
                        Help us continue to empower youths in Kenya and worldwide.
                    </h3>
                </div>
                <div class="col-lg-3" data-aos="fade-left">
                    <form action="https://www.paypal.com/donate" method="post" target="_top">
                        <input type="hidden" name="hosted_button_id" value="2MT9ZD7Y29KXY" />
                        <input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_donateCC_LG.gif" border="0" name="submit" title="PayPal - The safer, easier way to pay online!" alt="Donate with PayPal button" />
                        <img alt="" border="0" src="https://www.paypal.com/en_KE/i/scr/pixel.gif" width="1" height="1" />
                    </form>
                </div>
            </div>

        </div>


    </main>
    <!-- ======= Footer ======= -->
    <?php include 'footer.php' ?>
</body>

</html>