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
            temp: [],
            controlBool: false,
        }
    },
    created() {
        axios.get('/api/posts/post9')
            .then(response => {
                //console.log('post9: ', response);
                this.temp.push(response.data.data);
                this.controlBool = true;
            })
            .catch(error => {
                console.log("Error", error)
            });
    },
    mounted() {
        setTimeout(() => {
            console.log('test api post id 9: ', this.temp[0]);
        }, 5000);
    }
}
</script>

<template>
    <AppHeader></AppHeader>
    <AppMain></AppMain>
    <!-- <div>
        test api <br>
        {{ temp[0] }}
        <br>
    </div> -->
    <AppFooter></AppFooter>
</template>

<style scoped></style>