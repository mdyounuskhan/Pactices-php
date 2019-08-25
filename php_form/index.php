<!DOCTYPE html>
<html lang="en">

<head>

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>polytechnic</title>
    <link href="https://fonts.googleapis.com/css?family=Alegreya+Sans:300,400,500,700,800,900|Oxygen:300,400,700" rel="stylesheet">
    <link rel="stylesheet" href="forntend_assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="forntend_assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="forntend_assets/css/slick.css">
    <link rel="stylesheet" href="forntend_assets/css/style.css">
    <link rel="stylesheet" href="forntend_assets/css/responsive.css">

</head>

<body>
    <div id="home">
        <!--  head part starts  -->

        <header id="head">
            <div class="container">
                <div class="row">
                    <div class="col-md-5 col-sm-7 col-12 logo">
                        <a href="#">
                            <img src="forntend_assets/images/logo.png" alt="" class="img-fluid">
                        </a>
                    </div>
                    <div class="col-md-7 col-sm-5 col-12 text-right">
                        <div class="row ">
                            <div class="co col-md-12 col-sm-12 col-12 text-right">
                                <ul>
                                    <li><a href="tel:+880-1112-333-444"><i class="fa fa-phone"></i>+880-1112-333-444</a></li>
                                    <li><a href="mailto:Support@domain.com"><i class="fa fa-envelope"></i>Support@domain.com</a></li>

                                </ul>
                            </div>

                            <div class="so col-md-12 col-sm-12 col-12 text-right">
                                <ul>
                                    <li>
                                        <ul class="social">
                                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                            <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                            <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                        </ul>
                                    </li>
                                    <li><a href="login.php"><i class="fa fa-sign-in si"></i>sign in</a></li>
                                    <li><a href="register.php"><i class="fa fa-user-plus si"></i>register</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>

        <!--  head part ends  -->
        <!-- menu part start -->
        <section id="menu">
            <div class="container text-center">
                <nav class="navbar navbar-expand-lg">
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <i class="fa fa-bars"></i>
                    </button>

                    <div class="collapse navbar-collapse p-0" id="navbarSupportedContent">
                        <ul class="navbar-nav mr-auto">
                            <li class="nav-item active">
                                <a class="nav-link" href="#home">Home <span class="sr-only">(current)</span></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#content">about</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    academic
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="#">Teacher &amp; stuff</a>
                                    <a class="dropdown-item" href="#">student info</a>
                                    <a class="dropdown-item" href="#">lab and workshop</a>
                                    <a class="dropdown-item" href="#">events</a>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">admission info</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">department</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">examination</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">result</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">gallary</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">contact us</a>
                            </li>
                        </ul>
                        <form class="form-inline my-2 mmd-0">
                            <input class="form-control mr-sm-2" type="search" placeholder="Search here..." aria-label="Search">
                            <button class="btn btn-outline-success my-sm-0" type="submit"><i class="fa fa-search"></i></button>
                        </form>
                    </div>
                </nav>
            </div>
        </section>
        <!-- menu part end -->
        <!--    marque starts -->
        <section id="marq">
            <div class="container">
                <div class="row">
                    <div class="col-md-1 col-sm-2 pr-0">
                        <span>latest news</span>
                    </div>
                    <marquee>
                        <?php
                        require_once "db.php";
                        $latest_news_query = "SELECT * FROM latest_news";
                        $latest_news_result = mysqli_query($db_connection, $latest_news_query);
                        foreach ($latest_news_result as $latest_news) {
                            ?>
                        <?= $latest_news['latest_news'] . " * " ?>
                        <?php
                        }
                        ?>
                    </marquee>
                </div>
            </div>
        </section>
        <!--    marque ends -->
        <!--  banner starts  -->
        <section id="banner">
            <div class="slide">
                <?php
                $get_silder = "SELECT * FROM silders WHERE status = 1";
                $get_silder_result = mysqli_query($db_connection, $get_silder);
                foreach ($get_silder_result as $silder) {
                    ?>
                <div class="bim-1">
                    <img src="uploads/silders/<?= $silder['silder_image'] ?>" alt="" class="img-fluid">
                </div>
                <?php
                }
                ?>
            </div>
        </section>
        <!-- banner ends -->
    </div>
    <section id="content">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-sm-12 col-12">
                    <div class="row">
                        <div class="welcome col-sm-12">
                            <h2>welcome to pathshala</h2>
                            <p>Welcome to Pathshala Polytechnic Institute. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                            <a href="#">read more</a>
                        </div>
                        <!-- welcome ends -->
                    </div>
                    <div class="princi row">
                        <div class="col-md-12 col-sm-12 p-sm-0 col-12">
                            <h2>principal's message</h2>
                        </div>
                        <div class="col-md-2 col-sm-3 p-sm-0 col-12">
                            <img class="img-fluid" src="forntend_assets/images/princi.jpg" alt="">
                        </div>
                        <div class="message col-md-10 col-sm-9 col-12">
                            <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. <a href="#">Read More...</a></p>
                            <h4>sheikh john doe</h4>
                            <span>principal <br>pathshala polytechnic institute</span>

                        </div>
                    </div>
                    <div class="department row">
                        <div class="col-md-12 col-sm-12 col-12">
                            <h2>our departments</h2>
                        </div>
                        <div class="col-md-4 col-sm-4 col-6  p-0 dep">
                            <i class="fa fa-laptop"></i>
                            <h5>computer technology</h5>
                            <ul>
                                <li>Michel Kelin/HOD</li>
                                <li>5 Faculty Members</li>
                                <li>150+ Students</li>
                            </ul>
                        </div>
                        <div class="col-md-4 col-sm-4 col-6 p-0 dep">
                            <i class="fa fa-laptop"></i>
                            <h5>electrical technology</h5>
                            <ul>
                                <li>Michel Kelin/HOD</li>
                                <li>5 Faculty Members</li>
                                <li>150+ Students</li>
                            </ul>
                        </div>
                        <div class="col-md-4 col-sm-4 col-6 p-0 dep">
                            <i class="fa fa-laptop"></i>
                            <h5>mechanical technology</h5>
                            <ul>
                                <li>Michel Kelin/HOD</li>
                                <li>5 Faculty Members</li>
                                <li>150+ Students</li>
                            </ul>
                        </div>
                        <div class="col-md-4 col-sm-4 col-6  p-0 dep">
                            <i class="fa fa-laptop"></i>
                            <h5>civil technology</h5>
                            <ul>
                                <li>Michel Kelin/HOD</li>
                                <li>5 Faculty Members</li>
                                <li>150+ Students</li>
                            </ul>
                        </div>
                        <div class="col-md-4 col-sm-4 col-6 p-0 dep">
                            <i class="fa fa-laptop"></i>
                            <h5>electronic technology</h5>
                            <ul>
                                <li>Michel Kelin/HOD</li>
                                <li>5 Faculty Members</li>
                                <li>150+ Students</li>
                            </ul>
                        </div>
                        <div class="col-md-4 col-sm-4 col-6 p-0 dep">
                            <i class="fa fa-laptop"></i>
                            <h5>electro medical tech.</h5>
                            <ul>
                                <li>Michel Kelin/HOD</li>
                                <li>5 Faculty Members</li>
                                <li>150+ Students</li>
                            </ul>
                        </div>

                    </div>
                </div>
                <div class="col-md-3 col-sm-12 offset-md-1 p-0 col-12" id="narrow">
                    <div class="row m-0">
                        <div class="col-md-12 col-12 col-sm-4">
                            <div class="notice">
                                <h3>notice board</h3>
                                <div class="note-slick">
                                    <?php
                                    require_once "db.php";
                                    $notice_get_query = "SELECT * FROM notices ORDER by id DESC";
                                    $notice_get_result = mysqli_query($db_connection, $notice_get_query);

                                    foreach ($notice_get_result as $notice) {
                                        ?>


                                    <div class="note col-md-12 col-sm-12 col-12">
                                        <div class="row">
                                            <div class="col-md-1 col-12 col-sm-1 p-0">
                                                <i class="fa fa-edit"></i>
                                            </div>
                                            <div class="col-md-11 col-sm-11 p-0 n">
                                                <h6 style="display: inline-block"><?= $notice['notice_title']; ?></h6>
                                                <p><i class="fa fa-calendar"></i><?= $notice['date']; ?></p>
                                            </div>
                                        </div>
                                    </div>



                                    <?php
                                    }
                                    ?>

                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 col-6 col-sm-4">
                            <div class="s-area">
                                <h3>student area</h3>

                                <ul>
                                    <li><a href="#"><i class="fa fa-arrow-right"></i>admission</a></li>
                                    <li><a href="#"><i class="fa fa-arrow-right"></i>examination</a></li>
                                    <li><a href="#"><i class="fa fa-arrow-right"></i>results</a></li>
                                    <li><a href="#"><i class="fa fa-arrow-right"></i>class routine</a></li>
                                    <li><a href="#"><i class="fa fa-arrow-right"></i>syllabus</a></li>
                                    <li><a href="#"><i class="fa fa-arrow-right"></i>academic calander</a></li>
                                    <li><a href="#"><i class="fa fa-arrow-right"></i>academic programs</a></li>
                                    <li><a href="#"><i class="fa fa-arrow-right"></i>activity</a></li>
                                    <li><a href="#"><i class="fa fa-arrow-right"></i>scholarship</a></li>
                                    <li><a href="#"><i class="fa fa-arrow-right"></i>rover scout</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-12 col-6 col-sm-4">
                            <div class="link">
                                <h3>useful links</h3>
                                <ul>
                                    <li><a href="#">ministry of education</a></li>
                                    <li><a href="#">bangladesh technical education board <span>(BTEB)</span></a></li>
                                    <li><a href="#">bangladesh technical education board <span>(BTEB)</span></a></li>
                                    <li><a href="#">directorate of technical education board </a></li>
                                    <li><a href="#">skills &amp; Training enhancement project</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- counter part starts -->
    <section id="counter">
        <div class="count-overlay">
            <div class="container text-center">
                <div class="row">
                    <div class="col-md-3 col-6 col-sm-3 county text-center">
                        <i class="fa fa-university"></i>
                        <div class="count num">8</div>
                        <p>depertments</p>
                    </div>

                    <div class="col-md-3 col-6 col-sm-3 county text-center">
                        <i class="fa fa-users"></i>
                        <div class="count num">24</div>
                        <p>teschers</p>
                    </div>

                    <div class="col-md-3 col-6 col-sm-3 county text-center">
                        <i class="fa fa-university"></i>
                        <div class="count num">78</div>
                        <p>staffs</p>
                    </div>

                    <div class="col-md-3 col-6 col-sm-3 county text-center">
                        <i class="fa fa-university"></i>
                        <div class="count num">318</div>
                        <p>students</p>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!-- counter part ends -->
    <!-- blog start -->
    <section id="blog">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-12 text-center">
                    <h2>latest news</h2>
                </div>
                <div class="col-md-4 col-sm-4 col-6 blog-item">
                    <div>
                        <img src="forntend_assets/images/b-1.jpg" alt="" class="img-fluid">
                    </div>
                    <div class="blog-d">
                        <h3> program in the auditorium</h3>
                        <i class="fa fa-user"></i> Admin
                        <ul>
                            <li><i class="fa fa-calendar"></i>12-01-2018</li>
                            <li><i class="fa fa-comment"></i>03 comments</li>
                        </ul>
                        <p>There are many variations of passages of Lorem Ipsum available<span>, but the majority have suffered alteration.</span></p>
                        <a href="#">continue reading <i class="fa fa-arrow-right"></i></a>
                    </div>
                </div>

                <div class="col-md-4 col-sm-4 col-6 blog-item">
                    <div>
                        <img src="forntend_assets/images/b2.jpg" alt="" class="img-fluid">
                    </div>
                    <div class="blog-d">
                        <h3> program in the auditorium</h3>
                        <i class="fa fa-user"></i> Admin
                        <ul>
                            <li><i class="fa fa-calendar"></i>12-01-2018</li>
                            <li><i class="fa fa-comment"></i>03 comments</li>
                        </ul>
                        <p>There are many variations of passages of Lorem Ipsum available<span>, but the majority have suffered alteration.</span></p>
                        <a href="#">continue reading <i class="fa fa-arrow-right"></i></a>
                    </div>
                </div>

                <div class="col-md-4 col-sm-4 col-6 disp blog-item">
                    <div>
                        <img src="forntend_assets/images/b3.jpg" alt="" class="img-fluid">
                    </div>
                    <div class="blog-d">
                        <h3> program in the auditorium</h3>
                        <i class="fa fa-user"></i> Admin
                        <ul>
                            <li><i class="fa fa-calendar"></i>12-01-2018</li>
                            <li><i class="fa fa-comment"></i>03 comments</li>
                        </ul>
                        <p>There are many variations of passages of Lorem Ipsum available<span>, but the majority have suffered alteration.</span></p>
                        <a href="#">continue reading <i class="fa fa-arrow-right"></i></a>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- blog end -->
    <!-- gallary part ends -->
    <section id="gallary">
        <div class="container text-center">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-12">
                    <h2>our gallary</h2>
                </div>
                <div class="col-md-12 col-sm-12 col-12">
                    <ul>
                        <li data-filter="all">all</li>
                        <li data-filter=".campus">campus</li>
                        <li data-filter=".events">events</li>
                        <li data-filter=".photo">photo gallary</li>
                        <li data-filter=".video">video gallary</li>
                    </ul>
                </div>
                <div class="col-md-12 col-sm-12 col-12 cont">
                    <div class="row">
                        <div class="col-md-4 col-sm-4 col-6 mix campus photo ">
                            <img src="forntend_assets/images/gal-1.jpg" alt="">
                        </div>
                        <div class="col-md-4 col-sm-4 col-6 mix events video">
                            <img src="forntend_assets/images/gal-2.jpg" alt="">
                        </div>
                        <div class="col-md-4 col-sm-4 col-6 mix campus video events">
                            <img src="forntend_assets/images/gal-3.jpg" alt="">
                        </div>
                        <div class="col-md-4 col-sm-4 col-6 mix photo video">
                            <img src="forntend_assets/images/gal-4.jpg" alt="">
                        </div>
                        <div class="col-md-4 col-sm-4 col-6 mix video events">
                            <img src="forntend_assets/images/gal-5.jpg" alt="">
                        </div>
                        <div class="col-md-4 col-sm-4 col-6 mix photo campus">
                            <img src="forntend_assets/images/gal-6.jpg" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-md-12 col-sm-12 col-12 view">
                    <a href="#gallary">view more</a>
                </div>
            </div>
        </div>
    </section>
    <!-- gallary part ends -->
    <!-- foot starts -->
    <section id="foot">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-6 col-6">
                    <img src="forntend_assets/images/logo-small.png" alt="" class="img-fluid">
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the best.</p>


                    <a href="#"><i class="fa fa-facebook-f"></i></a>
                    <a href="#"><i class="fa fa-twitter"></i></a>
                    <a href="#"><i class="fa fa-google-plus"></i></a>
                    <a href="#"><i class="fa fa-instagram"></i></a>

                </div>
                <div class="col-md-1 offset-1 p-0 col-sm-5 col-5">
                    <h5>quick links</h5>
                    <ul>
                        <li><a href="#">admission</a></li>
                        <li><a href="#">results</a></li>
                        <li><a href="#">academics</a></li>
                        <li><a href="#">faculty</a></li>
                        <li><a href="#">news &amp; events</a></li>
                    </ul>
                </div>
                <div class="col-md-2 offset-md-1 col-sm-6 col-6 soci">
                    <h5>contact us</h5>
                    <div class="row soc">
                        <div class="col-md-2 col-sm-2 col-1">

                            <ul>
                                <li><i class="fa fa-phone"></i></li>
                                <li><i class="fa fa-envelope"></i></li>
                                <li><i class="fa fa-location-arrow"></i></li>
                            </ul>
                        </div>
                        <div class="col-md-9 col-sm-8 col-8">
                            <ul>
                                <li><a href="tel:+880-1112-333-444">+880-1112-333-444</a></li>
                                <li><a href="mailto:Support@domain.com">Support@domain.com</a></li>
                                <li><a href="#">Dhanmondi, Dhaka, Bangladesh</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 offset-1 col-sm-5 col-5">
                    <h5>find us</h5>
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14608.03694485038!2d90.36710723558421!3d23.747050044430356!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755b8b33cffc3fb%3A0x4a826f475fd312af!2z4Kan4Ka-4Kao4Kau4Kao4KeN4Kah4Ka_LCDgpqLgpr7gppXgpr4gMTIwNQ!5e0!3m2!1sbn!2sbd!4v1550813533531" frameborder="0" style="border:0" allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </section>
    <footer id="copy">
        <div class="container text-center">
            <p>Copyright &copy; 2018 Pathshala Polytechnic Institute.Designed &amp; Developed by Creative IT Institute</p>
        </div>
    </footer>
    <!-- foot ends -->
    <!-- top to -->
    <div>
        <i class="fa fa-angle-up" id="return-to-top"></i>
    </div>


    <script src="forntend_assets/js/jquery-1.12.4.min.js"></script>
    <script src="forntend_assets/js/bootstrap.min.js"></script>
    <script src="forntend_assets/js/mixitup.min.js"></script>
    <script src="forntend_assets/js/slick.min.js"></script>
    <script src="forntend_assets/js/custom.js"></script>
</body>

</html>