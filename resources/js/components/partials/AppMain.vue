<script>
import { state } from '../../state.js';

export default {
    name: 'AppMain',
    data() {
        return {
            state,
        }
    },
    props: { info: String, },
}
</script>

<template>
    <h1>{{ info }} to my vue {{ state.greetings }}!</h1>
    <main class="d-flex">
        <section id="sidebar" class="col-3">
            <nav class="nav justify-content-center flex-column">
                <a class="nav-link active" href="#" aria-current="page">Active link</a>
                <a class="nav-link" href="#">Link</a>
                <a class="nav-link disabled" href="#">Disabled link</a>
            </nav>

        </section>
        <section id="content" class="col-9">
            <div class="cowntainer">
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


                </div>
            </div>
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
        & .row {
            margin-left: 0;
        }
    }
}
</style>