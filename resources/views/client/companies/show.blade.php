@extends('layouts.app')
@section('content')

    <div class="container" style="margin-top: 100px;">
        <div class="row p-4 bg-white">
            <div class="col-12">
                <h4 class="font-weight-normal text-center">
                    Рекламная компания ({{\App\Type::find($adv->type_id)->title}})
                </h4>
                @if($adv->status == 1)
                <p class="text-info text-center">
                    В ожидании
                </p>
                @elseif($adv->status == 2)
                    <p class="text-success text-center">
                        Активна
                    </p>
                @elseif($adv->status == 4)
                    <p class="text-warning text-center">
                        Завершена
                    </p>
                @endif
            </div>
            <?php
            $case = $adv->getAdvCase();
            $advertiser = \App\Advertiser::find($adv->advertiser_id);
            //                dd($case);
            ?>
            <div class="col-12">
                <p class="font-size-18">Данные о кейсе</p>
            </div>
            @if($adv->type_id == 2)
                <div class="col-6">
                    <p class="font-size-14 mb-2 text-dark"><strong>Инстаграм</strong></p>
                    <p class="font-size-14 mb-2 text-dark">Цена: <strong>{{ $case->price }} сом</strong></p>
                    <p class="font-size-14 mb-2 text-dark">Тип рекламы: <strong>{{ $case->type }}</strong></p>
                </div>
                <div class="col-6">
                    <p class="font-size-14 mb-2 text-dark"><strong>{{ $advertiser->name }}</strong></p>
                    <p class="font-size-14 mb-2 text-dark"><strong>{{ $advertiser->user->name }}</strong></p>
                </div>
            @elseif($adv->type_id == 3)
                <div class="col-6">
                    <p class="font-size-14 mb-2 text-dark"><strong>TikTok</strong></p>
                    <p class="font-size-14 mb-2 text-dark"><strong>Цена: {{ $case->price }} сом</strong></p>
                </div>
                <div class="col-6">
                    <p class="font-size-14 mb-2 text-dark"><strong>{{ $advertiser->name }}</strong></p>
                    <p class="font-size-14 mb-2 text-dark"><strong>{{ $advertiser->user->name }}</strong></p>
                </div>
            @elseif($adv->type_id == 4)
                <div class="col-6">
                    <p class="font-size-14 mb-2 text-dark"><strong>Youtube</strong></p>
                    <p class="font-size-14 mb-2 text-dark">Название: <strong>{{ $case->name }}</strong></p>
                    <p class="font-size-14 mb-2 text-dark">Описание: <strong>{{ $case->desc }}</strong></p>
                    <p class="font-size-14 mb-2 text-dark">Цена: <strong>{{ $case->price }}$</strong></p>
                </div>
                <div class="col-6">
                    <p class="font-size-14 mb-2 text-dark"><strong>{{ $advertiser->name }}</strong></p>
                    <p class="font-size-14 mb-2 text-dark"><strong>{{ $advertiser->user->name }}</strong></p>
                </div>
            @elseif($adv->type_id == 5)
                <div class="col-6">
                    <p class="font-size-14 mb-2 text-dark"><strong>ВКонтакте</strong></p>
                    <p class="font-size-14 mb-2 text-dark">Цена: <strong>{{ $case->price }}$</strong></p>
                </div>
                <div class="col-6">
                    <p class="font-size-14 mb-2 text-dark"><strong>{{ $advertiser->name }}</strong></p>
                    <p class="font-size-14 mb-2 text-dark"><strong>{{ $advertiser->user->name }}</strong></p>
                </div>
            @elseif($adv->type_id == 7)
                <div class="col-6">
                    <p class="font-size-14 mb-2 text-dark"><strong>Реклама на радио</strong></p>
                    <p class="font-size-14 mb-2 text-dark">Время: <strong>{{ $case->time }}</strong></p>
                    <p class="font-size-14 mb-2 text-dark">Цена в выходные дни: <strong>{{ $case->price_weekend }}сом</strong></p>
                    <p class="font-size-14 mb-2 text-dark">Цена в будние дни: <strong>{{ $case->price_weekdays }}сом</strong></p>
                </div>
                <div class="col-6">
                    <p class="font-size-14 mb-2 text-dark"><strong>{{ $advertiser->name }}</strong></p>
                    <p class="font-size-14 mb-2 text-dark"><strong>{{ $advertiser->user->name }}</strong></p>
                </div>
            @elseif($adv->type_id == 8)
                <div class="col-6">
                    <p class="font-size-14 mb-2 text-dark"><strong>Реклама на телевидении</strong></p>
                    <p class="font-size-14 mb-2 text-dark">Время: <strong>{{ $case->time }}</strong></p>
                    <p class="font-size-14 mb-2 text-dark">Тип: <strong>{{ $case->type }}</strong></p>
                    <p class="font-size-14 mb-2 text-dark">Цена: <strong>{{ $case->price }}сом</strong></p>
                    <p class="font-size-14 mb-2 text-dark">Категория: <strong>{{ $case->category }}</strong></p>
                    @if($case->desc)
                        <p class="font-size-14 mb-2 text-dark">Описание: <strong>{{ $case->desc }}</strong></p>
                    @endif
                </div>
                <div class="col-6">
                    <p class="font-size-14 mb-2 text-dark"><strong>{{ $advertiser->name }}</strong></p>
                    <p class="font-size-14 mb-2 text-dark"><strong>{{ $advertiser->user->name }}</strong></p>
                </div>
            @elseif($adv->type_id == 9)
                <div class="col-6">
                    <p class="font-size-14 mb-2 text-dark"><strong>Реклама на Онлайн площадках</strong></p>
                    <p class="font-size-14 mb-2 text-dark">Тип: <strong>{{ $case->type }}</strong></p>
                    <p class="font-size-14 mb-2 text-dark">Позиция: <strong>{{ $case->position }}</strong></p>
                    <p class="font-size-14 mb-2 text-dark">Площадка: <strong>{{ $case->place }}</strong></p>
                    <p class="font-size-14 mb-2 text-dark">Цена: <strong>{{ $case->price }}</strong></p>
                    @if($case->desc)
                        <p class="font-size-14 mb-2 text-dark">Описание: <strong>{{ $case->desc }}</strong></p>
                    @endif
                </div>
                <div class="col-6">
                    <p class="font-size-14 mb-2 text-dark"><strong>{{ $advertiser->name }}</strong></p>
                    <p class="font-size-14 mb-2 text-dark"><strong>{{ $advertiser->user->name }}</strong></p>
                </div>
            @endif
            <div class="col-12">
                <hr>
            </div>
            <div class="col-12">
                <p class="font-size-18">Личные данные заказчика</p>
            </div>
            <div class="col-4">
                <p class="small mb-1 font-weight-light">ФИО</p>
                <p class="font-size-16 font-weight-normal">{{ $adv->name }}</p>
            </div>
            <div class="col-4">
                <p class="small mb-1 font-weight-light">Email</p>
                <p class="font-size-16 font-weight-normal">{{ $adv->email }}</p>
            </div>
            <div class="col-4">
                <p class="small mb-1 font-weight-light">Номер телефона</p>
                <p class="font-size-16 font-weight-normal">{{ $adv->phone }}</p>
            </div>
            <div class="col-6 mt-3">
                <p class="small mb-1 font-weight-light">Описание</p>
                <p class="font-size-16 font-weight-normal">{{ $adv->desc }}</p>
            </div>
            <div class="col-6 mt-3">
                <p class="small mb-1 font-weight-light">Комментарий</p>
                <p class="font-size-16 font-weight-normal">{{ $adv->comment }}</p>
            </div>
            <div class="col-3 mt-3 pr-5">
                <p class="small mb-1 font-weight-light">Фото данные рекламы</p>
                <img class="w-100" src="{{ asset('storage/'.$adv->file) }}" alt="">
            </div>
            <div class="col-5 mt-3">
                <p class="small mb-1 font-weight-light">Ссылка на данные рекламы</p>
                <p class="font-size-16 font-weight-normal">{{ isset($adv->comment) ? $adv->comment : 'Отсутствует' }}</p>
            </div>
            <div class="col-4 mt-3">
                <p class="small mb-1 font-weight-light">Стоимость рекламной компании</p>
                <p class="font-size-16 font-weight-normal">{{ $adv->total_price }} сом</p>
                @if($adv->type_id == 7 || $adv->type_id == 8)
                    <p class="font-size-16 font-weight-light">Хронометраж: {{ $adv->chrono }} сек</p>
                @endif
                @if($adv->type_id == 7)
                    @if($adv->tarif == 1)
                        <p class="font-size-16 font-weight-light">Тариф: Выходные дни</p>
                    @else
                        <p class="font-size-16 font-weight-light">Тариф: Будние дни</p>
                    @endif
                @endif
            </div>
            @if(\Illuminate\Support\Facades\Auth::user()->role_id == 3 && $adv->status == 1)
                <div class="col-12 text-center">
                    <a href="{{ route('advActive', $adv->id) }}">
                        <button class="btn btn-success py-2 px-5">Одобрить</button>
                    </a>
                </div>
            @endif

        </div>
    </div>

@endsection