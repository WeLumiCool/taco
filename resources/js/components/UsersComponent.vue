<template>
    <div class="container bg-white p-4 rounded">
        <div class="row">
            <div class="col-12">
                <h4 class="opensans text-center font-weight-bold">Пользователи</h4>
            </div>
        </div>
        <div class="mt-4">
            <div class="row border-bottom mb-2 pb-3">
                <div class="col-3 font-weight-bold">
                    ФИО
                </div>
                <div class="col-2 font-weight-bold">
                    Email
                </div>
                <div class="col-2 font-weight-bold">
                    Номер телефона
                </div>
                <div class="col-2 font-weight-bold">
                    Компания
                </div>
                <div class="col-2 font-weight-bold">
                    Должность
                </div>
                <div class="col-1 font-weight-bold">
                    Действия
                </div>
            </div>
            <div class="row queue-point py-2 mb-2" v-for="user in users">
                <div class="col-3 font-size-14 d-flex align-items-center">
                    {{ user.name}}
                </div>
                <div class="col-2 font-size-14 d-flex align-items-center">
                    {{user.email}}
                </div>
                <div class="col-2 font-size-14 d-flex align-items-center">
                    {{user.phone}}
                </div>
                <div class="col-2 font-size-14 d-flex align-items-center">
                    {{user.company}}
                </div>
                <div class="col-2 font-size-14 d-flex align-items-center">
                    {{user.position}}
                </div>
                <div class="col-1 font-size-14 d-flex">
                    <div class="bg-warning px-2 py-1 rounded "><i class="fas fa-user-edit text-white"></i></div>
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