import "./bootstrap";
import { createApp } from "vue";
import Index from "./components/Index.vue";
import AppHeader from "./components/partials/AppHeader.vue";
import AppFooter from "./components/partials/AppFooter.vue";

/**
 * header
 */
const Kopf = createApp({});
Kopf.component('Kopf', AppHeader)
Kopf.mount('#kopf')

/**
 * footer
 */
const Fuß = createApp({});
Fuß.component('Fuß', AppFooter)
Fuß.mount('#fuß')

/**
 * index
 */
const index = createApp({});
index.component('Index', Index);
index.mount('#index');