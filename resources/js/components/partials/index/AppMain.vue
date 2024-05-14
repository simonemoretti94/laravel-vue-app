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
        <section id="index_sidebar">
            <MainSidebar></MainSidebar>
        </section>
        <section id="index_content">
            <MainContent :info="this.info"></MainContent>
        </section>
    </main>
</template>

<style scoped>
main {
    height: calc(100vh - 60px);

    & section#index_sidebar {
        width: calc((100% / 12) * 3);
        border-right: solid 1px black;

        @media screen and (max-width: 900px) {
            width: calc((100% / 12) * 2);
        }

        @media screen and (max-width: 600px) {
            display: none;
        }


    }

    & section#index_content {
        width: calc((100% / 12) * 9);
        height: 100%;
        overflow-y: scroll;
        overflow-x: hidden;

        @media screen and (max-width: 900px) {
            width: calc((100% / 12) * 10);
        }

        @media screen and (max-width: 900px) {
            width: 100%;
            ;
        }
    }
}
</style>