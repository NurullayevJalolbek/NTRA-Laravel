<!DOCTYPE html>
<html lang="en" class="dark scroll-smooth" dir="ltr">
<head>
    <meta charset="UTF-8" />
    <title>Hously - Tailwind CSS Real Estate Landing & Admin Dashboard Template</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta content="Real Estate Website Landing Page" name="description" />
    <meta content="Real Estate, buy, sell, Rent, tailwind Css" name="keywords" />
    <meta name="author" content="Shreethemes" />
    <meta name="website" content="https://shreethemes.in" />
    <meta name="email" content="support@shreethemes.in" />
    <meta name="version" content="2.2.0" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <!-- favicon -->
    <link rel="shortcut icon" href="../assets/images/favicon.ico" />

    <!-- Css -->
    <link href="/assets/libs/tiny-slider/tiny-slider.css" rel="stylesheet">
    <link href="/assets/libs/tobii/css/tobii.min.css" rel="stylesheet">
    <link href="/assets/libs/choices.js/public/assets/styles/choices.min.css" rel="stylesheet">
    <link href="/assets/libs/swiper/css/swiper.min.css" rel="stylesheet">
    <!-- Main Css -->
    <link href="/assets/libs/@iconscout/unicons/css/line.css" type="text/css" rel="stylesheet" />
    <link href="/assets/libs/@mdi/font/css/materialdesignicons.min.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="/assets/css/tailwind.css" />

</head>

<body class="dark:bg-slate-900">

