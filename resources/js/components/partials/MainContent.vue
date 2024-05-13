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
                        <tr style="border-bottom: solid 1px blue;">
                            <th scope="col">id</th>
                            <th scope="col">Title</th>
                            <th scope="col">Description</th>
                            <th scope="col">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr v-for="post in state.posts" style="height: 150px;">
                            <td>{{ post.id }}</td>
                            <td>{{ post.title }}</td>
                            <td style="overflow-y:auto;">{{ post.description }}</td>
                            <td>
                                <div class="col-6 mx-auto d-flex flex-column justify-content-evenly">
                                    <button class="btn btn-primary bg-gradient my-1">
                                        <a class="text-white" style="text-decoration: none;"
                                            href="/admin/posts/{Post}">Show</a>
                                    </button>
                                    <button class="btn btn-secondary bg-gradient my-1">
                                        <a class="text-white" style="text-decoration: none;" href="#">Edit</a>
                                    </button>
                                    <button class="btn btn-danger bg-gradient my-1">
                                        <a class="text-white" style="text-decoration: none;" href="#">Delete</a>
                                    </button>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>

        </div>
    </div>
</template>

<style scoped>
.row {
    margin-left: 0;
}
</style>