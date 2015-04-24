<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Freelancer - Start Bootstrap Theme</title>

    <!-- Bootstrap Core CSS - Uses Bootswatch Flatly Theme: http://bootswatch.com/flatly/ -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/freelancer.css" rel="stylesheet">
    <link href="css/custom.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body id="page-top" class="index">

    <!-- Navigation -->
    <nav class="navbar navbar-default">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#page-top">Start Bootstrap</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
                    <li class="page-scroll">
                        <a href="#portfolio">Portfolio</a>
                    </li>
                    <li class="page-scroll">
                        <a href="#about">About</a>
                    </li>
                    <li class="page-scroll">
                        <a href="#contact">Contact</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>



    <!-- Results Grid Section -->
    <section class="section-results">
        <div class="col-md-3">
            <div class="side-nav">
                <ul class="ul-side-nav" id="nav">
                    <li class="no-link"><a href="#"><h4>OVERVIEW</h4></a></li>
                    <li class="current brown"><a href="#report">Overall <span>0.0</span></a></li>
                    <li><a href="#recommendations">Priority <span>0.3</span></a></li>
                    <li class="red"><a href="#domain">Images <span>1.1</span></a></li>
                </ul>
            </div>
        </div>
        <div class="col-md-9">
            <div class="right-area">
                <div class="right-results" id="report">
                    <h2>Report for www.xyz.com</h2>
                    <div class="row">
                        <div class="col-md-6">
                            <div id="summaries">
                                <div class="summary summary-overall"><h3>Overall<span class="score better">8.8</span></h3><p>The overall score for this website.</p></div>
                                <div class="summary"><h4>Accessibility<span class="score better">7.8</span></h4><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reprehenderit, ipsum!</p>
                                    <p class="see-more"><a href="#">See contributing tests </a> <i class="fa fa-sort-desc"></i></p></div>
                                <div class="summary"><h4>Experience<span class="score better">5.0</span></h4><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorem praesentium enim fuga, vitae qui earum.</p>
                                    <p class="see-more"><a href="#">See contributing tests </a> <i class="fa fa-sort-desc"></i></p></div>
                                <div class="summary"><h4>Marketing<span class="score better">7.8</span></h4><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sit.</p>
                                    <p class="see-more"><a href="#">See contributing tests </a> <i class="fa fa-sort-desc"></i></p></div>
                                <div class="summary"><h4>Experience<span class="score better">3.8</span></h4><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eius eligendi quis, dicta. Iste possimus omnis excepturi quibusdam a.</p>
                                    <p class="see-more"><a href="#">See contributing tests </a> <i class="fa fa-sort-desc"></i></p></div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="right-image-aside">
                                <img src="img/screenshot-overlay-computer.png" alt="" class="img-responsive pc">
                                <p>Lorem ipsum a sample of <a href="#">5 pages</a> from this website at 5:25 AM on Mar 29, 2015 (GMT).</p>
                                <p><i class="fa fa-retweet"></i> <a href="#">Retest</a></p>
                            </div>
                        </div>
                    </div>
                </div>

                <div id="recommendations" class="recommendations">
                    <h2>Top priorities for website improvement</h2>
                    <ul>
                        <li>Resolve the validation errors that are listed in the table below.  These errors are preventing this website from being fully W3C compliant. <a href="#Test_Page_CodeQuality">(read more)
                        </a></li>
                
                        <li>Check how the website looks using a mobile and a tablet.  Consider adding mobile-only styling using media queries.  Some websites employ other techniques for mobile visitors which we cannot currently detect. <a href="#Test_Page_Mobile">(read more)
                        </a></li>
                
                        <li>Add width and height attributes to all image tags.  The width and height you specify should be the same as the source image.  If you want to resize an image in the browser, use CSS. <a href="#Test_Page_Images">(read more)
                        </a></li>
                    </ul>
                </div>

                <div id="domain" class="domain">
                    <div class="row">
                        <div class="col-md-6 pull-left">
                            <h3>Images<span class="score excellent">9.8</span></h3>
                        </div>
                        <div class="col-md-6 pull-right">
                            <p class="report-help-link">
                                <a href="#" title="Help for Images"><span>Help <i class="fa fa-question-circle"></i></span></a>
                            </p>
                        </div>
                    </div>


                    <div class="row">
                        <div class="col-md-6">
                            <div id="featureboxImagesSized" class="reportbox splitpanel split-image"><p>
                                <span class="largetext">
                                86%
                                </span>
                             of images have a clearly defined size</p></div>
                        </div>
                        <div class="col-md-6">
                            <div id="featureboxImagesSized" class="reportbox"><p>
                                <span class="largetext">
                                66%
                                </span>
                             of images have a clearly defined size</p></div>
                        </div>
                    </div>



                    <div class="summary-good">
                        <ul>
                            <li>None of the tested pages of this site use tables for layout. This is excellent, as using tables for layout is not necessary and they should only contain tabular data. A well built website should use div elements and CSS to create the desired layout.</li>
                        </ul>
                    </div>
                    <div class="summary-bad">
                        <ul>
                            <li>None of the tested pages of this site use tables for layout. This is excellent, as using tables for layout is not necessary and they should only contain tabular data. A well built website should use div elements and CSS to create the desired layout.</li>
                        </ul>
                    </div>
                    <div class="summary-good">
                        <ul>
                            <li>None of the tested pages of this site use tables for layout. This is excellent, as using tables for layout is not necessary and they should only contain tabular data. A well built website should use div elements and CSS to create the desired layout.</li>
                        </ul>
                    </div>
                    <div class="summary-bad">
                        <ul>
                            <li>None of the tested pages of this site use tables for layout. This is excellent, as using tables for layout is not necessary and they should only contain tabular data. A well built website should use div elements and CSS to create the desired layout.</li>
                        </ul>
                    </div>

                </div>
            </div>
        </div>
    </section>



    <!-- Footer -->
    <footer class="text-center">
        <div class="footer-below">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        Copyright &copy; Your Website 2014
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- Scroll to Top Button (Only visible on small and extra-small screen sizes) -->
    <div class="scroll-top page-scroll visible-xs visble-sm">
        <a class="btn btn-primary" href="#page-top">
            <i class="fa fa-chevron-up"></i>
        </a>
    </div>

    <!-- Portfolio Modals -->
    <div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
                            <h2>Project Title</h2>
                            <hr class="star-primary">
                            <img src="img/portfolio/cabin.png" class="img-responsive img-centered" alt="">
                            <p>Use this area of the page to describe your project. The icon above is part of a free icon set by <a href="https://sellfy.com/p/8Q9P/jV3VZ/">Flat Icons</a>. On their website, you can download their free set with 16 icons, or you can purchase the entire set with 146 icons for only $12!</p>
                            <ul class="list-inline item-details">
                                <li>Client:
                                    <strong><a href="http://startbootstrap.com">Start Bootstrap</a>
                                    </strong>
                                </li>
                                <li>Date:
                                    <strong><a href="http://startbootstrap.com">April 2014</a>
                                    </strong>
                                </li>
                                <li>Service:
                                    <strong><a href="http://startbootstrap.com">Web Development</a>
                                    </strong>
                                </li>
                            </ul>
                            <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="portfolio-modal modal fade" id="portfolioModal2" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
                            <h2>Project Title</h2>
                            <hr class="star-primary">
                            <img src="img/portfolio/cake.png" class="img-responsive img-centered" alt="">
                            <p>Use this area of the page to describe your project. The icon above is part of a free icon set by <a href="https://sellfy.com/p/8Q9P/jV3VZ/">Flat Icons</a>. On their website, you can download their free set with 16 icons, or you can purchase the entire set with 146 icons for only $12!</p>
                            <ul class="list-inline item-details">
                                <li>Client:
                                    <strong><a href="http://startbootstrap.com">Start Bootstrap</a>
                                    </strong>
                                </li>
                                <li>Date:
                                    <strong><a href="http://startbootstrap.com">April 2014</a>
                                    </strong>
                                </li>
                                <li>Service:
                                    <strong><a href="http://startbootstrap.com">Web Development</a>
                                    </strong>
                                </li>
                            </ul>
                            <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="portfolio-modal modal fade" id="portfolioModal3" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
                            <h2>Project Title</h2>
                            <hr class="star-primary">
                            <img src="img/portfolio/circus.png" class="img-responsive img-centered" alt="">
                            <p>Use this area of the page to describe your project. The icon above is part of a free icon set by <a href="https://sellfy.com/p/8Q9P/jV3VZ/">Flat Icons</a>. On their website, you can download their free set with 16 icons, or you can purchase the entire set with 146 icons for only $12!</p>
                            <ul class="list-inline item-details">
                                <li>Client:
                                    <strong><a href="http://startbootstrap.com">Start Bootstrap</a>
                                    </strong>
                                </li>
                                <li>Date:
                                    <strong><a href="http://startbootstrap.com">April 2014</a>
                                    </strong>
                                </li>
                                <li>Service:
                                    <strong><a href="http://startbootstrap.com">Web Development</a>
                                    </strong>
                                </li>
                            </ul>
                            <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="portfolio-modal modal fade" id="portfolioModal4" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
                            <h2>Project Title</h2>
                            <hr class="star-primary">
                            <img src="img/portfolio/game.png" class="img-responsive img-centered" alt="">
                            <p>Use this area of the page to describe your project. The icon above is part of a free icon set by <a href="https://sellfy.com/p/8Q9P/jV3VZ/">Flat Icons</a>. On their website, you can download their free set with 16 icons, or you can purchase the entire set with 146 icons for only $12!</p>
                            <ul class="list-inline item-details">
                                <li>Client:
                                    <strong><a href="http://startbootstrap.com">Start Bootstrap</a>
                                    </strong>
                                </li>
                                <li>Date:
                                    <strong><a href="http://startbootstrap.com">April 2014</a>
                                    </strong>
                                </li>
                                <li>Service:
                                    <strong><a href="http://startbootstrap.com">Web Development</a>
                                    </strong>
                                </li>
                            </ul>
                            <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="portfolio-modal modal fade" id="portfolioModal5" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
                            <h2>Project Title</h2>
                            <hr class="star-primary">
                            <img src="img/portfolio/safe.png" class="img-responsive img-centered" alt="">
                            <p>Use this area of the page to describe your project. The icon above is part of a free icon set by <a href="https://sellfy.com/p/8Q9P/jV3VZ/">Flat Icons</a>. On their website, you can download their free set with 16 icons, or you can purchase the entire set with 146 icons for only $12!</p>
                            <ul class="list-inline item-details">
                                <li>Client:
                                    <strong><a href="http://startbootstrap.com">Start Bootstrap</a>
                                    </strong>
                                </li>
                                <li>Date:
                                    <strong><a href="http://startbootstrap.com">April 2014</a>
                                    </strong>
                                </li>
                                <li>Service:
                                    <strong><a href="http://startbootstrap.com">Web Development</a>
                                    </strong>
                                </li>
                            </ul>
                            <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="portfolio-modal modal fade" id="portfolioModal6" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
                            <h2>Project Title</h2>
                            <hr class="star-primary">
                            <img src="img/portfolio/submarine.png" class="img-responsive img-centered" alt="">
                            <p>Use this area of the page to describe your project. The icon above is part of a free icon set by <a href="https://sellfy.com/p/8Q9P/jV3VZ/">Flat Icons</a>. On their website, you can download their free set with 16 icons, or you can purchase the entire set with 146 icons for only $12!</p>
                            <ul class="list-inline item-details">
                                <li>Client:
                                    <strong><a href="http://startbootstrap.com">Start Bootstrap</a>
                                    </strong>
                                </li>
                                <li>Date:
                                    <strong><a href="http://startbootstrap.com">April 2014</a>
                                    </strong>
                                </li>
                                <li>Service:
                                    <strong><a href="http://startbootstrap.com">Web Development</a>
                                    </strong>
                                </li>
                            </ul>
                            <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
    <script src="js/classie.js"></script>
    <script src="js/cbpAnimatedHeader.js"></script>

    <!-- Contact Form JavaScript -->
    <script src="js/jqBootstrapValidation.js"></script>
    <script src="js/contact_me.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="js/freelancer.js"></script>
    <script src="js/jquery.nav.js"></script>
    <script>
        $(document).ready(function() {
            $('#nav').onePageNav({
                changeHash: true,
                scrollSpeed: 1000
            });
        });
    </script>

</body>

</html>
