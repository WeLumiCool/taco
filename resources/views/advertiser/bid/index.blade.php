@extends('layouts.app')
@section('content')
    <div class="container-fluid" style="margin-top:100px;">
        <div class="row justify-content-center">
            <div class="col-12 bg-white py-4 px-4 content-box">
                <div class="col-12 mt-5">
                    <div class="row">
                        <div class="col-lg-4 col-12">
                            <button class="btn taco-btn-2 w-100 mb-3 py-2 font-size-16">
                                Незавершенные кампании
                            </button>
                            <button class="btn taco-btn-2 w-100 mb-3 py-2 font-size-16">
                                Ожидают подтверждения
                            </button>
                            <button class="btn taco-btn-2 w-100 mb-3 py-2 font-size-16">
                                Активные кампании
                            </button>
                            <button class="btn taco-btn-2 w-100 mb-3 py-2 font-size-16">
                                Завершенные
                            </button>
                        </div>
                        <div class="col-lg-8 col-12 px-4">
                            <div class="row">
                                <div class="col-lg-3 col-6">
                                    <p class="font-size-16 mb-0 font-weight-bold">
                                        Период
                                    </p>
                                </div>
                                <div class="col-lg-3 col-6">
                                    <p class="font-size-16 mb-0 font-weight-bold">
                                        Сумма
                                    </p>
                                </div>
                                <div class="col-lg-2 col-6">
                                    <p class="font-size-16 mb-0 font-weight-bold">
                                        Оффер+контент
                                    </p>
                                </div>
                                <div class="col-lg-2 col-6">
                                    <p class="font-size-16 mb-0 font-weight-bold">
                                        Комментарии
                                    </p>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-lg-3 col-6">
                                    <p class="font-size-16 mb-0">
                                        7 jun-02 aug
                                    </p>
                                </div>
                                <div class="col-lg-3 col-6">
                                    <p class="font-size-16 mb-0">
                                        500$
                                    </p>
                                </div>
                                <div class="col-lg-2 col-6">
                                    <p class="font-size-16 mb-0">
                                        Сумки
                                    </p>
                                </div>
                                <div class="col-lg-2 col-6">
                                    <p class="font-size-16 mb-0">
                                        блаблабла
                                    </p>
                                </div>
                                <div class="col-lg-1 col-6">
                                    <a href="{{ route('bid/show') }}">
                                        Подтвердить
                                    </a>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-lg-3 col-6">
                                    <p class="font-size-16 mb-0">
                                        7 jun-02 aug
                                    </p>
                                </div>
                                <div class="col-lg-3 col-6">
                                    <p class="font-size-16 mb-0">
                                        400$
                                    </p>
                                </div>
                                <div class="col-lg-2 col-6">
                                    <p class="font-size-16 mb-0">
                                        Телефоны
                                    </p>
                                </div>
                                <div class="col-lg-2 col-6">
                                    <p class="font-size-16 mb-0">
                                        блаблабла
                                    </p>
                                </div>
                                <div class="col-lg-1 col-6">
                                    <a href="{{ route('bid/show') }}">
                                        Подтвердить
                                    </a>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection