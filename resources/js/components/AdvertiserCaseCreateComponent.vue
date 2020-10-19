<template>
    <div class="container">
        <div class="p-2" v-if="type == 2">
            <h4 class="font-size-20 font-weight-bold text-center">Создание кейса (Инстаграм)</h4>

        <div class="row">
            <div class="col-4">
                <p class="font-weight-bold mb-1">Цена</p>
            <div class="md-form mt-0">
                <input type="number" name="price" id="price" class="form-control" placeholder="Цена" v-model="price" required>
            </div>
            </div>
            <div class="col-4">
                <p class="font-weight-bold mb-1">Тип рекламы</p>
                <div class="form-group mt-0">
                    <select class="form-control" name="typeof" id="typeof" v-model="kind">
                        <option value="Сторис">Сторис</option>
                        <option value="Пост (Фото)">Пост (Фото)</option>
                        <option value="Пост (Видео)">Пост (Видео)</option>
                    </select>
                </div>
            </div>
            <div class="col-4 d-flex align-items-center">
                <button class="btn btn-success py-1" @click="CaseStore">Сохранить</button>
            </div>
        </div>
        </div>

        <div class="p-2" v-if="type == 3">
            <h4 class="font-size-20 font-weight-bold text-center">Создание кейса (Tik Tok)</h4>

            <div class="row">
                <div class="col-8">
                    <p class="font-weight-bold mb-1">Цена</p>
                    <div class="md-form mt-0">
                        <input type="number" name="price" id="price" class="form-control" placeholder="Цена" v-model="price" required>
                    </div>
                </div>
                <div class="col-4 d-flex align-items-center">
                    <button class="btn btn-success py-1" @click="CaseStore">Сохранить</button>
                </div>
            </div>
        </div>

        <div class="p-2" v-if="type == 4">
            <h4 class="font-size-20 font-weight-bold text-center">Создание кейса (Youtube)</h4>

            <div class="row">
                <div class="col-3">
                <p class="font-weight-bold mb-1">Цена</p>
                <div class="md-form mt-0">
                    <input type="number" name="price" id="price" class="form-control" placeholder="Цена" v-model="price" required>
                </div>
            </div>
                <div class="col-3">
                    <p class="font-weight-bold mb-1">Название</p>
                    <div class="md-form mt-0">
                        <input type="text" name="name" id="name" class="form-control" placeholder="Название" v-model="name" required>
                    </div>
                </div>
                <div class="col-3">
                    <p class="font-weight-bold mb-1">Описание</p>
                    <div class="md-form mt-0">
                        <input type="text" name="desc" id="desc" class="form-control" placeholder="Описание" v-model="desc" required>
                    </div>
                </div>
                <div class="col-3 d-flex align-items-center">
                    <button class="btn btn-success py-1" @click="CaseStore">Сохранить</button>
                </div>
            </div>
        </div>

        <div class="p-2" v-if="type == 5">
            <h4 class="font-size-20 font-weight-bold text-center">Создание кейса (Вконтакте)</h4>

            <div class="row">
                <div class="col-9">
                    <p class="font-weight-bold mb-1">Цена</p>
                    <div class="md-form mt-0">
                        <input type="number" name="price" id="price" class="form-control" placeholder="Цена" v-model="price" required>
                    </div>
                </div>
                <div class="col-3 d-flex align-items-center">
                    <button class="btn btn-success py-1" @click="CaseStore">Сохранить</button>
                </div>
            </div>
        </div>

        <div class="p-2" v-if="type == 7">
            <h4 class="font-size-20 font-weight-bold text-center">Создание кейса (Вконтакте)</h4>

            <div class="row">
                <div class="col-3">
                    <p class="font-weight-bold mb-1">Цена в будние дни</p>
                    <div class="md-form mt-0">
                        <input type="number" name="price_weekdays" id="price_weekdays" class="form-control" placeholder="Цена в будние дни" v-model="price_weekdays" required>
                    </div>
                </div>
                <div class="col-3">
                    <p class="font-weight-bold mb-1">Цена в выходные дни</p>
                    <div class="md-form mt-0">
                        <input type="number" name="price_weekend" id="price_weekend" class="form-control" placeholder="Цена в выходные дни" v-model="price_weekend" required>
                    </div>
                </div>
                <div class="col-3">
                    <p class="font-weight-bold mb-1">Время</p>
                    <div class="md-form mt-0">
                        <input type="text" name="time" id="time" class="form-control" placeholder="Время" v-model="time" required>
                    </div>
                </div>
                <div class="col-3 d-flex align-items-center">
                    <button class="btn btn-success py-1" @click="CaseStore">Сохранить</button>
                </div>
            </div>
        </div>

        <div class="p-2" v-if="type == 8">
            <h4 class="font-size-20 font-weight-bold text-center">Создание кейса (Вконтакте)</h4>

            <div class="row">
                <div class="col-4">
                    <p class="font-weight-bold mb-1">Время</p>
                    <div class="md-form mt-0">
                        <input type="text" name="time" id="time" class="form-control" placeholder="Время" v-model="time" required>
                    </div>
                </div>
                <div class="col-4">
                    <p class="font-weight-bold mb-1">Тип</p>
                    <div class="md-form mt-0">
                        <input type="text" name="kind" id="kind" class="form-control" placeholder="Тип" v-model="typer" required>
                    </div>
                </div>
                <div class="col-4">
                    <p class="font-weight-bold mb-1">Цена</p>
                    <div class="md-form mt-0">
                        <input type="number" name="price" id="price" class="form-control" placeholder="Цена" v-model="price" required>
                    </div>
                </div>
                <div class="col-4">
                    <p class="font-weight-bold mb-1">Описание</p>
                    <div class="md-form mt-0">
                        <input type="text" name="desc" id="desc" class="form-control" placeholder="Описание" v-model="desc" required>
                    </div>
                </div>
                <div class="col-4">
                    <p class="font-weight-bold mb-1">Категория</p>
                    <div class="form-group mt-0">
                        <select class="form-control" name="typeof" id="typeof" v-model="category">
                            <option value="Реклама">Реклама</option>
                            <option value="Продукт">Продукт</option>
                        </select>
                    </div>
                </div>
                <div class="col-3 d-flex align-items-center">
                    <button class="btn btn-success py-1" @click="CaseStore">Сохранить</button>
                </div>
            </div>
        </div>

        <div class="p-2" v-if="type == 9">
            <h4 class="font-size-20 font-weight-bold text-center">Создание кейса (Онлайн платформы)</h4>

            <div class="row">
                <div class="col-4">
                    <p class="font-weight-bold mb-1">Тип</p>
                    <div class="md-form mt-0">
                        <input type="text" name="type" id="type" class="form-control" placeholder="Тип" v-model="typer" required>
                    </div>
                </div>
                <div class="col-4">
                    <p class="font-weight-bold mb-1">Позиция</p>
                    <div class="md-form mt-0">
                        <input type="text" name="position" id="position" class="form-control" placeholder="Позиция" v-model="position" required>
                    </div>
                </div>
                <div class="col-4">
                    <p class="font-weight-bold mb-1">Платформа</p>
                    <div class="md-form mt-0">
                        <input type="text" name="place" id="place" class="form-control" placeholder="Платформа" v-model="place" required>
                    </div>
                </div>
                <div class="col-4">
                    <p class="font-weight-bold mb-1">Описание</p>
                    <div class="md-form mt-0">
                        <input type="text" name="desc" id="desc" class="form-control" placeholder="Описание" v-model="desc" required>
                    </div>
                </div>
                <div class="col-4">
                    <p class="font-weight-bold mb-1">Цена</p>
                    <div class="md-form mt-0">
                        <input type="number" name="price" id="number" class="form-control" placeholder="Цена" v-model="price" required>
                    </div>
                </div>
                <div class="col-3 d-flex align-items-center">
                    <button class="btn btn-success py-1" @click="CaseStore">Сохранить</button>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        props: [
            'id', 'type', 'case'
        ],
        data: function () {
            return {
                csrf: document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
                price: null,
                kind: 'Сторис',
                name: null,
                desc: null,
                price_weekdays: null,
                price_weekend: null,
                time: null,
                category: 'Реклама',
                typer: null,
                position: null,
                place: null,
            }
        },

        // mounted() {
        //     this.update()
        // },

        methods: {
            // update: function () {
            //     if (this.case)
            //     {
            //
            //     }
            // },


            CaseStore: function () {
                if (this.type == 2){
                if (this.price != null && this.kind != null)
                {
                    let formData = new FormData;
                    formData.set('price', this.price);
                    formData.set('type', this.kind);
                    formData.set('case_type', this.type);
                    formData.set('id', this.id);

                    axios.post('/CaseStore', formData).then((response) => {
                        this.$fire({
                            position: 'top-end',
                            icon: 'success',
                            title: 'Кейс создан',
                            showConfirmButton: false,
                            backdrop: false,
                            timer: 1500
                        })
                    });
                }
                }
                else if (this.type == 3) {
                    if (this.price != null)
                    {
                        let formData = new FormData;
                        formData.set('price', this.price);
                        formData.set('case_type', this.type);
                        formData.set('id', this.id);

                        axios.post('/CaseStore', formData).then((response) => {
                            this.$fire({
                                position: 'top-end',
                                icon: 'success',
                                title: 'Кейс создан',
                                showConfirmButton: false,
                                backdrop: false,
                                timer: 1500
                            })
                        });
                    }
                }
                else if (this.type == 4) {
                    if (this.price != null && this.name != null && this.desc != null)
                    {
                        let formData = new FormData;
                        formData.set('price', this.price);
                        formData.set('name', this.name);
                        formData.set('desc', this.desc);
                        formData.set('case_type', this.type);
                        formData.set('id', this.id);

                        axios.post('/CaseStore', formData).then((response) => {
                            this.$fire({
                                position: 'top-end',
                                icon: 'success',
                                title: 'Кейс создан',
                                showConfirmButton: false,
                                backdrop: false,
                                timer: 1500
                            })
                        });
                    }
                }
                else if (this.type == 5) {
                    if (this.price != null)
                    {
                        let formData = new FormData;
                        formData.set('price', this.price);
                        formData.set('case_type', this.type);
                        formData.set('id', this.id);

                        axios.post('/CaseStore', formData).then((response) => {
                            this.$fire({
                                position: 'top-end',
                                icon: 'success',
                                title: 'Кейс создан',
                                showConfirmButton: false,
                                backdrop: false,
                                timer: 1500
                            })
                        });
                    }
                }
                else if (this.type == 7) {
                    if (this.price_weekdays != null && this.price_weekend != null && this.time != null)
                    {
                        let formData = new FormData;
                        formData.set('price_weekdays', this.price_weekdays);
                        formData.set('price_weekend', this.price_weekend);
                        formData.set('time', this.time);
                        formData.set('case_type', this.type);
                        formData.set('id', this.id);

                        axios.post('/CaseStore', formData).then((response) => {
                            this.$fire({
                                position: 'top-end',
                                icon: 'success',
                                title: 'Кейс создан',
                                showConfirmButton: false,
                                backdrop: false,
                                timer: 1500
                            })
                        });
                    }
                }
                else if (this.type == 8) {
                    if (this.price != null)
                    {
                        let formData = new FormData;
                        formData.set('time', this.time);
                        formData.set('type', this.typer);
                        formData.set('price', this.price);
                        formData.set('desc', this.desc);
                        formData.set('category', this.category);
                        formData.set('case_type', this.type);
                        formData.set('id', this.id);

                        axios.post('/CaseStore', formData).then((response) => {
                            this.$fire({
                                position: 'top-end',
                                icon: 'success',
                                title: 'Кейс создан',
                                showConfirmButton: false,
                                backdrop: false,
                                timer: 1500
                            })
                        });
                    }
                }
                else if (this.type == 9) {
                    if (this.price != null)
                    {
                        let formData = new FormData;
                        formData.set('type', this.typer);
                        formData.set('price', this.price);
                        formData.set('desc', this.desc);
                        formData.set('place', this.place);
                        formData.set('position', this.position);
                        formData.set('case_type', this.type);
                        formData.set('id', this.id);

                        axios.post('/CaseStore', formData).then((response) => {
                            this.$fire({
                                position: 'top-end',
                                icon: 'success',
                                title: 'Кейс создан',
                                showConfirmButton: false,
                                backdrop: false,
                                timer: 1500
                            })
                        });
                    }
                }
            }
        }

    }
</script>

<style scoped>

</style>