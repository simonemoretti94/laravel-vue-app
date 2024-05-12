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
    <main>
        <h1>{{ info }} {{ state.greetings }}!</h1>
    </main>
</template>

<style scoped>
main {
    height: calc(100vh - 60px);
}
</style>