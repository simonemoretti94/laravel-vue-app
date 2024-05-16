<script>
import { state } from '../../../state.js';

export default {
    name: 'AppShow',
    data() {
        return {
            state,
            postDecoded: [],
        }
    },
    props: {
        post: Object,
    },
    created() {
        console.log('post: ', this.post);
        this.postDecoded = this.post[0];
        console.log('post decoded: ', this.postDecoded);
    }
}
</script>

<template>

    <main>
        <div class="container">
            <h1 class="text-white">Post id: {{ postDecoded.id }}</h1>
            <div class="row bg-light mt-3">
                <div>
                    <p>{{ postDecoded.title }}</p>
                    <p>{{ postDecoded.description }}</p>
                </div>

            </div>

        </div>
    </main>
</template>