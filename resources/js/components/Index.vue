<script>
import { state } from '../state.js';
import AppHeader from './partials/AppHeader.vue';
import AppMain from './partials/index/AppMain.vue';
import AppFooter from './partials/AppFooter.vue';

export default {
    name: 'Index',
    components: {
        AppHeader,
        AppMain,
        AppFooter,

    },
    data() {

        return {
            state,
        }
    }
}
</script>

<template>
    <AppHeader></AppHeader>
    <AppMain></AppMain>
    <AppFooter></AppFooter>
</template>

<style scoped></style>