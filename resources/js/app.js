import "./bootstrap";
import { createApp } from "vue";
import Index from "./components/Index.vue";
import Show from "./components/Show.vue";

/**
 * index
 */
const index = createApp({});
index.component('Index', Index);
index.mount('#index');

/**
 * show
 */
const show = createApp({});
show.component('Show', Show);
show.mount('#show');