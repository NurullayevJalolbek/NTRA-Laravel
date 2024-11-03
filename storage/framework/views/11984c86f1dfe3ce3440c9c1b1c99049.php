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
    
    <div class="page-wrapper toggled">
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


                                <div
                                    class="p-6 relative rounded-md shadow dark:shadow-gray-700 bg-white dark:bg-slate-900">


                                    <div class="flex space-x-4">
                                        <a href="/user/my/ads" id="myAdsButton"
                                           class="flex items-center py-1 px-4 dark:text-white/70 hover:text-green-600 dark:hover:text-white">
                                            <i class="mdi mdi-home-outline me-2"></i>
                                            <span>E'lonlarim</span>
                                        </a>

                                        <a href="/user/saved/ads" id="savedAdsButton"
                                           class="flex items-center py-1 px-4 dark:text-white/70 hover:text-green-600 dark:hover:text-white">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-bookmark" viewBox="0 0 16 16">
                                                <path d="M2 2a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v13.5a.5.5 0 0 1-.777.416L8 13.101l-5.223 2.815A.5.5 0 0 1 2 15.5zm2-1a1 1 0 0 0-1 1v12.566l4.723-2.482a.5.5 0 0 1 .554 0L13 14.566V2a1 1 0 0 0-1-1z"/>
                                            </svg>
                                            <span>Saqlanmalar</span>
                                        </a>
                                    </div>



                                <?php if(isset($saqlanmalar)): ?>

                                        <div class="grid lg:grid-cols-3 md:grid-cols-2 mt-6 gap-6">
                                            <?php $__currentLoopData = $saqlanmalar; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ad): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <div
                                                    class="group rounded-xl bg-white dark:bg-slate-900 shadow hover:shadow-xl dark:hover:shadow-xl dark:shadow-gray-700 dark:hover:shadow-gray-700 overflow-hidden ease-in-out duration-500">
                                                    <div class="relative">
                                                        <?php
                                                            //                            dump(Auth::user()->id);
                                                                                            try {
                                                                                                $bookmarkedModel = new \App\Models\Bookmarked();
                                                                                                $bookmarked = $bookmarkedModel->findByAdAndUser($ad->id, Auth::user()->id);
                                                                                            } catch (\Exception $e) {
                                                                                                $bookmarked = null;
                                                                                            }
                                                        ?>


                                                        <img src="<?php echo e((new \App\Actions\DisplayAdImage())($ad )); ?>" alt="">

                                                        <?php if(!isset($bookmarked)): ?>
                                                            <div class="absolute top-4 end-4">
                                                                <form action="/bookmark/save" method="POST" class="inline-block">
                                                                    <?php echo csrf_field(); ?>
                                                                    <input type="hidden" name="ad_id" value="<?php echo e($ad->id); ?>">
                                                                    <input type="hidden" name="user_id" value="<?php echo e(Auth::user()->id); ?>">
                                                                    <button style="background: none; border: none; cursor: pointer;">
                                                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                                                             stroke-width="1.5" stroke="currentColor" class="size-6">
                                                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                                                  d="m3 3 1.664 1.664M21 21l-1.5-1.5m-5.485-1.242L12 17.25 4.5 21V8.742m.164-4.078a2.15 2.15 0 0 1 1.743-1.342 48.507 48.507 0 0 1 11.186 0c1.1.128 1.907 1.077 1.907 2.185V19.5M4.664 4.664 19.5 19.5"/>
                                                                        </svg>
                                                                    </button>

                                                                </form>
                                                            </div>

                                                        <?php else: ?>
                                                            <div class="absolute top-4 end-4">
                                                                <form action="/bookmark/delete" method="POST" class="inline-block">
                                                                    <?php echo csrf_field(); ?>
                                                                    <input type="hidden" name="ad_id" value="<?php echo e($ad->id); ?>">
                                                                    <input type="hidden" name="user_id" value="<?php echo e(Auth::user()->id); ?>">

                                                                    <button style="background: none; border: none; cursor: pointer;">
                                                                        <svg xmlns="http://www.w3.org/2000/svg" fill="red" viewBox="0 0 24 24"
                                                                             stroke-width="1.5" stroke="red" class="size-6">
                                                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                                                  d="M17.593 3.322c1.1.128 1.907 1.077 1.907 2.185V21L12 17.25 4.5 21V5.507c0-1.108.806-2.057 1.907-2.185a48.507 48.507 0 0 1 11.186 0Z"/>
                                                                        </svg>
                                                                    </button>


                                                                </form>
                                                            </div>

                                                        <?php endif; ?>

                                                    </div>
                                                    <div class="p-6">
                                                        <div class="pb-6">
                                                            <a href="/ads/<?php echo e($ad['id']); ?>"
                                                               class="text-lg hover:text-green-600 font-medium ease-in-out duration-500"> <?php echo e($ad['title']); ?></a>
                                                        </div>


                                                        <ul class="py-6 border-y border-slate-100 dark:border-gray-800 flex items-center list-none">
                                                            <li class="flex items-center me-4">
                                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                                     viewBox="0 0 24 24"
                                                                     stroke-width="1.5" stroke="currentColor"
                                                                     class="size-6 stroke-green-600 mr-2">
                                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                                          d="M9 6.75V15m6-6v8.25m.503 3.498 4.875-2.437c.381-.19.622-.58.622-1.006V4.82c0-.836-.88-1.38-1.628-1.006l-3.869 1.934c-.317.159-.69.159-1.006 0L9.503 3.252a1.125 1.125 0 0 0-1.006 0L3.622 5.689C3.24 5.88 3 6.27 3 6.695V19.18c0 .836.88 1.38 1.628 1.006l3.869-1.934c.317-.159.69-.159 1.006 0l4.994 2.497c.317.158.69.158 1.006 0Z"/>
                                                                </svg>
                                                                <span>8000sqf</span>
                                                            </li>

                                                            <li class="flex items-center me-4 space-x-2">
                                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                                     viewBox="0 0 24 24"
                                                                     stroke-width="1.5" stroke="green" class="h-6 w-6">
                                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                                          d="M18 18.72a9.094 9.094 0 0 0 3.741-.479 3 3 0 0 0-4.682-2.72m.94 3.198.001.031c0 .225-.012.447-.037.666A11.944 11.944 0 0 1 12 21c-2.17 0-4.207-.576-5.963-1.584A6.062 6.062 0 0 1 6 18.719m12 0a5.971 5.971 0 0 0-.941-3.197m0 0A5.995 5.995 0 0 0 12 12.75a5.995 5.995 0 0 0-5.058 2.772m0 0a3 3 0 0 0-4.681 2.72 8.986 8.986 0 0 0 3.74.477m.94-3.197a5.971 5.971 0 0 0-.94 3.197M15 6.75a3 3 0 1 1-6 0 3 3 0 0 1 6 0Zm6 3a2.25 2.25 0 1 1-4.5 0 2.25 2.25 0 0 1 4.5 0Zm-13.5 0a2.25 2.25 0 1 1-4.5 0 2.25 2.25 0 0 1 4.5 0Z"/>
                                                                </svg>
                                                                <span> <?php echo e($ad['gender']); ?></span>
                                                            </li>


                                                            <li class="flex items-center me-4 space-x-2">
                                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                                     viewBox="0 0 24 24"
                                                                     stroke-width="1.5" stroke="green" class="size-6">
                                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                                          d="M8.25 21v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21m0 0h4.5V3.545M12.75 21h7.5V10.75M2.25 21h1.5m18 0h-18M2.25 9l4.5-1.636M18.75 3l-1.5.545m0 6.205 3 1m1.5.5-1.5-.5M6.75 7.364V3h-3v18m3-13.636 10.5-3.819"/>
                                                                </svg>
                                                                <span>4 Baths</span>
                                                            </li>
                                                        </ul>

                                                        <ul class="pt-6 flex justify-between items-center list-none">
                                                            <li class="flex items-center lg:me-6 me-8">
                                                                <i class="uil uil-usd-circle text-green-600 text-2xl mr-2"></i>
                                                                <span class="text-slate-400 mr-2">Price:</span>
                                                                <p class="text-lg font-medium"><?php echo e($ad['price']); ?></p>
                                                            </li>


                                                        </ul>
                                                    </div>
                                                </div><!--end property content-->

                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </div>

                                    <?php endif; ?>
                                    <?php if(isset($ads)): ?>
                                        <div class="grid lg:grid-cols-3 md:grid-cols-2 mt-6 gap-6">
                                            <?php $__currentLoopData = $ads; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ad): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <div
                                                    class="group rounded-xl bg-white dark:bg-slate-900 shadow hover:shadow-xl dark:hover:shadow-xl dark:shadow-gray-700 dark:hover:shadow-gray-700 overflow-hidden ease-in-out duration-500">
                                                    <div class="relative">
                                                        <img src="  <?php echo e((new \App\Actions\DisplayAdImage())($ad)); ?>" alt="">

                                                        <div class="absolute top-4 end-4">
                                                            <form action="/profile/ad/delete" method="POST"
                                                                  class="inline-block">
                                                                <?php echo csrf_field(); ?>
                                                                <input type="hidden" name="ad_id" value="<?php echo e($ad->id); ?>">
                                                                <input type="hidden" name="user_id"
                                                                       value="<?php echo e(Auth::user()->id); ?>">

                                                                <button
                                                                    style="background: none; border: none; cursor: pointer;">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                                         viewBox="0 0 24 24" stroke-width="1.5"
                                                                         stroke="red" class="size-6">
                                                                        <path stroke-linecap="round"
                                                                              stroke-linejoin="round"
                                                                              d="m14.74 9-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 0 1-2.244 2.077H8.084a2.25 2.25 0 0 1-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 0 0-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 0 1 3.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 0 0-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 0 0-7.5 0"/>
                                                                    </svg>
                                                                </button>
                                                            </form>
                                                        </div>


                                                    </div>
                                                    <div class="p-6">
                                                        <div class="pb-6">
                                                            <a href="/ads/<?php echo e($ad['id']); ?>"
                                                               class="text-lg hover:text-green-600 font-medium ease-in-out duration-500"> <?php echo e($ad['title']); ?></a>
                                                        </div>


                                                        <ul class="py-6 border-y border-slate-100 dark:border-gray-800 flex items-center list-none">
                                                            <li class="flex items-center me-4">
                                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                                     viewBox="0 0 24 24"
                                                                     stroke-width="1.5" stroke="currentColor"
                                                                     class="size-6 stroke-green-600 mr-2">
                                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                                          d="M9 6.75V15m6-6v8.25m.503 3.498 4.875-2.437c.381-.19.622-.58.622-1.006V4.82c0-.836-.88-1.38-1.628-1.006l-3.869 1.934c-.317.159-.69.159-1.006 0L9.503 3.252a1.125 1.125 0 0 0-1.006 0L3.622 5.689C3.24 5.88 3 6.27 3 6.695V19.18c0 .836.88 1.38 1.628 1.006l3.869-1.934c.317-.159.69-.159 1.006 0l4.994 2.497c.317.158.69.158 1.006 0Z"/>
                                                                </svg>
                                                                <span>8000sqf</span>
                                                            </li>

                                                            <li class="flex items-center me-4 space-x-2">
                                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                                     viewBox="0 0 24 24"
                                                                     stroke-width="1.5" stroke="green" class="h-6 w-6">
                                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                                          d="M18 18.72a9.094 9.094 0 0 0 3.741-.479 3 3 0 0 0-4.682-2.72m.94 3.198.001.031c0 .225-.012.447-.037.666A11.944 11.944 0 0 1 12 21c-2.17 0-4.207-.576-5.963-1.584A6.062 6.062 0 0 1 6 18.719m12 0a5.971 5.971 0 0 0-.941-3.197m0 0A5.995 5.995 0 0 0 12 12.75a5.995 5.995 0 0 0-5.058 2.772m0 0a3 3 0 0 0-4.681 2.72 8.986 8.986 0 0 0 3.74.477m.94-3.197a5.971 5.971 0 0 0-.94 3.197M15 6.75a3 3 0 1 1-6 0 3 3 0 0 1 6 0Zm6 3a2.25 2.25 0 1 1-4.5 0 2.25 2.25 0 0 1 4.5 0Zm-13.5 0a2.25 2.25 0 1 1-4.5 0 2.25 2.25 0 0 1 4.5 0Z"/>
                                                                </svg>
                                                                <span> <?php echo e($ad['gender']); ?></span>
                                                            </li>


                                                            <li class="flex items-center me-4 space-x-2">
                                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                                     viewBox="0 0 24 24"
                                                                     stroke-width="1.5" stroke="green" class="size-6">
                                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                                          d="M8.25 21v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21m0 0h4.5V3.545M12.75 21h7.5V10.75M2.25 21h1.5m18 0h-18M2.25 9l4.5-1.636M18.75 3l-1.5.545m0 6.205 3 1m1.5.5-1.5-.5M6.75 7.364V3h-3v18m3-13.636 10.5-3.819"/>
                                                                </svg>
                                                                <span>4 Baths</span>
                                                            </li>
                                                        </ul>

                                                        <ul class="pt-6 flex justify-between items-center list-none">
                                                            <li class="flex items-center lg:me-6 me-8">
                                                                <i class="uil uil-usd-circle text-green-600 text-2xl mr-2"></i>
                                                                <span class="text-slate-400 mr-2">Price:</span>
                                                                <p class="text-lg font-medium"><?php echo e($ad['price']); ?></p>
                                                            </li>


                                                        </ul>
                                                    </div>
                                                </div><!--end property content-->

                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            <?php endif; ?>
                                        </div>
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
            link.addEventListener('click', function(e) {
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