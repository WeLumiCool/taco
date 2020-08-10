@extends('layouts.app')
@section('content')
    <div class="container-fluid" style="margin-top:100px;">
        <div class="row justify-content-center">
            <div class="col-12 bg-white py-4 px-4 content-box">
                <h3 class="roboto font-size-24 text-center">
                    Заявки
                </h3>
                <div class="col-12 mt-5">
                    <div class="row">
                        <div class="col-12 px-4">
                            <div class="row">
                                <div class="col-lg-3 col-6">
                                    <p class="font-size-16 mb-0 font-weight-bold">
                                        Период
                                    </p>
                                </div>
                                <div class="col-lg-2 col-6">
                                    <p class="font-size-16 mb-0 font-weight-bold">
                                        Сумма
                                    </p>
                                </div>
                                <div class="col-lg-3 col-6">
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
                                <div class="col-lg-2 col-6">
                                    <p class="font-size-16 mb-0">
                                        500$
                                    </p>
                                </div>
                                <div class="col-lg-3 col-6">
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
                                    <a href="{{ route('bid/market/show') }}">
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
                                <div class="col-lg-2 col-6">
                                    <p class="font-size-16 mb-0">
                                        400$
                                    </p>
                                </div>
                                <div class="col-lg-3 col-6">
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
                                    <a href="{{ route('bid/market/show') }}">
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