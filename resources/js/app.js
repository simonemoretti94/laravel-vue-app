import "./bootstrap";
import { createApp } from "vue";
import Index from "./components/Index.vue";
import AppHeader from "./components/partials/AppHeader.vue";
import AppFooter from "./components/partials/AppFooter.vue";
import MainSidebar from "./components/partials/index/MainSidebar.vue";
import AppShow from "./components/partials/show/AppShow.vue";

/**
 * sidebar
 */
const sideBar = createApp({});
sideBar.component('Sidebar', MainSidebar);
sideBar.mount('#sidebar');

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
show.component('Show', AppShow);
show.mount('#show');

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