@extends('layouts.app')
@section('content')
    <div class="container-fluid" style="margin-top:100px;">
        <div class="row justify-content-center">
            <div class="col-12 bg-white py-4 px-4 content-box">
                <h3 class="roboto font-size-24" style="color: #556CE0;">
                    Соц сети
                </h3>
                <div class="row mt-3">
                    <div class="col-lg-2 col-5">
                        <div class="form-group">
                            <select class="form-control">
                                <option>Instagram</option>
                                <option>Facebook</option>
                                <option>Вконтакте</option>
                                <option>Twitter</option>
                                <option>Tik Tok</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-2 col-7 d-flex align-items-center">
                        <p class="text-secondary">(VK, Facebook, Tik Tok)</p>
                    </div>
                </div>
                <div class="row mt-1">
                    <div class="col-lg-2 col-6">
                        <div class="form-group">
                            <select class="form-control">
                                <option>Название</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-2 col-6">
                        <div class="form-group">
                            <select class="form-control">
                                <option>Охват</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-2 col-6">
                        <div class="form-group">
                            <select class="form-control">
                                <option>Аудитория</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-2 col-6">
                        <div class="form-group">
                            <select class="form-control">
                                <option>Стоимость</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-2 col-6">
                        <div class="form-group">
                            <select class="form-control">
                                <option>Регион</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-2 col-6">
                        <p class="font-size-16 mb-0 text-secondary">
                            <a href="#" class="font-size-16 ml-2">Подробнее</a>
                        </p>
                    </div>
                </div>
                <div class="row mt-5">
                    <div class="col-lg-9 col-12">
                        <div class="row">
                            <div class="col-lg-3 col-6">
                                <p class="font-size-16 mb-0 font-weight-bold text-secondary">
                                    Название
                                </p>
                            </div>
                            <div class="col-lg-2 col-6">
                                <p class="font-size-16 mb-0 font-weight-bold text-secondary">
                                    Охват
                                </p>
                            </div>
                            <div class="col-lg-3 col-6">
                                <p class="font-size-16 mb-0 font-weight-bold text-secondary">
                                    Аудитория
                                </p>
                            </div>
                            <div class="col-lg-2 col-6">
                                <p class="font-size-16 mb-0 font-weight-bold text-secondary">
                                    Стоимость
                                </p>
                            </div>
                            <div class="col-lg-2 col-6">
                                <p class="font-size-16 mb-0 font-weight-bold text-secondary">
                                    Регион
                                </p>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-lg-3 col-6">
                                <p class="font-size-16 mb-0 text-secondary">
                                    Сообщество
                                </p>
                            </div>
                            <div class="col-lg-2 col-6">
                                <p class="font-size-16 mb-0 text-secondary">
                                    24000
                                </p>
                            </div>
                            <div class="col-lg-3 col-6">
                                <p class="font-size-16 mb-0 text-secondary">
                                    Девочки
                                </p>
                            </div>
                            <div class="col-lg-2 col-6">
                                <p class="font-size-16 mb-0 text-secondary">
                                    200$
                                </p>
                            </div>
                            <div class="col-lg-2 col-6">
                                <p class="font-size-16 mb-0 text-secondary">
                                    ЦА
                                </p>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-lg-3 col-6">
                                <p class="font-size-16 mb-0 text-secondary">
                                    Блогер
                                </p>
                            </div>
                            <div class="col-lg-2 col-6">
                                <p class="font-size-16 mb-0 text-secondary">
                                    250
                                </p>
                            </div>
                            <div class="col-lg-3 col-6">
                                <p class="font-size-16 mb-0 text-secondary">
                                    Мальчики
                                </p>
                            </div>
                            <div class="col-lg-2 col-6">
                                <p class="font-size-16 mb-0 text-secondary">
                                    30$
                                </p>
                            </div>
                            <div class="col-lg-2 col-6">
                                <p class="font-size-16 mb-0 text-secondary">
                                    СНГ
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <h3 class="roboto font-size-24 mt-5" style="color: #556CE0;">
                    Веб Сайты
                </h3>
                <div class="row mt-3">
                    <div class="col-lg-2 col-6">
                        <div class="form-group">
                            <select class="form-control">
                                <option>Тип</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-2 col-6">
                        <div class="form-group">
                            <select class="form-control">
                                <option>Стоимость</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-2 col-6">
                        <div class="form-group">
                            <select class="form-control">
                                <option>Посещаемость</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-2 col-6">
                        <p class="font-size-16 mb-0 text-secondary">
                            <a href="#" class="font-size-16 ml-2">Подробнее</a>
                        </p>
                    </div>
                </div>
                <div class="row mt-5">
                    <div class="col-lg-6 col-12">
                        <div class="row">
                            <div class="col-lg-4 col-6">
                                <p class="font-size-16 mb-0 font-weight-bold text-secondary">
                                    Тип
                                </p>
                            </div>
                            <div class="col-lg-4 col-6">
                                <p class="font-size-16 mb-0 font-weight-bold text-secondary">
                                    Стоимость
                                </p>
                            </div>
                            <div class="col-lg-4 col-6">
                                <p class="font-size-16 mb-0 font-weight-bold text-secondary">
                                    Охват
                                </p>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-lg-4 col-6">
                                <p class="font-size-16 mb-0 text-secondary">
                                    Новости
                                </p>
                            </div>
                            <div class="col-lg-4 col-6">
                                <p class="font-size-16 mb-0 text-secondary">
                                    200$
                                </p>
                            </div>
                            <div class="col-lg-4 col-6">
                                <p class="font-size-16 mb-0 text-secondary">
                                    24000
                                </p>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-lg-4 col-6">
                                <p class="font-size-16 mb-0 text-secondary">
                                    Фильмы
                                </p>
                            </div>
                            <div class="col-lg-4 col-6">
                                <p class="font-size-16 mb-0 text-secondary">
                                    30$
                                </p>
                            </div>
                            <div class="col-lg-4 col-6">
                                <p class="font-size-16 mb-0 text-secondary">
                                    250
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <h3 class="roboto font-size-24 mt-5" style="color: #556CE0;">
                    Биржа
                </h3>

                <div class="row mt-3">
                    <div class="col-lg-4 col-12">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Текстовый оффер">
                        </div>
                        <div class="row">
                            <div class="col-lg-9 col-12">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Контент">
                                </div>
                            </div>
                            <div class="col-lg-3 col-12">
                                <button class="btn taco-btn">Выбрать</button>
                            </div>

                        </div>
                    </div>
                    <div class="col-lg-3 col-12 mt-lg-0 mt-4">
                        <div class="content-box p-4">
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                <label class="form-check-label" for="exampleCheck1">Плата за лид</label>
                            </div>
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                <label class="form-check-label" for="exampleCheck1">Плата за переход</label>
                            </div>
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                <label class="form-check-label" for="exampleCheck1">Плата за клик</label>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-12 mt-lg-0 mt-4">
                        <div class="row">
                            <div class="col-lg-9 col-12">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Бюджет">
                                </div>
                            </div>
                            <div class="col-lg-9 col-12">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Способ оплаты">
                                </div>
                            </div>
                            <div class="col-lg-3 col-12">
                                <button class="btn taco-btn">Выбрать</button>
                            </div>

                        </div>
                    </div>
                </div>

                <button class="btn taco-btn px-4 py-3 font-size-16 mt-lg-0 mt-4">Создать оффер</button>
            </div>
        </div>
    </div>

@endsection

