<!doctype html>
<html lang="zxx">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>pillloMart</title>
    <link rel="icon" href="{{ url('public') }}/assets/img/favicon.png">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ url('public') }}/assets/css/bootstrap.min.css">
    <!-- animate CSS -->
    <link rel="stylesheet" href="{{ url('public') }}/assets/css/animate.css">
    <!-- owl carousel CSS -->
    <link rel="stylesheet" href="{{ url('public') }}/assets/css/owl.carousel.min.css">
    <!-- font awesome CSS -->
    <link rel="stylesheet" href="{{ url('public') }}/assets/css/all.css">
    <!-- flaticon CSS -->
    <link rel="stylesheet" href="{{ url('public') }}/assets/css/flaticon.css">
    <link rel="stylesheet" href="{{ url('public') }}/assets/css/themify-icons.css">
    <!-- font awesome CSS -->
    <link rel="stylesheet" href="{{ url('public') }}/assets/css/magnific-popup.css">
    <!-- swiper CSS -->
    <link rel="stylesheet" href="{{ url('public') }}/assets/css/slick.css">
    <!-- style CSS -->
    <link rel="stylesheet" href="{{ url('public') }}/assets/css/style.css">
</head>

<body>
    <!--::header part start::-->
    <header class="main_menu home_menu">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-lg-12">
                    <nav class="navbar navbar-expand-lg navbar-light">
                        <a class="navbar-brand" href="index.html"> <img src="{{ url('public') }}/assets/img/logo.png" alt="logo"> </a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse"
                            data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="Toggle navigation">
                            <span class="menu_icon"><i class="fas fa-bars"></i></span>
                        </button>

                        <div class="collapse navbar-collapse main-menu-item" id="navbarSupportedContent">
                            <ul class="navbar-nav">
                                <li class="nav-item">
                                    <a class="nav-link" href="{{url(' /')}}">Home</a>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="blog.html" id="navbarDropdown_1"
                                        role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        product
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdown_1">
                                        <a class="dropdown-item" href="{{url('produk_1')}}"> Bantal Printing</a>
                                        <a class="dropdown-item" href="{{url('produk_2')}}"> Bantal rasfur</a>
                                        
                                    </div>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="blog.html" id="navbarDropdown_3"
                                        role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        pages
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdown_2">
                                        <a class="dropdown-item" href="{{url('login')}}"> 
                                            login
                                            
                                        </a>
                                        <a class="dropdown-item" href="{{url('checkout')}}">Checkout</a>
                                    </div>
                                </li>
                                
                                <li class="nav-item">
                                    <a class="nav-link" href="{{url('/contact')}}">Contact</a>
                                </li>
                            </ul>
                        </div>
                        <div class="hearer_icon d-flex align-items-center">
                            <a id="search_1" href="javascript:void(0)"><i class="ti-search"></i></a>
                            <a href="cart.html">
                                <i class="flaticon-shopping-cart-black-shape"></i>
                            </a>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
        <div class="search_input" id="search_input_box">
            <div class="container ">
                <form class="d-flex justify-content-between search-inner">
                    <input type="text" class="form-control" id="search_input" placeholder="Search Here">
                    <button type="submit" class="btn"></button>
                    <span class="ti-close" id="close_search" title="Close Search"></span>
                </form>
            </div>
        </div>
    </header>
    <!-- Header part end-->

    <!-- banner part start-->
    <section class="banner_part">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-5">
                    <div class="banner_text">
                        <div class="banner_text_iner">
                            <h1>Best quality
                                pillow</h1>
                            <p>Produk berkualitas 
                                dengan harga yang terjangkau</p>
                            <a href="{{url('produk_1')}}" class="btn_1">shop now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="banner_img">
            <img src="{{ url('public') }}/assets/img/banner.png" alt="#" class="img-fluid">
            <img src="{{ url('public') }}/assets/img/banner_pattern.png " alt="#" class="pattern_img img-fluid">
        </div>
    </section>
    <!-- banner part start-->

    <!-- product list start-->
    <section class="single_product_list">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="single_product_iner">
                        <div class="row align-items-center justify-content-between">
                            <div class="col-lg-6 col-sm-6">
                                <div class="single_product_img">
                                    <img src="{{ url('public') }}/assets/img/single_product_1.png" class="img-fluid" alt="#">
                                    <img src="{{ url('public') }}/assets/img/product_overlay.png" alt="#" class="product_overlay img-fluid">
                                </div>
                            </div>
                            <div class="col-lg-5 col-sm-6">
                                <div class="single_product_content">
                                    <h5>Harga mulai dari 50k</h5>
                                    <h2> <a href="single-product.html">Model simpel dan sangat elegant</a> </h2>
                                    <a href="{{url('produk_1')}}" class="btn_3">Explore Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="single_product_iner">
                        <div class="row align-items-center justify-content-between">
                            <div class="col-lg-6 col-sm-6">
                                <div class="single_product_img">
                                    <img src="{{ url('public') }}/assets/img/single_product_2.png" class="img-fluid" alt="#">
                                    <img src="{{ url('public') }}/assets/img/product_overlay.png" alt="#" class="product_overlay img-fluid">
                                </div>
                            </div>
                            <div class="col-lg-5 col-sm-6">
                                <div class="single_product_content">
                                    <h5>Mulai dari 100k</h5>
                                    <h2> <a href="single-product.html">Dibuat dengan bahan pilihan sehingga kuliatas yang tidak perlu diragukan lagi</a> </h2>
                                    <a href="{{url('produk_1')}}" class="btn_3">Explore Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="single_product_iner">
                        <div class="row align-items-center justify-content-between">
                            <div class="col-lg-6 col-sm-6">
                                <div class="single_product_img">
                                    <img src="{{ url('public') }}/assets/img/single_product_3.png" class="img-fluid" alt="#">
                                    <img src="{{ url('public') }}/assets/img/product_overlay.png" alt="#" class="product_overlay img-fluid">
                                </div>
                            </div>
                            <div class="col-lg-5 col-sm-6">
                                <div class="single_product_content">
                                    <h5>Harga tertinggi di 200k</h5>
                                    <h2> <a href="single-product.html">Kami pastikan anda akan jatuh cinta pada produk kami</a> </h2>
                                    <a href="{{url('produk_1')}}" class="btn_3">Explore Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- product list end-->


    <!-- trending item start-->
    <section class="trending_items">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section_tittle text-center">
                        <h2>Best Seller</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-sm-6">
                    <div class="single_product_item">
                        <div class="single_product_item_thumb">
                            <img src="{{ url('public') }}/assets/img/tranding_item/tranding_item_1.png" alt="#" class="img-fluid">
                        </div>
                        <h3> <a href="{{url('produk_1')}}">Cervical pillow for airplane
                        car office nap pillow</a> </h3>
                        <p>Harga 100k</p>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="single_product_item">
                        <img src="{{ url('public') }}/assets/img/tranding_item/tranding_item_2.png" alt="#" class="img-fluid">
                        <h3> <a href="{{url('produk_1')}}">Foam filling cotton slow rebound pillows</a> </h3>
                        <p>Harga 80k</p>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="single_product_item">
                        <img src="{{ url('public') }}/assets/img/tranding_item/tranding_item_3.png" alt="#" class="img-fluid">
                        <h3> <a href="{{url('produk_1')}}">Memory foam filling cotton Slow rebound pillows</a> </h3>
                        <p>Harga 50k</p>
                    </div>
                </div>
                
                </div>
            </div>
        </div>
    </section>
    <!-- trending item end-->

    <!-- client review part here -->
    <section class="client_review">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="client_review_slider owl-carousel">
                        <div class="single_client_review">
                            <div class="client_img">
                                <img src="{{ url('public') }}/assets/img/client.png" alt="#">
                            </div>
                            <p>"Working in conjunction with humanitarian aid agencies, we have supported programmes to help alleviate human suffering.</p>
                            <h5>- Micky Mouse</h5>
                        </div>
                        <div class="single_client_review">
                            <div class="client_img">
                                <img src="{{ url('public') }}/assets/img/client_1.png" alt="#">
                            </div>
                            <p>"Working in conjunction with humanitarian aid agencies, we have supported programmes to help alleviate human suffering.</p>
                            <h5>- Micky Mouse</h5>
                        </div>
                        <div class="single_client_review">
                            <div class="client_img">
                                <img src="{{ url('public') }}/assets/img/client_2.png" alt="#">
                            </div>
                            <p>"Working in conjunction with humanitarian aid agencies, we have supported programmes to help alleviate human suffering.</p>
                            <h5>- Micky Mouse</h5>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- client review part end -->


    <!-- feature part here -->
    <section class="feature_part section_padding">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-lg-6">
                    <div class="feature_part_tittle">
                        <h3>Credibly innovate granular
                        internal or organic sources
                        whereas standards.</h3>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="feature_part_content">
                        <p>Seamlessly empower fully researched growth strategies and interoperable internal or “organic” sources. Credibly innovate granular internal or “organic” sources whereas high standards in web-readiness.</p>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-3 col-sm-6">
                    <div class="single_feature_part">
                        <img src="{{ url('public') }}/assets/img/icon/feature_icon_1.svg" alt="#">
                        <h4>Kartu Kredit</h4>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="single_feature_part">
                        <img src="{{ url('public') }}/assets/img/icon/feature_icon_2.svg" alt="#">
                        <h4>Pesan Online</h4>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="single_feature_part">
                        <img src="{{ url('public') }}/assets/img/icon/feature_icon_3.svg" alt="#">
                        <h4>Gratis Ongkir</h4>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="single_feature_part">
                        <img src="{{ url('public') }}/assets/img/icon/feature_icon_4.svg" alt="#">
                        <h4>Hadiah Produk</h4>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- feature part end -->

    <!-- subscribe part here -->
    <section class="subscribe_part section_padding">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="subscribe_part_content">
                        <h2>Dapatkan promosi & pembaruan!</h2>
                        <h2>Dari Toko Kami</h2>
                        <div class="subscribe_form">
                            <input type="email" placeholder="Masukan Email Annda">
                            <a href="#" class="btn_1">Subscribe</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- subscribe part end -->

    <!--::footer_part start::-->
    <footer class="footer_part">
        <div class="footer_iner">
            <div class="container">
                <div class="row justify-content-between align-items-center">
                    <div class="col-lg-8">
                        <div class="footer_menu">
                            <div class="footer_logo">
                                <a href="index.html"><img src="{{ url('public') }}/assets/img/logo.png" alt="#"></a>
                            </div>
                           
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="social_icon">
                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                            <a href="#"><i class="fab fa-instagram"></i></a>
                            <a href="#"><i class="fab fa-google-plus-g"></i></a>
                            <a href="#"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="copyright_part">
            <div class="container">
                <div class="row ">
                    <div class="col-lg-12">
                        <div class="copyright_text">
                            <P><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="ti-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></P>
                            <div class="copyright_link">
                                <a href="#">Turms & Conditions</a>
                                <a href="#">FAQ</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!--::footer_part end::-->

    <!-- jquery plugins here-->
    <script src="{{ url('public') }}/assets/js/jquery-1.12.1.min.js"></script>
    <!-- popper js -->
    <script src="{{ url('public') }}/assets/js/popper.min.js"></script>
    <!-- bootstrap js -->
    <script src="{{ url('public') }}/assets/js/bootstrap.min.js"></script>
    <!-- magnific popup js -->
    <script src="{{ url('public') }}/assets/js/jquery.magnific-popup.js"></script>
    <!-- carousel js -->
    <script src="{{ url('public') }}/assets/js/owl.carousel.min.js"></script>
    <script src="{{ url('public') }}/assets/js/jquery.nice-select.min.js"></script>
    <!-- slick js -->
    <script src="{{ url('public') }}/assets/js/slick.min.js"></script>
    <script src="{{ url('public') }}/assets/js/jquery.counterup.min.js"></script>
    <script src="{{ url('public') }}/assets/js/waypoints.min.js"></script>
    <script src="{{ url('public') }}/assets/js/contact.js"></script>
    <script src="{{ url('public') }}/assets/js/jquery.ajaxchimp.min.js"></script>
    <script src="{{ url('public') }}/assets/js/jquery.form.js"></script>
    <script src="{{ url('public') }}/assets/js/jquery.validate.min.js"></script>
    <script src="{{ url('public') }}/assets/js/mail-script.js"></script>
    <!-- custom js -->
    <script src="{{ url('public') }}/assets/js/custom.js"></script>
</body>

</html>