<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Portofolio</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" rel="stylesheet">

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<?php include_once('dataIndex.php');

?>

<body data-spy="scroll" data-target=".navbar" data-offset="51">
    <!-- Navbar Start -->
    <!-- <nav class="navbar fixed-top shadow-sm navbar-expand-lg bg-light navbar-light py-3 py-lg-0 px-lg-5">
        <a href="index.php" class="navbar-brand ml-lg-3">
            <h1 class="m-0 display-5"><span class="text-danger">My </span>Portofolio</h1>
        </a>
        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse px-lg-3 justify-content-end" id="navbarCollapse">
            <div class="navbar-nav m-0 py-0">
                <a href="#home" class="nav-item nav-link active">Home</a>
                <a href="#about" class="nav-item nav-link">About</a>
                <a href="#skill" class="nav-item nav-link">Skill</a>
                <a href="#qualification" class="nav-item nav-link">Experience</a>
                <a href="#portofolio" class="nav-item nav-link">Portofolio</a>
                <a href="#contact" class="nav-item nav-link">Contact</a>
            </div>
        </div>
    </nav> -->
    <!-- Navbar End -->

    <!-- Header Start -->
    <div class="container-fluid bg-secondary d-flex align-items-center" id="home" style="min-height: 100vh;">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-lg-7 text-center text-lg-left">
                    <h3 class="text-white font-weight-normal mb-3">Hello, my name</h3>
                    <h1 class="display-3 text-uppercase text-danger mb-2" style="-webkit-text-stroke: 4px #ffffff;">Jodhy Hermawan Nur</h1>
                    <h1 class="typed-text-output d-inline font-weight-lighter text-white"></h1>
                    <div class="typed-text d-none">A Junior Web Developer</div>
                    <div class="d-flex align-items-center justify-content-center justify-content-lg-start pt-5">
                        <a href="https://drive.google.com/u/0/uc?id=1NpomW3t29Fe6HTDY7_KFQyl9LLvbCNdD&export=download" id="lets-talk" class="btn btn-outline-danger text-white mr-4">Download CV</a>

                        <a href="#contact" id="lets-talk" class="btn btn-outline-danger text-white d-none d-sm-block">Let's Talk</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Header End -->

    <!-- About Start -->
    <div class="container-fluid py-2 pt-5" id="about" style="border-bottom:3px solid #fff; box-shadow: 0px 3px 5px 2px rgb(0 0 0 / 30%);">
        <div class="container">
            <div class="position-relative d-flex align-items-center justify-content-center pb-5">
                <h1 class="position-absolute text-uppercase text-danger">About Me</h1>
            </div>
            <div class="row align-items-center mb-4">
                <div class="col-md-5 d-flex justify-content-center">
                    <img class="about-me img-fluid rounded" src="img/aboutme-removebg.png" alt="">
                </div>
                <div class="col-md-7">
                    <h3 class="mb-4">A Junior Web Developer</h3>
                    <p class="text-justify">A Junior Web Developer. I was study since Jan 2022. The first time i study is used C# and VueJs. after that, i joined a training at Eduwork.id. There i studied more about Web Developer. I used Laravel, JQuery, Ajax, VueJs, and Bootstrap. I have experience about create a point of sale web. I had project website Point of Sale based on Laravel Framework and ToDo List based on VueJs</p>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->

    <!-- Skill Start -->
    <div class="container-fluid py-5" id="skill" style="border-bottom:3px solid #fff; box-shadow: 0px 3px 5px 2px rgb(0 0 0 / 30%);">
        <div class="container">
            <div class="position-relative d-flex align-items-center justify-content-center pb-5 pt-3">
                <h1 class="position-absolute text-uppercase text-danger">My Skills</h1>
            </div>
            <div class="row pt-3">
                <div class="row align-items-center pb-3">
                    <div class="col-md-4 text-center pb-3">
                        <div class="d-flex flex-column align-items-center skill-box">
                            <i class="fab fa-2x fa-laravel service-icon text-danger"></i>
                            <h4 class="font-weight-bold m-0">Laravel</h4>
                            <p>Intermediate</p>
                        </div>
                    </div>
                    <div class="col-md-4 text-center pb-3">
                        <div class="d-flex flex-column align-items-center skill-box">
                            <i class="fa fa-2x fa-code service-icon text-danger"></i>
                            <h4 class="font-weight-bold m-0">HTML</h4>
                            <p>Intermediate</p>
                        </div>
                    </div>
                    <div class="col-md-4 text-center pb-3">
                        <div class="d-flex flex-column align-items-center skill-box">
                            <i class="fab fa-2x fa-bootstrap service-icon" style="color: rgb(147, 45, 194) ;"></i>
                            <h4 class="font-weight-bold m-0">Bootstrap</h4>
                            <p>Intermediate</p>
                        </div>
                    </div>
                    <div class="col-md-4 text-center pb-3">
                        <div class="d-flex flex-column align-items-center skill-box">
                            <i class="fab fa-2x fa-js service-icon text-warning"></i>
                            <h4 class="font-weight-bold m-0">JavaScript</h4>
                            <p>Intermediate</p>
                        </div>
                    </div>
                    <div class="col-md-4 text-center pb-3">
                        <div class="d-flex flex-column align-items-center skill-box">
                            <i class="fab fa-2x fa-vuejs service-icon" style="color: rgb(2, 156, 66);"></i>
                            <h4 class="font-weight-bold m-0">VueJs</h4>
                            <p>Intermediate</p>
                        </div>
                    </div>
                    <div class="col-md-4 text-center pb-3">
                        <div class="d-flex flex-column align-items-center skill-box">
                            <i class="fa fa-2x fa-code service-icon text-danger"></i>
                            <h4 class="font-weight-bold m-0">C#</h4>
                            <p>Intermediate</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Skill End -->

    <!-- Qualification Start -->
    <div class="container-fluid pt-5" id="qualification" style="border-bottom:3px solid #fff; box-shadow: 0px 3px 5px 2px rgb(0 0 0 / 30%);">
        <div class="container">
            <div class="position-relative d-flex align-items-center justify-content-center pb-5 pt-3">
                <h1 class="position-absolute text-uppercase text-danger">Education & Experience</h1>
            </div>
            <div class="row pb-3">
                <div class="col-lg-6">
                    <h3 class="mb-4">My Education</h3>
                    <div class="border-left border-danger pt-2 pl-4 ml-2">
                        <div class="position-relative ex-me mb-4">
                            <i class="far fa-dot-circle text-danger position-absolute" style="top: 2px; left: -35px; font-size: 22px;"></i>
                            <h5 class="font-weight-bold mb-1">High School of Computer and Network Engineering</h5>
                            <p class="mb-2"><strong>SMK Swasta Teladan Medan</strong> | <small>2010 - 2013</small></p>
                        </div>
                        <div class="position-relative ex-me mb-4">
                            <i class="far fa-dot-circle text-danger position-absolute" style="top: 2px; left: -35px;  font-size: 22px;"></i>
                            <h5 class="font-weight-bold mb-1">Bachelor of Technical Information</h5>
                            <p class="mb-2"><strong>STMIK Mikroskil</strong> | <small>2013 - 2019</small></p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <h3 class="mb-4">My Experience</h3>
                    <div class="border-left border-danger pt-2 pl-4 ml-2">
                        <div class="position-relative ex-me mb-4">
                            <i class="far fa-dot-circle text-danger position-absolute" style="top: 2px;left: -35px;  font-size: 22px;"></i>
                            <h5 class="font-weight-bold mb-1">Web Developer (Internship)</h5>
                            <p class="mb-2"><strong>Eduwork.id</strong> | <small> May 2022 - June 2022</small></p>
                            <ul>
                                <li>
                                    <p class="mb-1">Learned to create a point of sale web use Laravel Framework, Jquery, Vue.Js, MySql, and Bootsrap.</p>
                                </li>
                                <li>
                                    <p>Learned how to problem solving.</p>
                                </li>
                            </ul>
                        </div>
                        <div class="position-relative ex-me mb-4">
                            <i class="far fa-dot-circle text-danger position-absolute" style="top: 2px;left: -35px;  font-size: 22px;"></i>
                            <h5 class="font-weight-bold mb-1">Officer Reporting</h5>
                            <p class="mb-2"><strong>PT Jasamarga Tollroad Operator</strong> | <small> Nov 2018 - Nov 2021</small></p>
                            <ul>
                                <li>
                                    <p class="mb-1">Responsible for operational employees task schedule.</p>
                                </li>
                                <li>
                                    <p class="mb-1">Implement good coordination with work partners.</p>
                                </li>
                                <li>
                                    <p>Responsible for daily, monthly, or yearly report.</p>
                                </li>
                            </ul>
                        </div>
                        <div class="position-relative ex-me mb-4">
                            <i class="far fa-dot-circle text-danger position-absolute" style="top: 2px;left: -35px;  font-size: 22px;"></i>
                            <h5 class="font-weight-bold mb-1">Customer Service</h5>
                            <p class="mb-2"><strong>PT Jasamarga Tollroad Operator</strong> | <small> Nov 2017 - Oct 2018</small></p>
                            <ul>
                                <li>
                                    <p class="mb-1">Responsible for transactions at toll gates based on shift time.</p>
                                </li>
                                <li>
                                    <p class="mb-1">Resolve complaints from customers.</p>
                                </li>
                                <li>
                                    <p>Create report after changing shifts.</p>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Qualification End -->

    <!-- Portofolio Start -->
    <div class="container-fluid pt-5" id="portofolio" style="border-bottom:3px solid #fff; box-shadow: 0px 3px 5px 2px rgb(0 0 0 / 30%);">
        <div class="container">
            <div class="position-relative d-flex align-items-center justify-content-center pb-5 pt-3">
                <h1 class="position-absolute text-uppercase text-danger">My Portofolio</h1>
            </div>
            <div class="row portofolio-container justify-content-center pb-3">
                <?php foreach ($projects as $project) { ?>
                    <div class="col-lg-4 col-md-6 mb-4 portofolio-item">
                        <div class="position-relative overflow-hidden mb-2 rounded">
                            <img class="img-fluid w-100" src="<?php echo $project->image_path ?>" alt="">
                            <div class="portofolio-btn d-flex flex-column align-items-center justify-content-center">
                                <a href="<?php echo $project->linkGit ?>" target="_blank">
                                    <button class="btn btn-outline-danger">
                                        <span class="text-white" style="font-size: 20px;">
                                            GitHub
                                        </span>
                                    </button>
                                </a>
                                <a href="<?php echo $project->linkDemo ?>" target="_blank">
                                    <button class="btn btn-outline-danger">
                                        <span class="text-white" style="font-size: 20px;">
                                            Live Demo
                                        </span>
                                    </button>
                                </a>
                                <a href="/details.php?id=<?php echo $project->id ?>">
                                    <button class="btn btn-outline-danger">
                                        <span class="text-white" style="font-size: 20px;">Details</span>
                                    </button>
                                </a>
                            </div>
                            <div class="row justify-content-center m-0">
                                <div class="portofolio-title w-100">
                                    <h5 class="text-secondary text-center mt-1 mb-1"><?php echo $project->title ?></h5>
                                </div>
                                <div class="portofolio-tag w-100">
                                    <h6 class="text-danger text-center mt-1 mb-1">(<?php echo $project->tag ?>)</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>
    <!-- Portofolio End -->

    <!-- Contact Start -->
    <div class="container-fluid pt-5" id="contact">
        <div class="container">
            <div class="position-relative d-flex align-items-center justify-content-center pt-3 pb-5">
                <h1 class="position-absolute text-uppercase text-danger">Contact Me</h1>
            </div>
            <div class="row justify-content-center pt-2">
                <div class="col-lg-8">
                    <div class="contact-form text-center">
                        <div id="success"></div>
                        <form name="sentMessage" id="contactForm" novalidate="novalidate">
                            <div class="form-row">
                                <div class="control-group col-sm-6">
                                    <input type="text" class="form-control p-4" id="name" placeholder="Your Name" required="required" data-validation-required-message="Please enter your name" />
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="control-group col-sm-6">
                                    <input type="email" class="form-control p-4" id="email" placeholder="Your Email" required="required" data-validation-required-message="Please enter your email" />
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <div class="control-group">
                                <input type="text" class="form-control p-4" id="subject" placeholder="Subject" required="required" data-validation-required-message="Please enter a subject" />
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="control-group">
                                <textarea class="form-control py-3 px-4" rows="5" id="message" placeholder="Message" required="required" data-validation-required-message="Please enter your message"></textarea>
                                <p class="help-block text-danger"></p>
                            </div>
                            <div>
                                <button class="btn btn-outline-danger" type="submit" id="sendMessageButton">Send
                                    Message</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact End -->


    <!-- Footer Start -->
    <?php include_once('footer.php'); ?>
    <!-- Footer End -->

    <!-- Scroll to Bottom -->
    <i class="fa fa-2x fa-angle-down text-white scroll-to-bottom"></i>

    <!-- Back to Top -->
    <a href="#" class="btn btn-outline-danger px-0 back-to-top"><i class="fa fa-angle-double-up"></i></a>


    <!-- JavaScript Libraries -->
    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="lib/typed/typed.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/isotope/isotope.pkgd.min.js"></script>
    <script src="lib/lightbox/js/lightbox.min.js"></script>

    <!-- Contact Javascript File -->
    <script src="mail/jqBootstrapValidation.min.js"></script>
    <script src="mail/contact.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>