<!-- NAVBAR -->
<nav id="topnav" class="defaultscroll is-sticky">
    <div class="container relative">
        <!-- Start Logo container-->
        <a class="logo" href="index.html">
                    <span class="inline-block dark:hidden">
                        <img src="assets/images/logo-dark.png" class="l-dark" height="24" alt="">
                        <img src="assets/images/logo-light.png" class="l-light" height="24" alt="">
                    </span>
            <img src="assets/images/logo-light.png" height="24" class="hidden dark:inline-block" alt="">
        </a>
        <!-- End Logo container-->

        <!-- Start Mobile Toggle -->
        <div class="menu-extras">
            <div class="menu-item">
                <a class="navbar-toggle" id="isToggle" onclick="toggleMenu()">
                    <div class="lines">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                </a>
            </div>
        </div>
        <!-- End Mobile Toggle -->

        <!--Login button Start-->
        <ul class="buy-button list-none mb-0">
            <li class="inline mb-0">
                <a href="/logout" class="text-danger d-flex align-items-center text-decoration-none">
                    <i class="bi bi-box-arrow-right me-2"></i> Log out
                </a>
            </li>
            <a href="/login"
               class="btn btn-icon bg-green-600 hover:bg-green-700 border-green-600 dark:border-green-600 text-white rounded-full"><i
                    data-feather="user" class="size-4 stroke-[3]"></i>
            </a>
            <li class="sm:inline ps-1 mb-0 hidden">
                <a href="/register" class="btn bg-green-600 hover:bg-green-700 border-green-600 dark:border-green-600 text-white rounded-full">Signup</a>
            </li>

        </ul>
        <!--Login button End-->

        <div id="navigation">
            <!-- Navigation Menu-->
            <ul class="navigation-menu justify-end nav-light">
                <li class="has-submenu parent-parent-menu-item">
                    <a href="javascript:void(0)">Home</a><span class="menu-arrow"></span>

                    <ul class="submenu megamenu">
                        <li>
                            <ul>
                                <li>
                                    <a href="index.html" class="sub-menu-item">
                                        <div class="lg:text-center">
                                            <span class="none lg:block"><img src="assets/images/demos/hero-one.png"
                                                                             class="img-fluid rounded shadow-md" alt=""></span>
                                            <span class="lg:mt-2 block">Hero One</span>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="index-two.html" class="sub-menu-item">
                                        <div class="lg:text-center">
                                            <span class="none lg:block"><img src="assets/images/demos/hero-two.png"
                                                                             class="img-fluid rounded shadow-md" alt=""></span>
                                            <span class="lg:mt-2 block">Hero Two</span>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </li>

                        <li>
                            <ul>
                                <li>
                                    <a href="index-three.html" class="sub-menu-item">
                                        <div class="lg:text-center">
                                            <span class="none lg:block"><img src="assets/images/demos/hero-three.png"
                                                                             class="img-fluid rounded shadow-md" alt=""></span>
                                            <span class="lg:mt-2 block">Hero Three</span>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="index-four.html" class="sub-menu-item">
                                        <div class="lg:text-center">
                                            <span class="none lg:block"><img src="assets/images/demos/hero-four.png"
                                                                             class="img-fluid rounded shadow-md" alt=""></span>
                                            <span class="lg:mt-2 block">Hero Four</span>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </li>

                        <li>
                            <ul>
                                <li>
                                    <a href="index-five.html" class="sub-menu-item">
                                        <div class="lg:text-center">
                                            <span class="none lg:block"><img src="assets/images/demos/hero-five.png"
                                                                             class="img-fluid rounded shadow-md" alt=""></span>
                                            <span class="lg:mt-2 block">Hero Five</span>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="index-six.html" class="sub-menu-item">
                                        <div class="lg:text-center">
                                            <span class="none lg:block"><img src="assets/images/demos/hero-six.png"
                                                                             class="img-fluid rounded shadow-md" alt=""></span>
                                            <span class="lg:mt-2 block">Hero Six</span>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </li>

                        <li>
                            <ul>
                                <li>
                                    <a href="index-seven.html" class="sub-menu-item">
                                        <div class="lg:text-center">
                                            <span class="none lg:block"><img src="assets/images/demos/hero-seven.png"
                                                                             class="img-fluid rounded shadow-md" alt=""></span>
                                            <span class="lg:mt-2 block">Hero Seven</span>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="index-eight.html" class="sub-menu-item">
                                        <div class="lg:text-center">
                                            <span class="none lg:block"><img src="assets/images/demos/hero-eight.png"
                                                                             class="img-fluid rounded shadow-md" alt=""></span>
                                            <span class="lg:mt-2 block">Hero Eight</span>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </li>

                        <li>
                            <ul>
                                <li>
                                    <a href="index-nine.html" class="sub-menu-item">
                                        <div class="lg:text-center">
                                            <span class="none lg:block"><img src="assets/images/demos/hero-nine.png"
                                                                             class="img-fluid rounded shadow-md" alt=""></span>
                                            <span class="lg:mt-2 block">Hero Nine <span
                                                    class="bg-yellow-500 inline-block text-white text-[10px] font-bold px-2.5 py-0.5 rounded h-5 ms-1">New</span></span>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>

                <li><a href="buy.html" class="sub-menu-item">Buy</a></li>

                <li><a href="sell.html" class="sub-menu-item">Sell</a></li>

                <li class="has-submenu parent-parent-menu-item">
                    <a href="javascript:void(0)">Listing</a><span class="menu-arrow"></span>
                    <ul class="submenu">
                        <li class="has-submenu parent-menu-item"><a href="javascript:void(0)"> Grid View </a><span
                                class="submenu-arrow"></span>
                            <ul class="submenu">
                                <li><a href="grid.html" class="sub-menu-item">Grid Listing</a></li>
                                <li><a href="grid-sidebar.html" class="sub-menu-item">Grid Sidebar </a></li>
                                <li><a href="grid-map.html" class="sub-menu-item">Grid With Map</a></li>
                            </ul>
                        </li>
                        <li class="has-submenu parent-menu-item"><a href="javascript:void(0)"> List View </a><span
                                class="submenu-arrow"></span>
                            <ul class="submenu">
                                <li><a href="list.html" class="sub-menu-item">List Listing</a></li>
                                <li><a href="list-sidebar.html" class="sub-menu-item">List Sidebar </a></li>
                                <li><a href="list-map.html" class="sub-menu-item">List With Map</a></li>
                            </ul>
                        </li>
                        <li class="has-submenu parent-menu-item"><a href="javascript:void(0)"> Property Detail</a><span
                                class="submenu-arrow"></span>
                            <ul class="submenu">
                                <li><a href="property-detail.html" class="sub-menu-item">Property Detail</a></li>
                                <li><a href="property-detail-two.html" class="sub-menu-item">Property Detail Two</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>

                <li class="has-submenu parent-parent-menu-item">
                    <a href="javascript:void(0)">Pages</a><span class="menu-arrow"></span>
                    <ul class="submenu">
                        <li><a href="aboutus.html" class="sub-menu-item">About Us</a></li>
                        <li><a href="features.html" class="sub-menu-item">Featues</a></li>
                        <li><a href="pricing.html" class="sub-menu-item">Pricing</a></li>
                        <li><a href="faqs.html" class="sub-menu-item">Faqs</a></li>
                        <li class="has-submenu parent-menu-item"><a href="javascript:void(0)"> Agents</a><span
                                class="submenu-arrow"></span>
                            <ul class="submenu">
                                <li><a href="agents.html" class="sub-menu-item">Agents</a></li>
                                <li><a href="agent-profile.html" class="sub-menu-item">Agent Profile</a></li>
                            </ul>
                        </li>
                        <li class="has-submenu parent-menu-item"><a href="javascript:void(0)"> Agencies</a><span
                                class="submenu-arrow"></span>
                            <ul class="submenu">
                                <li><a href="agencies.html" class="sub-menu-item">Agencies</a></li>
                                <li><a href="agency-profile.html" class="sub-menu-item">Agency Profile</a></li>
                            </ul>
                        </li>
                        <li class="has-submenu parent-menu-item"><a href="javascript:void(0)"> Auth Pages </a><span
                                class="submenu-arrow"></span>
                            <ul class="submenu">
                                <li><a href="auth-login.html" class="sub-menu-item">Login</a></li>
                                <li><a href="auth-signup.html" class="sub-menu-item">Signup</a></li>
                                <li><a href="auth-re-password.html" class="sub-menu-item">Reset Password</a></li>
                            </ul>
                        </li>
                        <li class="has-submenu parent-menu-item"><a href="javascript:void(0)"> Utility </a><span
                                class="submenu-arrow"></span>
                            <ul class="submenu">
                                <li><a href="terms.html" class="sub-menu-item">Terms of Services</a></li>
                                <li><a href="privacy.html" class="sub-menu-item">Privacy Policy</a></li>
                            </ul>
                        </li>
                        <li class="has-submenu parent-menu-item"><a href="javascript:void(0)"> Blog </a><span
                                class="submenu-arrow"></span>
                            <ul class="submenu">
                                <li><a href="blogs.html" class="sub-menu-item"> Blogs</a></li>
                                <li><a href="blog-sidebar.html" class="sub-menu-item"> Blog Sidebar</a></li>
                                <li><a href="blog-detail.html" class="sub-menu-item"> Blog Detail</a></li>
                            </ul>
                        </li>
                        <li class="has-submenu parent-menu-item"><a href="javascript:void(0)"> Special </a><span
                                class="submenu-arrow"></span>
                            <ul class="submenu">
                                <li><a href="comingsoon.html" class="sub-menu-item">Comingsoon</a></li>
                                <li><a href="maintenance.html" class="sub-menu-item">Maintenance</a></li>
                                <li><a href="404.html" class="sub-menu-item">404! Error</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>

                <li><a href="contact.html" class="sub-menu-item">Contact</a></li>
            </ul><!--end navigation menu-->
        </div><!--end navigation-->
    </div><!--end container-->
