<template>
    <div class="container">
        <div class="text-center"  v-if="type == 2">
            <div class="row mb-4">
                <div class="col-9">
                    <h4 class="font-size-20 font-weight-bold text-center">Кейсы Пользователя {{ advertiser.name}}</h4>
                </div>
                <div class="col-3">
                    <router-link :to="{ name: 'case_create', params: {id: advertiser.id, type: type, case: 0}} ">
                        <button class="btn btn-success py-1">Добавить кейс</button>
                    </router-link>
                </div>
            </div>


            <div class="row pt-4 py-2 bg-white px-2">
                <div class="col-3">
                    <p class="font-weight-bold">Цена</p>
                </div>
                <div class="col-3">
                    <p class="font-weight-bold">Тип</p>
                </div>
                <div class="col-12">
                    <hr>
                </div>
            </div>
        <div class="row py-2 bg-white px-2" v-for="advcase in cases">
            <div class="col-3">{{ advcase.price}}</div>
            <div class="col-3">{{ advcase.type}}</div>
            <div class="col-12">
                <hr>
            </div>
        </div>
        </div>

        <div class="text-center"  v-if="type == 3">
            <div class="row mb-4">
                <div class="col-9">
                    <h4 class="font-size-20 font-weight-bold text-center">Кейсы Пользователя {{ advertiser.name}}</h4>
                </div>
                <div class="col-3">
                    <router-link :to="{ name: 'case_create', params: {id: advertiser.id, type: type, case: 0}} ">
                        <button class="btn btn-success py-1">Добавить кейс</button>
                    </router-link>
                </div>
            </div>


            <div class="row pt-4 py-2 bg-white px-2">
                <div class="col-6">
                    <p class="font-weight-bold">Цена</p>
                </div>
                <div class="col-12">
                    <hr>
                </div>
            </div>
            <div class="row py-2 bg-white px-2" v-for="advcase in cases">
                <div class="col-6">{{ advcase.price}}</div>
                <div class="col-12">
                    <hr>
                </div>
            </div>
        </div>

        <div class="text-center"  v-if="type == 4">
            <div class="row mb-4">
                <div class="col-9">
                    <h4 class="font-size-20 font-weight-bold text-center">Кейсы Пользователя {{ advertiser.name}}</h4>
                </div>
                <div class="col-3">
                    <router-link :to="{ name: 'case_create', params: {id: advertiser.id, type: type, case: 0}} ">
                        <button class="btn btn-success py-1">Добавить кейс</button>
                    </router-link>
                </div>
            </div>


            <div class="row pt-4 py-2 bg-white px-2">
                <div class="col-3">
                    <p class="font-weight-bold">Цена</p>
                </div>
                <div class="col-4">
                    <p class="font-weight-bold">Название</p>
                </div>
                <div class="col-4">
                    <p class="font-weight-bold">Описание</p>
                </div>
                <div class="col-12">
                    <hr>
                </div>
            </div>
            <div class="row py-2 bg-white px-2" v-for="advcase in cases">
                <div class="col-3">{{ advcase.price}}</div>
                <div class="col-4">{{ advcase.name}}</div>
                <div class="col-4">{{ advcase.desc}}</div>
                <div class="col-12">
                    <hr>
                </div>
            </div>
        </div>

        <div class="text-center"  v-if="type == 5">
            <div class="row mb-4">
                <div class="col-9">
                    <h4 class="font-size-20 font-weight-bold text-center">Кейсы Пользователя {{ advertiser.name}}</h4>
                </div>
                <div class="col-3">
                    <router-link :to="{ name: 'case_create', params: {id: advertiser.id, type: type, case: 0}} ">
                        <button class="btn btn-success py-1">Добавить кейс</button>
                    </router-link>
                </div>
            </div>


            <div class="row pt-4 py-2 bg-white px-2">
                <div class="col-6">
                    <p class="font-weight-bold">Цена</p>
                </div>
            </div>
            <div class="row py-2 bg-white px-2" v-for="advcase in cases">
                <div class="col-6">{{ advcase.price}}</div>
                <div class="col-12">
                    <hr>
                </div>
            </div>
        </div>

        <div class="text-center"  v-if="type == 7">
            <div class="row mb-4">
                <div class="col-9">
                    <h4 class="font-size-20 font-weight-bold text-center">Кейсы Пользователя {{ advertiser.name}}</h4>
                </div>
                <div class="col-3">
                    <router-link :to="{ name: 'case_create', params: {id: advertiser.id, type: type, case: 0}} ">
                        <button class="btn btn-success py-1">Добавить кейс</button>
                    </router-link>
                </div>
            </div>


            <div class="row pt-4 py-2 bg-white px-2">
                <div class="col-4">
                    <p class="font-weight-bold">Цена в будние дни</p>
                </div>
                <div class="col-4">
                    <p class="font-weight-bold">Цена в выходные дни</p>
                </div>
                <div class="col-4">
                    <p class="font-weight-bold">Время</p>
                </div>
            </div>
            <div class="row py-2 bg-white px-2" v-for="advcase in cases">
                <div class="col-4">{{ advcase.price_weekdays}}</div>
                <div class="col-4">{{ advcase.price_weekend}}</div>
                <div class="col-4">{{ advcase.time}}</div>
                <div class="col-12">
                    <hr>
                </div>
            </div>
        </div>

        <div class="text-center"  v-if="type == 8">
            <div class="row mb-4">
                <div class="col-9">
                    <h4 class="font-size-20 font-weight-bold text-center">Кейсы Пользователя {{ advertiser.name}}</h4>
                </div>
                <div class="col-3">
                    <router-link :to="{ name: 'case_create', params: {id: advertiser.id, type: type, case: 0}} ">
                        <button class="btn btn-success py-1">Добавить кейс</button>
                    </router-link>
                </div>
            </div>


            <div class="row pt-4 py-2 bg-white px-2">
                <div class="col-2">
                    <p class="font-weight-bold">Время</p>
                </div>
                <div class="col-2">
                    <p class="font-weight-bold">Тип</p>
                </div>
                <div class="col-2">
                    <p class="font-weight-bold">Цена</p>
                </div>
                <div class="col-3">
                    <p class="font-weight-bold">Описание</p>
                </div>
                <div class="col-3">
                    <p class="font-weight-bold">Категория</p>
                </div>
            </div>
            <div class="row py-2 bg-white px-2" v-for="advcase in cases">
                <div class="col-2">{{ advcase.time}}</div>
                <div class="col-2">{{ advcase.type}}</div>
                <div class="col-2">{{ advcase.price}}</div>
                <div class="col-3">{{ advcase.desc}}</div>
                <div class="col-3">{{ advcase.category}}</div>
                <div class="col-12">
                    <hr>
                </div>
            </div>
        </div>

        <div class="text-center"  v-if="type == 9">
            <div class="row mb-4">
                <div class="col-9">
                    <h4 class="font-size-20 font-weight-bold text-center">Кейсы Пользователя {{ advertiser.name}}</h4>
                </div>
                <div class="col-3">
                    <router-link :to="{ name: 'case_create', params: {id: advertiser.id, type: type, case: 0}} ">
                        <button class="btn btn-success py-1">Добавить кейс</button>
                    </router-link>
                </div>
            </div>


            <div class="row pt-4 py-2 bg-white px-2">
                <div class="col-2">
                    <p class="font-weight-bold">Тип</p>
                </div>
                <div class="col-2">
                    <p class="font-weight-bold">Позиция</p>
                </div>
                <div class="col-2">
                    <p class="font-weight-bold">Площадка</p>
                </div>
                <div class="col-3">
                    <p class="font-weight-bold">Описание</p>
                </div>
                <div class="col-3">
                    <p class="font-weight-bold">Цена</p>
                </div>
            </div>
            <div class="row py-2 bg-white px-2" v-for="advcase in cases">
                <div class="col-2">{{ advcase.type}}</div>
                <div class="col-2">{{ advcase.position}}</div>
                <div class="col-2">{{ advcase.place}}</div>
                <div class="col-3">{{ advcase.desc}}</div>
                <div class="col-3">{{ advcase.price}}</div>
                <div class="col-12">
                    <hr>
                </div>
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
               cases: [],
               type: null,
               advertiser: null,
           }
       },


        mounted() {
           this.update();
        },

        methods: {
            update: function () {
                axios.get('/getAdvertiserCases/' + this.id).then((response) => {
                    console.log(response);
                    this.cases = response.data.cases;
                    this.type = response.data.type;
                    this.advertiser = response.data.advertiser;
                });
            }
        }
    }
</script>