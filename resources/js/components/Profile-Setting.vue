<template>
    <div v-if="showNotification" :class="['notification', typeClass]">
        <p>{{ message }}</p>
    </div>


    <div class="grid grid-cols-1 gap-6">
        <div
            class="p-6 relative rounded-md shadow dark:shadow-gray-700 bg-white dark:bg-slate-900">
            <h5 class="text-lg font-semibold mb-4">Personal Detail :</h5>
            <form id="send-verification" @submit.prevent="InputData">
                <div class="grid lg:grid-cols-2 grid-cols-1 gap-5">
                    <div>
                        <label class="form-label font-medium">First Name:</label>
                        <div class="form-icon relative mt-2">
                            <i data-feather="user" class="size-4 absolute top-3 start-4"></i>
                            <input type="text" v-model="first_name"
                                   class="form-input ps-12 w-full py-2 px-3 h-10 bg-transparent dark:bg-slate-900 dark:text-slate-200 rounded outline-none border border-gray-200 focus:border-green-600 dark:border-gray-800 dark:focus:border-green-600 focus:ring-0"
                                   placeholder="First Name" id="first_name" name="first_name">
                        </div>
                    </div>

                    <div>
                        <label class="form-label font-medium">Last Name:</label>
                        <div class="form-icon relative mt-2">
                            <i data-feather="user-check" class="size-4 absolute top-3 start-4"></i>
                            <input type="text" v-model="last_name"
                                   class="form-input ps-12 w-full py-2 px-3 h-10 bg-transparent dark:bg-slate-900 dark:text-slate-200 rounded outline-none border border-gray-200 focus:border-green-600 dark:border-gray-800 dark:focus:border-green-600 focus:ring-0"
                                   placeholder="Last Name" id="last_name" name="last_name">
                        </div>
                    </div>
                    <div>
                        <label class="form-label font-medium">Your Email:</label>
                        <div class="form-icon relative mt-2">
                            <i data-feather="mail" class="size-4 absolute top-3 start-4"></i>
                            <input type="email" v-model="email"
                                   class="form-input ps-12 w-full py-2 px-3 h-10 bg-transparent dark:bg-slate-900 dark:text-slate-200 rounded outline-none border border-gray-200 focus:border-green-600 dark:border-gray-800 dark:focus:border-green-600 focus:ring-0"
                                   placeholder="Email" id="email" name="email">
                        </div>
                    </div>


                    <div class="grid grid-cols-1 gap-5">
                        <div>
                            <label class="form-label font-medium">Phone No. :</label>
                            <div class="flex items-center mt-2">
                                <input name="phone_prefix" id="phone_prefix" type="text"
                                       value="+998"
                                       readonly
                                       class="form-input w-20 h-10 bg-transparent dark:bg-slate-900 dark:text-slate-200 rounded-l-md border border-gray-200 focus:border-green-600 dark:border-gray-800 dark:focus:border-green-600 focus:ring-0 text-center"/>
                                <input name="number" id="number" type="text" v-model="phone_number"
                                       class="form-input ps-3 w-full py-2 h-10 bg-transparent dark:bg-slate-900 dark:text-slate-200 rounded-r-md border border-gray-200 focus:border-green-600 dark:border-gray-800 dark:focus:border-green-600 focus:ring-0"
                                       placeholder="Phone :">
                            </div>
                        </div>
                    </div><!--end grid-->

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
                    <h5 class="text-lg font-semibold mb-4">Change password :</h5>
                    <form id="send-verification" method="POST">
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
    </div>
</template>

<script>
import {ref, watch} from "vue";

export default {
    setup() {
        //notification
        const name = ref('');
        const showNotification = ref(false);
        const message = ref('');
        const typeClass = ref('');
        //notification


        const last_name = ref();
        const first_name = ref();
        const email = ref();
        const phone_number = ref();
        const InputData = async () => {
            try {
                const response = await axios.patch(
                    "http://localhost:8080/profile/update",
                    {
                        last_name: last_name.value,
                        first_name: first_name.value,
                        email: email.value,
                        phone_number: phone_number.value,
                    },
                    {
                        headers: {
                            'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
                        },
                    }
                );
                // Javobni tekshirish
                if (response.data.status === 'success') {
                    showNotification.value = true;
                    message.value = 'Profile updated successfully!';
                    typeClass.value = 'success';


                    last_name.value = '';
                    first_name.value = '';
                    email.value = '';
                    phone_number.value = '';


                    setTimeout(() => {
                        showNotification.value = false;
                    }, 5000);
                } else if(response.data.status === 'error') {
                    console.log('email oldin bor edi')
                    showNotification.value = true;
                    message.value = 'Error updating profile.';
                    typeClass.value = 'error';


                    last_name.value = '';
                    first_name.value = '';
                    email.value = '';
                    phone_number.value = '';

                    setTimeout(() => {
                        showNotification.value = false;
                    }, 5000);
                }
            } catch (error) {
                showNotification.value = true;
                message.value = 'An error occurred.';
                typeClass.value = 'error';

                setTimeout(() => {
                    showNotification.value = false;
                }, 5000);
            }
        };


        return {
            last_name,
            first_name,
            email,
            phone_number,
            InputData,
            showNotification,
            message,
            typeClass,
        }

    }
}
</script>

<style scoped>
.notification {
    padding: 15px;
    border-radius: 5px;
    color: #fff;
    position: fixed;
    top: 20px;
    right: 20px;
    z-index: 1000;
    transition: opacity 0.3s ease;
}

.success {
    background-color: green;
}

.error {
    background-color: red;
}
</style>
