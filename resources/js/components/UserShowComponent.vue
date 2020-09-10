<template>
    <div class="container">
        <div class="text-center mb-3">
            <p class="font-size-20 font-weight-bold">Анкета пользователя</p>
        </div>
        <div class="row bg-white p-4 rounded">
            <div class="col-3 border-right text-center">
                <div style="width:200px; height:200px; background-size: cover; background-position: center; background-repeat: no-repeat; border-radius: 50%;" v-bind:style="{ 'backgroundImage' : 'url(' + storage_url + '/storage/' + user.avatar +')'}"></div>
            </div>
            <div class="col-9 px-5">
                <p class="font-size-18 font-weight-normal">{{user.name}}</p>
                <p class="font-size-16 font-weight-light mb-1">Email: {{user.email}}</p>
                <p class="font-size-16 font-weight-light mb-1">Номер телефона: {{user.phone}}</p>
                <p class="font-size-16 font-weight-light mb-1">Компания: {{user.company}}</p>
                <p class="font-size-16 font-weight-light mb-1">Должность: {{user.position}}</p>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        props: [
            'id',
        ],
        data: function () {
            return {
                storage_url: window.location.origin,
                user: null
            }
        },

        mounted() {
            this.update();
        },

        methods: {
            update: function () {
                axios.get('/getUser/' + this.id).then((response) => {
                    this.user = response.data;
                });
            }
        }
    }
</script>

<style scoped>

</style>