import "./bootstrap";
import { createApp } from "vue";
import Index from "./components/Index.vue";

const index = createApp({});

index.component('Index', Index);

index.mount('#index');
