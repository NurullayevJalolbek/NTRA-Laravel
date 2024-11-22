<?php if (isset($component)) { $__componentOriginal8a240419d16b3c1a159498153f053ed2 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal8a240419d16b3c1a159498153f053ed2 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.layouts.main','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('layouts.main'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>

    
    <div id="profile" class="page-wrapper toggled">
        <!-- Start Page Content -->
        <main class="page-content bg-gray-50 dark:bg-slate-800">
            <div class="container-fluid relative px-3">
                <div class="layout-specing">
                    <div class="grid grid-cols-1">
                        <div
                            class="profile-banner relative text-transparent rounded-md shadow dark:shadow-gray-700 overflow-hidden">
                            <input id="pro-banner" name="profile-banner" type="file" class="hidden"
                                   onchange="loadFile(event)">
                            <div class="relative shrink-0">
                                <img src="/assets/images/ads/WhiteHouse-9a73875f70db4451b7c8c88175accc04.jpg"
                                     class="h-80 w-full object-cover" id="profile-banner"
                                     alt="">
                                <div class="absolute inset-0 bg-black/70"></div>
                                <label class="absolute inset-0 cursor-pointer" for="pro-banner"></label>
                            </div>
                        </div>
                    </div>

                    <div class="grid md:grid-cols-12 grid-cols-1">
                        <div class="xl:col-span-3 lg:col-span-4 md:col-span-4 mx-6">
                            <div
                                class="p-6 relative rounded-md shadow dark:shadow-gray-700 bg-white dark:bg-slate-900 -mt-48">
                                <div class="profile-pic text-center mb-5">
                                    <input id="pro-img" name="profile-image" type="file" class="hidden"
                                           onchange="loadFile(event)"/>
                                    <div>
                                        <div class="relative size-24 mx-auto">
                                            <img src="/assets/images/client/images.png"
                                                 class="rounded-full shadow dark:shadow-gray-700 ring-4 ring-slate-50 dark:ring-slate-800"
                                                 id="profile-image" alt="">
                                            <label class="absolute inset-0 cursor-pointer" for="pro-img"></label>
                                        </div>

                                        <div class="mt-4">
                                            <h5 class="text-lg font-semibold"><?php echo e($user->first_name); ?> <?php echo e($user->last_name); ?></h5>
                                            <p class="text-slate-400"><?php echo e($user->email); ?></p>
                                        </div>
                                    </div>
                                </div>

                                <div class="border-t border-gray-100 dark:border-gray-700">
                                    <h5 class="text-xl font-semibold mt-4">Personal Details :</h5>
                                    <div class="mt-4">
                                        <div class="flex items-center">
                                            <i data-feather="mail" class="fea icon-ex-md text-slate-400 me-3"></i>
                                            <div class="flex-1">
                                                <h6 class="text-green-600 dark:text-white font-medium mb-0">Email :</h6>
                                                <a href="" class="text-slate-400"><?php echo e($user->email); ?></a>
                                            </div>
                                        </div>


                                        <div class="flex items-center">
                                            <i data-feather="phone" class="fea icon-ex-md text-slate-400 me-3"></i>
                                            <div class="flex-1">
                                                <h6 class="text-green-600 dark:text-white font-medium mb-0">Phone :</h6>
                                                <a href="" class="text-slate-400"><?php echo e($user->phone); ?></a>
                                            </div>
                                        </div>


                                        <div class="flex items-center">
                                            <i data-feather="first_name" class="fea icon-ex-md text-slate-400 me-3"></i>
                                            <div class="flex-1">
                                                <h6 class="text-green-600 dark:text-white font-medium mb-0">First name
                                                    :</h6>
                                                <a href="" class="text-slate-400"><?php echo e($user->first_name); ?></a>
                                            </div>
                                        </div>


                                        <div class="flex items-center">
                                            <i data-feather="first_name" class="fea icon-ex-md text-slate-400 me-3"></i>
                                            <div class="flex-1">
                                                <h6 class="text-green-600 dark:text-white font-medium mb-0">Last name
                                                    :</h6>
                                                <a href="" class="text-slate-400"><?php echo e($user->last_name); ?></a>
                                            </div>
                                        </div>


                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="xl:col-span-9 lg:col-span-8 md:col-span-8 mt-6">
                            <div class="grid grid-cols-1 gap-6">

                                <div
                                    class="p-6 relative rounded-md shadow dark:shadow-gray-700 bg-white dark:bg-slate-900">

                                    <a href="/ads/create">
                                        <button
                                            class="mt-4 px-4 py-2 rounded bg-green-500 text-white hover:bg-green-600">
                                            E'lon qo‘shish
                                        </button>
                                    </a>
                                </div>

                                <div id="ProfileSavedAds"
                                    class="p-6 relative rounded-md shadow dark:shadow-gray-700 bg-white dark:bg-slate-900">


                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Content -->
                </div>
            </div><!--end container-->

            <!-- Footer Start -->
            <footer class="shadow dark:shadow-gray-700 bg-white dark:bg-slate-900 px-6 py-4">
                <div class="container-fluid">
                    <div class="grid grid-cols-1">
                        <div class="sm:text-start text-center mx-md-2">
                            <p class="mb-0 text-slate-400">©
                                <script>document.write(new Date().getFullYear())</script>
                                Hously. Design with <i class="mdi mdi-heart text-red-600"></i> by <a
                                    href="https://shreethemes.in/" target="_blank" class="text-reset">Shreethemes</a>.
                            </p>
                        </div><!--end col-->
                    </div><!--end grid-->
                </div><!--end container-->
            </footer><!--end footer-->
            <!-- End -->
        </main>
        <!--End page-content" -->
    </div>
    <!-- page-wrapper -->

    <!-- Switcher -->
    <div class="fixed top-[30%] -end-2 z-50">
            <span class="relative inline-block rotate-90">
                <input type="checkbox" class="checkbox opacity-0 absolute" id="chk"/>
                <label
                    class="label bg-slate-900 dark:bg-white shadow dark:shadow-gray-700 cursor-pointer rounded-full flex justify-between items-center p-1 w-14 h-8"
                    for="chk">
                    <i data-feather="moon" class="size-[18px] text-yellow-500"></i>
                    <i data-feather="sun" class="size-[18px] text-yellow-500"></i>
                    <span
                        class="ball bg-white dark:bg-slate-900 rounded-full absolute top-[2px] left-[2px] size-7"></span>
                </label>
            </span>
    </div>
    <!-- Switcher -->

    <!-- LTR & RTL Mode Code -->
    <div class="fixed top-[40%] -end-3 z-50">
        <a href="" id="switchRtl">
            <span
                class="py-1 px-3 relative inline-block rounded-b-md -rotate-90 bg-white dark:bg-slate-900 shadow-md dark:shadow dark:shadow-gray-700 font-bold rtl:block ltr:hidden">LTR</span>
            <span
                class="py-1 px-3 relative inline-block rounded-t-md -rotate-90 bg-white dark:bg-slate-900 shadow-md dark:shadow dark:shadow-gray-700 font-bold ltr:block rtl:hidden">RTL</span>
        </a>
    </div>

    <script>
        let activeLink = null; // Faol havola uchun o'zgaruvchi

        document.querySelectorAll('a').forEach(link => {
            link.addEventListener('click', function (e) {
                // Agar birinchi marta havola bosilsa, faqat uni aktiv qilib saqlang
                if (!activeLink) {
                    activeLink = this; // Hozirgi havolani saqlash
                } else {
                    // Agar allaqachon biron bir havola faol bo'lsa, faqat o'sha havolani saqlang
                    activeLink.classList.remove('active'); // Oldingi havola ustidan chiziq olib tashlanadi
                }

                // Hozirgi havolani faol qilib belgilash
                this.classList.add('active');
                activeLink = this; // Hozirgi havolani saqlash
            });
        });


    </script>

    <!-- LTR & RTL Mode Code -->

    <!-- JAVASCRIPTS -->
    <script src="assets/libs/tobii/js/tobii.min.js"></script>
    <script src="assets/libs/feather-icons/feather.min.js"></script>
    <script src="assets/libs/simplebar/simplebar.min.js"></script>
    <script src="assets/js/plugins.init.js"></script>
    <script src="assets/js/app.js"></script>
    <!-- JAVASCRIPTS -->
    </body>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal8a240419d16b3c1a159498153f053ed2)): ?>
<?php $attributes = $__attributesOriginal8a240419d16b3c1a159498153f053ed2; ?>
<?php unset($__attributesOriginal8a240419d16b3c1a159498153f053ed2); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal8a240419d16b3c1a159498153f053ed2)): ?>
<?php $component = $__componentOriginal8a240419d16b3c1a159498153f053ed2; ?>
<?php unset($__componentOriginal8a240419d16b3c1a159498153f053ed2); ?>
<?php endif; ?>
<?php /**PATH /var/www/resources/views/ads/profile.blade.php ENDPATH**/ ?>