<!DOCTYPE html>
<html lang="en">
<head>
    <title>Array Kost</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
        function hideURLbar(){ window.scrollTo(0,1); }
    </script>
	<link rel="stylesheet" href="<?php echo base_url()?>assets/css/bootstrap.css" type="text/css">
    <link rel="stylesheet" href="<?php echo base_url()?>assets/css/reset.min.css" type="text/css" media="all"/>
    <link rel="stylesheet" href="<?php echo base_url()?>assets/css/style2.css" type="text/css" media="all"/>
    <link rel="stylesheet" href="<?php echo base_url()?>assets/css/font-awesome.css">
    <link href="<?php echo base_url()?>assets/css/simplelightbox.min.css" rel="stylesheet" type="text/css">
    <link href="//fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <link href="//fonts.googleapis.com/css?family=Titillium+Web:200,200i,300,300i,400,400i,600,600i,700,700i,900" rel="stylesheet">
    <link href="//fonts.googleapis.com/css?family=Italianno" rel="stylesheet">
    <link rel="icon" type="png" href="<?php echo base_url()?>assets/images/kost.png">
    <script src="<?php echo base_url()?>assets/js/jquery-2.1.4.min.js"></script>
    <script src="<?php echo base_url()?>assets/js/jquery-ui.js"></script>
    <script>
        $(document).ready(function(){
            $("#facilities").click(function(){
                $("#regulation_panel").slideUp("fast");
                $(".glyphicon-cog").css("color","white");
                $("#access_panel").slideUp("fast");
                $(".glyphicon-map-marker").css("color","white");
                $("#facilities_panel").slideToggle("slow");
                $("#icon_fasilitas").css("color","black");
            });
            $("#regulation").click(function(){
                $("#access_panel").slideUp("fast");
                $(".glyphicon-map-marker").css("color","white");
                $("#facilities_panel").slideUp("fast");
                $("#icon_fasilitas").css("color","white");
                $("#regulation_panel").slideToggle("slow");
                $(".glyphicon-cog").css("color","black");
            });
            $("#access").click(function(){
                $("#facilities_panel").slideUp("fast");
                $("#icon_fasilitas").css("color","white");
                $("#regulation_panel").slideUp("fast");
                $(".glyphicon-cog").css("color","white");
                $("#access_panel").slideToggle("slow");
                $(".glyphicon-map-marker").css("color","black");
            });
        // Add smooth scrolling to all links
            $("a").on('click', function(event) {

                // Make sure this.hash has a value before overriding default behavior
                if (this.hash !== "") {
                    // Prevent default anchor click behavior
                    event.preventDefault();

                    // Store hash
                    var hash = this.hash;

                    // Using jQuery's animate() method to add smooth page scroll
                    // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
                    $('html, body').animate({
                        scrollTop: $(hash).offset().top
                    }, 1500, function(){

                        // Add hash (#) to URL when done scrolling (default click behavior)
                        window.location.hash = hash;
                    });
                } // End if
                });
            });

    </script>
</head>
<body>
    <div class="Main-agile">
    <!-- banner -->
        <div id="home" class="w3ls-banner">
            <!-- banner-text -->
            <div class="w3layouts-banner-top">
                <div class="container">
                    <div class="agileits-banner-info">
                        <span>Anda Mencari Kost Yang</span>
                        <div class="rw-words rw-words-1">
                            <span>Nyaman?</span>
                            <span>Akses Mudah?</span>
                            <span>Terjangkau?</span>
                            <span>Layanan Oke?</span>
                        </div>
                        <p></p>
                        <div class="agileits_w3layouts_more menu__item">
                            <a href="<?php echo base_url('c_user/display'); ?>/<?php echo 'booking'; ?>" class="menu__link">Pesan Kamar <span class="glyphicon glyphicon-menu-right" style="font-size: 12px;"></span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="clearfix"> </div>
        <!-- //banner-text -->
    </div>
    <!-- //banner -->
    <!-- header -->
    <div class="header-w3layouts">
        <!-- Navigation -->
        <nav class="navbar navbar-default">
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Array </span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <h1><a class="logo" href="<?php echo base_url('c_user'); ?>"><span>A</span>rray</a></h1>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav navbar-right">
                    <!-- Hidden li included to remove active class from about link when scrolled up past about section -->
                    <li class="active"><a href="<?php echo base_url('c_user'); ?>">Home</a></li>
                    <li><a class="menu" href="#about">Tentang</a></li>
                    <li><a class="menu" href="#services">Pelayanan</a></li>
                    <li><a class="menu" href="#gallery">Galeri</a></li>
                    <li><a class="menu" href="#contact">Kontak</a></li>
                    <li><a href="#LoginModal" class="btn btn-info btn-xs" data-toggle="modal">Login <span class="glyphicon glyphicon-log-in"></span></a></li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </nav>
        <div class="w3ls_search">
            <div class="cd-main-header">
                <ul class="cd-header-buttons">
                    <li><a class="cd-search-trigger" href="#cd-search"> <span></span></a></li>
                </ul> <!-- cd-header-buttons -->
            </div>
            <div id="cd-search" class="cd-search">
                <form action="#" method="post">
                    <input name="Search" type="search" placeholder="Click enter after typing..." required="">
                </form>
            </div>
        </div>
    </div>
    <!-- //header -->
    <!-- Modal -->
    <div id="LoginModal" class="modal fade">
        <div class="modal-dialog modal-login">
            <div class="modal-content">
                <div class="modal-header">
                    <div class="avatar">
                        <img src="<?php echo base_url()?>assets/images/avatar.png" alt="Avatar">
                    </div>
                    <h4 class="modal-title">Member Login</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                </div>
                <div class="modal-body">
                    <form action="<?php echo base_url('c_user/login'); ?>" method="post">
                        <div class="form-group">
                            <input type="email" class="form-control" name="email" placeholder="E-mail" required>
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" name="password" placeholder="Password" required>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary btn-lg btn-block login-btn">Login</button>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <a id="reset" href="#resetPassword" data-toggle="modal" >Lupa Password?</a>
                </div>
            </div>
        </div>
    </div>
    <div id="resetPassword" class="modal fade">
        <div class="modal-dialog modal-login">
            <div class="modal-content">
                <div class="modal-header">
                    <div class="avatar">
                        <img src="<?php echo base_url()?>assets/images/lock.png" alt="Avatar">
                    </div>
                    <h4 class="modal-title">Reset Password</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                </div>
                <div class="modal-body">
                    <form action="/examples/actions/confirmation.php" method="post">
                        <div class="form-group">
                            <input type="text" class="form-control" name="email" placeholder="E-mail" required="required">
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" name="no_telp" placeholder="No HP" required="required">
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary btn-lg btn-block login-btn">Reset Password</button>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <a href="#">Password baru akan dikirim melalui email anda</a>
                </div>
            </div>
        </div>
    </div>
    <!-- //Modal -->