</nav><!--end header-->
<!-- End Navbar -->
@dd($ads)
<!-- FOOTER -->
<footer class="relative bg-slate-900 dark:bg-slate-800 mt-24">
    <div class="container relative">
        <div class="grid grid-cols-1">
            <div class="relative py-16">
                <!-- Subscribe -->
                <div class="relative w-full">
                    <div class="relative -top-40 bg-white dark:bg-slate-900 lg:px-8 px-6 py-10 rounded-xl shadow-lg dark:shadow-gray-700 overflow-hidden">
                        <div class="grid md:grid-cols-2 grid-cols-1 items-center gap-[30px]">
                            <div class="md:text-start text-center z-1">
                                <h3 class="md:text-3xl text-2xl md:leading-normal leading-normal font-medium text-black dark:text-white">
                                    Subscribe to Newsletter!</h3>
                                <p class="text-slate-400 max-w-xl mx-auto">Subscribe to get latest updates and
                                    information.</p>
                            </div>

                            <div class="subcribe-form z-1">
                                <form class="relative max-w-lg md:ms-auto">
                                    <input type="email" id="subcribe" name="email"
                                           class="rounded-full bg-white dark:bg-slate-900 shadow dark:shadow-gray-700"
                                           placeholder="Enter your email :">
                                    <button type="submit"
                                            class="btn bg-green-600 hover:bg-green-700 text-white rounded-full">
                                        Subscribe
                                    </button>
                                </form><!--end form-->
                            </div>
                        </div>

                        <div class="absolute -top-5 -start-5">
                            <div class="uil uil-envelope lg:text-[150px] text-7xl text-black/5 dark:text-white/5 ltr:-rotate-45 rtl:rotate-45"></div>
                        </div>

                        <div class="absolute -bottom-5 -end-5">
                            <div class="uil uil-pen lg:text-[150px] text-7xl text-black/5 dark:text-white/5 rtl:-rotate-90"></div>
                        </div>
                    </div>

                    <!--                    <div class="grid md:grid-cols-12 grid-cols-1 gap-[30px] -mt-24">-->
                    <!--                        <div class="lg:col-span-4 md:col-span-12">-->
                    <!--                            <a href="#" class="text-[22px] focus:outline-none">-->
                    <!--                                <img src="assets/images/logo-light.png" alt="">-->
                    <!--                            </a>-->
                    <!--                            <p class="mt-6 text-gray-300">A great plateform to buy, sell and rent your properties-->
                    <!--                                without any agent or commisions.</p>-->
                    <!---->
                    <!--                        </div><!--end col-->-->
                    <!---->
                    <!--                        <div class="lg:col-span-2 md:col-span-4">-->
                    <!--                            <h5 class="tracking-[1px] text-gray-100 font-semibold">Company</h5>-->
                    <!--                            <ul class="list-none footer-list mt-6">-->
                    <!--                                <li><a href="aboutus.html"-->
                    <!--                                       class="text-slate-300 hover:text-slate-400 duration-500 ease-in-out"><i-->
                    <!--                                                class="uil uil-angle-right-b me-1"></i> About us</a></li>-->
                    <!--                                <li class="mt-[10px]"><a href="features.html"-->
                    <!--                                                         class="text-slate-300 hover:text-slate-400 duration-500 ease-in-out"><i-->
                    <!--                                                class="uil uil-angle-right-b me-1"></i> Services</a></li>-->
                    <!--                                <li class="mt-[10px]"><a href="pricing.html"-->
                    <!--                                                         class="text-slate-300 hover:text-slate-400 duration-500 ease-in-out"><i-->
                    <!--                                                class="uil uil-angle-right-b me-1"></i> Pricing</a></li>-->
                    <!--                                <li class="mt-[10px]"><a href="blog.html"-->
                    <!--                                                         class="text-slate-300 hover:text-slate-400 duration-500 ease-in-out"><i-->
                    <!--                                                class="uil uil-angle-right-b me-1"></i> Blog</a></li>-->
                    <!--                                <li class="mt-[10px]"><a href="auth-login.html"-->
                    <!--                                                         class="text-slate-300 hover:text-slate-400 duration-500 ease-in-out"><i-->
                    <!--                                                class="uil uil-angle-right-b me-1"></i> Login</a></li>-->
                    <!--                            </ul>-->
                    <!--                        </div><!--end col-->-->
                    <!---->
                    <!--                        <div class="lg:col-span-3 md:col-span-4">-->
                    <!--                            <h5 class="tracking-[1px] text-gray-100 font-semibold">Usefull Links</h5>-->
                    <!--                            <ul class="list-none footer-list mt-6">-->
                    <!--                                <li><a href="terms.html"-->
                    <!--                                       class="text-slate-300 hover:text-slate-400 duration-500 ease-in-out"><i-->
                    <!--                                                class="uil uil-angle-right-b me-1"></i> Terms of Services</a></li>-->
                    <!--                                <li class="mt-[10px]"><a href="privacy.html"-->
                    <!--                                                         class="text-slate-300 hover:text-slate-400 duration-500 ease-in-out"><i-->
                    <!--                                                class="uil uil-angle-right-b me-1"></i> Privacy Policy</a></li>-->
                    <!--                                <li class="mt-[10px]"><a href="listing-one.html"-->
                    <!--                                                         class="text-slate-300 hover:text-slate-400 duration-500 ease-in-out"><i-->
                    <!--                                                class="uil uil-angle-right-b me-1"></i> Listing</a></li>-->
                    <!--                                <li class="mt-[10px]"><a href="contact.html"-->
                    <!--                                                         class="text-slate-300 hover:text-slate-400 duration-500 ease-in-out"><i-->
                    <!--                                                class="uil uil-angle-right-b me-1"></i> Contact</a></li>-->
                    <!--                            </ul>-->
                    <!--                        </div><!--end col-->-->
                    <!---->
                    <!--                        <div class="lg:col-span-3 md:col-span-4">-->
                    <!--                            <h5 class="tracking-[1px] text-gray-100 font-semibold">Contact Details</h5>-->
                    <!---->
                    <!---->
                    <!--                            <div class="flex mt-6">-->
                    <!--                                <i data-feather="map-pin" class="size-5 text-green-600 me-3"></i>-->
                    <!--                                <div class="">-->
                    <!--                                    <h6 class="text-gray-300 mb-2">C/54 Northwest Freeway, <br> Suite 558, <br> Houston,-->
                    <!--                                        USA 485</h6>-->
                    <!--                                    <a href="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d39206.002432144705!2d-95.4973981212445!3d29.709510002925988!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8640c16de81f3ca5%3A0xf43e0b60ae539ac9!2sGerald+D.+Hines+Waterwall+Park!5e0!3m2!1sen!2sin!4v1566305861440!5m2!1sen!2sin"-->
                    <!--                                       data-type="iframe"-->
                    <!--                                       class="text-green-600 hover:text-green-700 duration-500 ease-in-out lightbox">View-->
                    <!--                                        on Google map</a>-->
                    <!--                                </div>-->
                    <!--                            </div>-->
                    <!---->
                    <!--                            <div class="flex mt-6">-->
                    <!--                                <i data-feather="mail" class="size-5 text-green-600 me-3"></i>-->
                    <!--                                <div class="">-->
                    <!--                                    <a href="mailto:contact@example.com"-->
                    <!--                                       class="text-slate-300 hover:text-slate-400 duration-500 ease-in-out">contact@example.com</a>-->
                    <!--                                </div>-->
                    <!--                            </div>-->
                    <!---->
                    <!--                            <div class="flex mt-6">-->
                    <!--                                <i data-feather="phone" class="size-5 text-green-600 me-3"></i>-->
                    <!--                                <div class="">-->
                    <!--                                    <a href="tel:+152534-468-854"-->
                    <!--                                       class="text-slate-300 hover:text-slate-400 duration-500 ease-in-out">+152-->
                    <!--                                        534-468-854</a>-->
                    <!--                                </div>-->
                    <!--                            </div>-->
                    <!--                        </div><!--end col-->-->
                    <!--                    </div><!--end grid-->-->
                </div>
                <!-- Subscribe -->
            </div>
        </div>
    </div><!--end container-->

    <div class="py-[30px] px-0 border-t border-gray-800 dark:border-gray-700">
        <div class="container relative text-center">
            <div class="grid md:grid-cols-2 items-center gap-6">
                <div class="md:text-start text-center">
                    <p class="mb-0 text-gray-300">©
                        <script>document.write(new Date().getFullYear())</script>
                        Hously. Design with <i class="mdi mdi-heart text-red-600"></i> by <a
                            href="https://shreethemes.in/" target="_blank" class="text-reset">Shreethemes</a>.
                    </p>
                </div>

                <ul class="list-none md:text-end text-center">
                    <li class="inline"><a href="https://1.envato.market/hously" target="_blank"
                                          class="btn btn-icon btn-sm text-gray-400 hover:text-white border border-gray-800 dark:border-gray-700 rounded-md hover:border-green-600 dark:hover:border-green-600 hover:bg-green-600 dark:hover:bg-green-600"><i
                                data-feather="shopping-cart" class="size-4"></i></a></li>
                    <li class="inline"><a href="https://dribbble.com/shreethemes" target="_blank"
                                          class="btn btn-icon btn-sm text-gray-400 hover:text-white border border-gray-800 dark:border-gray-700 rounded-md hover:border-green-600 dark:hover:border-green-600 hover:bg-green-600 dark:hover:bg-green-600"><i
                                data-feather="dribbble" class="size-4"></i></a></li>
                    <li class="inline"><a href="https://www.behance.net/shreethemes" target="_blank"
                                          class="btn btn-icon btn-sm text-gray-400 hover:text-white border border-gray-800 dark:border-gray-700 rounded-md hover:border-green-600 dark:hover:border-green-600 hover:bg-green-600 dark:hover:bg-green-600"><i
                                class="uil uil-behance align-baseline"></i></a></li>
                    <li class="inline"><a href="http://linkedin.com/company/shreethemes" target="_blank"
                                          class="btn btn-icon btn-sm text-gray-400 hover:text-white border border-gray-800 dark:border-gray-700 rounded-md hover:border-green-600 dark:hover:border-green-600 hover:bg-green-600 dark:hover:bg-green-600"><i
                                data-feather="linkedin" class="size-4"></i></a></li>
                    <li class="inline"><a href="https://www.facebook.com/shreethemes" target="_blank"
                                          class="btn btn-icon btn-sm text-gray-400 hover:text-white border border-gray-800 dark:border-gray-700 rounded-md hover:border-green-600 dark:hover:border-green-600 hover:bg-green-600 dark:hover:bg-green-600"><i
                                data-feather="facebook" class="size-4"></i></a></li>
                    <li class="inline"><a href="https://www.instagram.com/shreethemes/" target="_blank"
                                          class="btn btn-icon btn-sm text-gray-400 hover:text-white border border-gray-800 dark:border-gray-700 rounded-md hover:border-green-600 dark:hover:border-green-600 hover:bg-green-600 dark:hover:bg-green-600"><i
                                data-feather="instagram" class="size-4"></i></a></li>
                    <li class="inline"><a href="https://twitter.com/shreethemes" target="_blank"
                                          class="btn btn-icon btn-sm text-gray-400 hover:text-white border border-gray-800 dark:border-gray-700 rounded-md hover:border-green-600 dark:hover:border-green-600 hover:bg-green-600 dark:hover:bg-green-600"><i
                                data-feather="twitter" class="size-4"></i></a></li>
                    <li class="inline"><a href="mailto:support@shreethemes.in"
                                          class="btn btn-icon btn-sm text-gray-400 hover:text-white border border-gray-800 dark:border-gray-700 rounded-md hover:border-green-600 dark:hover:border-green-600 hover:bg-green-600 dark:hover:bg-green-600"><i
                                data-feather="mail" class="size-4"></i></a></li>
                    <li class="inline"><a href="https://forms.gle/QkTueCikDGqJnbky9" target="_blank"
                                          class="btn btn-icon btn-sm text-gray-400 hover:text-white border border-gray-800 dark:border-gray-700 rounded-md hover:border-green-600 dark:hover:border-green-600 hover:bg-green-600 dark:hover:bg-green-600"><i
                                data-feather="file-text" class="size-4"></i></a></li>
                </ul><!--end icon-->
            </div><!--end grid-->
        </div><!--end container-->
    </div>
