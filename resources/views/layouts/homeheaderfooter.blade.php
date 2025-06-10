<!DOCTYPE html>
<html>

<!-- Mirrored from html.themexriver.com/bloxic/index-3.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 17 Apr 2025 06:42:09 GMT -->

<head>
    <meta charset="utf-8">
    <title>Bloxic Furniture Business HTML-5 Template | Homepage 03</title>
    <!-- Stylesheets -->
    <link href="{{ asset('frontend/css/bootstrap.css') }}" rel="stylesheet">
    <link href="{{ asset('frontend/css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('frontend/css/responsive.css') }}" rel="stylesheet">


    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;500;600;700;800;900&amp;display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Jost:wght@300;400;500;600;700;800;900&amp;display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@300;400;500;600;700&amp;display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&amp;display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&amp;display=swap"
        rel="stylesheet">

    <link rel="shortcut icon" href="frontend/images/favicon.png" type="image/x-icon">
    <link rel="icon" href="frontend/images/favicon.png" type="image/x-icon">

    <!-- Responsive -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

</head>

<body>

    <div class="page-wrapper">

        <!-- Preloader -->
        <div class="loader-wrap">
            <div class="preloader">
                <div class="preloader-close">x</div>
                <div id="handle-preloader" class="handle-preloader">
                    <div class="animation-preloader">
                        <div class="spinner"></div>
                        <div class="txt-loading">
                            <span data-text-preloader="K" class="letters-loading">
                                K
                            </span>
                            <span data-text-preloader="I" class="letters-loading">
                                I
                            </span>
                            <span data-text-preloader="N" class="letters-loading">
                                N
                            </span>
                            <span data-text-preloader="G" class="letters-loading">
                                G
                            </span>
                            <span data-text-preloader="L" class="letters-loading">
                                L
                            </span>
                            <span data-text-preloader="E" class="letters-loading">
                                E
                            </span>
                            <span data-text-preloader="T" class="letters-loading">
                                T
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Preloader End -->

        <!-- Main Header / Header Style Three -->
        <header class="main-header header-style-three">

            <!-- Header Upper -->
            <div class="header-upper">
                <div class="auto-container">
                    <div class="inner-container d-flex justify-content-between align-items-center flex-wrap">

                        <!-- Logo Box -->
                        <div class="logo-box d-flex align-items-center">
                            <div class="nav-toggle-btn a-nav-toggle navSidebar-button">
                                <span class="hamburger">
                                    <span class="top-bun"></span>
                                    <span class="meat"></span>
                                    <span class="bottom-bun"></span>
                                </span>
                            </div>
                            <!-- Logo -->
                            <div class="logo"><a href="index.html"><img src="frontend/images/logo.png" alt=""
                                        title=""></a></div>
                        </div>

                        <!-- Search Box -->
                        <!-- <div class="search-box">
                            <form method="post" action="https://html.themexriver.com/bloxic/contact.html">
                                <div class="form-group">
                                    <select name="currency" class="">
                                        <option>Search For Product</option>

                                    </select>
                                    <input type="search" name="search-field" value="" placeholder="Search Product"
                                        required>
                                    <button type="submit"><span class="icon fa fa-search"></span></button>
                                </div>
                            </form>
                        </div> -->

                        <div class="search-box">
                            <div class="color-layer"></div>
                            <button class="close-search"><span class=""></span></button>
                            <form method="GET" action="{{ route('shop.search') }}">
                                <div class="form-group">
                                    <input type="search" name="query" value="{{ request('query') }}"
                                        placeholder="Search Here" required>
                                    <button type="submit"><i class="fa fa-search"></i></button>
                                </div>
                            </form>
                        </div>

                        <!-- Options Box -->
                        <div class="options-box d-flex align-items-center">

                            <!-- Search Box -->
                            

                            <!-- User Box -->
                            <a class="user-box flaticon-user-3" href="{{ route('contact') }}"></a>

                            <!-- Like Box -->
                            <div class="like-box">
                                <a class="user-box flaticon-heart" href="contact.html"></a>
                                <span class="total-like">0</span>
                            </div>

                            <!-- Cart Box -->
                            <div class="cart-box-two">
                                <a class="flaticon-shopping-bag" href="shop.html"></a>
                                <span class="total-like">0</span>
                            </div>

                        </div>

                    </div>
                </div>
            </div>
            <!-- End Header Lower -->

            <!-- Header Lower -->
            <div class="header-lower">
                <div class="auto-container">
                    <div class="nav-outer d-flex justify-content-between align-items-center flex-wrap">

                        <!-- Select Categories -->
                        <div class="select-categories">
                            <div class="category">
                                <span class="icon flaticon-menu-3"></span> Select categories
                                <span class="arrow flaticon-down-arrow"></span>
                            </div>
                            <ul class="categories-list">
                                @foreach ($categories as $category)
                                    <li
                                        class="{{ $loop->first ? 'active' : '' }} {{ $category->products->count() ? 'dropdown' : '' }}">
                                        <a href="{{ route('shop.category', $category->id) }}">
                                            <span class="icon">
                                                @if ($category->icon)
                                                    <img src="{{ asset($category->icon) }}" alt="{{ $category->name }}"
                                                        style="width: 25px; height: 25px;">
                                                @else
                                                    <i class="flaticon-box"></i>
                                                @endif
                                            </span>
                                            {{ $category->name }}
                                        </a>

                                        @if ($category->products->count())
                                            <ul>
                                                @foreach ($category->products->take(5) as $product)
                                                    <li>
                                                        <a href="{{ route('shop.detail', $product->id) }}">
                                                            {{ Str::limit($product->title, 20) }}
                                                        </a>
                                                    </li>
                                                @endforeach
                                                <li><a href="{{ route('shop.category', $category->id) }}">View All</a></li>
                                            </ul>
                                        @endif
                                    </li>
                                @endforeach
                            </ul>
                        </div>

                        <!-- End Select Categories -->

                        <!-- Main Menu -->
                        <nav class="main-menu show navbar-expand-md">
                            <div class="navbar-header">
                                <button class="navbar-toggler" type="button" data-toggle="collapse"
                                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                                    aria-expanded="false" aria-label="Toggle navigation">
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>
                            </div>

                            <div class="navbar-collapse collapse clearfix" id="navbarSupportedContent">
                                <ul class="navigation clearfix">
                                    <li class=""><a href="{{ route('home') }}">Home</a>

                                    </li>
                                    <li><a href="{{ route('about.index') }}">About</a></li>
                                    <li class="dropdown"><a href="{{ route('shop.index') }}">Shop</a>
                                        <ul>
                                            <li><a href="{{ route('shop.index') }}">Our Products</a></li>
                                            <li><a href="{{ route('cart.view') }}">Shoping Cart</a></li>
                                            <li><a href="{{ route('checkout') }}">CheckOut</a></li>
                                            <li><a href="#">Register</a></li>
                                        </ul>
                                    </li>
                                    <li class=""><a href="#">Blog</a>

                                    </li>
                                    <li><a href="{{ route('contact') }}">Contact us</a></li>
                                </ul>
                            </div>

                        </nav>
                        <!-- Main Menu End-->

                        <!-- Outer Box -->
                        <div class="outer-box d-flex justify-content-between align-items-center">
                            <!-- Social Box -->
                            <ul class="social-box">
                                <li><a href="https://www.facebook.com/" class="fa fa-facebook-f"></a></li>
                                <li><a href="https://www.twitter.com/" class="fa fa-twitter"></a></li>
                                <li><a href="https://dribbble.com/" class="fa fa-dribbble"></a></li>
                                <li><a href="https://www.linkedin.com/" class="fa fa-linkedin"></a></li>
                            </ul>

                            <div class="language dropdown">
                                <button class="btn dropdown-toggle" type="button" id="dropdownMenu"
                                    data-bs-toggle="dropdown" aria-expanded="false"><span class="flag"><img
                                            src="frontend/images/icons/usa-flag.png" alt="" /></span>English &nbsp;<span
                                        class="fa fa-angle-down"></span></button>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenu">
                                    <li><a href="#">English</a></li>
                                    <li><a href="#">German</a></li>
                                    <li><a href="#">Arabic</a></li>
                                    <li><a href="#">Hindi</a></li>
                                </div>
                            </div>

                            <!-- Mobile Navigation Toggler -->
                            <div class="mobile-nav-toggler"><span class="icon flaticon-menu"></span></div>

                        </div>
                        <!-- End Outer Box -->

                    </div>
                </div>
            </div>

            <!-- Sticky Header  -->
            <div class="sticky-header">
                <div class="auto-container">
                    <div class="d-flex justify-content-between align-items-center">
                        <!-- Logo -->
                        <div class="logo">
                            <a href="index.html" title=""><img src="frontend/images/logo-small.png" alt="" title=""></a>
                        </div>

                        <!-- Right Col -->
                        <div class="right-box">
                            <!-- Main Menu -->
                            <nav class="main-menu">
                                <!--Keep This Empty / Menu will come through Javascript-->
                            </nav>
                            <!-- Main Menu End-->

                            <!-- Mobile Navigation Toggler -->
                            <div class="mobile-nav-toggler"><span class="icon flaticon-menu"></span></div>
                        </div>

                    </div>
                </div>
            </div>
            <!-- End Sticky Menu -->

            <!-- Mobile Menu  -->
            <div class="mobile-menu">
                <div class="menu-backdrop"></div>
                <div class="close-btn"><span class="icon flaticon-multiply"></span></div>
                <nav class="menu-box">
                    <div class="nav-logo"><a href="index.html"><img src="frontend/images/mobile-logo.png" alt=""
                                title=""></a></div>
                    <!-- Search -->
                    <div class="search-box">
                        <form method="post" action="https://html.themexriver.com/bloxic/contact.html">
                            <div class="form-group">
                                <input type="search" name="search-field" value="" placeholder="SEARCH HERE" required>
                                <button type="submit"><span class="icon flaticon-search-1"></span></button>
                            </div>
                        </form>
                    </div>
                    <div class="menu-outer">
                        <!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header-->
                    </div>
                </nav>
            </div>
            <!-- End Mobile Menu -->

        </header>


        <!-- End Main Header -->

        <!-- Sidebar Cart Item -->


        <main>
            @yield('content')
        </main>

        <!-- Main Footer / Style Two -->
        <footer class="main-footer style-three">
            <div class="auto-container">

                <!-- Widgets Section -->
                <div class="widgets-section">
                    <div class="row clearfix">
                        <!-- Column -->
                        <div class="big-column col-lg-7 col-md-12 col-sm-12">
                            <div class="row clearfix">

                                <!-- Footer Column -->
                                <div class="footer-column col-lg-7 col-md-6 col-sm-12">
                                    <div class="footer-widget links-widget">
                                        <!-- Logo -->
                                        <div class="logo"><a href="index.html"><img src="frontend/images/logo.png"
                                                    alt="" title=""></a></div>
                                        <div class="text">4517 Washington Ave. Manchester, Kentucky 39495 ashington Ave.
                                            Manchester, </div>
                                        <ul class="contact-list">
                                            <li><span class="icon flaticon-map"></span>254 Lillian Blvd, Holbrook</li>
                                            <li><span class="icon flaticon-call"></span>1-800-654-3210</li>
                                        </ul>
                                        <div class="apps-btn">
                                            <a href="#"><img src="frontend/images/icons/playstore.png" alt="" /></a>
                                            <a href="#"><img src="frontend/images/icons/appstore.png" alt="" /></a>
                                        </div>
                                    </div>
                                </div>

                                <!-- Footer Column -->
                                <div class="footer-column col-lg-5 col-md-6 col-sm-12">
                                    <div class="footer-widget links-widget">
                                        <h5>Find It Fast</h5>
                                        <ul class="page-list">
                                            <li><a href="#">Laptops & Computers</a></li>
                                            <li><a href="#">Cameras & Photography</a></li>
                                            <li><a href="#">Smart Phones & Tablets</a></li>
                                            <li><a href="#">Video Games & Consoles</a></li>
                                            <li><a href="#">TV & Audio</a></li>
                                        </ul>
                                    </div>
                                </div>

                            </div>
                        </div>

                        <!-- Column -->
                        <div class="big-column col-lg-5 col-md-12 col-sm-12">
                            <div class="row clearfix">

                                <!-- Footer Column -->
                                <div class="footer-column col-lg-7 col-md-6 col-sm-12">
                                    <div class="footer-widget links-widget">
                                        <h5>Quick Links</h5>
                                        <ul class="page-list">
                                            <li><a href="#">Your Account</a></li>
                                            <li><a href="#">Returns & Exchanges</a></li>
                                            <li><a href="#">Return Center</a></li>
                                            <li><a href="#">Purchase Hisotry</a></li>
                                            <li><a href="#">App Download</a></li>
                                        </ul>
                                    </div>
                                </div>

                                <!-- Footer Column -->
                                <div class="footer-column col-lg-5 col-md-6 col-sm-12">
                                    <div class="footer-widget instagram-widget">
                                        <h5>Service us</h5>
                                        <ul class="page-list-two">
                                            <li><a href="#">Support Center</a></li>
                                            <li><a href="#">Term & Conditions</a></li>
                                            <li><a href="#">Shipping</a></li>
                                            <li><a href="#">Privacy Policy</a></li>
                                            <li><a href="#">Help</a></li>
                                        </ul>
                                    </div>
                                </div>

                            </div>
                        </div>

                    </div>
                </div>

                <!-- Footer Bottom -->
                <div class="footer-bottom">
                    <div class="d-flex justify-content-between align-items-center flex-wrap">
                        <div class="copyright"><span>&copy; 2022</span> Powered by Theme. All Rights Reserved.</div>
                        <div class="email-box">
                            <a href="mailto:DumTheme@gmail.com"><span
                                    class="icon flaticon-mail"></span>DumTheme@gmail.com</a>
                        </div>
                        <div class="cards"><img src="frontend/images/icons/cards.png" alt="" /></div>
                    </div>
                </div>

            </div>
        </footer>
        <!-- End Main Footer -->

    </div>
    <!-- End PageWrapper -->

    <!-- Search Popup -->
    <div class="search-popup">
        <div class="color-layer"></div>
        <button class="close-search"><span class="fa fa-arrow-up"></span></button>
        <form method="post" action="https://html.themexriver.com/bloxic/blog.html">
            <div class="form-group">
                <input type="search" name="search-field" value="" placeholder="Search Here" required="">
                <button type="submit"><i class="fa fa-search"></i></button>
            </div>
        </form>
    </div>
    <!-- End Search Popup -->

    <!-- Scroll To Top -->
    <div class="scroll-to-top scroll-to-target" data-target="html"><span class="fa fa-arrow-up"></span></div>
    <!-- End Scroll To Top -->

    <script src="{{ asset('frontend/js/jquery.js') }}"></script>
    <script src="{{ asset('frontend/js/popper.min.js') }}"></script>
    <script src="{{ asset('frontend/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('frontend/js/magnific-popup.min.js') }}"></script>
    <script src="{{ asset('frontend/js/jquery.mCustomScrollbar.concat.min.js') }}"></script>
    <script src="{{ asset('frontend/js/appear.js') }}"></script>
    <script src="{{ asset('frontend/js/parallax.min.js') }}"></script>
    <script src="{{ asset('frontend/js/tilt.jquery.min.js') }}"></script>
    <script src="{{ asset('frontend/js/jquery.paroller.min.js') }}"></script>
    <script src="{{ asset('frontend/js/owl.js') }}"></script>
    <script src="{{ asset('frontend/js/wow.js') }}"></script>
    <script src="{{ asset('frontend/js/mixitup.js') }}"></script>
    <script src="{{ asset('frontend/js/touchspin.js') }}"></script>
    <script src="{{ asset('frontend/js/odometer.js') }}"></script>
    <script src="{{ asset('frontend/js/backToTop.js') }}"></script>
    <script src="{{ asset('frontend/js/jquery.countdown.js') }}"></script>
    <script src="{{ asset('frontend/js/jquery.marquee.min.js') }}"></script>
    <script src="{{ asset('frontend/js/nav-tool.js') }}"></script>
    <script src="{{ asset('frontend/js/jquery-ui.js') }}"></script>
    <script src="{{ asset('frontend/js/script.js') }}"></script>


    <!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script><![endif]-->
    <!--[if lt IE 9]><script src="frontend/js/respond.js"></script><![endif]-->

</body>

<!-- Mirrored from html.themexriver.com/bloxic/index-3.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 17 Apr 2025 06:42:19 GMT -->

</html>