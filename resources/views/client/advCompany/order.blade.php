@extends('layouts.app')
@section('content')

    <div class="container " style="margin-top: 100px;">
        <h4 class="text-center font-weight-bold mb-4">Заполните анкету</h4>
        <form class="row p-4 bg-white" action="{{ route('advCompanyStore') }}" method="POST"  enctype="multipart/form-data">
            @csrf
            <div class="col-12">
                <h4 class="font-weight-normal">Данные о кейсе</h4>
            </div>
                @if($type == 2)
            <div class="col-6">
                <p class="font-size-14 mb-2 text-dark"><strong>Инстаграм</strong></p>
                <p class="font-size-14 mb-2 text-dark">Цена: <strong>{{ $case->price }} сом</strong></p>
                <p class="font-size-14 mb-2 text-dark">Тип рекламы: <strong>{{ $case->type }}</strong></p>
            </div>
                <div class="col-6">
                    <p class="font-size-14 mb-2 text-dark"><strong>{{ $advertiser->name }}</strong></p>
                    <p class="font-size-14 mb-2 text-dark"><strong>{{ $advertiser->user->name }}</strong></p>
                </div>
            @elseif($type == 3)
                <div class="col-6">
                    <p class="font-size-14 mb-2 text-dark"><strong>TikTok</strong></p>
                    <p class="font-size-14 mb-2 text-dark"><strong>Цена: {{ $case->price }} сом</strong></p>
                </div>
                <div class="col-6">
                    <p class="font-size-14 mb-2 text-dark"><strong>{{ $advertiser->name }}</strong></p>
                    <p class="font-size-14 mb-2 text-dark"><strong>{{ $advertiser->user->name }}</strong></p>
                </div>
            @elseif($type == 4)
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
            @elseif($type == 5)
                <div class="col-6">
                    <p class="font-size-14 mb-2 text-dark"><strong>ВКонтакте</strong></p>
                    <p class="font-size-14 mb-2 text-dark">Цена: <strong>{{ $case->price }}$</strong></p>
                </div>
                <div class="col-6">
                    <p class="font-size-14 mb-2 text-dark"><strong>{{ $advertiser->name }}</strong></p>
                    <p class="font-size-14 mb-2 text-dark"><strong>{{ $advertiser->user->name }}</strong></p>
                </div>
            @elseif($type == 7)
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
            @elseif($type == 8)
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
            @elseif($type == 9)
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

            @if($type == 7 || $type == 8)
                <div class="col-12">
                    <h4 class="font-weight-normal">Данные о рекламе</h4>
                </div>
                <div class="col-4 md-form mt-4">
                    <p class="small text-gray mb-1">Введите количество минут на рекламу <span class="text-danger">*</span></p>
                    <input type="text" name="chrono" id="chrono" onkeypress='return event.charCode >= 48 && event.charCode <= 57' class="form-control" placeholder="Время" value="1" required>
                </div>
                @if($type == 7)
                <div class="col-4 md-form mt-4">
                    <p class="small text-gray mb-1">Выберите тариф <span class="text-danger">*</span></p>
                    <select class="form-control" name="tarif" id="tarif">
                        <option value="1">Выходные дни - {{$case->price_weekend}} сом/мин</option>
                        <option value="2">Будние дни - {{$case->price_weekdays}} сом/мин</option>
                    </select>
                </div>
                    <div class="col-4 d-flex align-items-end font-weight-bold">
                        <p class="text-success pb-3">Итого: <span class="total_price">{{ 1 * $case->price_weekend }}</span> сом</p>
                    </div>
                @endif
                @if($type == 8)
                    <div class="col-4 d-flex align-items-end font-weight-bold">
                        <p class="text-success pb-3">Итого: <span class="total_price">{{ 1 * $case->price }}</span> сом</p>
                    </div>
                @endif
                <div class="col-12">
                    <hr>
                </div>
            @endif
            <div class="col-12">
                <h4 class="font-weight-normal">Личные данные</h4>
            </div>
            <div class="col-4 md-form mt-4">
                <p class="small text-gray mb-1">Ваше ФИО <span class="text-danger">*</span></p>
                <input type="text" name="name" id="name" class="form-control" placeholder="ФИО" value="{{ $user->name }}" required>
            </div>
                <div class="col-4 md-form mt-4">
                    <p class="small text-gray mb-1">Номер телефона <span class="text-danger">*</span></p>
                    <input type="text" name="phone" id="phone" onkeypress='return event.charCode >= 48 && event.charCode <= 57 || event.charCode === 43'  class="form-control" placeholder="Номер телефона" value="{{ $user->phone }}" required>
                </div>

                <div class="col-4 md-form mt-4">
                    <p class="small text-gray mb-1">Ваш Email <span class="text-danger">*</span></p>
                    <input type="email" name="email" id="email" class="form-control" placeholder="email" value="{{ $user->email }}" required>
                </div>
                <div class="col-6 form-group mt-4">
                    <p class="small text-gray mb-1">Закрепите фото с данными о вашей рекламе (Необязательно)</p>
                    <input type="file" name="file" id="file" class="form-control" placeholder="Выберите файл"  accept="image/x-png,image/gif,image/jpeg"/>
                </div>
                <div class="col-6 form-group mt-4">
                    <p class="small text-gray mb-1">Ссылка на материал вашей рекламы (Необязательно)</p>
                    <input type="text" name="link" id="link" class="form-control" placeholder="Введите ссылку">
                </div>
                <div class="col-12"></div>
                <div class="col-6 md-form mt-4">
                    <p class="small text-gray mb-1">Описание (Необязательно)</p>
                    <textarea name="desc" id="desc" cols="30" rows="5" class="form-control px-2" placeholder="Опишите вашу рекламу"></textarea>
                </div>
                <div class="col-6 md-form mt-4">
                    <p class="small text-gray mb-1">Комментарии (Необязательно)</p>
                    <textarea name="comment" id="comment" cols="30" rows="5" class="form-control px-2" placeholder="Ваши комментарии или пожелания"></textarea>
                </div>
                <input type="hidden" name="type_id" value="{{$type}}">
                <input type="hidden" name="user_id" value="{{$user->id}}">
                <input type="hidden" name="advertiser_id" value="{{$advertiser->id}}">
                <input type="hidden" name="case_id" value="{{$case->id}}">
                <input type="hidden" id="send_price" name="total_price" value="{{$case->price}}">
            <input type="hidden" name="url" value="{{$link}}">

            <div class="col-12 text-center">
                <button class="btn btn-success py-2 px-5" type="submit">Отправить</button>
            </div>
        </form>
    </div>

