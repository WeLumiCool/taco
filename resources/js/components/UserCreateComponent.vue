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
        <form class="row mt-5" id="create_user" method="POST">
            <!--<input type="hidden" name="_token" :value="csrf">-->
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
                            <input type="text" name="name" id="name" class="form-control" placeholder="ФИО" required>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="md-form mt-0">
                            <input type="text" name="email" id="email" class="form-control" placeholder="Email" v-on:blur="checkEmail" required>
                            <span class="text-danger small" id="email-error" style="display: none;">Такой Email уже существует</span>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="md-form mt-0">
                            <input type="text" name="phone" id="phone" class="form-control" v-on:blur="checkPhone" onkeypress='return event.charCode >= 48 && event.charCode <= 57 || event.charCode === 43' placeholder="Номер телефона" required>
                            <span class="text-danger small" id="phone-error" style="display: none;">Такой Номер телефона уже существует</span>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="md-form mt-0">
                            <input type="text" name="company" id="company" class="form-control" placeholder="Компания" required>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="md-form mt-0">
                            <input type="text" name="position" id="position" class="form-control" placeholder="Должность" required>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="md-form mt-0">
                            <input type="text" name="password" id="password" class="form-control" placeholder="Пароль" required>
                        </div>
                    </div>
                    <!--<div class="col-6">-->
                        <!--<div class="md-form mt-0">-->
                            <!--<input type="text" class="form-control" placeholder="">-->
                        <!--</div>-->
                    <!--</div>-->
                </div>

                <div type="submit" class="btn-success btn position-absolute" style="bottom: 5%; right: 5%;" @click="UserStore">Сохранить</div>
            </div>
        </form>

    </div>
</template>

<script>
    export default {
        data: function () {
            return {
                storage_url: window.location.origin,
                csrf: document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
                users: [],
            }
        },

        methods: {
            avatar: function () {
                var btn = document.getElementById('file-label');
                btn.classList.add('update-success');
                btn.childNodes[2].innerHTML = 'Файл выбран';
            },

            checkEmail: function () {
                var btn = document.getElementById('email');

                axios.post('/EmailCheck',{
                    email: btn.value
                }).then((response) => {
                    if (response.data == 1)
                    {
                        document.getElementById('email').style.borderBottom = '1px solid #FF0006';
                        document.getElementById('email-error').style.display = 'block';
                    }
                    else
                    {
                        document.getElementById('email').style.borderBottom = '1px solid #00e25b';
                        document.getElementById('email-error').style.display = 'none';
                    }
                });
            },

            checkPhone: function () {
                var btn = document.getElementById('phone');

                axios.post('/PhoneCheck',{
                    phone: btn.value
                }).then((response) => {
                    if (response.data == 1)
                    {
                        document.getElementById('phone').style.borderBottom = '1px solid #FF0006';
                        document.getElementById('phone-error').style.display = 'block';
                    }
                    else
                    {
                        document.getElementById('phone').style.borderBottom = '1px solid #00e25b';
                        document.getElementById('phone-error').style.display = 'none';
                    }
                });
            },

            UserStore: function () {
                let formData = new FormData;
                formData.set('name', document.getElementById('name').value);
                formData.set('email', document.getElementById('email').value);
                formData.set('phone', document.getElementById('phone').value);
                formData.set('company', document.getElementById('company').value);
                formData.set('position', document.getElementById('position').value);
                formData.set('password', document.getElementById('password').value);
                formData.set('avatar', document.getElementById('file').files[0]);
                formData.set('type', '1');
                axios.post('/UserStore', formData).then((response) => {
                    this.$fire({
                        position: 'top-end',
                        icon: 'success',
                        title: 'Пользователь создан',
                        showConfirmButton: false,
                        backdrop: false,
                        timer: 1500
                    })
                });
            }

        }
    }
</script>

<style scoped>

</style>