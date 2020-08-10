@extends('layouts.app')
@section('content')
<div class="container-fluid" style="margin-top:100px;">
    <div class="row">
        <div class="col-12 bg-white py-4 px-4 content-box">
            <h3 class="roboto font-size-24 text-center">
                Рекламные компании
            </h3>
            <div class="col-12 mt-5">
                <div class="row">
                    <div class="col-12 px-4">
                        <div class="row">
                            <div class="col-lg-3 col-6">
                                <p class="font-size-16 font-weight-bold mb-0">
                                    ID
                                </p>
                            </div>
                            <div class="col-lg-4 col-6">
                                <p class="font-size-16 font-weight-bold mb-0">
                                    Платформа
                                </p>
                            </div>
                            <div class="col-lg-2 col-6">
                                <p class="font-size-16 font-weight-bold mb-0">
                                    Сумма
                                </p>
                            </div>
                            <div class="col-lg-3 col-6">
                                <p class="font-size-16 font-weight-bold mb-0">
                                    Период
                                </p>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-lg-3 col-6">
                                <p class="font-size-16 mb-0">
                                    001
                                </p>
                            </div>
                            <div class="col-lg-4 col-6">
                                <p class="font-size-16 mb-0">
                                    **** **** **** *279
                                </p>
                            </div>
                            <div class="col-lg-2 col-6">
                                <p class="font-size-16 mb-0">
                                    500$
                                </p>
                            </div>
                            <div class="col-lg-3 col-6">
                                <p class="font-size-16 mb-0">
                                    02 aug 2020
                                </p>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-lg-3 col-6">
                                <p class="font-size-16 mb-0">
                                    002
                                </p>
                            </div>
                            <div class="col-lg-4 col-6">
                                <p class="font-size-16 mb-0">
                                    **** **** **** *279
                                </p>
                            </div>
                            <div class="col-lg-2 col-6">
                                <p class="font-size-16 mb-0">
                                    400$
                                </p>
                            </div>
                            <div class="col-lg-3 col-6">
                                <p class="font-size-16 mb-0">
                                    7 jun-02 aug
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-8 col-12 bg-white py-4 px-4 content-box mt-4">
            <h3 class="roboto font-size-18 text-center">
                Сколько заработал за какой период
            </h3>
            <canvas id="myChart" width="400" height="200"></canvas>
        </div>
        <div class="col-lg-6 col-12 py-4 pl-lg-0">
            <div class=" content-box bg-white px-4 py-4">
                <p class="font-size-18 font-weight-bold mb-0">
                    Изменить способ оплаты
                </p>
                <hr>
                <div class="row px-2">
                    <div class="col-4">Номер карты</div>
                    <div class="col-8">
                        <div class="form-group">
                            <input class="form-control" type="text">
                        </div>
                    </div>
                    <div class="col-4">Exp date</div>
                    <div class="col-8">
                        <div class="form-group">
                            <input class="form-control" type="text">
                        </div>
                    </div>
                    <div class="col-4">CV’S</div>
                    <div class="col-8">
                        <div class="form-group">
                            <input class="form-control" type="text">
                        </div>
                    </div>
                </div>
                <div class="text-center">
                    <button class="btn taco-btn">Сохранить</button>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection