<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<!DOCTYPE html>
<!DOCTYPE html>
<html lang="en">
<style>
    .testimonial-1 {
        position: relative;
        margin-bottom: 30px;
    }

    .testimonial-1 .media {
        float: left;
        margin: 0 30px 30px 0;
        width: 125px;
        height: 125px;
        display: block;
        position: relative;
        background-color: #ffffff;
        border: 5px solid #f8f8f8;
        -webkit-border-radius: 50%;
        -moz-border-radius: 50%;
        -ms-border-radius: 50%;
        border-radius: 50%;
    }

    .testimonial-1 .media img {
        -webkit-border-radius: 50%;
        -moz-border-radius: 50%;
        -ms-border-radius: 50%;
        border-radius: 50%;
        -webkit-transform: scale(1, 1);
        -ms-transform: scale(1, 1);
        transform: scale(1, 1);
        -webkit-transition: 0.4s all linear;
        transition: 0.4s all linear;
    }

    .testimonial-1:after {
        content: "\f10d";
        font-family: FontAwesome;
        position: absolute;
        top: 0;
        left: 95px;
        z-index: 9;
        color: #007acc;
        font-size: 18px;
    }

    .testimonial-1:hover .media {
        background-color: rgba(51, 51, 51, 0.3);
    }

    .testimonial-1:hover .media img {
        filter: alpha(opacity=30);
        opacity: 0.3;
        -webkit-transform: scale(1.05, 1.05);
        -ms-transform: scale(1.05, 1.05);
        transform: scale(1.05, 1.05);
        -webkit-transition-timing-function: ease-out;
        transition-timing-function: ease-out;
        -webkit-transition-duration: 250ms;
        transition-duration: 250ms;
    }

    .testimonial-1 .body {
        overflow: hidden;
        color: #999999;
    }

    .testimonial-1 .title {
        color: #007acc;
        font-weight: 700;
        font-size: 16px;
    }

    .testimonial-1 .title:before {
        content: "\2014 \00A0";
    }

    .testimonial-1 .position {
        color: white;
    }

    .testimonial-1 .company {
        margin-bottom: 20px;
    }

    /* TESTIMONIALS 2 */
    .testimonial-2 {
        position: relative;
        margin-bottom: 30px;
        margin-left: 0;
        margin-bottom: 100px;
        background-color: #007acc;
    }

    .testimonial-2 .body {
        border: none;
        margin-bottom: 0;
        padding: 30px;
        font-weight: 500;
        color: #fff;
        min-height: 140px;
    }

    .testimonial-2 .info {
        background-color: #fff;
        display: inline-block;
        padding: 20px 20px;
        margin-top: -40px;
        float: right;
        min-width: 290px;
        border-bottom: 2px solid #007acc;
        height: 90px;
        position: relative;
        z-index: 3;
    }

    .testimonial-2 .info .media {
        max-width: 60px;
        max-height: 60px;
        float: left;
    }

    .testimonial-2 .info .info-title {
        margin-left: 80px;
    }

    .testimonial-2 .info .title {
        color: #007acc;
        font-weight: 700;
        font-size: 16px;
    }

    .testimonial-2 .info .position {
        color: white;
    }

    .testimonial-2 .info .company {
        color: white;
        margin-bottom: 20px;
    }

    .testimonial-2:hover {
        background-color: #333333;
    }

    .testimonial-2:hover .info {
        border-color: #333333;
    }

    /* TESTIMONIALS 3 */
    .testimonial-3 .media {
        text-align: center;
        /*float: left;*/
    }

    .testimonial-3 .media img {
        width: 200px;
        margin: 0 auto;
        -webkit-border-radius: 100px;
        -moz-border-radius: 100px;
        -ms-border-radius: 100px;
        border-radius: 100px;
    }

    .testimonial-3 .body {
        /*padding-left: 200px;*/
        font-size: 20px;
        line-height: 1.6;
    }

    .testimonial-3 .title {
        color: #999999;
        font-weight: 700;
        font-size: 24px;
        margin-top: 40px;
        margin-bottom: 40px;
    }

    .testimonial-3 .company {
        color: #777;
        margin-bottom: 20px;
    }

    @media (max-width: 768px) {
        .testimonial-3 .media {
            float: none;
        }

        .testimonial-3 .media img {
            margin: 0 auto;
            margin-bottom: 25px;
        }

        .testimonial-3 .body {
            padding-left: 0;
            text-align: center;
        }
    }
</style>
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
                    <h2>About</h2>
                    <ol>
                        <li><a href="/Home">Home</a></li>
                        <li>About</li>
                    </ol>
                </div>

            </div>
        </section><!-- End Breadcrumbs -->

        <!-- ======= About Us Section ======= -->
        <section id="about-us" class="about-us">
            <div class="container" data-aos="fade-up">

                <div class="row content">
                    <div class="col-lg-6" data-aos="fade-right">
                        <h2 class="section-heading">Welcome <span>To</span> SEP</h2>

                        <p>
                            Using football to attract young people, Society Empowerment Project (SEP) provides life skills, sports leadership and management training.
                            With Kenya’s highest rate of infection, the Nyanza Province faces high mortality rates, large numbers of AIDS orphans and poor educational opportunities. To combat this, SEP works closely with AIDS awareness and treatment groups and local schools to provide young people with training to reduce the level of infection.
                            We also strive to improve the livelihood of its participants through agricultural training: in partnership with the Ministry of Agriculture and Livestock, it provides assistance to families in small-scale agricultural production.
                        </p>
                    </div>
                    <div class="col-lg-6 pt-4 pt-lg-0" data-aos="fade-left">
                        <img src="/assets/uploads/2021/06/WhatsApp-Image-2021-06-09-at-20.36.35.jpeg" class="img-fluid" alt="" />
                    </div>
                </div>
                <div class="container-fluid p-3 text-center mt-3 mb-3" style="background-color: #1569c7; color: #ffffff;">
                    <div class="row">
                        <div class="col-sm-12 col-md-12">
                            <h1 class="section-heading light no-after">
                                <span>We Help Many People</span>
                            </h1>
                            <h3 class="color-secondary">Want to Become a Volunteer</h3>

                            <div class="spacer-10"></div>
                            <p>
                                Become a volunteer and help us in achieving our community empowerment programmed. </p>

                            <a href="/Home/Contact" class="btn btn-light margin-btn ml-2">LEARN MORE</a>
                            <a href="/Home/Contact" class="btn btn-primary margin-btn mr-2">JOIN US NOW</a>

                        </div>
                    </div>
                </div>
                <div class="row content">
                    <div class="col-lg-6" data-aos="fade-right">
                        <h2 class="section-heading">Why <span> SEP</span>?</h2>

                        <p>
                            SEP is addressing these critical issues through two unique approaches: youth developmental football and youth self-help agriculture. SEP leverages football to mobilize, engage, and teach life skills to raise awareness and develop community leaders. In addition, SEP’s self-help agricultural program supports food security and financially empowers youth to create a sustainable income stream to fund their education.
                        </p>
                        <iframe title="Travel2change in Kenya - Project overview" width="520" height="390" src="https://www.youtube.com/embed/fN8S_MHs2ak?feature=oembed" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        <div class="videoContainer"></div>
                    </div>
                    <div class="col-lg-6" data-aos="fade-left">
                        <div class="card-header mt-3" id="headingOne">
                            <h4 class="title">Origin</h4>
                        </div>
                        <div class="card-body">
                            Since 2007, SEP has made significant strides in empowering youth, including:
                        </div>
                        <div class="card-header mt-3" id="headingOne">
                            <h4 class="title">Empowering</h4>
                        </div>
                        <div class="card-body">
                            • Engaging over 1250 youth in ongoing football practices and matches
                            <br>
                            • Ensuring food security for over 350 youth and their families

                        </div>
                        <div class="card-header mt-3" id="headingOne">
                            <h4 class="title">Education and Life Skills</h4>
                        </div>
                        <div class="card-body">
                            <p>
                                • Enabling over 350 youth to attend school that could not afford it
                                <br>
                                • Providing over 1250 youth with life skill development through football.
                            </p>
                        </div>
                        <div class="card-header mt-3" id="headingOne">
                            <h4 class="title">Girl-child Empowering</h4>
                        </div>
                        <div class="card-body">
                            <p>
                                • Engaging and empowering over 800 girls through football, education, and agriculture.
                            </p>
                        </div>
                        <div class="card-header mt-3" id="headingOne">
                            <h4 class="title">Result</h4>
                        </div>
                        <div class="card-body">
                            As a result of our success and ongoing growth, we continually seek to build our network of supporters, friends, and partners.
                        </div>
                    </div>
                </div>

            </div>
        </section><!-- End About Us Section -->
        <?php include 'counter.php' ?>
        <section id="team" class="team section-bg">
            <div class="container">

                <div class="section-title" data-aos="fade-up">
                    <h2>Our <strong>Team</strong></h2>
                </div>

                <div class="row">

                    <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
                        <div class="member" data-aos="fade-up">
                            <div class="member-img">
                                <img src="/assets/uploads/2021/02/Festus-Juma-Founder-and-Executive-Director.jpg" class="img-fluid" alt="">
                                <div class="social">
                                    <a href=""><i class="bi bi-twitter"></i></a>
                                    <a href=""><i class="bi bi-facebook"></i></a>
                                    <a href=""><i class="bi bi-instagram"></i></a>
                                    <a href=""><i class="bi bi-linkedin"></i></a>
                                </div>
                            </div>
                            <div class="member-info">
                                <h4>Festus O. Juma</h4>
                                <span>Founder and Executive Director</span>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
                        <div class="member" data-aos="fade-up">
                            <div class="member-img">
                                <img src="/assets/uploads/2021/02/Maurice-Nyagwara-S4D-and-Agriculture-program-Coordinator-and-Coach-SEP-Ladies-Soccer-1.jpg" class="img-fluid" alt="">
                                <div class="social">
                                    <a href=""><i class="bi bi-twitter"></i></a>
                                    <a href=""><i class="bi bi-facebook"></i></a>
                                    <a href=""><i class="bi bi-instagram"></i></a>
                                    <a href=""><i class="bi bi-linkedin"></i></a>
                                </div>
                            </div>
                            <div class="member-info">
                                <h4>Maurice O. Nyagwara</h4>
                                <span>Sports Coordinator</span>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
                        <div class="member" data-aos="fade-up">
                            <div class="member-img">
                                <img src="/assets/uploads/2021/02/Masoud-Mohamed-SEP-Ladies-Soccer-Team-Manager-1.jpg" class="img-fluid" alt="">
                                <div class="social">
                                    <a href=""><i class="bi bi-twitter"></i></a>
                                    <a href=""><i class="bi bi-facebook"></i></a>
                                    <a href=""><i class="bi bi-instagram"></i></a>
                                    <a href=""><i class="bi bi-linkedin"></i></a>
                                </div>
                            </div>
                            <div class="member-info">
                                <h4>Masoud Mohamed</h4>
                                <span>SEP Ladies Soccer Team Manager</span>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
                        <div class="member" data-aos="fade-up">
                            <div class="member-img">
                                <img src="/assets/uploads/2021/02/Sharon-Andeso-Volunteer-Media-and-Communication-1.jpg" class="img-fluid" alt="">
                                <div class="social">
                                    <a href=""><i class="bi bi-twitter"></i></a>
                                    <a href=""><i class="bi bi-facebook"></i></a>
                                    <a href=""><i class="bi bi-instagram"></i></a>
                                    <a href=""><i class="bi bi-linkedin"></i></a>
                                </div>
                            </div>
                            <div class="member-info">
                                <h4>Sharon Andeso</h4>
                                <span>Volunteer Media and Communication</span>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
                        <div class="member" data-aos="fade-up">
                            <div class="member-img">
                                <img src="/assets/uploads/2021/02/Yvon-Ogada-SEP-Young-Women-and-Girls-Rescue-Centre-Volunteer-and-SEP-Ladies-Player-1.jpg" class="img-fluid" alt="">
                                <div class="social">
                                    <a href=""><i class="bi bi-twitter"></i></a>
                                    <a href=""><i class="bi bi-facebook"></i></a>
                                    <a href=""><i class="bi bi-instagram"></i></a>
                                    <a href=""><i class="bi bi-linkedin"></i></a>
                                </div>
                            </div>
                            <div class="member-info">
                                <h4>Yvon Ogada</h4>
                                <span>SEP Young Women and Girls Rescue Centre Volunteer and SEP Ladies Player</span>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
                        <div class="member" data-aos="fade-up">
                            <div class="member-img">
                                <img src="/assets/uploads/2021/02/Rodgers-Munupi-Premier-League-Coach-SEP-Ladies-Soccer-1.jpg" class="img-fluid" alt="">
                                <div class="social">
                                    <a href=""><i class="bi bi-twitter"></i></a>
                                    <a href=""><i class="bi bi-facebook"></i></a>
                                    <a href=""><i class="bi bi-instagram"></i></a>
                                    <a href=""><i class="bi bi-linkedin"></i></a>
                                </div>
                            </div>
                            <div class="member-info">
                                <h4>Rodgers Munupi</h4>
                                <span>Premier League Coach - SEP Ladies Soccer</span>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
                        <div class="member" data-aos="fade-up">
                            <div class="member-img">
                                <img src="/assets/uploads/2021/02/Lourraine-Chess-Founder-and-Director-SEP-Young-Women-and-Girls-Rescue-Centre-1.jpg" class="img-fluid" alt="">
                                <div class="social">
                                    <a href=""><i class="bi bi-twitter"></i></a>
                                    <a href=""><i class="bi bi-facebook"></i></a>
                                    <a href=""><i class="bi bi-instagram"></i></a>
                                    <a href=""><i class="bi bi-linkedin"></i></a>
                                </div>
                            </div>
                            <div class="member-info">
                                <h4>Lourraine Chess</h4>
                                <span>Founder and Director - SEP Young Women and Girls Rescue Centre</span>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
                        <div class="member" data-aos="fade-up">
                            <div class="member-img">
                                <img src="/assets/uploads/2021/02/Caroline-Rufa-SEP-Youth-Sexual-Reproductive-Health-Coordinator-2.png" class="img-fluid" alt="">
                                <div class="social">
                                    <a href=""><i class="bi bi-twitter"></i></a>
                                    <a href=""><i class="bi bi-facebook"></i></a>
                                    <a href=""><i class="bi bi-instagram"></i></a>
                                    <a href=""><i class="bi bi-linkedin"></i></a>
                                </div>
                            </div>
                            <div class="member-info">
                                <h4>Caroline Rufa</h4>
                                <span>SEP Youth Sexual Reproductive Health Coordinator</span>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="section-title" data-aos="fade-up">
                    <h2>Join <strong>Our Team</strong></h2>
                    <a href="/Home/Contact" class="btn btn-secondary margin-btn">JOIN US NOW</a>
                </div>

                <div class="section-title" data-aos="fade-up">
                    <h2>Our <span>Volunteers </span><strong> Says</strong></h2>
                    <p class="subheading text-center">Some of our volunteer experiences: </p>
                </div>
                <div class="row">

                    <div class="col-sm-12 col-md-12">
                        <div class="testimonial-1">
                            <div class="media">
                                <img src="/assets/uploads/2021/02/Sharon-Andeso-Volunteer-Media-and-Communication-1.jpg" alt="" class="img-fluid" />
                            </div>
                            <div class="body">
                                <p>
                                    My name is Sharon Andeso Omani and I am twenty-six years old. I joined Society Empowerment Projects in 2019 for an internship program after graduating from Moi University with a Bachelor’s Degree in Linguistics, Media and Communication. While joining the organization I had an aim of understanding how the entire organization works and shied away from restricting myself to one specific department. Since the start of my internship, I have felt like this is the place I need to be because I am passionate about Women Empowerment and also love sports.
                                    The first days of my training entailed photo and videography of SEP’s projects and social media management making sure that they have quality content to improve their visibility and interaction with donors and the society as a whole. With time I have been able to engage in other departments of the organization especially the reproductive health branch. Here we focus a lot of menstrual hygiene and how we can empower girls and women to stay in school and in their places of works during that difficult time of the month. The internship has caused me to rethink my educational goals. Initially I had planned to further studies on communication but am now thinking about pursuing Gender Studies. I can in future use my photography and communication skills to make issues concerning and affecting girls and women such as inequality and sexual violence visible.
                                    I am fortunate enough to work under the direct mentorship of the Director of the Society Empowerment Project Mr. Festus Juma. This means that I will take back with me more experience that I had imagined. Society Empowerment Project is not only providing me with educational experience but also nurturing and empowering me to become a responsible member of the society. My internship has been one of the most fruitful experiences I have had in my lifetime that is why am still here even after the twelve month I originally applied for elapsed. </p>
                                <div class="title"> Sharon Andeso Omani.</div>
                                <div class="company"> Volunteer at SEP</div>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-12 col-md-12">
                        <div class="testimonial-1">
                            <div class="media">
                                <img src="/assets/uploads/2021/03/cQkY9g.jpg" alt="" class="img-fluid" />
                            </div>
                            <div class="body">
                                <p>
                                    I’m Jos Schaart. I got the opportunity to work as intern at Society Empowerment Project (SEP) in the year 2014. As a sports management student from Hanze University, Netherlands, my roles were as follows;
                                    1. Sports events planning and management – This was very useful for SEP National Annual Soccer tournament and educational camp. I helped plan and manage an event that brough together a total of 20 teams across the country, consisting of 10 girls’ teams.
                                    2. Planning and delivering coaching sessions for boys’ teams of under 14, 15 and 17 of age.
                                    3. Planning and delivering coaching course – workshops to the SEP coaching staff, using the KNVB methodology.
                                    Based on my solid educational foundation and the passion for sports and fitness I was in charge of talent acquisition and training, program development, monitoring and enhancing performance and other sporting events and programs.
                                    The few years I spent at SEP taught me that there is no manual in football and especially when nurturing young talents. The experience I treasure the most is training the U14 team because from that I learn a lot about the sport, growth, talents and life as a whole. With this age, it is very possible to plan and deliver sports-based life skills coaching sessions. Through sport we impart courage, teamwork, discipline and many other skills vital for a person to live a better life. Training kids challenges you to want to learn more ways of speaking in a language they can understand. You have to know them individually and tailor you’re training in a way that can cater for each of their needs. From this I have learned patience, empathy, passion and has made me a better communicator, instructor and coach.
                                    I am currently the CRS Manager at FC Emmen, Netherlands. </p>
                                <div class="title"> Jos Schaart.</div>
                                <div class="company"> Intern at Society Empowerment Project (SEP) in the year 2014</div>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-12 col-md-12">
                        <div class="testimonial-1">
                            <div class="media">
                                <img src="/assets/uploads/2021/02/Caroline-Rufa-SEP-Youth-Sexual-Reproductive-Health-Coordinator-2.png" alt="" class="img-fluid" />
                            </div>
                            <div class="body">
                                <p>
                                    My name is Carolyne Rufa, a continuing student at Masinde Muliro University of Science and Technology. Am pursuing a Diploma in Public Relations and Creative Advertising. My first encounter with Society Empowerment Project was through its Women’s Football team at a tournament. By then I was an opponent playing for my university’s football teams as a goalkeeper. I was excited when I secured an opportunity to pursue my internship with SEP in 2020. I decided to join SEP ladies’ team because I was to spend some time with the organization. This meant that I was getting both my educational and sporting skills improved at a go. I also became the coordinator of one of their main MIT projects that focuses on menstrual hygiene. Because of this I opted for online classes so that I could juggle and get more life and educational skills from the organization.
                                    My experience at Society Empowerment Project as an intern has been the best I have ever had. I have been able to improve my public relations skills by ensuring a good and reliable relationship between Society Empowerment Project and its stakeholders. The organization gave me a chance to meet and interact with a lot of people both nationally and internationally thus enabling networking and creating professional connections. My team has been able to achieve a lot of progress on menstrual hygiene as we have been able to produce reusable pads, period panties and even wash bags to compliment them. Working on the project has been interesting as well as educative. The internship has reinforced my career goals and I pray that my continued stay at SEP will bring forth even more experience. </p>
                                <div class="title"> Carolyne Rufa.</div>
                                <div class="company"> Student at Masinde Muliro University of Science and Technology.</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="section-title" data-aos="fade-up">
                    <h2>Our <span>Partners</h2>
                    <p class="subheading text-center">Some of our global partners include: </p>
                </div>
                <div class="row gutter-5" data-aos="fade-up">
                    <div class="col-6 col-md-2">
                        <img style="width: 240px;height: 190px;" src="/assets/uploads/2021/05/IMG-20210503-WA0015.jpg" alt="" />
                    </div>
                    <div class="col-6 col-md-2">
                        <img style="width: 240px;height: 190px;" src="/assets/uploads/2021/05/IMG-20210503-WA0016.jpg" alt="" />
                    </div>
                    <div class="col-6 col-md-2">
                        <img style="width: 240px;height: 190px;" src="/assets/uploads/2021/05/IMG-20210503-WA0020.jpg" alt="" />
                    </div>
                    <div class="col-6 col-md-2">
                        <img style="width: 240px;height: 190px;" src="/assets/uploads/2021/06/General-Picture_216.jpg" alt="" />
                    </div>
                    <div class="col-6 col-md-2">
                        <img style="width: 240px;height: 190px;" src="/assets/uploads/2021/01/client2.png" alt="" />
                    </div>
                    <div class="col-6 col-md-2">
                        <img style="width: 240px;height: 190px;" src="/assets/uploads/2021/05/IMG-20210503-WA0019.jpg" alt="" />
                    </div>
                    <div class="col-6 col-md-2">
                        <img style="width: 240px;height: 190px;" src="/assets/uploads/2021/05/IMG-20210503-WA0014.jpg" alt="" />
                    </div>
                    <div class="col-6 col-md-2">
                        <img style="width: 240px;height: 190px;" src="/assets/uploads/2021/05/IMG-20210503-WA0018.jpg" alt="" />
                    </div>
                    <div class="col-6 col-md-2">
                        <img style="width: 240px;height: 190px;" src="/assets/uploads/2021/05/IMG-20210503-WA0017.jpg" alt="" />
                    </div>
                    <div class="col-6 col-md-2">
                        <img style="width: 240px;height: 190px;" src="/assets/uploads/2021/05/IMG-20210503-WA0012.jpg" alt="" />
                    </div>
                </div>
            </div>
        </section><!-- End Our Team Section -->
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