<script>
import { state } from '../../../state.js';
import MainSidebar from './MainSidebar.vue';
import MainContent from './MainContent.vue';

export default {
    name: 'AppMain',
    data() {
        return {
            state,
        }
    },
    components: {
        MainSidebar,
        MainContent,
    },
    props: { info: String, },
}
</script>

<template>

    <main class="d-flex">
        <section id="sidebar" class="col-3">
            <MainSidebar></MainSidebar>
        </section>
        <section id="content" class="col-9">
            <MainContent :info="this.info"></MainContent>
        </section>
    </main>
</template>

<style scoped>
main {
    height: calc(100vh - 60px);

    & section#sidebar {
        border-right: solid 1px black;
    }

    & section#content {
        height: 100%;
        overflow-y: scroll;
        overflow-x: hidden;
    }
}
</style>