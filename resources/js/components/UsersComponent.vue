<template>
    <div class="container bg-white p-4 rounded">
        <div class="row">
            <div class="col-12">
                <h4 class="opensans text-center">Пользователи</h4>
            </div>
        </div>
        <div class="mt-4">
            <div class="row" v-for="user in users">
                <div class="col-3">
                    {{ user.name}}
                </div>
                <div class="col-3">
                    {{user.email}}
                </div>
            </div>
        </div>

        <router-link to="/user_create">
            <div class="position-fixed add-widget bg-success text-white">
                <i class="fas fa-user-plus fa-lg"></i>
            </div>
        </router-link>
    </div>
</template>

<script>
    export default {
        data: function () {
            return {
                storage_url: window.location.origin,
                users: [],
            }
        },

        mounted() {
            this.update();
        },

            methods: {
                update: function () {
                    axios.get('/getUsers').then((response) => {
                        this.users = response.data;
                    });

                },
            }
    }
</script>

<style scoped>

</style>