</footer><!--end footer-->

<!-- Back to top -->
<a href="#" onclick="topFunction()" id="back-to-top"
   class="back-to-top fixed hidden text-lg rounded-full z-10 bottom-5 end-5 size-9 text-center bg-green-600 text-white justify-center items-center"><i
        class="uil uil-arrow-up"></i></a>
<!-- Back to top -->

<!-- JAVASCRIPTS -->
<script src="../assets/libs/tiny-slider/min/tiny-slider.js"></script>
<script src="../assets/libs/tobii/js/tobii.min.js"></script>
<script src="../assets/libs/choices.js/public/assets/scripts/choices.min.js"></script>
<script src="../assets/libs/swiper/js/swiper.min.js"></script>
<script src="../assets/libs/feather-icons/feather.min.js"></script>
<script src="../assets/js/plugins.init.js"></script>
<script src="../assets/js/app.js"></script>


<script>
    const handleChange = () => {
        const fileUploader = document.querySelector('#input-file');
        const getFile = fileUploader.files
        if (getFile.length !== 0) {
            const uploadedFile = getFile[0];
            readFile(uploadedFile);
        }
    }

    const readFile = (uploadedFile) => {
        if (uploadedFile) {
            const reader = new FileReader();
            reader.onload = () => {
                const parent = document.querySelector('.preview-box');
                parent.innerHTML = `<img class="preview-content" src=${reader.result} />`;
            };

            reader.readAsDataURL(uploadedFile);
        }
    };
</script>
<!-- JAVASCRIPTS -->
</body>
</html>




