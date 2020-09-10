@extends('layouts.app')
@section('content')
    <div class="container-fluid" style="margin-top:100px;">
        <div class="row justify-content-center">
            <div class="col-12 bg-white py-4 px-4 content-box">
                <h3 class="roboto font-size-24 text-center">
                    Рекламные компании
                </h3>
                <div class="col-12 mt-5">
                    <div class="row">
                        <div class="col-lg-4 col-12">
                            <button class="btn taco-btn-2 w-100 mb-3 py-2 font-size-12">
                                Активные кампании
                            </button>
                            <button class="btn taco-btn-2 w-100 mb-3 py-2 font-size-12">
                                Завершенные
                            </button>
                        </div>
                        <div class="col-lg-8 col-12 px-4">
                            <div class="row">
                                <div class="col-lg-3 col-12">
                                    <p class="font-size-16 mb-0">
                                        Название
                                    </p>
                                </div>
                                <div class="col-lg-3 col-12">
                                    <p class="font-size-16 mb-0">
                                        Платформа
                                    </p>
                                </div>
                                <div class="col-lg-2 col-12">
                                    <p class="font-size-16 mb-0">
                                        Сумма
                                    </p>
                                </div>
                                <div class="col-lg-2 col-12">
                                    <p class="font-size-16 mb-0">
                                        Период
                                    </p>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-lg-3 col-12">
                                    <p class="font-size-16 mb-0">
                                        Кампания 1
                                    </p>
                                </div>
                                <div class="col-lg-3 col-12">
                                    <p class="font-size-16 mb-0">
                                        Instagram
                                    </p>
                                </div>
                                <div class="col-lg-2 col-12">
                                    <p class="font-size-16 mb-0">
                                        500$
                                    </p>
                                </div>
                                <div class="col-lg-2 col-12">
                                    <p class="font-size-16 mb-0">
                                        7 jun-02 aug
                                    </p>
                                </div>
                                <div class="col-lg-1 col-12">
                                    <a href="#">
                                        аналитика
                                    </a>
                                </div>
                            </div>
                            <div class="row mt-lg-0 mt-4">
                                <div class="col-lg-3 col-12">
                                    <p class="font-size-16 mb-0">
                                        Кампания 2
                                    </p>
                                </div>
                                <div class="col-lg-3 col-12">
                                    <p class="font-size-16 mb-0">
                                        Facebook
                                    </p>
                                </div>
                                <div class="col-lg-2 col-12">
                                    <p class="font-size-16 mb-0">
                                        400$
                                    </p>
                                </div>
                                <div class="col-lg-2 col-12">
                                    <p class="font-size-16 mb-0">
                                        7 jun-02 aug
                                    </p>
                                </div>
                                <div class="col-lg-1 col-12">
                                    <a href="#">
                                        аналитика
                                    </a>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

                <div class="row mt-4">
                    <div class="col-lg-4 col-12 px-5">
                        <button class="btn taco-btn-2 w-100 mb-3 py-2 font-size-12">
                            CTM (компания 1)
                        </button>
                        <button class="btn taco-btn-2 w-100 mb-3 py-2 font-size-12">
                            Охват (компания 1)
                        </button>
                        <button class="btn taco-btn-2 w-100 mb-3 py-2 font-size-12">
                            Целевая аудитория (компания 1)
                        </button>
                        <button class="btn taco-btn-2 w-100 mb-3 py-2 font-size-12">
                            Частота показов (компания 1)
                        </button>
                        <button class="btn taco-btn-2 w-100 mb-3 py-2 font-size-12">
                            Платформа (компания 1)
                        </button>
                    </div>
                    <div class="col-lg-8 col-12">
                        <canvas id="myChart" width="400" height="200"></canvas>
                    </div>
                </div>
            </div>
            </div>

        </div>
@endsection