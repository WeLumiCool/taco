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
                        <div class="col-lg-8 col-12 px-4">
                            <div class="row">
                                <div class="col-lg-4 col-6">
                                    <p class="font-size-16 mb-0 font-weight-bold">
                                        Период
                                    </p>
                                </div>
                                <div class="col-lg-4 col-6">
                                    <p class="font-size-16 mb-0 font-weight-bold">
                                        Сумма
                                    </p>
                                </div>
                                <div class="col-lg-4 col-6">
                                    <p class="font-size-16 mb-0 font-weight-bold">
                                        Комментарии
                                    </p>
                                </div>
                            </div>
                            <hr>
                        </div>
                        <div class="col-lg-8 col-12 px-4">
                            <div class="row">
                                <div class="col-lg-4 col-6">
                                    <p class="font-size-16 mb-0">
                                        7 jun-02 aug
                                    </p>
                                </div>
                                <div class="col-lg-4 col-6">
                                    <p class="font-size-16 mb-0">
                                        500$
                                    </p>
                                </div>
                                <div class="col-lg-4 col-6">
                                    <p class="font-size-16 mb-0">
                                        блаблабла
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="row">
                                <div class="col-lg-6 col-12">
                                    <a class="font-size-14" href="#">
                                        Скачать контент
                                    </a>
                                </div>
                                <div class="col-lg-6 col-12 mt-lg-0 mt-4">
                                    <div class="btn taco-btn bg-danger">
                                        Отказаться от заявки
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection