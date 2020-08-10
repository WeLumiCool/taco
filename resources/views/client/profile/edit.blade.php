@extends('layouts.app')
@section('content')
    <div class="container-fluid" style="margin-top:100px;">
        <div class="row justify-content-center">
            <div class="col-lg-6 col-12 bg-white py-4 px-4 content-box">
                <h3 class="roboto font-size-18 font-weight-normal">
                    Редактировать профиль
                </h3>
                <hr>
                <div class="row py-4">
                    <div class="col-4">Email</div>
                    <div class="col-8 px-4">
                        <div class="form-group">
                            <input class="form-control" type="text">
                        </div>
                    </div>
                    <div class="col-4">Пароль</div>
                    <div class="col-8 px-4">
                        <div class="form-group">
                            <input class="form-control" type="text">
                        </div>
                    </div>
                    <div class="col-4">Компания</div>
                    <div class="col-8 px-4">
                        <div class="form-group">
                            <input class="form-control" type="text">
                        </div>
                    </div>
                    <div class="col-4">Представитель</div>
                    <div class="col-8 px-4">
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
@endsection