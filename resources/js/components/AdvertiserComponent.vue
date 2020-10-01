<template>
    <div class="container bg-white p-4 rounded" style="min-height: 75vh; overflow-y: auto; overflow-x: hidden;">
        <div class="row">
            <div class="col-12">
                <h4 class="opensans text-center font-weight-bold">Рекламодатели</h4>
            </div>
        </div>
        <div class="mt-4">
            <div class="row border-bottom mb-2 pb-3">
                <div class="col-2">

                </div>
                <div class="col-2 font-weight-bold">
                    ФИО
                </div>
                <div class="col-2 font-weight-bold">
                    Контакты
                </div>
                <div class="col-2 font-weight-bold">
                    Адрес платфоры
                </div>
                <div class="col-2 font-weight-bold">
                    Категория
                </div>
                <div class="col-2 font-weight-bold">
                    Действия
                </div>
            </div>
            <div class="row queue-point py-2 mb-2" v-for="user in users">
                <div class="col-2 d-flex justify-content-center align-items-center">
                    <div class="" style="width: 70px; height: 70px; border-radius: 50%; background-size: cover; background-position: center; background-repeat: no-repeat;" v-bind:style="{ 'backgroundImage' : 'url(' + storage_url + '/storage/' + user.avatar +')'}"></div>
                </div>
                <div class="col-2 font-size-14 d-flex align-items-center">
                    <div>
                        <p class="mb-1">{{ user.name}}</p>
                        <p class="mb-0">{{user.advertiser.name}}</p>

                    </div>
                </div>
                <div class="col-2 font-size-14 d-flex align-items-center">
                    <div>
                    <p class="mb-1">{{user.email}}</p>
                    <p class="mb-0">{{user.phone}}</p>
                    </div>
                </div>
                <div class="col-2 font-size-14 d-flex align-items-center">
                    <a :href="user.advertiser.url_address" target="_blank">Перейти</a>
                </div>
                <div class="col-2 font-size-14 d-flex align-items-center">
                    <div>
                    <p class="mb-1 text-center text-white " v-bind:class="{ 'bg-success':user.advertiser.category.id == 2,  'bg-danger':user.advertiser.category.id == 1  }">{{user.advertiser.category.title}}</p>
                    <p class="mb-0" v-if="user.advertiser.category.id == 2">{{user.advertiser.type.title}}</p>
                    </div>
                </div>
                <div class="col-2 font-size-14 d-flex align-items-center ">
                    <router-link :to="{ name: 'user_show', params: {id: user.id}} ">
                        <div class="bg-warning px-2 py-1 rounded mr-1"><i class="fas fa-user-edit text-white"></i></div>
                    </router-link>
                    <router-link :to="{ name: 'cases', params: {id: user.advertiser.id}}">
                        <div class="bg-danger px-2 py-1 rounded"><i class="fas fa-suitcase text-white"></i></div>
                    </router-link>
                </div>
            </div>
        </div>

        <router-link to="/advertiser_create">
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
                axios.get('/getAdvertisers').then((response) => {
                    this.users = response.data;
                });

            },
        }
    }
</script>

<style scoped>

</style>