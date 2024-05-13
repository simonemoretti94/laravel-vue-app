<script>
import { state } from '../state.js';
import AppHeader from './partials/AppHeader.vue';
import AppMain from './partials/index/AppMain.vue';
import AppFooter from './partials/AppFooter.vue';

export default {
    name: 'Index',
    //emits: [''],
    components: {
        AppHeader,
        AppMain,
        AppFooter,

    },
    data() {

        return {
            state,
        }
    },
    props: { info: String, posts: Object, post: Object },
    methods: {

    },
    mounted() {
        //console.log('info json: ', this.info);
        console.log('posts json: ', this.posts);
        state.posts = this.posts;

    }
}
</script>

<template>
    <AppHeader></AppHeader>
    <AppMain :info="this.info"></AppMain>
    <AppFooter></AppFooter>
</template>

<style scoped></style>