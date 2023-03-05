import {createApp} from "vue";
import {createPinia} from "pinia";

import App from "./App.vue";
import router from "./router";
import Pusher from "pusher-js";
import "./assets/main.css";

const app = createApp(App);

const pusher = new Pusher("local", {
    cluster: "mt1"
})

const channel = pusher.subscribe('weather-channel');

channel.bind('weather-event', (data: any) => {
    console.log(data)
})

app.use(createPinia());
app.use(router);
app.mount("#app");
