<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Ogani Template">
    <meta name="keywords" content="Ogani, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Azzul Coklat</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200;300;400;600;900&display=swap" rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="{{asset('assets/frontend/coklat/css/bootstrap.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('assets/frontend/coklat/css/font-awesome.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('assets/frontend/coklat/css/elegant-icons.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('assets/frontend/coklat/css/nice-select.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('assets/frontend/coklat/css/jquery-ui.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('assets/frontend/coklat/css/owl.carousel.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('assets/frontend/coklat/css/slicknav.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('assets/frontend/coklat/css/style.css')}}" type="text/css">
</head>

<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <!-- Humberger Begin -->
    <div class="humberger__menu__overlay"></div>
    <div class="humberger__menu__wrapper">
        <div class="humberger__menu__logo">
            <a href="#"><img src="{{asset('assets/frontend/coklat/img/logo.png')}}" alt=""></a>
        </div>
        <div class="humberger__menu__widget">
            <div class="header__top__right__language">
                <img src="{{asset('assets/frontend/coklat/img/language.png')}}" alt="">
                
                <span class="arrow_carrot-down"></span>
               
            </div>
            <div class="header__top__right__auth">
                <a href="#"><i class="fa fa-user"></i> Login</a>
            </div>
        </div>
        <nav class="humberger__menu__nav mobile-menu">
            <ul>
                <li class="active"><a href="/">Home</a></li>
                <li><a href="cara">Cara Belanja</a></li>
                <!-- <li><a href="cara">Shop</a></li> -->
                <!-- <li><a href="#">Pages</a>
                    <ul class="header__menu__dropdown">
                        <li><a href="./shop-details.html">Shop Details</a></li>
                        <li><a href="./shoping-cart.html">Shoping Cart</a></li>
                        <li><a href="./checkout.html">Check Out</a></li>
                        <li><a href="./blog-details.html">Blog Details</a></li>
                    </ul>
                </li> -->
                <li><a href="#">Update Harga</a>
                    <ul class="header__menu__dropdown">
                        <li><a href="promo">Harga Promo</a></li>
                        <li><a href="coklat">Harga Coklat</a></li>
                        <li><a href="snack">Harga Snack</a></li>
                        <li><a href="frozen">Harga Frozen Food</a></li>
                        <li><a href="jelly">Harga Jelly</a></li>
                        <li><a href="marsmallow">Harga Marsmallow</a></li>
                        <li><a href="baso">Harga Baso Aci</a></li>
                    </ul>
                </li>
                <li><a href="contact">Contact</a></li>
            </ul>
        </nav>
        <div id="mobile-menu-wrap"></div>
       
    </div>
    <!-- Humberger End -->

    <!-- Header Section Begin -->
    <header class="header">
        <div class="header__top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <div class="header__top__left">
                            <!-- <ul>
                                <li><i class="fa fa-envelope"></i> hello@colorlib.com</li>
                                <li>Free Shipping for all Order of $99</li>
                            </ul> -->
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="header__top__right">
                           
                            
                            <div class="header__top__right__auth">
                                <a href="#"><i class="fa fa-user"></i> Login</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="header__logo">
                        <a href="/"><img src="{{asset('assets/frontend/coklat/img/logo.png')}}" alt=""></a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <nav class="header__menu">
                        <ul>
                            <li class="active"><a href="/">Home</a></li>
                            <li><a href="cara">Cara Belanja</a></li>
                            <!-- <li><a href="cara">Shop</a></li> -->
                            <!-- <li><a href="#">Pages</a>
                                <ul class="header__menu__dropdown">
                                    <li><a href="./shop-details.html">Shop Details</a></li>
                                    <li><a href="./shoping-cart.html">Shoping Cart</a></li>
                                    <li><a href="./checkout.html">Check Out</a></li>
                                    <li><a href="./blog-details.html">Blog Details</a></li>
                                </ul>
                            </li> -->
                            <li><a href="#">Update Harga</a>
                                <ul class="header__menu__dropdown">
                                    <li><a href="promo">Harga Promo</a></li>
                                    <li><a href="coklat">Harga Coklat</a></li>
                                    <li><a href="snack">Harga Snack</a></li>
                                    <li><a href="frozen">Harga Frozen Food</a></li>
                                    <li><a href="jelly">Harga Jelly</a></li>
                                    <li><a href="marsmallow">Harga Marsmallow</a></li>
                                    <li><a href="baso">Harga Baso Aci</a></li>
                                </ul>
                            </li>
                            <li><a href="contact">Contact</a></li>
                        </ul>
                    </nav>
                </div>
               
            </div>
            <div class="humberger__open">
                <i class="fa fa-bars"></i>
            </div>
        </div>
    </header>
    <!-- Header Section End -->

    <!-- Featured Section Begin -->
    <section class="featured spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h2>Produk Promo</h2>
                    </div>
                    <div class="featured__controls">
                        <ul>
                            <li class="active" data-filter="*">All</li>
                            <li data-filter=".oranges">Pringless</li>
                            <!-- <li data-filter=".fresh-meat">Jetz Coklat</li>
                            <li data-filter=".vegetables">Jetz Hollow</li>
                            <li data-filter=".fastfood">Cheetos</li> -->
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row featured__filter">
                <div class="col-lg-3 col-md-4 col-sm-6 mix oranges fresh-meat">
                    <div class="featured__item">
                        <div class="featured__item__pic set-bg" data-setbg="{{asset('assets/frontend/coklat/img/featured/feature-1.jpg')}}">
                        </div>
                        <div class="featured__item__text">
                            <h6><a href="#">Crab Pool Security</a></h6>
                            <h5>$30.00</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 mix vegetables fastfood">
                    <div class="featured__item">
                        <div class="featured__item__pic set-bg" data-setbg="{{asset('assets/frontend/coklat/img/featured/feature-2.jpg')}}">
                        
                        </div>
                        <div class="featured__item__text">
                            <h6><a href="#">Crab Pool Security</a></h6>
                            <h5>$30.00</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 mix vegetables fresh-meat">
                    <div class="featured__item">
                        <div class="featured__item__pic set-bg" data-setbg="{{asset('assets/frontend/coklat/img/featured/feature-3.jpg')}}">
                     
                        </div>
                        <div class="featured__item__text">
                            <h6><a href="#">Crab Pool Security</a></h6>
                            <h5>$30.00</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 mix fastfood oranges">
                    <div class="featured__item">
                        <div class="featured__item__pic set-bg" data-setbg="{{asset('assets/frontend/coklat/img/featured/feature-4.jpg')}}">
                            
                        </div>
                        <div class="featured__item__text">
                            <h6><a href="#">Crab Pool Security</a></h6>
                            <h5>$30.00</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 mix fresh-meat vegetables">
                    <div class="featured__item">
                        <div class="featured__item__pic set-bg" data-setbg="{{asset('assets/frontend/coklat/img/featured/feature-5.jpg')}}">
                            
                        </div>
                        <div class="featured__item__text">
                            <h6><a href="#">Crab Pool Security</a></h6>
                            <h5>$30.00</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 mix oranges fastfood">
                    <div class="featured__item">
                        <div class="featured__item__pic set-bg" data-setbg="{{asset('assets/frontend/coklat/img/featured/feature-6.jpg')}}">
                           
                        </div>
                        <div class="featured__item__text">
                            <h6><a href="#">Crab Pool Security</a></h6>
                            <h5>$30.00</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 mix fresh-meat vegetables">
                    <div class="featured__item">
                        <div class="featured__item__pic set-bg" data-setbg="{{asset('assets/frontend/coklat/img/featured/feature-7.jpg')}}">
                           
                        </div>
                        <div class="featured__item__text">
                            <h6><a href="#">Crab Pool Security</a></h6>
                            <h5>$30.00</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 mix fastfood vegetables">
                    <div class="featured__item">
                        <div class="featured__item__pic set-bg" data-setbg="{{asset('assets/frontend/coklat/img/featured/feature-8.jpg')}}">
                        </div>
                        <div class="featured__item__text">
                            <h6><a href="#">Crab Pool Security</a></h6>
                            <h5>$30.00</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Featured Section End -->

    <!-- Js Plugins -->
    <script src="{{asset('assets/frontend/coklat/js/jquery-3.3.1.min.js')}}"></script>
    <script src="{{asset('assets/frontend/coklat/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('assets/frontend/coklat/js/jquery.nice-select.min.js')}}"></script>
    <script src="{{asset('assets/frontend/coklat/js/jquery-ui.min.js')}}"></script>
    <script src="{{asset('assets/frontend/coklat/js/jquery.slicknav.js')}}"></script>
    <script src="{{asset('assets/frontend/coklat/js/mixitup.min.js')}}"></script>
    <script src="{{asset('assets/frontend/coklat/js/owl.carousel.min.js')}}"></script>
    <script src="{{asset('assets/frontend/coklat/js/main.js')}}"></script>



</body>

</html>