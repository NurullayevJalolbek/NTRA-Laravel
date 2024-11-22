
import './bootstrap';
import { createApp } from 'vue';

import Profile from './components/Profile-Setting.vue';
import IndexFilter from './components/IndexFilter.vue';
import ProfileSavedAds  from "./components/ProfileSavedAds.vue";

const app = createApp(Profile);
const app2 = createApp(IndexFilter);
const app3 = createApp(ProfileSavedAds);


app.mount('#vue-chat');
app2.mount('#IndexFilter');
app3.mount('#ProfileSavedAds');