@endsection
@push('scripts')
    @if($type == 7)
        <script>
            $(document).on('keyup', '#chrono', function (e) {
                var btn = $(e.currentTarget);
                var weekend = {{$case->price_weekend}};
                var weekdays = {{$case->price_weekdays}};

                var tarif = $('#tarif').val();
                console.log(tarif);
                if (tarif == 1) {
                    $('.total_price').html(btn.val() * weekend);
                    $('#send_price').val(btn.val() * weekend);
                }
                else if (tarif == 2) {
                    $('.total_price').html(btn.val() * weekdays);
                    $('#send_price').val(btn.val() * weekdays);
                }
            });

            $(document).on('change', '#tarif', function (e) {
                var btn = $(e.currentTarget);
                var weekend = {{$case->price_weekend}};
                var weekdays = {{$case->price_weekdays}};

                var min = $('#chrono').val();
                if (btn.val() == 1) {
                    $('.total_price').html(min * weekend);
                    $('#send_price').val(min * weekend);
                }
                else if (btn.val() == 2) {
                    $('.total_price').html(min * weekdays);
                    $('#send_price').val(min * weekdays);
                }
            })
        </script>
    @elseif($type == 8)
        <script>
            $(document).on('keyup', '#chrono', function (e) {
                var btn = $(e.currentTarget);
                var price = {{$case->price}};

                $('.total_price').html(btn.val() * price);
                $('#send_price').val(btn.val() * price);

            })
        </script>
    @endif
    @endpush