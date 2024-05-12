<script>
import { state } from '../../state.js';
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
            <!-- <div class="cowntainer">
                <h1 class="m-1 border border-1 text-center">{{ info }} to my vue {{ state.greetings }}!</h1>
                <div class="row">
                    <div class="col-xl-2 col-md-6 col-sm-6 p-1">
                        <div>
                            <p>lorem top</p>
                            <p>lorem bottom</p>
                        </div>
                    </div>
                    <div class="col-xl-2 col-md-6 col-sm-6 p-1">
                        <div>
                            <p>lorem top</p>
                            <p>lorem bottom</p>
                        </div>
                    </div>
                    <div class="col-xl-2 col-md-6 col-sm-6 p-1">
                        <div>
                            <p>lorem top</p>
                            <p>lorem bottom</p>
                        </div>
                    </div>
                    <div class="col-xl-2 col-md-6 col-sm-6 p-1">
                        <div>
                            <p>lorem top</p>
                            <p>lorem bottom</p>
                        </div>
                    </div>
                    <div class="col-xl-2 col-md-6 col-sm-6 p-1">
                        <div>
                            <p>lorem top</p>
                            <p>lorem bottom</p>
                        </div>
                    </div>
                    <div class="col-xl-2 col-md-6 col-sm-6 p-1">
                        <div>
                            <p>lorem top</p>
                            <p>lorem bottom</p>
                        </div>
                    </div>
                    <div class="col-xl-2 col-md-6 col-sm-6 p-1">
                        <div>
                            <p>lorem top</p>
                            <p>lorem bottom</p>
                        </div>
                    </div>
                    <div class="col-xl-2 col-md-6 col-sm-6 p-1">
                        <div>
                            <p>lorem top</p>
                            <p>lorem bottom</p>
                        </div>
                    </div>
                    <div class="col-xl-2 col-md-6 col-sm-6 p-1">
                        <div>
                            <p>lorem top</p>
                            <p>lorem bottom</p>
                        </div>
                    </div>
                    <div class="col-xl-2 col-md-6 col-sm-6 p-1">
                        <div>
                            <p>lorem top</p>
                            <p>lorem bottom</p>
                        </div>
                    </div>
                    <div class="col-xl-2 col-md-6 col-sm-6 p-1">
                        <div>
                            <p>lorem top</p>
                            <p>lorem bottom</p>
                        </div>
                    </div>
                    <div class="col-xl-2 col-md-6 col-sm-6 p-1">
                        <div>
                            <p>lorem top</p>
                            <p>lorem bottom</p>
                        </div>
                    </div>
                    <div class="col-xl-2 col-md-6 col-sm-6 p-1">
                        <div>
                            <p>lorem top</p>
                            <p>lorem bottom</p>
                        </div>
                    </div>
                    <div class="col-xl-2 col-md-6 col-sm-6 p-1">
                        <div>
                            <p>lorem top</p>
                            <p>lorem bottom</p>
                        </div>
                    </div>
                    <div class="col-xl-2 col-md-6 col-sm-6 p-1">
                        <div>
                            <p>lorem top</p>
                            <p>lorem bottom</p>
                        </div>
                    </div>
                    <div class="col-xl-2 col-md-6 col-sm-6 p-1">
                        <div>
                            <p>lorem top</p>
                            <p>lorem bottom</p>
                        </div>
                    </div>
                    <div class="col-xl-2 col-md-6 col-sm-6 p-1">
                        <div>
                            <p>lorem top</p>
                            <p>lorem bottom</p>
                        </div>
                    </div>
                    <div class="col-xl-2 col-md-6 col-sm-6 p-1">
                        <div>
                            <p>lorem top</p>
                            <p>lorem bottom</p>
                        </div>
                    </div>
                    <div class="col-xl-2 col-md-6 col-sm-6 p-1">
                        <div>
                            <p>lorem top</p>
                            <p>lorem bottom</p>
                        </div>
                    </div>
                    <div class="col-xl-2 col-md-6 col-sm-6 p-1">
                        <div>
                            <p>lorem top</p>
                            <p>lorem bottom</p>
                        </div>
                    </div>
                    <div class="col-xl-2 col-md-6 col-sm-6 p-1">
                        <div>
                            <p>lorem top</p>
                            <p>lorem bottom</p>
                        </div>
                    </div>
                    <div class="col-xl-2 col-md-6 col-sm-6 p-1">
                        <div>
                            <p>lorem top</p>
                            <p>lorem bottom</p>
                        </div>
                    </div>
                    <div class="col-xl-2 col-md-6 col-sm-6 p-1">
                        <div>
                            <p>lorem top</p>
                            <p>lorem bottom</p>
                        </div>
                    </div>
                    <div class="col-xl-2 col-md-6 col-sm-6 p-1">
                        <div>
                            <p>lorem top</p>
                            <p>lorem bottom</p>
                        </div>
                    </div>
                    <div class="col-xl-2 col-md-6 col-sm-6 p-1">
                        <div>
                            <p>lorem top</p>
                            <p>lorem bottom</p>
                        </div>
                    </div>
                    <div class="col-xl-2 col-md-6 col-sm-6 p-1">
                        <div>
                            <p>lorem top</p>
                            <p>lorem bottom</p>
                        </div>
                    </div>
                    <div class="col-xl-2 col-md-6 col-sm-6 p-1">
                        <div>
                            <p>lorem top</p>
                            <p>lorem bottom</p>
                        </div>
                    </div>
                    <div class="col-xl-2 col-md-6 col-sm-6 p-1">
                        <div>
                            <p>lorem top</p>
                            <p>lorem bottom</p>
                        </div>
                    </div>
                    <div class="col-xl-2 col-md-6 col-sm-6 p-1">
                        <div>
                            <p>lorem top</p>
                            <p>lorem bottom</p>
                        </div>
                    </div>
                    <div class="col-xl-2 col-md-6 col-sm-6 p-1">
                        <div>
                            <p>lorem top</p>
                            <p>lorem bottom</p>
                        </div>
                    </div>
                    <div class="col-xl-2 col-md-6 col-sm-6 p-1">
                        <div>
                            <p>lorem top</p>
                            <p>lorem bottom</p>
                        </div>
                    </div>
                    <div class="col-xl-2 col-md-6 col-sm-6 p-1">
                        <div>
                            <p>lorem top</p>
                            <p>lorem bottom</p>
                        </div>
                    </div>
                    <div class="col-xl-2 col-md-6 col-sm-6 p-1">
                        <div>
                            <p>lorem top</p>
                            <p>lorem bottom</p>
                        </div>
                    </div>
                    <div class="col-xl-2 col-md-6 col-sm-6 p-1">
                        <div>
                            <p>lorem top</p>
                            <p>lorem bottom</p>
                        </div>
                    </div>
                    <div class="col-xl-2 col-md-6 col-sm-6 p-1">
                        <div>
                            <p>lorem top</p>
                            <p>lorem bottom</p>
                        </div>
                    </div>
                    <div class="col-xl-2 col-md-6 col-sm-6 p-1">
                        <div>
                            <p>lorem top</p>
                            <p>lorem bottom</p>
                        </div>
                    </div>
                    <div class="col-xl-2 col-md-6 col-sm-6 p-1">
                        <div>
                            <p>lorem top</p>
                            <p>lorem bottom</p>
                        </div>
                    </div>
                    <div class="col-xl-2 col-md-6 col-sm-6 p-1">
                        <div>
                            <p>lorem top</p>
                            <p>lorem bottom</p>
                        </div>
                    </div>
                    <div class="col-xl-2 col-md-6 col-sm-6 p-1">
                        <div>
                            <p>lorem top</p>
                            <p>lorem bottom</p>
                        </div>
                    </div>
                    <div class="col-xl-2 col-md-6 col-sm-6 p-1">
                        <div>
                            <p>lorem top</p>
                            <p>lorem bottom</p>
                        </div>
                    </div>


                </div>
            </div> -->
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