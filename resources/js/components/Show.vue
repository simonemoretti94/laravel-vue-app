<script>
import { state } from '../state';
import AppHeader from './partials/AppHeader.vue';
import AppFooter from './partials/AppFooter.vue';


export default {
    name: 'Show',
    components: {
        AppHeader,
        AppFooter,
    },
    data() {
        return {
            state,
        }
    },
    props: {
        post: Object,
    },
    mounted() {
        state.post = this.post[0];
    }
}
</script>

<template>
    <AppHeader></AppHeader>
    <main>
        <div class="container">
            <h1 class="text-white">Post id: {{ state.post.id }}</h1>
            <div class="row bg-light mt-3">
                <div>
                    <p>{{ state.post.title }}</p>
                    <p>{{ state.post.description }}</p>
                </div>

            </div>
        </div>
    </main>
    <AppFooter></AppFooter>
</template>

<style scoped>
main {
    background-color: #2c2c2c;
    min-height: 500px;
}
</style>