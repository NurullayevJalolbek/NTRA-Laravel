<template>

    <div class="flex space-x-4">
        <button id="myAdsButton" @click="UserCreatedAds"
                class="flex items-center py-1 px-4 dark:text-white/70 hover:text-green-600 dark:hover:text-white">
            <i class="mdi mdi-home-outline me-2"></i>
            <span>E'lonlarim</span>
        </button>

        <button id="savedAdsButton" @click="UserSaved"
                class="flex items-center py-1 px-4 dark:text-white/70 hover:text-green-600 dark:hover:text-white">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                 fill="currentColor" class="bi bi-bookmark" viewBox="0 0 16 16">
                <path
                    d="M2 2a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v13.5a.5.5 0 0 1-.777.416L8 13.101l-5.223 2.815A.5.5 0 0 1 2 15.5zm2-1a1 1 0 0 0-1 1v12.566l4.723-2.482a.5.5 0 0 1 .554 0L13 14.566V2a1 1 0 0 0-1-1z"/>
            </svg>
            <span>Saqlanmalar</span>
        </button>
    </div>


    <div v-if="currentTab === 'saved'" class="grid lg:grid-cols-3 md:grid-cols-2 mt-6 gap-6">
        <div v-for="ad in SavedAds"
             class="group rounded-xl bg-white dark:bg-slate-900 shadow hover:shadow-xl dark:hover:shadow-xl dark:shadow-gray-700 dark:hover:shadow-gray-700 overflow-hidden ease-in-out duration-500">
            <div class="relative">
                <!--                <img src="{{(new \App\Actions\DisplayAdImage())($ad )}}" alt="">-->


                <div class="absolute top-4 end-4">
                    <form @submit.prevent="BookmarkDelete" class="inline-block">

                        <input type="hidden" :data-ad-id="ad.id" :data-name="ad_id">
                        <button style="background: none; border: none; cursor: pointer;"
                                @click.prevent="BookmarkDelete">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="red" viewBox="0 0 24 24"
                                 stroke-width="1.5" stroke="red" class="size-6">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                      d="M17.593 3.322c1.1.128 1.907 1.077 1.907 2.185V21L12 17.25 4.5 21V5.507c0-1.108.806-2.057 1.907-2.185a48.507 48.507 0 0 1 11.186 0Z"/>
                            </svg>
                        </button>
                    </form>
                </div>


            </div>
            <div class="p-6">
                <div class="pb-6">
                    <a :href="`/ads/${ad.id}`"
                       class="text-lg hover:text-green-600 font-medium ease-in-out duration-500">
                        {{ ad.title }}
                    </a>

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
                        <span>{{ad.gender}}</span>
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
                        <p class="text-lg font-medium">{{ad.price}}</p>
                    </li>


                </ul>
            </div>
        </div><!--end property content-->
    </div>



        <div v-if="currentTab === 'created'" class="grid lg:grid-cols-3 md:grid-cols-2 mt-6 gap-6">
            <div v-for="createdAd in CreatedAds"
                class="group rounded-xl bg-white dark:bg-slate-900 shadow hover:shadow-xl dark:hover:shadow-xl dark:shadow-gray-700 dark:hover:shadow-gray-700 overflow-hidden ease-in-out duration-500">
                <div class="relative">
<!--                    <img src="  {{(new \App\Actions\DisplayAdImage())($ad)}}" alt="">-->

<!--                    <div class="absolute top-4 end-4">-->
<!--                        <form action="/profile/ad/delete" method="POST"-->
<!--                              class="inline-block">-->
<!--                            <input type="hidden" name="ad_id" value="{{ $ad->id }}">-->
<!--                            <input type="hidden" name="user_id"-->
<!--                                   value="{{ Auth::user()->id }}">-->

<!--                            <button-->
<!--                                style="background: none; border: none; cursor: pointer;">-->
<!--                                <svg xmlns="http://www.w3.org/2000/svg" fill="none"-->
<!--                                     viewBox="0 0 24 24" stroke-width="1.5"-->
<!--                                     stroke="red" class="size-6">-->
<!--                                    <path stroke-linecap="round"-->
<!--                                          stroke-linejoin="round"-->
<!--                                          d="m14.74 9-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 0 1-2.244 2.077H8.084a2.25 2.25 0 0 1-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 0 0-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 0 1 3.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 0 0-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 0 0-7.5 0"/>-->
<!--                                </svg>-->
<!--                            </button>-->
<!--                        </form>-->
<!--                    </div>-->


                </div>
                <div class="p-6">
                    <div class="pb-6">
                        <a :href="`/ads/${createdAd.id}`"
                           class="text-lg hover:text-green-600 font-medium ease-in-out duration-500">
                            {{ createdAd.title }}
                        </a>

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
                            <span>{{createdAd.gender}}</span>
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
                            <p class="text-lg font-medium">{{ createdAd.price }}</p>
                        </li>


                    </ul>
                </div>
            </div><!--end property content-->
        </div>
</template>
<script>
import {ref} from "vue";
import axios from "axios";

export default {

    setup() {
        const currentTab = ref();


        const SavedAds = ref([]);
        const CreatedAds = ref();

        const UserSaved = () => {
            axios.get("http://localhost:8080/user/saved/ads")
                .then((response) => {
                    SavedAds.value = response.data.ads;
                })
                .catch((error) => {
                    console.log(error);
                });
            currentTab.value = 'saved';

        }

        const ad_id = ref('');
        const BookmarkDelete = (event) => {
            const form = event.target.closest('form');
            ad_id.value = form.querySelector('input[data-ad-id]').getAttribute('data-ad-id');

            axios.post("http://localhost:8080/bookmark/delete", {
                ad_id: ad_id.value,
            }).then(response => {
                if (response.data.success) {
                    ad_id.value = '';
                }
            }).catch(error => {
                console.error("Xato yuz berdi:", error);
            })
        }
        setInterval( UserSaved, 1000);







        const UserCreatedAds = () => {
            SavedAds.value = [];
            axios.get("http://localhost:8080/user/created/ads")
                .then((response) => {
                    CreatedAds.value = response.data.ads;
                })
                .catch((error) => {
                    console.log(error);
                });
            currentTab.value = 'created';

        }


        return {
            SavedAds,
            UserSaved,
            BookmarkDelete,
            ad_id,
            UserCreatedAds,
            CreatedAds,
            currentTab
        }
    }
}

</script>


<style scoped>

</style>
