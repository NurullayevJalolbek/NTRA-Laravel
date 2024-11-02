<x-layouts.main>
{{--    @dd($user)--}}

    <div class="page-wrapper toggled" style="margin-top: 60px; padding-top: 5px;">
        <main class="page-content bg-gray-50 dark:bg-slate-800">
            <div class="container-fluid relative px-3">
                <div class="layout-specing">
                    <div class="grid grid-cols-1">
                        <div
                            class="profile-banner relative text-transparent rounded-md shadow dark:shadow-gray-700 overflow-hidden">
                            <input id="pro-banner" name="profile-banner" type="file" class="hidden"
                                   onchange="loadFile(event)">
                            <div class="relative shrink-0">
                                <img src="/assets/images/ads/photo-1577942948749-a3dbb5c6db0a.jpeg" class="h-80 w-full object-cover" id="profile-banner"
                                     alt="">
                                <div class="absolute inset-0 bg-black/70"></div>
                                <label class="absolute inset-0 cursor-pointer" for="pro-banner"></label>
                            </div>
                        </div>
                    </div>




                    <div class="grid md:grid-cols-12 grid-cols-1 gap-6 mt-6">
                        <div class="xl:col-span-3 lg:col-span-4 md:col-span-4">
                            <div class="p-6 relative rounded-md shadow dark:shadow-gray-700 bg-white dark:bg-slate-900">
                                <div class="profile-pic text-center">
                                    <input id="pro-img" name="profile-image" type="file" class="hidden"
                                           onchange="loadFile(event)"/>
                                    <div>
                                        <div class="relative size-24 mx-auto">
                                            <img src="assets/images/client/07.jpg"
                                                 class="rounded-full shadow dark:shadow-gray-700 ring-4 ring-slate-50 dark:ring-slate-800"
                                                 id="profile-image" alt="">
                                            <label class="absolute inset-0 cursor-pointer" for="pro-img"></label>
                                        </div>

                                        <div class="mt-4">
                                            <h5 class="text-lg font-semibold">{{ $user->first_name, $user->last_name }}</h5>
                                            <p class="text-slate-400">{{ $user->email }}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="xl:col-span-9 lg:col-span-8 md:col-span-8">
                            <div class="grid grid-cols-1 gap-6">
                                <div
                                    class="p-6 relative rounded-md shadow dark:shadow-gray-700 bg-white dark:bg-slate-900">
                                    <h5 class="text-lg font-semibold mb-4">Personal Detail :</h5>
                                    <form id="send-verification" method="POST" action="{{ route('profile.updates') }}">
                                        @csrf
                                        @method('PATCH') <!-- Bu yerda PATCH metodini belgilaymiz -->
                                        <div class="grid lg:grid-cols-2 grid-cols-1 gap-5">
                                            <div>
                                                <label class="form-label font-medium">First Name: <span class="text-red-600">*</span></label>
                                                <div class="form-icon relative mt-2">
                                                    <i data-feather="user" class="size-4 absolute top-3 start-4"></i>
                                                    <input type="text"
                                                           class="form-input ps-12 w-full py-2 px-3 h-10 bg-transparent dark:bg-slate-900 dark:text-slate-200 rounded outline-none border border-gray-200 focus:border-green-600 dark:border-gray-800 dark:focus:border-green-600 focus:ring-0"
                                                           placeholder="First Name" id="first_name" name="first_name" value="{{ $user->first_name }}" required>
                                                </div>
                                            </div>

                                            <div>
                                                <label class="form-label font-medium">Last Name: <span class="text-red-600">*</span></label>
                                                <div class="form-icon relative mt-2">
                                                    <i data-feather="user-check" class="size-4 absolute top-3 start-4"></i>
                                                    <input type="text"
                                                           class="form-input ps-12 w-full py-2 px-3 h-10 bg-transparent dark:bg-slate-900 dark:text-slate-200 rounded outline-none border border-gray-200 focus:border-green-600 dark:border-gray-800 dark:focus:border-green-600 focus:ring-0"
                                                           placeholder="Last Name" id="last_name" value="{{ $user->last_name }}" name="last_name" required>
                                                </div>
                                            </div>
                                            <div>
                                                <label class="form-label font-medium">Your Email: <span class="text-red-600">*</span></label>
                                                <div class="form-icon relative mt-2">
                                                    <i data-feather="mail" class="size-4 absolute top-3 start-4"></i>
                                                    <input type="email"
                                                           class="form-input ps-12 w-full py-2 px-3 h-10 bg-transparent dark:bg-slate-900 dark:text-slate-200 rounded outline-none border border-gray-200 focus:border-green-600 dark:border-gray-800 dark:focus:border-green-600 focus:ring-0"
                                                           placeholder="Email" id="email"  value="{{ $user->email }}" name="email" required>
                                                </div>
                                            </div>
                                        </div><!--end grid-->

                                        <button type="submit" id="submit" name="send"
                                                class="btn bg-green-600 hover:bg-green-700 border-green-600 hover:border-green-700 text-white rounded-md mt-5">
                                            Save Changes
                                        </button>
                                    </form><!--end form-->
                                </div>

                                <div
                                    class="p-6 relative rounded-md shadow dark:shadow-gray-700 bg-white dark:bg-slate-900">
                                    <div class="grid lg:grid-cols-2 grid-cols-1 gap-6">
                                        <div>
                                            <h5 class="text-lg font-semibold mb-4">Contact Info :</h5>

                                            <form id="send-verification" method="POST" action="{{ route('profile.updates') }}">
                                                @csrf
                                                @method('PATCH') <!-- Bu yerda PATCH metodini belgilaymiz -->
                                                <div class="grid grid-cols-1 gap-5">
                                                    <div>
                                                        <label class="form-label font-medium">Phone No. :</label>
                                                        <div class="flex items-center mt-2">
                                                            <input name="phone_prefix" id="phone_prefix" type="text"
                                                                   value="+998"
                                                                   readonly
                                                                   class="form-input w-20 h-10 bg-transparent dark:bg-slate-900 dark:text-slate-200 rounded-l-md border border-gray-200 focus:border-green-600 dark:border-gray-800 dark:focus:border-green-600 focus:ring-0 text-center"/>
                                                            <input name="number" id="number" type="text"
                                                                   class="form-input ps-3 w-full py-2 h-10 bg-transparent dark:bg-slate-900 dark:text-slate-200 rounded-r-md border border-gray-200 focus:border-green-600 dark:border-gray-800 dark:focus:border-green-600 focus:ring-0"
                                                                   placeholder="Phone :" value="{{ $user->phone }}">
                                                        </div>
                                                    </div>
                                                </div><!--end grid-->


                                                <button type="submit"
                                                        class="btn bg-green-600 hover:bg-green-700 border-green-600 hover:border-green-700 text-white rounded-md mt-5">
                                                    Add
                                                </button>
                                            </form><!--end form-->
                                        </div><!--end col-->

                                        <div>
                                            <h5 class="text-lg font-semibold mb-4">Change password :</h5>
                                            <form id="send-verification" method="POST" action="{{ route('profile.updates') }}">
                                                @csrf
                                                @method('PATCH') <!-- Bu yerda PATCH metodini belgilaymiz -->
                                                <div class="grid grid-cols-1 gap-5">
                                                    <div>
                                                        <label class="form-label font-medium">Old password :</label>
                                                        <div class="form-icon relative mt-2">
                                                            <i data-feather="key" class="size-4 absolute top-3 start-4"></i>
                                                            <input type="password"
                                                                   name="old_password"
                                                                   class="form-input ps-12 w-full py-2 px-3 h-10 bg-transparent dark:bg-slate-900 dark:text-slate-200 rounded outline-none border border-gray-200 focus:border-green-600 dark:border-gray-800 dark:focus:border-green-600 focus:ring-0"
                                                                   placeholder="Old password" required="">
                                                        </div>

                                                    </div>

                                                    <div>
                                                        <label class="form-label font-medium">New password :</label>
                                                        <div class="form-icon relative mt-2">
                                                            <i data-feather="key" class="size-4 absolute top-3 start-4"></i>
                                                            <input type="password"
                                                                   name="new_password"
                                                                   class="form-input ps-12 w-full py-2 px-3 h-10 bg-transparent dark:bg-slate-900 dark:text-slate-200 rounded outline-none border border-gray-200 focus:border-green-600 dark:border-gray-800 dark:focus:border-green-600 focus:ring-0"
                                                                   placeholder="New password" required="">
                                                        </div>
                                                    </div>
                                                </div><!--end grid-->

                                                <button type="submit"
                                                        class="btn bg-green-600 hover:bg-green-700 border-green-600 hover:border-green-700 text-white rounded-md mt-5">
                                                    Save password
                                                </button>
                                            </form><!--end form-->
                                        </div><!--end col-->
                                    </div><!--end row-->
                                </div>

                                <div
                                    class="p-6 relative rounded-md shadow dark:shadow-gray-700 bg-white dark:bg-slate-900">
                                    <h5 class="text-lg font-semibold mb-4 text-red-600">Delete Account :</h5>

                                    <p class="text-slate-400 mb-4">Do you want to delete the account? Please press below
                                        "Delete" button</p>

                                    <a href=""
                                       class="btn bg-red-600 hover:bg-red-700 border-red-600 hover:border-red-700 text-white rounded-md">Delete</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Content -->
                </div>
            </div><!--end container-->

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
    <!-- LTR & RTL Mode Code -->

    <!-- JAVASCRIPTS -->
    <script src="assets/libs/feather-icons/feather.min.js"></script>
    <script src="assets/libs/simplebar/simplebar.min.js"></script>
    <script src="assets/js/plugins.init.js"></script>
    <script src="assets/js/app.js"></script>
    <!-- JAVASCRIPTS -->
</x-layouts.main>
</html>
