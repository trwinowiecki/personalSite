<!DOCTYPE html>
<html lang="en">
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <title>Taylor Winowiecki</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta content="" name="keywords">
    <meta content="" name="description">
    
    <!-- Fav and touch icons -->
    <link rel="shortcut icon" href="img/logo.png" type="image/png">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="/lib/bootstrap/css/bootstrap.css">
    
    <!-- Font-Awesome CSS -->
    <link rel="stylesheet" href="/lib/font-awesome/css/fontawesome-all.css">
    
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900" rel="stylesheet">
    
    <!-- Personal CSS Files -->
    <link rel="stylesheet" href="css/style.css">
</head>
<body data-spy="scroll" data-target="#scroll" data-offset="0">
    <div class="wrapper">
        
        <!-- Navigation -->
        <nav id="navbar" class="nav-left-side bg-faded">
            <div class="nav-side-expanded-bg"></div>
            <div class="nav-side-collapse">
                <ul class="list-unstyled">
                    <li>
                        <i class="fa fa-angle-right"></i>
                    </li>
                </ul>
            </div>
            
            <!-- Nav Items -->
            <div class="nav-side-items">
                
                <div class="nav-side-expanded">
                    <ul class="list-unstyled nav flex-column">
                        <li class="active page-scroll" id="home-nav">
                            <a class="nav-link" href="#home">Home</a>
                        </li>
                        <li class="page-scroll" id="about-nav">
                            <a class="nav-link" href="#about">About</a>
                        </li>
                        <li class="page-scroll" id="portfolio-nav">
                            <a class="nav-link" href="#portfolio">Portfolio</a>
                        </li>
                        <li class="page-scroll" id="contact-nav">
                            <a class="nav-link" href="#contact">Contact</a>
                        </li>
                    </ul>
                </div>
                <div class="nav-side-icons">
                    <ul id="scroll" class="list-unstyled nav flex-column">
                        <li class="active" id="home-nav">
                            <a class="nav-link" href="#home"><i class="fa fa-home"></i></a>
                        </li>
                        <li id="about-nav">
                            <a class="nav-link" href="#about"><i class="fa fa-user"></i></a>
                        </li>
                        <li id="portfolio-nav">
                            <a class="nav-link" href="#portfolio"><i class="fa fa-link"></i></a>
                        </li>
                        <li id="contact-nav">
                            <a class="nav-link" href="#contact"><i class="fa fa-paper-plane"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        
        <!-- Content -->
        <div class="content-wrapper">
            
            <!-- Home -->
            <div class="section" id="home">
                <div class="row no-row-margin">
                    <div class="col-12 text-center">
                        <div class="row">
                            <div class="col-12 col-sm-8 col-md-6 col-lg-4 mx-auto">
                                <img class="rounded-circle img-thumbnail img-profile" src="img/profile.png"></img>
                            </div>
                        </div>
                        <br>
                        <h1 id="name">Taylor Winowiecki</h1>
                        <h4>Software Developer | IT Technician | PC Building/Repair</h4>
                    </div>
                </div>
            </div>
            
            <!-- About -->
            <div class="section" id="about">
                <div class="row no-row-margin">
                    <div class="col-12 text-center">
                        <div class="row">
                            <div id="about_text" class="col-sm-6">
                                I am a senior college student at Oakland University studying Computer Science. I have experience with several languages including, but not limited to, Java, HTML & CSS, Python and C.
                            </div>
                            <div id="about_text" class="col-sm-6">
                                I am looking to use my skills to make software that will improve lives. Whether that be saving people time or just making something easier to use for the everyday customer.
                            </div>
                        </div>
                        <br>
                        <a class="btn btn-primary btn-lg" href="resume.pdf">
                            <i class="fa fa-download"></i>Download Resume
                        </a>
                    </div>
                </div>
            </div>
            
            <!-- Portfolio -->
            <div class="section" id="portfolio">
                <div class="row no-row-margin">
                    <div class="col-12 text-center">
                        Portfolio
                    </div>
                </div>
            </div>
            
            <!-- Contact -->
            <div class="section" id="contact">
                <div class="row no-row-margin">
                    <div class="col-12">
                        <h1>Contact Me</h1>
                    </div>
                </div>
                <br>
                <div class="row no-row-margin">
                    <div class="col-lg-8 offset-lg-2">
                        <form name="sentMessage" id="contactForm" novalidate>
                            <div class="row control-group">
                                <div class="form-group col-12 floating-label-form-group controls">
                                    <label class="text-left">Name</label>
                                    <input type="text" class="form-control" placeholder="Name" id="name" required data-validation-required-message="Please enter your name.">
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <div class="row control-group">
                                <div class="form-group col-12 floating-label-form-group controls">
                                    <label class="text-left">Email Address</label>
                                    <input type="email" class="form-control" placeholder="Email Address" id="email" required data-validation-required-message="Please enter your email address.">
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <div class="row control-group">
                                <div class="form-group col-12 floating-label-form-group controls">
                                    <label class="text-left">Phone Number</label>
                                    <input type="tel" class="form-control" placeholder="Phone Number" id="phone" required data-validation-required-message="Please enter your phone number.">
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <div class="row control-group">
                                <div class="form-group col-12 floating-label-form-group controls">
                                    <label class="text-left">Message</label>
                                    <textarea rows="5" class="form-control" placeholder="Message" id="message" required data-validation-required-message="Please enter a message."></textarea>
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <br>
                            <div id="success"></div>
                            <div class="row">
                                <div class="form-group col-12">
                                    <button type="submit" class="btn btn-success btn-lg">Send</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
    
    <!-- jQuery first, then Tether, then Bootstrap JS. -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    
    <!-- Contact Form JavaScript -->
    <script src="js/jqBootstrapValidation.js"></script>
    <script src="js/contact_me.js"></script>
    
    <!-- Custom JS -->
    <script src="js/scrolling.js"></script>
    <script src="js/custom.js"></script>
</body>
</html>