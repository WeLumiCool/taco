@extends('layouts.app')
@section('content')
    <div class="container-fluid" style="margin-top:100px;">
        <div class="row justify-content-center">
            <div class="col-12 bg-white py-4 px-4 content-box">
                <h3 class="roboto font-size-24" style="color: #556CE0;">
                    LED-экраны
                </h3>
                <div class="row mt-3">
                    <div class="col-lg-4 col-12">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Город, улица, адрес">
                        </div>
                    </div>
                    <div class="col-lg-3 col-6">
                        <button class="btn taco-btn w-100">Поиск</button>
                    </div>
                </div>
                <div class="row mt-lg-0 mt-3">
                <div class="col-lg-3 col-12">
                    <div id="map" style="width: 100%; height: 250px;"></div>
                </div>
                <div class="col-lg-9 col-12 mt-lg-0 mt-3">
                    <div class="row">
                        <div class="col-lg-3 col-6">
                            <p class="font-size-16 mb-0 font-weight-bold text-black-50">
                                Адрес
                            </p>
                        </div>
                        <div class="col-lg-3 col-6">
                            <p class="font-size-16 mb-0 font-weight-bold text-black-50">
                                Количество показов
                            </p>
                        </div>
                        <div class="col-lg-3 col-6">
                            <p class="font-size-16 mb-0 font-weight-bold text-black-50">
                                Аудитория
                            </p>
                        </div>
                        <div class="col-lg-3 col-6">
                            <p class="font-size-16 mb-0 font-weight-bold text-black-50">
                                Стоимость
                            </p>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-lg-3 col-6">
                            <p class="font-size-16 mb-0 text-black-50">
                                Московская 15
                            </p>
                        </div>
                        <div class="col-lg-3 col-6">
                            <p class="font-size-16 mb-0 text-black-50">
                                24000
                            </p>
                        </div>
                        <div class="col-lg-3 col-6">
                            <p class="font-size-16 mb-0 text-black-50">
                                Девочки
                            </p>
                        </div>
                        <div class="col-lg-3 col-6">
                            <p class="font-size-16 mb-0 text-black-50">
                                500$
                                <a href="#" class="small ml-2">Подробнее</a>
                            </p>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-lg-3 col-6">
                            <p class="font-size-16 mb-0 text-black-50">
                                Чуй 150
                            </p>
                        </div>
                        <div class="col-lg-3 col-6">
                            <p class="font-size-16 mb-0 text-black-50">
                                5000
                            </p>
                        </div>
                        <div class="col-lg-3 col-6">
                            <p class="font-size-16 mb-0 text-black-50">
                                Мальчики
                            </p>
                        </div>
                        <div class="col-lg-3 col-6">
                            <p class="font-size-16 mb-0 text-black-50">
                                400$
                                <a href="#" class="small ml-2">Подробнее</a>
                            </p>
                        </div>
                    </div>
                    <hr>
                </div>
                </div>

                <div class="row mt-5">
                    <div class="col-lg-9 col-12">
                        <h3 class="roboto font-size-24" style="color: #556CE0;">
                            ТВ
                        </h3>
                        <div class="row">
                            <div class="col-lg-3 col-6">
                                <p class="font-size-16 mb-0 font-weight-bold text-black-50">
                                    Название
                                </p>
                            </div>
                            <div class="col-lg-3 col-6">
                                <p class="font-size-16 mb-0 font-weight-bold text-black-50">
                                    Время показа
                                </p>
                            </div>
                            <div class="col-lg-3 col-6">
                                <p class="font-size-16 mb-0 font-weight-bold text-black-50">
                                    Статистика
                                </p>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-lg-3 col-6">
                                <p class="font-size-16 mb-0 text-black-50">
                                    7 jun-02 aug
                                </p>
                            </div>
                            <div class="col-lg-3 col-6">
                                <p class="font-size-16 mb-0 text-black-50">
                                    500$
                                </p>
                            </div>
                            <div class="col-lg-3 col-6">
                                <p class="font-size-16 mb-0 text-black-50">
                                    Сумки
                                </p>
                            </div>
                            <div class="col-lg-3 col-6">
                                <p class="font-size-16 mb-0 text-black-50">
                                    <a href="#" class="small ml-2">Подробнее</a>
                                </p>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-lg-3 col-6">
                                <p class="font-size-16 mb-0 text-black-50">
                                    7 jun-02 aug
                                </p>
                            </div>
                            <div class="col-lg-3 col-6">
                                <p class="font-size-16 mb-0 text-black-50">
                                    500$
                                </p>
                            </div>
                            <div class="col-lg-3 col-6">
                                <p class="font-size-16 mb-0 text-black-50">
                                    Телефоны
                                </p>
                            </div>
                            <div class="col-lg-3 col-6">
                                <p class="font-size-16 mb-0 text-black-50">
                                    <a href="#" class="small ml-2">Подробнее</a>
                                </p>
                            </div>
                        </div>
                        <hr>
                    </div>
                </div>

                <div class="row mt-5">
                    <div class="col-lg-9 col-12">
                        <h3 class="roboto font-size-24" style="color: #556CE0;">
                            Радио
                        </h3>
                        <div class="row">
                            <div class="col-lg-3 col-6">
                                <p class="font-size-16 mb-0 font-weight-bold text-black-50">
                                    Название
                                </p>
                            </div>
                            <div class="col-lg-3 col-6">
                                <p class="font-size-16 mb-0 font-weight-bold text-black-50">
                                    Время показа
                                </p>
                            </div>
                            <div class="col-lg-3 col-6">
                                <p class="font-size-16 mb-0 font-weight-bold text-black-50">
                                    Статистика
                                </p>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-lg-3 col-6">
                                <p class="font-size-16 mb-0 text-black-50">
                                    7 jun-02 aug
                                </p>
                            </div>
                            <div class="col-lg-3 col-6">
                                <p class="font-size-16 mb-0 text-black-50">
                                    500$
                                </p>
                            </div>
                            <div class="col-lg-3 col-6">
                                <p class="font-size-16 mb-0 text-black-50">
                                    Сумки
                                </p>
                            </div>
                            <div class="col-lg-3 col-6">
                                <p class="font-size-16 mb-0 text-black-50">
                                    <a href="#" class="small ml-2">Подробнее</a>
                                </p>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-lg-3 col-6">
                                <p class="font-size-16 mb-0 text-black-50">
                                    7 jun-02 aug
                                </p>
                            </div>
                            <div class="col-lg-3 col-6">
                                <p class="font-size-16 mb-0 text-black-50">
                                    500$
                                </p>
                            </div>
                            <div class="col-lg-3 col-6">
                                <p class="font-size-16 mb-0 text-black-50">
                                    Телефоны
                                </p>
                            </div>
                            <div class="col-lg-3 col-6">
                                <p class="font-size-16 mb-0 text-black-50">
                                    <a href="#" class="small ml-2">Подробнее</a>
                                </p>
                            </div>
                        </div>
                        <hr>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <script src="https://api-maps.yandex.ru/2.1/?apikey=1dc5f6a0-7f44-4dcf-8a38-15f7166f37dc&lang=ru_RU" type="text/javascript"></script>
    <script>
        ymaps.ready(init);

        function init() {
            var myPlacemark,
                myMap = new ymaps.Map('map', {
                    center: [{{ $event->latitude ?? 42.865388923088396 }}, {{ $event->longtitude ?? 74.60104350048829 }}],
                    zoom: 12
                }, {
                    searchControlProvider: 'yandex#search'
                });

            // Слушаем клик на карте.
            myMap.events.add('click', function (e) {
                var coords = e.get('coords');

                $('#latitude').val(coords[0]);
                $('#longtitude').val(coords[1]);

                // Если метка уже создана – просто передвигаем ее.
                if (myPlacemark) {
                    myPlacemark.geometry.setCoordinates(coords);
                }
                // Если нет – создаем.
                else {
                    myPlacemark = createPlacemark(coords);
                    myMap.geoObjects.add(myPlacemark);
                    // Слушаем событие окончания перетаскивания на метке.
                    myPlacemark.events.add('dragend', function () {
                        getAddress(myPlacemark.geometry.getCoordinates());
                    });
                }
                getAddress(coords);
            });

            // Создание метки.
            function createPlacemark(coords) {
                return new ymaps.Placemark(coords, {
                    iconCaption: 'поиск...'
                }, {
                    preset: 'islands#violetDotIconWithCaption',
                    draggable: true
                });
            }

            // Определяем адрес по координатам (обратное геокодирование).
            function getAddress(coords) {
                myPlacemark.properties.set('iconCaption', 'поиск...');
                ymaps.geocode(coords).then(function (res) {
                    var firstGeoObject = res.geoObjects.get(0);

                    console.log(firstGeoObject.getAddressLine());
                    myPlacemark.properties
                        .set({
                            // Формируем строку с данными об объекте.
                            iconCaption: [
                                // Название населенного пункта или вышестоящее административно-территориальное образование.
                                firstGeoObject.getLocalities().length ? firstGeoObject.getLocalities() : firstGeoObject.getAdministrativeAreas(),
                                // Получаем путь до топонима, если метод вернул null, запрашиваем наименование здания.
                                firstGeoObject.getThoroughfare() || firstGeoObject.getPremise()
                            ].filter(Boolean).join(', '),
                            // В качестве контента балуна задаем строку с адресом объекта.
                            balloonContent: firstGeoObject.getAddressLine()
                        });
                });
            }
        }

    </script>
@endpush