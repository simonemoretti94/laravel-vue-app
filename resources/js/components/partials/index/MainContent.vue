<script>
import { state } from '../../../state';

export default {
    name: 'MainContent',
    data() {
        return {
            state,

            fetchControl: false,
            fetchedPosts: [],
        }
    },
    methods: {

    },
    created() {
        axios.get('/api/posts')
            .then(response => {
                console.log('response: ', response);
                this.fetchedPosts.push(response.data.data);
                this.fetchControl = true;
            })
            .catch(error => {
                console.log("Error", error)
            });
    },
    mounted() {
        setTimeout(() => {
            console.log('fetched Posts: ', this.fetchedPosts);
        }, 5000);
    }
}
</script>

<template>
    <div class="container">
        <h1 class="m-1 border border-1 text-center">Welcome to my laravel vue {{ state.greetings }}!</h1>
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
                        <!-- <tr v-if="fetchControl" v-for="post in state.posts" style="height: 150px;" :key="post.id"> -->
                        <tr v-if="fetchControl" v-for="post in fetchedPosts[0]" style="height: 150px;" :key="post.id">
                            <td>{{ post.id }}</td>
                            <td>{{ post.title }}</td>
                            <td style="overflow-y:auto;">{{ post.description }}</td>
                            <td>
                                <div id="col_buttons" class="col-9 mx-auto d-flex flex-column justify-content-evenly">
                                    <button class="btn btn-primary bg-gradient my-1">
                                        <a :id="post.id" class="text-white" style="text-decoration: none;"
                                            :href="`/posts/${post.id}`">Show</a>
                                    </button>
                                    <button class="btn btn-secondary bg-gradient my-1">
                                        <a class="text-white" style="text-decoration: none;"
                                            :href="`/posts/${post.id}/edit`">Edit</a>
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

div#col_buttons {
    @media screen and (max-width: 1300px) {
        width: 100%;
    }
}
</style>