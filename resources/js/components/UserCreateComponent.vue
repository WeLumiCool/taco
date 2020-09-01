<template>
    <div class="container bg-white p-4 rounded">
        <div class="row">
            <div class="col-12">
                <h4 class="opensans text-center">Создание пользователя</h4>
            </div>
        </div>
        <div class="row">
            <div class="col-6">
                <div class="md-form">
                    <i class="fas fa-envelope prefix"></i>
                    <input type="text" id="inputIconEx1" class="form-control">
                    <label for="inputIconEx1">E-mail address</label>
                </div>
            </div>
        </div>

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
    }
</script>

<style scoped>

</style>