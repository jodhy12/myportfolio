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

<?php
include_once('dataDetails.php');
$id = $_GET['id'];

foreach ($projects as $p) {
    if ($p->id == $id) {
        array_push($project, $p);
    }
}
$project = (object)$project;
?>

<body data-spy="scroll" data-target=".navbar" data-offset="1">
    <!-- Navbar Start -->
    <nav class="navbar fixed-top shadow-sm navbar-expand-lg bg-light navbar-light py-3 py-lg-0 px-lg-5">
        <a href="index.php" class="navbar-brand ml-lg-3">
            <h1 class="m-0 display-5"><span class="text-danger">My </span>Portofolio</h1>
        </a>
        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse px-lg-3 justify-content-end" id="navbarCollapse">
            <div class="navbar-nav m-0 py-0">
                <a href="index.php" class="nav-item nav-link active">Home</a>
            </div>
        </div>
    </nav>
    <!-- Navbar End -->

    <!-- Header Start -->
    <div class="container-fluid mb-5 py-5" id="home" style="min-height: 100vh;">
        <div class="container">
            <div class="d-flex flex-column align-items-center justify-content-center">
                <?php foreach ($project as $p) { ?>
                    <div class="pb-3">
                        <h1 class="text-danger"><?php echo $p->title ?></h1>
                        <h6 class="text-center text-secondary"><?php echo $p->tag ?></h6>
                    </div>
                    <p class="text-secondary"><?php echo $p->description ?></p>
                    <div class="row justify-content-center">
                        <?php foreach ($p->images as $img) {
                            $img = (object)$img ?>
                            <div class="col-lg-6 col-md-6 mb-4 portofolio-item">
                                <h5 class="text-center text-danger"><?php echo $img->id ?>. <?php echo $img->img_title ?></h5>
                                <div class="position-relative overflow-hidden mb-2 rounded">
                                    <a href="#" class="pop">
                                        <img class="img-fluid w-100" src="<?php echo $img->img_path ?>" alt="<?php echo $img->img_path ?>">
                                    </a>
                                    <div class="row justify-content-center m-0">
                                        <div class="portofolio-title w-100">
                                            <p class="text-secondary text-justify mt-1 mb-1 px-2"><?php echo $img->description ?></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php } ?>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>
    <!-- Header End -->

    <!-- Modal Image -->
    <div class="modal fade" id="imagemodal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-body">
                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                    <img src="" class="imagepreview" style="width: 100%;">
                </div>
                <div class="modal-footer justify-content-start">
                    <a href="" target="_blank" class="full-image">
                        <button class="btn btn-outline-danger">
                            Open Full Image
                        </button>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal Image End  -->

    <!-- Footer Start -->
    <?php include_once('footer.php'); ?>
    <!-- Footer End -->

    <!-- Scroll to Bottom -->
    <i class="fa fa-2x fa-angle-down text-white scroll-to-bottom"></i>

    <!-- Back to Top -->
    <a href="#" class="btn btn-outline-dark px-0 back-to-top"><i class="fa fa-angle-double-up"></i></a>


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