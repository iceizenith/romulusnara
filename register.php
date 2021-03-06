<?php
require 'connection.php';
?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->

<!-- templatemo 417 grill -->
<!-- 
Grill Template 
http://www.templatemo.com/preview/templatemo_417_grill 
-->
    <head>
        <meta charset="utf-8">
        <title>Romulus Nara | Beta</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width">
        
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>

        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="stylesheet" href="css/font-awesome.css">
        <link rel="stylesheet" href="css/templatemo_style.css">
        <link rel="stylesheet" href="css/templatemo_misc.css">
        <link rel="stylesheet" href="css/flexslider.css">
        <link rel="stylesheet" href="css/testimonails-slider.css">

        <script src="js/vendor/modernizr-2.6.1-respond-1.1.0.min.js"></script>
    </head>
    <body>
        <!--[if lt IE 7]>
            <p class="chromeframe">You are using an outdated browser. <a href="http://browsehappy.com/">Upgrade your browser today</a> or <a href="http://www.google.com/chromeframe/?redirect=true">install Google Chrome Frame</a> to better experience this site.</p>
        <![endif]-->

            <header>
                <div id="top-header">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-3">
                                <div class="home-account">
                                    <a href="register.php">Register</a>
                                </div>
                            </div>
                            <div class="col-md-6" id="login-box">
                                <div class="login">
                                    <div>
                                    <form name="login" method="get">
                                        <label>Username <input type="text" id="username" /></label>
                                        <label>Password <input type="password" id="pwd" /></label>
                                        <label><input type="submit" id="login-button" /></label>
                                    </form>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="cart-info">
                                    <i class="fa fa-shopping-cart"></i>
                                    (<a href="#">5 items</a>) in your cart (<a href="#">$45.80</a>)
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="main-header">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-3">
                                <div class="logo">
                                    <a href="#"><img src="images/logo.png" title="Romulus Nara" alt="Romulus Nara Clothes" ></a>
                                </div>
                            </div>
                            <div class="col-md-9">
                                <div class="main-menu">
                                    <ul>
                                        <li><a href="index.php">Home</a></li>
                                        <li><a href="why-romulus.php">Why choose us?</a></li>
                                        <li><a href="clothes-fabric.php">Clothes & Fabric</a></li>
                                        <li><a href="howto.php">How To</a></li>
                                        <li><a href="contact-us.php">Contact</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </header>


            <div id="heading">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="heading-content">
                                <h2>Register</h2>
                                <span>Home / <a href="register.php">Register</a></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            


            <div id="register-form">
                <div class="container">
                    <div class="row">
                        <div class="heading-section">
                            <h2>1 step to shopping!</h2>
                            <img src="images/under-heading.png" alt="" >
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-2"></div>
                        <div class="col-md-10" id="register-form-container">
                            <form class="form-horizontal templatemo-create-account templatemo-container" role="form" action="#" method="post">
                                <div class="form-inner">
                                    <div class="form-group">
                                        <div class="col-md-6">                    
                                            <label for="first_name" class="control-label">First Name</label>
                                            <input class="form-control" id="first_name" placeholder="" type="text">                                                         
                                        </div>  
                                        <div class="col-md-6">                    
                                            <label for="last_name" class="control-label">Last Name</label>
                                            <input class="form-control" id="last_name" placeholder="" type="text">                                                          
                                        </div>             
                                    </div>
                                    <div class="form-group">
                                        <div class="col-md-12">                   
                                            <label for="username" class="control-label">Email</label>
                                            <input class="form-control" id="email" placeholder="" type="email">                                                         
                                        </div>              
                                    </div>          
                                    <div class="form-group">
                                        <div class="col-md-6">                    
                                            <label for="username" class="control-label">Username</label>
                                            <input class="form-control" id="username" placeholder="" type="text">                                                           
                                        </div>
                                        <div class="col-md-6 templatemo-radio-group">
                                            <label class="radio-inline">
                                                <input name="optionsRadios" id="optionsRadios1" value="option1" type="radio"> Male
                                            </label>
                                            <label class="radio-inline">
                                                <input name="optionsRadios" id="optionsRadios2" value="option2" type="radio"> Female
                                            </label>
                                        </div>             
                                    </div>
                                    <div class="form-group">
                                        <div class="col-md-6">
                                            <label for="password" class="control-label">Password</label>
                                            <input class="form-control" id="password" placeholder="" type="password">
                                        </div>
                                        <div class="col-md-6">
                                            <label for="password" class="control-label">Confirm Password</label>
                                            <input class="form-control" id="password_confirm" placeholder="" type="password">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-md-12">
                                            <label><input type="checkbox">I agree to the <a href="javascript:;" data-toggle="modal" data-target="#templatemo_modal">Terms of Service</a> and <a href="#">Privacy Policy.</a></label>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-md-12">
                                            <input value="Create account" class="btn btn-info" type="submit">
                                            <a href="login-1.html" class="pull-right">Login</a>
                                        </div>
                                    </div>  
                                </div>
                            </form>
                        </div>
                        
                    </div>
                </div>
            </div>




			<footer>
                <div class="container">
                    <div class="top-footer">
                        <div class="row">
                            <div class="col-md-9">
                                <div class="subscribe-form">
                                    <span>Get in touch with us</span>
                                    <form method="get" class="subscribeForm">
                                        <input id="subscribe" type="text" />
                                        <input type="submit" id="submitButton" />
                                    </form>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="social-bottom">
                                    <span>Follow us:</span>
                                    <ul>
                                        <li><a href="#" class="fa fa-facebook"></a></li>
                                        <li><a href="#" class="fa fa-twitter"></a></li>
                                        <!-- <li><a href="#" class="fa fa-rss"></a></li> -->
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="main-footer">
                        <div class="row">
                            <div class="col-md-3">
                                <div class="about">
                                    <h4 class="footer-title">About Romulus</h4>
                                    <p>Grill is free HTML5 website template by templatemo and it is a free responsive bootstrap layout that can be applied for any purpose. 
                                    <br><br>Credit goes to <a rel="nofollow" href="http://unsplash.com">Unsplash</a> for photos used in this template. Nam commodo erat quis ligula placerat viverra.</p>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="shop-list">
                                    <h4 class="footer-title">Shop Categories</h4>
                                    <ul>
                                        <li><a href="#"><i class="fa fa-angle-right"></i>Clothes</a></li>
                                        <li><a href="#"><i class="fa fa-angle-right"></i>Fabric</a></li>
                                        <!-- <li><a href="#"><i class="fa fa-angle-right"></i>Spicy Delicious Meals</a></li>
                                        <li><a href="#"><i class="fa fa-angle-right"></i>Simple Italian Pizzas</a></li>
                                        <li><a href="#"><i class="fa fa-angle-right"></i>Pure Good Yogurts</a></li>
                                        <li><a href="#"><i class="fa fa-angle-right"></i>Ice-cream for kids</a></li> -->
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="recent-posts">
                                    <h4 class="footer-title">Recent posts</h4>
                                    <div class="recent-post">
                                        <div class="recent-post-thumb">
                                            <img src="images/recent-post1.jpg" alt="">
                                        </div>
                                        <div class="recent-post-info">
                                            <h6><a href="#">Delicious and Healthy Menus</a></h6>
                                            <span>24/12/2084</span>
                                        </div>
                                    </div>
                                    <!-- <div class="recent-post">
                                        <div class="recent-post-thumb">
                                            <img src="images/recent-post2.jpg" alt="">
                                        </div>
                                        <div class="recent-post-info">
                                            <h6><a href="#">Simple and effective meals</a></h6>
                                            <span>18/12/2084</span>
                                        </div>
                                    </div> -->
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="more-info">
                                    <h4 class="footer-title">More info</h4>
                                    <p>Sed dignissim, diam id molestie faucibus, purus nisl pretium quam, in pulvinar velit massa id elit.</p>
                                    <ul>
                                        <li><i class="fa fa-phone"></i>010-020-0340</li>
                                        <li><i class="fa fa-globe"></i>123 Dagon Studio, Yakin Street, Digital Estate</li>
                                        <li><i class="fa fa-envelope"></i><a href="#">contact@romulusnara.zz.vc</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="bottom-footer">
                        <p>Copyright © 2084 <a href="#">Romulus Nara</a> <!-- Credit: www.templatemo.com --></p>
                    </div>
                    
                </div>
            </footer>

    
        <script src="js/vendor/jquery-1.11.0.min.js"></script>
        <script src="js/vendor/jquery.gmap3.min.js"></script>
        <script src="js/plugins.js"></script>
        <script src="js/main.js"></script>

    </body>
</html>