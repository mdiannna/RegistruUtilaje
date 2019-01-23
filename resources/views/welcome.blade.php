<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Registrul Utilajelor</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">

        <!-- Bootstrap CDN -->
        <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"> -->


          <!-- Font awesome -->
        <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">


        <!-- Styles -->
        <!-- <link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}"> -->
        <!-- Styles -->

<!-- Mobile Specific Meta -->
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <!-- Favicon-->
        <link rel="shortcut icon" href="img/fav.png">
        <!-- Author Meta -->
        <meta name="author" content="codepixer">
        <!-- Meta Description -->
        <meta name="description" content="">
        <!-- Meta Keyword -->
        <meta name="keywords" content="">
        <!-- meta character set -->
        <meta charset="UTF-8">
        <!-- Site Title -->
        <title>Registrul utilajelor</title>

        <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet">

        <link rel="stylesheet" href="css/linearicons.css">
            <link rel="stylesheet" href="css/font-awesome.min.css">
            <link rel="stylesheet" href="css/bootstrap.css">
            <link rel="stylesheet" href="css/magnific-popup.css">
            <link rel="stylesheet" href="css/nice-select.css">                  
            <link rel="stylesheet" href="css/animate.min.css">
            <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">          
            <link rel="stylesheet" href="css/owl.carousel.css">
            <link rel="stylesheet" href="css/main.css">
            
        <!-- <style>
            html, body {
                background-color: #fff;
                /*color: #636b6f;*/
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style> -->
    </head>
    <body>

        <header id="header" id="home">
                <div class="container">
                    <div class="row align-items-center justify-content-between d-flex">
                      <div id="logo">
                        <a href="index.html"><img src="images/logo.png" alt="" title="" /></a>
                      </div>
                      <nav id="nav-menu-container">
                        <ul class="nav-menu">
                          <!-- <li class="menu-active"><a href="index.html">Home</a></li> -->
                          <!-- <li><a href="about.html">Despre</a></li> -->
                          <!-- <li><a href="cars.html">Cars</a></li> -->
                          <!-- <li><a href="service.html">Service</a></li> -->
                          <!-- <li><a href="blog-home.html">Blog</a></li>     -->
                          <!-- <li><a href="contact.html">Contact</a></li>    -->
                          <!-- <li class="menu-has-children"><a href="">Pages</a>
                            <ul>
                              <li><a href="blog-single.html">Blog Single</a></li>
                              <li><a href="elements.html">Elements</a></li>
                            </ul>
                          </li> -->
                          <li>  
                            @if (Route::has('login'))
                                @auth
                                    <a class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();"> Logout</a>
                                                     
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                @else
                                    <a href="{{ route('login') }}">Login</a>
                                @endauth
                            @endif
                          </li>
                        </ul>
                      </nav><!-- #nav-menu-container -->                    
                    </div>
                </div>
              </header><!-- #header -->


            <!-- start banner Area -->
            <section class="banner-area relative" id="home">
                <div class="overlay overlay-bg"></div>  
                <div class="container">
                    <div class="row fullscreen d-flex align-items-center justify-content-center">
                        <div class="banner-content col-lg-7 col-md-6 ">
                            <h6 class="text-white ">the Royal Essence of Journey</h6>
                            <h1 class="text-white text-uppercase">
                                Registrul Utilajelor v2.0               
                            </h1>
                            <p class="pt-20 pb-20 text-white">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                            </p>
                            <a href="/machines" class="primary-btn text-uppercase">Lista utilaje </a>
                        </div>
                        <div class="col-lg-5  col-md-6 header-right">
                            <h4 class="text-white pb-30">Inregistreaza-ti firma aici</h4>
                            <form class="form" role="form" autocomplete="off">
                                <div class="form-group">
                                    <div class="default-select" id="default-select"">
                                        <select>
                                            <option value="" disabled selected hidden>Select Your Car</option>
                                            <option value="1">BMW</option>
                                            <option value="1">Farrari</option>
                                            <option value="1">Toyota</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-md-6 wrap-left">
                                        <div class="default-select" id="default-select"">
                                            <select>
                                                <option value="" disabled selected hidden>Pickup</option>
                                                <option value="1">Pickup One</option>
                                                <option value="1">Pickup Two</option>
                                                <option value="1">Pickup Three</option>
                                                <option value="1">Pickup Four</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6 wrap-right">
                                        <div class="input-group dates-wrap">                                          
                                            <input id="datepicker" class="dates form-control" id="exampleAmount" placeholder="Date & time" type="text">                        
                                            <div class="input-group-prepend">
                                                <span  class="input-group-text"><span class="lnr lnr-calendar-full"></span></span>
                                            </div>                                          
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-md-6 wrap-left">
                                        <div class="default-select" id="default-select"">
                                            <select>
                                                <option value="" disabled selected hidden>Drop off</option>
                                                <option value="1">Drop off One</option>
                                                <option value="1">Drop off Two</option>
                                                <option value="1">Drop off Three</option>
                                                <option value="1">Drop off Four</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6 wrap-right">
                                        <div class="input-group dates-wrap">                                              
                                            <input id="datepicker2" class="dates form-control" id="exampleAmount" placeholder="Date & time" type="text">                        
                                            <div class="input-group-prepend">
                                                <span  class="input-group-text"><span class="lnr lnr-calendar-full"></span></span>
                                            </div>                                          
                                        </div>
                                    </div>
                                </div>                              
                                <div class="from-group">
                                    <input class="form-control txt-field" type="text" name="name" placeholder="Your name">
                                    <input class="form-control txt-field" type="email" name="email" placeholder="Email address">
                                    <input class="form-control txt-field" type="tel" name="phone" placeholder="Phone number">
                                </div>
                                <div class="form-group row">
                                    <div class="col-md-12">
                                        <button type="reset" class="btn btn-default btn-lg btn-block text-center text-uppercase">Adauga utilaj</button>
                                    </div>
                                </div>
                            </form>
                        </div>                                          
                    </div>
                </div>                  
            </section>
            <!-- End banner Area -->    


<!-- Start feature Area -->
            <section class="feature-area section-gap" id="service">
                <div class="container">
                    <div class="row d-flex justify-content-center">
                        <div class="col-md-12 pb-40 header-text" style="font-weight: 600">
                            <h1>Despre</h1>
                            <p>
                               <b>Registrul Digital al Utilajelor</b> este un proiect inițiat de către <a href="http://rerise.org" target="_blank"  target="_blank">Re:Rise (Asociația pentru Reducerea Riscului Seismic)</a> care pune la dispoziția <a href="https://www.facebook.com/departamenturgente" target="_blank">DSU (Departamentul pentru Situații de Urgență</a> - principala autoritate responsabilă pentru prevenirea și gestionarea situațiilor de urgență la nivel național) o bază de date cu utilajele deținute de către operatori privați (buldozere, excavatoare etc.), care să ajute la răspunsul post-seism al forțelor de salvare.
<br>
<br>
Prin intermediul Registrului Digital al Utilajelor, DSU va putea avea acces instant, în timp real, la informații legate de locația și disponibilitatea utilajelor private, iar autoritățile le vor putea prelua de urgență pentru a fi folosite la intervențiile necesare după un cutremur major: eliberarea drumurilor și a căilor de acces, salvarea persoanelor de sub dărâmături, punerea în siguranță a structurilor afectate ș.a.
<br>
<br>

Conform legilor în vigoare din România, în momentul declarării stării de necesitate, autoritățile responsabile pentru intervenție pot prelua, pe o durată limitată, utilaje private necesare acțiunilor de salvare. Registrul Digital al Utilajelor vine în sprijinul DSU pentru a accelera procesul de salvare și pentru a limita numărul de victime.</p>
                        </div>
                    </div>

           
           </div>
        </section>


            <footer class="footer-area section-gap">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-2 col-md-6 col-sm-6">
                            <div class="single-footer-widget">
                                <!-- <h6>Quick links</h6> -->
                                <ul>
                                    <li><a href="http://rerise.org" target="_blank"><img src="{{asset('images/rerise_logo.jpg')}}" class="image image-responsive img img-thumbnail img-responsive"></a></li>
                                    <!-- <li><a href="http://rerise.org" target="_blank">rerise.org</a></li> -->
                                    <!-- <li><a href="#">Investor Relations</a></li> -->
                                    <!-- <li><a href="#">Terms of Service</a></li> -->
                                </ul>                               
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-6 col-sm-6">
                            <div class="single-footer-widget">
                                <h6></h6>
                                <!-- <ul>
                                    <li><a href="#">Jobs</a></li>
                                    <li><a href="#">Brand Assets</a></li>
                                    <li><a href="#">Investor Relations</a></li>
                                    <li><a href="#">Terms of Service</a></li>
                                </ul> -->                               
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-6 col-sm-6">
                            <div class="single-footer-widget">
                               <!--  <h6>Resources</h6>
                                <ul>
                                    <li><a href="#">Jobs</a></li>
                                    <li><a href="#">Brand Assets</a></li>
                                    <li><a href="#">Investor Relations</a></li>
                                    <li><a href="#">Terms of Service</a></li>
                                </ul>      -->                          
                            </div>
                        </div>                                              
                        <div class="col-lg-2 col-md-6 col-sm-6 social-widget">
                            <div class="single-footer-widget">
                                <h6>Contactează-ne</h6>
                                <!-- <p>Let us be social</p> -->
                                <div class="footer-social d-flex align-items-center">
                                    <a href="https://web.facebook.com/ReRise.org"  target="_blank"><i class="fa fa-facebook"></i></a>
                                    <a href="http://rerise.org" target="_blank"><i class="fa fa-globe"></i></a>
                                    <a href="mailto:office@rerise.org"><i class="fa fa-envelope" target="_blank"></i></a>
                                    <a href="https://www.linkedin.com/company/re-rise---the-seismic-risk-reduction-organization/" target="_blank"><i class="fa fa-linkedin" ></i></a>
                                </div>
                            </div>
                        </div>                          
                        <div class="col-lg-4  col-md-6 col-sm-6">
                            <div class="single-footer-widget">
                                <h6>Newsletter</h6>
                                <!-- <p>Stay update with our latest</p> -->
                                <div class="" id="mc_embed_signup">
                                    <form target="_blank" novalidate="true" action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01" method="get" class="form-inline">
                                        <input class="form-control" name="EMAIL" placeholder="Enter Email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Email '" required="" type="email">
                                            <button class="click-btn btn btn-default"><span class="lnr lnr-arrow-right"></span></button>
                                            <div style="position: absolute; left: -5000px;">
                                                <input name="b_36c4fd991d266f23781ded980_aefe40901a" tabindex="-1" value="" type="text">
                                            </div>

                                        <div class="info"></div>
                                    </form>
                                </div>
                            </div>
                        </div>  
                        <p class="mt-50 mx-auto footer-text col-lg-12">
                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
 This project was initiated by <a href="http://rerise.org" target="_blank">ReRise</a> <br> Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        </p>

                    </div>
                </div>
            </footer>   


<script src="js/vendor/jquery-2.2.4.min.js"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
            <script src="js/vendor/bootstrap.min.js"></script>          
            <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBhOdIF3Y9382fqJYt5I_sswSrEw5eihAA"></script>
            <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>          
            <script src="js/easing.min.js"></script>            
            <script src="js/hoverIntent.js"></script>
            <script src="js/superfish.min.js"></script> 
            <script src="js/jquery.ajaxchimp.min.js"></script>
            <script src="js/jquery.magnific-popup.min.js"></script> 
            <script src="js/owl.carousel.min.js"></script>          
            <script src="js/jquery.sticky.js"></script>
            <script src="js/jquery.nice-select.min.js"></script>    
            <script src="js/waypoints.min.js"></script>
            <script src="js/jquery.counterup.min.js"></script>                  
            <script src="js/parallax.min.js"></script>      
            <script src="js/mail-script.js"></script>   
            <script src="js/welcome.js"></script>  
    </body>
</html>
