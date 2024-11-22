<nav id="topnav" class="defaultscroll is-sticky">
    <div class="container relative">






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
            <?php if(Auth::check()): ?>
                <li class="dropdown inline-block relative">
                    <!-- Tugma -->
                    <button onclick="toggleDropdown()" class="flex items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-justify" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M2 12.5a.5.5 0 0 1 .5-.5h11a.5.5 0 0 1 0 1h-11a.5.5 0 0 1-.5-.5m0-3a.5.5 0 0 1 .5-.5h11a.5.5 0 0 1 0 1h-11a.5.5 0 0 1-.5-.5m0-3a.5.5 0 0 1 .5-.5h11a.5.5 0 0 1 0 1h-11a.5.5 0 0 1-.5-.5m0-3a.5.5 0 0 1 .5-.5h11a.5.5 0 0 1 0 1h-11a.5.5 0 0 1-.5-.5"/>
                        </svg>
                    </button>

                    <!-- Dropdown menyu -->
                    <div id="dropdownMenu" class="dropdown-menu absolute end-0 m-0 mt-4 z-10 w-44 rounded-md overflow-hidden bg-white dark:bg-slate-900 shadow dark:shadow-gray-700 hidden transition-transform transform opacity-0 translate-y-4">
                        <ul class="py-2 text-start">
                            <li>
                                <a href="/user/profile" class="flex items-center py-1 px-4 dark:text-white/70 hover:text-green-600 dark:hover:text-white">
                                    <i class="mdi mdi-account-outline me-2"></i>
                                    <span>Profile</span>
                                </a>
                            </li>






                            <li>
                                <a href="/admin" class="flex items-center py-1 px-4 dark:text-white/70 hover:text-green-600 dark:hover:text-white">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6 me-2">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M11.42 15.17 17.25 21A2.652 2.652 0 0 0 21 17.25l-5.877-5.877M11.42 15.17l2.496-3.03c.317-.384.74-.626 1.208-.766M11.42 15.17l-4.655 5.653a2.548 2.548 0 1 1-3.586-3.586l6.837-5.63m5.108-.233c.55-.164 1.163-.188 1.743-.14a4.5 4.5 0 0 0 4.486-6.336l-3.276 3.277a3.004 3.004 0 0 1-2.25-2.25l3.276-3.276a4.5 4.5 0 0 0-6.336 4.486c.091 1.076-.071 2.264-.904 2.95l-.102.085m-1.745 1.437L5.909 7.5H4.5L2.25 3.75l1.5-1.5L7.5 4.5v1.409l4.26 4.26m-1.745 1.437 1.745-1.437m6.615 8.206L15.75 15.75M4.867 19.125h.008v.008h-.008v-.008Z" />
                                    </svg>
                                    <span>Admin</span>
                                </a>
                            </li>


                            <li>
                                <a href="/user/profile/setting" class="flex items-center py-1 px-4 dark:text-white/70 hover:text-green-600 dark:hover:text-white">
                                    <i class="mdi mdi-cog-outline me-2"></i>
                                    <span>Settings</span>
                                </a>
                            </li>
                            <li class="border-t border-gray-100 dark:border-gray-800 my-2"></li>
                            <li>
                                <a href="/lock-screen" class="flex items-center py-1 px-4 dark:text-white/70 hover:text-green-600 dark:hover:text-white">
                                    <i class="mdi mdi-lock-outline me-2"></i>
                                    <span>Lockscreen</span>
                                </a>
                            </li>
                            <li>
                                <a href="/logout" class="flex items-center py-1 px-4 dark:text-white/70 hover:text-green-600 dark:hover:text-white">
                                    <i class="mdi mdi-logout me-2"></i>
                                    <span>Logout</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
            <?php endif; ?>

            <?php if(!Auth::check()): ?>
                <li class="sm:inline ps-1 mb-0 hidden">
                    <a href="/register" class="btn bg-green-600 hover:bg-green-700 border-green-600 dark:border-green-600 text-white rounded-full">Signup</a>
                </li>
                <li class="sm:inline ps-1 mb-0 hidden">
                    <a href="/login" class="btn bg-green-600 hover:bg-green-700 border-green-600 dark:border-green-600 text-white rounded-full">Login</a>
                </li>
            <?php endif; ?>
        </ul>
        <!--Login button End-->

        <div id="navigation">
            <!-- Navigation Menu-->
            <ul class="navigation-menu justify-end nav-light">
                <?php if(Auth::check()): ?>
                    <li class="has-submenu parent-parent-menu-item">
                        <a href="/">Home</a>
                    </li>
                    <li><a href="/ads/create" class="sub-menu-item">E'lon qoshish</a></li>

                    <li><a href="/user/profile" class="sub-menu-item">Saqlanmalar</a></li>
                    <li><a href="/user/profile" class="sub-menu-item">E'lonlarim</a></li>
                <?php endif; ?>
            </ul><!--end navigation menu-->
        </div><!--end navigation-->
    </div><!--end container-->
</nav><!--end header-->


<script src="https://cdn.jsdelivr.net/npm/feather-icons/dist/feather.min.js"></script>
<script>
    feather.replace()
</script>

<script>
    function toggleDropdown() {
        var dropdown = document.getElementById("dropdownMenu");
        dropdown.classList.toggle("hidden");
        setTimeout(() => {
            dropdown.classList.toggle("opacity-0");
            dropdown.classList.toggle("translate-y-4");
        }, 10); // Animatsiyani boshlash uchun kichik kechikish
    }
</script>


<style>
    /* Dropdown animatsiyasi */
    .dropdown-menu {
        transition: transform 0.3s ease, opacity 0.3s ease;
    }
</style>

<?php /**PATH /var/www/resources/views/components/navbar.blade.php ENDPATH**/ ?>