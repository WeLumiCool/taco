<template>
    <div class="container bg-white p-4 rounded">
        <div class="row">
            <div class="col-4">
                <router-link to="/users">
                    <p class="text-dark">Назад к списку</p>
                </router-link>
            </div>
            <div class="col-8">
                <h4 class="opensans text-center">Создание пользователя</h4>
            </div>
        </div>
        <hr>
        <form class="row mt-5" id="create_user">
            <div class="col-4 text-center border-right">
                <img class="img-fluid mb-4" style="border-radius: 50%;" :src="storage_url + '/storage/users/default.png'" alt="">
                <div class="example-2">
                    <div class="form-group">
                        <input type="file" name="file" id="file" class="input-file" v-on:change="avatar()">
                        <label for="file" class="btn btn-tertiary js-labelFile" id="file-label">
                            <i class="icon fa fa-check"></i>
                            <span class="js-fileName">Фото профиля</span>
                        </label>
                    </div>
                </div>
            </div>
            <div class="col-8 px-4 position-relative">
                <div class="row">
                    <div class="col-6">
                        <div class="md-form mt-0">
                            <input type="text" name="name" class="form-control" placeholder="ФИО">
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="md-form mt-0">
                            <input type="text" name="email" class="form-control" placeholder="Email">
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="md-form mt-0">
                            <input type="text" name="phone" class="form-control" onkeypress='return event.charCode >= 48 && event.charCode <= 57 || event.charCode === 43' placeholder="Номер телефона">
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="md-form mt-0">
                            <input type="text" name="company" class="form-control" placeholder="Компания">
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="md-form mt-0">
                            <input type="text" name="position" class="form-control" placeholder="Должность">
                        </div>
                    </div>
                    <!--<div class="col-6">-->
                        <!--<div class="md-form mt-0">-->
                            <!--<input type="text" class="form-control" placeholder="">-->
                        <!--</div>-->
                    <!--</div>-->
                </div>

                <div class="btn-success btn position-absolute" style="bottom: 5%; right: 5%;" @click="createUser">Сохранить</div>
            </div>
        </form>

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

        methods: {
            avatar: function () {
                var btn = document.getElementById('file-label');
                btn.classList.add('update-success');
                btn.childNodes[2].innerHTML = 'Файл выбран';
            },

            createUser: function () {
                var form = document.querySelector('#create_user');
                var data = new FormData(form);
                console.log(data);
                axios.post('/UserStore',{
                    data: data
                }).then((response) => {
                    alert('success');
                });
            }
        }
    }
</script>

<style scoped>

</style>