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
            fetchedPosts: [],
            fetchControl: false,
        }
    },
    props: {
        post: Object,
    },
    created() {
        // axios.get('/api/post/{id}')
        //     .then(response => {
        //         console.log('response: ', response);
        //         this.fetchedPosts.push(response.data.data);
        //         this.fetchControl = true;
        //     })
        //     .catch(error => {
        //         console.log("Error", error)
        //     });
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
            <h1 class="text-white">Post id: {{ post[0].id }}</h1>
            <div class="row bg-light mt-3">
                <div>
                    <p>{{ post[0].title }}</p>
                    <p>{{ post[0].description }}</p>
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