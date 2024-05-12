<script>
import { state } from '../../state';

export default {
    name: 'MainContent',
    data() {
        return {
            state,
        }
    },
    props: {
        info: String,
    }
}
</script>

<template>
    <div class="cowntainer">
        <h1 class="m-1 border border-1 text-center">{{ info }} to my vue {{ state.greetings }}!</h1>
        <div class="row">
            <div class="table-responsive-lg mt-2 px-2">
                <table class="table table-secondary">
                    <thead>
                        <tr>
                            <th scope="col">Column 1</th>
                            <th scope="col">Column 2</th>
                            <th scope="col">Column 3</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="">
                            <td scope="row">R1C1</td>
                            <td>R1C2</td>
                            <td>R1C3</td>
                        </tr>
                        <tr class="">
                            <td scope="row">Item</td>
                            <td>Item</td>
                            <td>Item</td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <div v-for="post in state.posts" class="col-xl-2 col-md-6 col-sm-6 p-1">
                <div>
                    <p>{{ post.title }}</p>
                    <p>{{ post.description }}</p>
                </div>
            </div>


        </div>
    </div>
</template>

<style scoped>
.row {
    margin-left: 0;
}
</style>