<?php
if (!isset($_GET['memberid'])) {

    echo '<h1>Your required profile not exist</h1>';
} else {

    include('../admin/config.php');
    $sql = "SELECT * FROM profile where memberid= $_GET[memberid]";
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0) {
        $pro5 = mysqli_fetch_assoc($result);




?>
        <!DOCTYPE html>
        <html lang="en">

        <!-- Mirrored from retrina.com/demo/arshia/classic/colorfull.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 17 Jan 2021 16:06:21 GMT -->

        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
            <title>CV </title>
            <meta name="description" content="" />
            <meta name="keywords" content="" />
            <meta name="author" content="Link" />

            <!--  FavIcon  -->
            <link rel="shortcut icon" href="assets/img/favicon.ico">

            <!-- Google Fonts -->
            <link href="https://fonts.googleapis.com/css?family=Muli:300,400,600" rel="stylesheet">
            <link href="https://fonts.googleapis.com/css?family=Poppins:400,500,600,700" rel="stylesheet">
            <!-- FontAwesome Css -->
            <link rel="stylesheet" href="assets/css/font-awesome.min.css">
            <!-- Line icon Css -->
            <link rel="stylesheet" href="assets/css/LineIcons.css">
            <!-- Bootstrap Css -->
            <link rel="stylesheet" href="assets/css/bootstrap.css">
            <!-- Owl Carousel Css -->
            <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
            <!-- Magnific Popup Css -->
            <link rel="stylesheet" href="assets/css/magnific-popup.css">
            <!-- Colors Css -->
            <link rel="stylesheet" href="assets/css/color/green-color.css" id="option-color">
            <!--  Custom Style CSS  -->
            <link rel="stylesheet" href="assets/css/main.css">
            <!--  Colorfull Style CSS  -->
            <link rel="stylesheet" href="assets/css/color/colorfull-main.css">
        </head>

        <body data-spy="scroll" data-target="#scrollspy" data-offset="70" class="flat-demo">

            <!--  Pre Loader  -->
            <div id="overlayer"></div>
            <span class="loader"></span>

           

            <!--    Header Start    -->
            <header id="header" class="header fixed-top">
                <nav id="scrollspy" class="navbar navbar-expand-lg header-nav">
                    <div class="container-fluid">
                        <a class="navbar-brand font-weight-bold" href="#hero"><?php echo $pro5['name']; ?><span class="base-color">'s CV</span></span></a>
                        <!--  Navbar Toggler Button Start -->
                        <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#toggle-menu" aria-controls="toggle-menu" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="lni-menu size-md"></span>
                        </button>
                        <!--  Navbar Toggler Button End -->
                        <div class="collapse navbar-collapse" id="toggle-menu">
                            <ul class="navbar-nav nav-pills ml-auto">
                                <li class="nav-item">
                                    <a class="nav-link active" href="#hero">Home</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#about">About</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#testimonial">Education</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#blog">Experience</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#contact">Contact</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>
            </header>

            
            <!-- social -->
            <div class="social-box">
        <div class="follow-label">
            <span>Follow Me</span>
        </div>
        <div class="social">
            <a target="blank" href=" <?php echo $pro5['facebook']; ?>"><i class="fa fa-facebook"></i></a>
        </div>
    </div>
            <!--  Hero Start  -->
            <section id="hero" class="section hero hero-03 full-screen p-0">
                <div class="hero-content">
                    <div class="container">
                        <div class="row justify-content-center align-items-center">
                            <div class="col-lg-6 order-2 order-lg-1">
                                <div class="hero-item">
                                    <h1 class="dark-color mb-3">I'M <span class="base-color"> <?php echo $pro5['name']; ?></span></h1>
                                    <h4 class="text-darktext-capitalize mb-0"><span class="base-color">A </span> <span class="element" data-elements="<?php echo $pro5['work1']; ?>.,<?php echo $pro5['work2']; ?>."></span></h4>
                                    <p class="text-muted my-4"><?php echo $pro5['about']; ?></p>

                                </div>
                            </div>
                            <div class="col-lg-6 order-1 order-lg-2">
                                <div class="hero-image">
                                    <div class="square">
                                        <img src="assets/img/element_square.png" alt="/">
                                    </div>
                                    <div class="circle"></div>
                                    <div class="circle-2"></div>
                                    <div class="circle-3"></div>
                                    <div class="floating"></div>
                                    <div class="personal-image rounded-circle">
                                        <?php
                                        if (!empty($pro5['picture'])) {
                                            echo '<img src = "data:image/png;base64,' . base64_encode($pro5['picture']) . '"  alt="' . $pro5['name'] . '" class="rounded-circle img-fluid"/>';
                                        } else
                                            echo '<img src="assets/img/personal-image-05.jpg" alt="' . $pro5['name'] . '" class="rounded-circle img-fluid">';

                                        ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </section>
            <!--  Hero End  -->

            <!--   About Start   -->
            <section id="about" class="section about pb-5 pt-6">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="image-border">
                                <img src="assets/img/about-05.jpg" alt="/">
                            </div>
                        </div>
                        <div class="col-lg-6 mt-4 mt-lg-0">
                            <div class="personal-item ">
                                <h2 class="mb-0 base-color">About Me</h2>
                                <h5 class="text-dark my-3"><span class="base-color"><?php echo $pro5['work1']; ?></span> & <?php echo $pro5['work2']; ?></h5>
                                <div class="row">
                                    <div class="col-6 personal-info">
                                        <ul class="list-unstyled">

                                            <li>
                                                <p>Facebook : <span> <a target="blank" href=" <?php echo $pro5['facebook']; ?>"><i class="fa fa-facebook"></i>My facebook profile</a></span></p>
                                            </li>
                                            <li>
                                                <p>Phone : <span> <?php echo $pro5['phone']; ?></span></p>
                                            </li>
                                            <li>
                                                <p>City : <span> <?php echo $pro5['address']; ?></span></p>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="col-6 personal-info">
                                        <ul class="list-unstyled">
                                            <li>
                                                <p>Age : <span> <?php echo $pro5['age']; ?></span></p>
                                            </li>
                                            <li>
                                                <p>Mail : <span> <?php echo $pro5['email']; ?></span></p>
                                            </li>
                                            <li>
                                                <p>Freelance : <span> Available</span></p>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!--    About End    -->

            <!--  Skill Start  -->
            <section id="skills" class="section py-5">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="title-content mb-4">
                                <p class="mb-2">level of knowledge</p>
                                <h2 class="base-color"> My skills</h2>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="skill-boxes">
                                <div class="row">
                                    <!-- Skill --><?php
                                                    include('../admin/config.php');
                                                    $sql = 'SELECT * FROM `profile-resume-skill` WHERE memberid=' . $_GET['memberid'] . ' ';
                                                    $result = mysqli_query($conn, $sql);
                                                    if (mysqli_num_rows($result) > 0) {
                                                        $row = mysqli_fetch_all($result);
                                                    }

                                                    foreach ($row as $skill) { ?>
                                        <div class="col-lg-6">
                                            <?php
                                                        $sql = 'SELECT * FROM `skill-detail` WHERE skillid=' . $skill[1] . ' ';
                                                        $result = mysqli_query($conn, $sql);
                                                        if (mysqli_num_rows($result) > 0) {
                                                            $subrow = mysqli_fetch_all($result);
                                                        }
                                                        echo '<div class="skill-box">';

                                                        foreach ($subrow as $sub_skill) { ?>

                                                <div class="skillbar clearfix" data-percent="<?php echo $sub_skill[3] . '%' ?>">
                                                    <div class="skillbar-title"><span><?php echo $sub_skill[2];  ?></span></div>
                                                    <div class="skillbar-bar fill-skillbar data-background" data-color="#ff5380"></div>
                                                    <div class="skill-bar-percent"><?php echo $sub_skill[3] . '%' ?></div>
                                                </div>
                                            <?php } ?>
                                        </div>
                                </div>
                            <?php } ?>
                            </div>
                        </div>
                    </div>
                </div>
                </div>
            </section>
            <!--   Skill End   -->


            <!-- Edu Start -->
            <section id="testimonial" class="section testimonial py-5">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="title-content mb-4">
                                <p class="mb-0">What used to leand.</p>
                                <h2 class="base-color">Education</h2>
                            </div>
                        </div>
                    </div>
                    <div class="owl-carousel">
                        <!-- Testimonial Item-01 -->
                        <?php
                        include('../admin/config.php');
                        $sql = 'SELECT * FROM `profile-resume-education` WHERE memberid=' . $_GET['memberid'] . ' ';
                        $result = mysqli_query($conn, $sql);
                        if (mysqli_num_rows($result) > 0) {
                            $row = mysqli_fetch_all($result);
                        }

                        foreach ($row as $edu) { ?>
                            <div class="testimonial-item box-border">
                                <div class="testimonial-header">
                                    <div class="testimonial-detail">
                                        <span class="d-block font-weight-bold"><?php echo $edu[4] ?></span>
                                        <small class="text-muted"> <?php echo $edu[2] ?></small>
                                        <span class="d-block font-weight-bold"><?php echo $edu[5] ?></span>

                                    </div>
                                </div>
                                <p class="mb-0 text-muted"><?php echo $edu[6] ?></p>
                            </div>
                        <?php } ?>
                    </div>
                </div>
            </section>
            <!--  Edu End  -->

            <!--  Exp Start  -->
            <section id="blog" class="section blog py-5">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="title-content mb-4">
                                <p class="mb-0">What used to work.</p>
                                <h2 class="base-color">Experience</h2>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <?php
                        $sql = 'SELECT * FROM `profile-resume-exp` WHERE memberid=' . $_GET['memberid'] . ' ';
                        $result = mysqli_query($conn, $sql);
                        if (mysqli_num_rows($result) > 0) {
                            $row = mysqli_fetch_all($result);
                        }

                        foreach ($row as $exp) { ?>
                            <!--  Item 01 -->
                            <div class="col-lg-4">
                                <div class="blog-item box-border">
                                    <div class="blog-image">
                                        <div class="blog-intro">
                                            <img src="assets/img/blog-01.jpg" alt="/">
                                        </div>
                                    </div>
                                    <div class="blog-content">
                                        <ul class="list-inline mt-4">
                                            <li class="list-inline-item">
                                                <i class="lni-calendar data-text-color" data-color="#ff5380"></i>
                                                <span class="text-muted"><?php echo $exp[2] ?></span>
                                            </li>
                                            <li class="list-inline-item">
                                                <span class="text-muted"><?php echo $exp[3] ?></span>
                                            </li>
                                        </ul>
                                        <h6 class="mb-3"><a class="text-dark" href="javascript:void(0)" target="_blank" data-toggle="modal" data-target="#blog-single"> <?php echo $exp[4] ?></a></h6>
                                        <p class="text-dark"><?php echo $exp[5] ?></p>

                                    </div>
                                </div>
                            </div>
                        <?php } ?>
                    </div>
                </div>
            </section>
            <!--   Exp End   -->

            <!-- Contact Start -->
            <section id="contact" class="section contact py-5">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="title-content">
                                <p class="mb-0">Feel free to contact me any time</p>
                                <h2 class="base-color mb-0">Contact</h2>
                            </div>
                        </div>
                    </div>

                    <div class="row contact-info mt-5">
                        <div class="col-lg-4">
                            <div class="text-left">
                                <div class="base-color">
                                    <img src="assets/img/phone.svg" class="float-left pt-1" alt="/">
                                </div>
                                <div class="mt-3 info">
                                    <h5 class="mb-0">Call Me On</h5>
                                    <p class="text-muted"><?php echo $pro5['phone']; ?></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="text-left">
                                <div class="base-color">
                                    <img src="assets/img/location.svg" class="float-left pt-1" alt="/">
                                </div>
                                <div class="mt-3 info">
                                    <h5 class="mb-0 contact_detail-title">Visit Office</h5>
                                    <p class="text-muted"><?php echo $pro5['address']; ?>.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="text-left">
                                <div class="base-color">
                                    <img src="assets/img/send.svg" class="float-left pt-1" alt="/">
                                </div>
                                <div class="mt-3 info">
                                    <h5 class="mb-0">Email Me At</h5>
                                    <p class="text-muted"><?php echo $pro5['email']; ?></p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row copy-right">
                        <div class="col-12 text-center text-dark">
                            <p>Copyright © 2019. Template has been designed by <span class="base-color">Retrina</span></p>
                        </div>
                    </div>
                </div>
            </section>
            <!--  Contact End  -->

            <!--   Return To Top  -->
            <a class="return-to-top text-white bg-base-color d-inline-block" href="javascript:void(0)"><i class="lni-arrow-up"></i></a>

            
            <!--  JavaScripts  -->
            <script data-cfasync="false" src="../../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
            <script src="assets/js/jquery-3.4.1.min.js"></script>
            <!--  Bootstrap Js  -->
            <script src="assets/js/bootstrap.js"></script>
            <!--  Easing Js  -->
            <script src="assets/js/jquery.easing.min.js"></script>
            <!--  Typed Js  -->
            <script src="assets/js/typed.js"></script>
            <!--  Magnific Popup Js  -->
            <script src="assets/js/jquery.magnific-popup.min.js"></script>
            <!--  Isotope Js  -->
            <script src="assets/js/isotope.pkgd.min.js"></script>
            <!--  Owl Carousel Js  -->
            <script src="assets/js/owl.carousel.min.js"></script>
            <!-- Map Js -->
            <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDRemITiP7JRWpZwLhVt-T2x5MeUFE2KWs"></script>
            <!--  Custom JS  -->
            <script src="assets/js/arshia.js"></script>

        </body>

        <!-- Mirrored from retrina.com/demo/arshia/classic/colorfull.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 17 Jan 2021 16:06:35 GMT -->

        </html>

<?php
        mysqli_close($conn);
    } else {
        echo '<h1>Your required profile not exist</h1><p>Ifyou are member, please create your cv.</p>
        <a name="" id="" class="btn btn-success" href="add.php" role="button">click here</a>';
    }
}
?>
