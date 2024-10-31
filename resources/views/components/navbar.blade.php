<nav id="topnav" class="defaultscroll is-sticky">
    <div class="container relative">
        <!-- Start Logo container-->

        <h1>NAJOT <img src="/assets/images/NAJOTTALIM.ico" alt="Najot Ta'lim Logo" height="24"> TALIM</h1>
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
            @if(Auth::check())
                <li class="dropdown inline-block relative">
                    <!-- Tugma -->
                    <a class="btn btn-icon bg-green-600 hover:bg-green-700 border-green-600 dark:border-green-600 text-white rounded-full cursor-pointer"
                       onclick="toggleDropdown(event)">
                        <i data-feather="user" class="size-4 stroke-[3]"></i>
                    </a>
                    <!-- Dropdown menyu -->
                    <div
                        class="dropdown-menu absolute end-0 m-0 mt-4 z-10 w-44 rounded-md overflow-hidden bg-white dark:bg-slate-900 shadow dark:shadow-gray-700 hidden">
                        <ul class="py-2 text-start">
                            <li>
                                <a href="/user/profile"
                                   class="flex items-center py-1 px-4 dark:text-white/70 hover:text-green-600 dark:hover:text-white">
                                    <i class="mdi mdi-account-outline me-2"></i> <!-- Ikonkani joylash -->
                                    <span>Profile</span>
                                </a>
                            </li>
                            <li>
                                <a href="chat.html"
                                   class="flex items-center py-1 px-4 dark:text-white/70 hover:text-green-600 dark:hover:text-white">
                                    <i class="mdi mdi-chat-outline me-2"></i>
                                    <span>Chat</span>
                                </a>
                            </li>
                            <li>
                                <a href="/user/profile/setting"
                                   class="flex items-center py-1 px-4 dark:text-white/70 hover:text-green-600 dark:hover:text-white">
                                    <i class="mdi mdi-cog-outline me-2"></i>
                                    <span>Settings</span>
                                </a>
                            </li>
                            <li class="border-t border-gray-100 dark:border-gray-800 my-2"></li>
                            <li>
                                <a href="/lock-screen"
                                   class="flex items-center py-1 px-4 dark:text-white/70 hover:text-green-600 dark:hover:text-white">
                                    <i class="mdi mdi-lock-outline me-2"></i>
                                    <span>Lockscreen</span>
                                </a>
                            </li>
                            <li>
                                <a href="/logout"
                                   class="flex items-center py-1 px-4 dark:text-white/70 hover:text-green-600 dark:hover:text-white">
                                    <i class="mdi mdi-logout me-2"></i>
                                    <span>Logout</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>

            @endif

            @if(!Auth::check())
                <!-- Signup tugmasi -->
                <li class="sm:inline ps-1 mb-0 hidden">
                    <a href="/register"
                       class="btn bg-green-600 hover:bg-green-700 border-green-600 dark:border-green-600 text-white rounded-full">Signup</a>
                </li>

                <!-- Login tugmasi -->
                <li class="sm:inline ps-1 mb-0 hidden">
                    <a href="/login"
                       class="btn bg-green-600 hover:bg-green-700 border-green-600 dark:border-green-600 text-white rounded-full">Login</a>
                </li>
            @endif


        </ul>
        <!--Login button End-->

        <div id="navigation">
            <!-- Navigation Menu-->
            <ul class="navigation-menu justify-end nav-light">
                @if (Auth::check())
                    <li class="has-submenu parent-parent-menu-item">
                        <a href="/">Home</a>
                    </li>
                    <li><a href="/ads/create" class="sub-menu-item">E'lon qoshish</a></li>
                    <li><a href="/admin" class="sub-menu-item">Admin</a></li>
                    <li><a href="contact.html" class="sub-menu-item">Contact</a></li>
                @endif
            </ul><!--end navigation menu-->
        </div><!--end navigation-->
    </div><!--end container-->
</nav><!--end header-->


<script src="https://cdn.jsdelivr.net/npm/feather-icons/dist/feather.min.js"></script>
<script>
    feather.replace()
</script>
<script>
    function toggleDropdown(event) {
        event.stopPropagation();
        const dropdownMenu = event.currentTarget.nextElementSibling;
        dropdownMenu.classList.toggle('hidden');
    }

    // Dropdownni tashqi qismiga bosilganda yopish
    document.addEventListener('click', function () {
        const dropdowns = document.querySelectorAll('.dropdown-menu');
        dropdowns.forEach(dropdown => dropdown.classList.add('hidden'));
    });

</script>
