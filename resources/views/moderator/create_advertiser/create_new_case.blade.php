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
            <img class="img-fluid" src="{{ asset('storage/'.$advertiser->user->avatar) }}" alt="">
        </div>
        <div class="col-6">
        <p class="font-size-16 font-weight-light">Имя пользователя: <span class="font-weight-bold">{{ $advertiser->user->name }}</span></p>
        <p class="font-size-16 font-weight-light">Медийное имя пользователя: <span class="font-weight-bold">{{ $advertiser->name }}</span></p>
        <p class="font-size-16 font-weight-light">Категория рекламы: <span class="font-weight-bold">{{ \App\Category::find($advertiser->category_id)->title }}</span></p>
        <p class="font-size-16 font-weight-light">Тип рекламы: <span class="font-weight-bold">{{ \App\Type::find($advertiser->type_id)->title }}</span></p>
        </div>

        <div class="col-12">
            <hr>
        </div>
        <div class="col-12">
            <form action="{{ route('moderator/advertiser/storeCase') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="adv" value="{{$advertiser->id}}">
            @if($advertiser->type_id == 2)
            <div class="p-2">
                <h4 class="font-size-20 font-weight-bold text-center">Создание кейса (Инстаграм)</h4>

                <div class="row">
                    <div class="col-4">
                        <p class="font-weight-bold mb-1">Цена</p>
                        <div class="md-form mt-0">
                            <input type="number" name="price" id="price" class="form-control" placeholder="Цена" required>
                        </div>
                    </div>
                    <div class="col-4">
                        <p class="font-weight-bold mb-1">Тип рекламы</p>
                        <div class="form-group mt-0">
                            <select class="form-control" name="typeof" id="typeof">
                                <option value="Сторис">Сторис</option>
                                <option value="Пост (Фото)">Пост (Фото)</option>
                                <option value="Пост (Видео)">Пост (Видео)</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-4 d-flex align-items-center">
                        <button type="submit" class="btn btn-success py-1">Сохранить</button>
                    </div>
                </div>
            </div>
            @elseif($advertiser->type_id == 3)
            <div class="p-2">
                <h4 class="font-size-20 font-weight-bold text-center">Создание кейса (Tik Tok)</h4>

                <div class="row">
                    <div class="col-8">
                        <p class="font-weight-bold mb-1">Цена</p>
                        <div class="md-form mt-0">
                            <input type="number" name="price" id="price" class="form-control" placeholder="Цена" required>
                        </div>
                    </div>
                    <div class="col-4 d-flex align-items-center">
                        <button type="submit" class="btn btn-success py-1" >Сохранить</button>
                    </div>
                </div>
            </div>
            @elseif($advertiser->type_id == 4)
            <div class="p-2">
                <h4 class="font-size-20 font-weight-bold text-center">Создание кейса (Youtube)</h4>

                <div class="row">
                    <div class="col-3">
                        <p class="font-weight-bold mb-1">Цена</p>
                        <div class="md-form mt-0">
                            <input type="number" name="price" id="price" class="form-control" placeholder="Цена" required>
                        </div>
                    </div>
                    <div class="col-3">
                        <p class="font-weight-bold mb-1">Название</p>
                        <div class="md-form mt-0">
                            <input type="text" name="name" id="name" class="form-control" placeholder="Название" required>
                        </div>
                    </div>
                    <div class="col-3">
                        <p class="font-weight-bold mb-1">Описание</p>
                        <div class="md-form mt-0">
                            <input type="text" name="desc" id="desc" class="form-control" placeholder="Описание" required>
                        </div>
                    </div>
                    <div class="col-3 d-flex align-items-center">
                        <button type="submit" class="btn btn-success py-1">Сохранить</button>
                    </div>
                </div>
            </div>
            @elseif($advertiser->type_id == 5)
            <div class="p-2">
                <h4 class="font-size-20 font-weight-bold text-center">Создание кейса (Вконтакте)</h4>

                <div class="row">
                    <div class="col-9">
                        <p class="font-weight-bold mb-1">Цена</p>
                        <div class="md-form mt-0">
                            <input type="number" name="price" id="price" class="form-control" placeholder="Цена" required>
                        </div>
                    </div>
                    <div class="col-3 d-flex align-items-center">
                        <button type="submit" class="btn btn-success py-1">Сохранить</button>
                    </div>
                </div>
            </div>
            @elseif($advertiser->type_id == 7)
            <div class="p-2">
                <h4 class="font-size-20 font-weight-bold text-center">Создание кейса (Вконтакте)</h4>

                <div class="row">
                    <div class="col-3">
                        <p class="font-weight-bold mb-1">Цена в будние дни</p>
                        <div class="md-form mt-0">
                            <input type="number" name="price_weekdays" id="price_weekdays" class="form-control" placeholder="Цена в будние дни" required>
                        </div>
                    </div>
                    <div class="col-3">
                        <p class="font-weight-bold mb-1">Цена в выходные дни</p>
                        <div class="md-form mt-0">
                            <input type="number" name="price_weekend" id="price_weekend" class="form-control" placeholder="Цена в выходные дни" required>
                        </div>
                    </div>
                    <div class="col-3">
                        <p class="font-weight-bold mb-1">Время</p>
                        <div class="md-form mt-0">
                            <input type="text" name="time" id="time" class="form-control" placeholder="Время" required>
                        </div>
                    </div>
                    <div class="col-3 d-flex align-items-center">
                        <button type="submit" class="btn btn-success py-1">Сохранить</button>
                    </div>
                </div>
            </div>
            @elseif($advertiser->type_id == 8)
            <div class="p-2">
                <h4 class="font-size-20 font-weight-bold text-center">Создание кейса (Вконтакте)</h4>

                <div class="row">
                    <div class="col-4">
                        <p class="font-weight-bold mb-1">Время</p>
                        <div class="md-form mt-0">
                            <input type="text" name="time" id="time" class="form-control" placeholder="Время" required>
                        </div>
                    </div>
                    <div class="col-4">
                        <p class="font-weight-bold mb-1">Тип</p>
                        <div class="md-form mt-0">
                            <input type="text" name="kind" id="kind" class="form-control" placeholder="Тип" required>
                        </div>
                    </div>
                    <div class="col-4">
                        <p class="font-weight-bold mb-1">Цена</p>
                        <div class="md-form mt-0">
                            <input type="number" name="price" id="price" class="form-control" placeholder="Цена" required>
                        </div>
                    </div>
                    <div class="col-4">
                        <p class="font-weight-bold mb-1">Описание</p>
                        <div class="md-form mt-0">
                            <input type="text" name="desc" id="desc" class="form-control" placeholder="Описание" required>
                        </div>
                    </div>
                    <div class="col-4">
                        <p class="font-weight-bold mb-1">Категория</p>
                        <div class="form-group mt-0">
                            <select class="form-control" name="typeof" id="typeof">
                                <option value="Реклама">Реклама</option>
                                <option value="Продукт">Продукт</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-3 d-flex align-items-center">
                        <button type="submit" class="btn btn-success py-1">Сохранить</button>
                    </div>
                </div>
            </div>
            @elseif($advertiser->type_id == 9)
            <div class="p-2">
                <h4 class="font-size-20 font-weight-bold text-center">Создание кейса (Онлайн платформы)</h4>

                <div class="row">
                    <div class="col-4">
                        <p class="font-weight-bold mb-1">Тип</p>
                        <div class="md-form mt-0">
                            <input type="text" name="type" id="type" class="form-control" placeholder="Тип" required>
                        </div>
                    </div>
                    <div class="col-4">
                        <p class="font-weight-bold mb-1">Позиция</p>
                        <div class="md-form mt-0">
                            <input type="text" name="position" id="position" class="form-control" placeholder="Позиция" required>
                        </div>
                    </div>
                    <div class="col-4">
                        <p class="font-weight-bold mb-1">Платформа</p>
                        <div class="md-form mt-0">
                            <input type="text" name="place" id="place" class="form-control" placeholder="Платформа" required>
                        </div>
                    </div>
                    <div class="col-4">
                        <p class="font-weight-bold mb-1">Описание</p>
                        <div class="md-form mt-0">
                            <input type="text" name="desc" id="desc" class="form-control" placeholder="Описание" required>
                        </div>
                    </div>
                    <div class="col-4">
                        <p class="font-weight-bold mb-1">Цена</p>
                        <div class="md-form mt-0">
                            <input type="number" name="price" id="number" class="form-control" placeholder="Цена" required>
                        </div>
                    </div>
                    <div class="col-3 d-flex align-items-center">
                        <button type="submit" class="btn btn-success py-1">Сохранить</button>
                    </div>
                </div>
            </div>
                @endif
            </form>
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