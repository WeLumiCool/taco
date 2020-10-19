<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>TACO</title>
    <link rel="icon" type="image/png" href="{{ asset('images/t.png') }}">

    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;700;800&family=Roboto:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">

    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <link href="{{ asset('css/main.css') }}" rel="stylesheet">
</head>
<body>
<div class="preloader">
    <div class="row h-100 align-items-center justify-content-center">
        <div class="d-flex">
            <p class="font-size-28 first mr-2">T</p>
            <p class="font-size-28 second mr-2">A</p>
            <p class="font-size-28 third mr-2">C</p>
            <p class="font-size-28 fourth">O</p>
        </div>
    </div>
</div>
<style>
    body{
        background-color: #2A2F42;
    }
</style>

<div class="container" style="margin-top:100px;">
    <div class="text-center mb-4">
        <img class="img-fluid" src="{{ asset('images/taco-logo.png') }}" alt="">
    </div>
    <div class="row bg-white justify-content-center p-4">
        <div class="col-4 text-center">
            <img class="img-fluid" src="{{ asset('storage/'.$user->avatar) }}" alt="">
        </div>
        <div class="col-8 py-3">
            <h4 class="text-center">Кейсы рекламной площадки</h4>
            <p class="small text-success">Рекламная площадка успешно создана, заполните пожалуйста кейсы</p>
            <div class="row">
                <div class="col-6">
                    <p class="font-size-16 font-weight-light">Имя пользователя: <span class="font-weight-bold">{{ $user->name }}</span></p>
                    <p class="font-size-16 font-weight-light">Email пользователя: <span class="font-weight-bold">{{ $user->email }}</span></p>
                    <p class="font-size-16 font-weight-light">Номер телефона пользователя: <span class="font-weight-bold">{{ $user->phone }}</span></p>
                    <p class="font-size-16 font-weight-light">Медийное имя пользователя: <span class="font-weight-bold">{{ $user->advertiser->name }}</span></p>
                    <p class="font-size-16 font-weight-light">Ссылка на платформу: <span class="font-weight-bold">{{ $user->advertiser->url_address }}</span></p>
                    <p class="font-size-16 font-weight-light">Категория рекламы: <span class="font-weight-bold">{{ \App\Category::find($user->advertiser->category_id)->title }}</span></p>
                    <p class="font-size-16 font-weight-light">Тип рекламы: <span class="font-weight-bold">{{ \App\Type::find($user->advertiser->type_id)->title }}</span></p>
                </div>
                <div class="col-6">
                    @foreach($user->advertiser->fields as $field)
                        <p class="font-size-16 font-weight-light">{{ $field['title'] }}: <span class="font-weight-bold">{{ $field['value'] }}</span></p>
                    @endforeach
                </div>
            </div>

        </div>
        <div class="col-12">
            <hr>
        </div>
        <div class="col-12">
            <h4 class="font-weight-light text-center">Кейсы</h4>

            @if(count($cases) == 0)
                <p class="font-size-18 font-weight-light">Кейсов нет</p>
            @else
                @if($user->advertiser->type_id == 2)
                    <div class="row">
                        <div class="col-6">
                            <p class="font-weight-bold">
                                Цена
                            </p>
                        </div>
                        <div class="col-6">
                            <p class="font-weight-bold">
                                Тип
                            </p>
                        </div>
                        <div class="col-12">
                            <hr>
                        </div>
                    </div>
                @foreach($cases as $case)

                        <div class="row">
                            <div class="col-6">
                                <p class="font-weight-bold">
                                    {{$case->price}}
                                </p>
                            </div>
                            <div class="col-6">
                                <p class="font-weight-bold">
                                    {{$case->type}}
                                </p>
                            </div>
                            <div class="col-12">
                                <hr>
                            </div>
                        </div>
                @endforeach
                    @elseif($user->advertiser->type_id == 3)
                    <div class="row">
                        <div class="col-6">
                            <p class="font-weight-bold">
                                Цена
                            </p>
                        </div>
                        <div class="col-12">
                            <hr>
                        </div>
                    </div>
                        @foreach($cases as $case)

                            <div class="row">
                                <div class="col-6">
                                    <p class="font-weight-bold">
                                        {{$case->price}}
                                    </p>
                                </div>
                                <div class="col-12">
                                    <hr>
                                </div>
                            </div>

                        @endforeach
                @elseif($user->advertiser->type_id == 4)
                    <div class="row">
                        <div class="col-4">
                            <p class="font-weight-bold">
                                Цена
                            </p>
                        </div>
                        <div class="col-4">
                            <p class="font-weight-bold">
                                Название
                            </p>
                        </div>
                        <div class="col-4">
                            <p class="font-weight-bold">
                                Описание
                            </p>
                        </div>
                        <div class="col-12">
                            <hr>
                        </div>
                    </div>
                    @foreach($cases as $case)

                        <div class="row">
                            <div class="col-4">
                                <p class="font-weight-bold">
                                    {{$case->price}}
                                </p>
                            </div>
                            <div class="col-4">
                                <p class="font-weight-bold">
                                    {{$case->name}}
                                </p>
                            </div>
                            <div class="col-4">
                                <p class="font-weight-bold">
                                    {{$case->desc}}
                                </p>
                            </div>
                            <div class="col-12">
                                <hr>
                            </div>
                        </div>

                    @endforeach
                @elseif($user->advertiser->type_id == 5)
                    <div class="row">
                        <div class="col-6">
                            <p class="font-weight-bold">
                                Цена
                            </p>
                        </div>
                        <div class="col-12">
                            <hr>
                        </div>
                    </div>
                    @foreach($cases as $case)

                        <div class="row">
                            <div class="col-6">
                                <p class="font-weight-bold">
                                    {{$case->price}}
                                </p>
                            </div>
                            <div class="col-12">
                                <hr>
                            </div>
                        </div>
                    @endforeach
                @elseif($user->advertiser->type_id == 7)
                    <div class="row">
                        <div class="col-4">
                            <p class="font-weight-bold">
                                Время
                            </p>
                        </div>
                        <div class="col-4">
                            <p class="font-weight-bold">
                                Цена в будние дни
                            </p>
                        </div>
                        <div class="col-4">
                            <p class="font-weight-bold">
                                Цена в выходные дни
                            </p>
                        </div>
                        <div class="col-12">
                            <hr>
                        </div>
                    </div>
                    @foreach($cases as $case)

                        <div class="row">
                            <div class="col-4">
                                <p class="font-weight-bold">
                                    {{$case->time}}
                                </p>
                            </div>
                            <div class="col-4">
                                <p class="font-weight-bold">
                                    {{$case->price_weekdays}}
                                </p>
                            </div>
                            <div class="col-4">
                                <p class="font-weight-bold">
                                    {{$case->price_weekend}}
                                </p>
                            </div>
                            <div class="col-12">
                                <hr>
                            </div>
                        </div>
                    @endforeach
                @elseif($user->advertiser->type_id == 8)
                    <div class="row">
                        <div class="col-2">
                            <p class="font-weight-bold">
                                Время
                            </p>
                        </div>
                        <div class="col-3">
                            <p class="font-weight-bold">
                                Тип
                            </p>
                        </div>
                        <div class="col-2">
                            <p class="font-weight-bold">
                                Цена
                            </p>
                        </div>
                        <div class="col-3">
                            <p class="font-weight-bold">
                                Описание
                            </p>
                        </div>
                        <div class="col-2">
                            <p class="font-weight-bold">
                                Категория
                            </p>
                        </div>
                        <div class="col-12">
                            <hr>
                        </div>
                    </div>
                    @foreach($cases as $case)

                        <div class="row">
                            <div class="col-2">
                                <p class="font-weight-bold">
                                    {{$case->time}}
                                </p>
                            </div>
                            <div class="col-3">
                                <p class="font-weight-bold">
                                    {{$case->type}}
                                </p>
                            </div>
                            <div class="col-2">
                                <p class="font-weight-bold">
                                    {{$case->price}}
                                </p>
                            </div>
                            <div class="col-3">
                                <p class="font-weight-bold">
                                    {{$case->desc}}
                                </p>
                            </div>
                            <div class="col-2">
                                <p class="font-weight-bold">
                                    {{$case->category}}
                                </p>
                            </div>
                            <div class="col-12">
                                <hr>
                            </div>
                        </div>
                    @endforeach
                @elseif($user->advertiser->type_id == 9)
                    <div class="row">
                        <div class="col-2">
                            <p class="font-weight-bold">
                                Тип
                            </p>
                        </div>
                        <div class="col-3">
                            <p class="font-weight-bold">
                                Расположения рекламы
                            </p>
                        </div>
                        <div class="col-2">
                            <p class="font-weight-bold">
                                Платформа
                            </p>
                        </div>
                        <div class="col-3">
                            <p class="font-weight-bold">
                                Описание
                            </p>
                        </div>
                        <div class="col-2">
                            <p class="font-weight-bold">
                                Цена
                            </p>
                        </div>
                        <div class="col-12">
                            <hr>
                        </div>
                    </div>
                    @foreach($cases as $case)

                        <div class="row">
                            <div class="col-2">
                                <p class="font-weight-bold">
                                    {{$case->type}}
                                </p>
                            </div>
                            <div class="col-3">
                                <p class="font-weight-bold">
                                    {{$case->position}}
                                </p>
                            </div>
                            <div class="col-2">
                                <p class="font-weight-bold">
                                    {{$case->place}}
                                </p>
                            </div>
                            <div class="col-3">
                                <p class="font-weight-bold">
                                    {{$case->desc}}
                                </p>
                            </div>
                            <div class="col-2">
                                <p class="font-weight-bold">
                                    {{$case->price}}
                                </p>
                            </div>
                            <div class="col-12">
                                <hr>
                            </div>
                        </div>
                    @endforeach
                @endif
            @endif
            <div class="d-flex justify-content-center">
                <a href="{{ route('moderator/advertiser/addCase', $user->advertiser->id) }}">
                <div class="bg-success d-flex align-items-center justify-content-center px-3" style="width: auto; height: 40px; border-radius: 30px;">
                    <p class="text-white mr-2 mb-0">Добавить кейс</p><i class="far fa-plus-square fa-lg text-white"></i>
                </div>
                </a>
            </div>

        </div>
    </div>
</div>



<script src="{{ asset('js/app.js') }}"></script>
@stack('scripts')
<script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.3/dist/Chart.min.js"></script>

<script>
    function preloader() {
        $('.preloader').fadeOut('slow').delay(1000);
    }
</script>
<script>
    $('.sidebar-link').click(function () {
        $('.sidebar').show();
    });
    $('.sidebar-close').click(function () {
        $('.sidebar').hide();
    })
</script>
<script>
    setTimeout(preloader, 500);
</script>
</body>
</html>
