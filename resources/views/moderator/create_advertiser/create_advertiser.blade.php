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
    <form action="{{ route('moderator/advertiser/store') }}" method="POST"  enctype="multipart/form-data">
        @csrf
    <div class="row bg-white justify-content-center p-4">

        <div class="col-3 text-center">
            <img class="img-fluid" src="{{ asset('images/taco-logo.png') }}" alt="">
        </div>
        <div class="col-12">
            <h4 class="font-weight-normal text-center mt-3 mb-5">Создание рекламной платформы</h4>
            <p class="font-weight-light font-size-18 text-center ">Личные данные</p>
        </div>
        <div class="col-4 md-form mt-4">
            <p class="small text-gray mb-1">ФИО <span class="text-danger">*</span></p>
            <input type="text" name="name" id="name" class="form-control" placeholder="ФИО" value="{{ $name }}" required>
        </div>
        <div class="col-4 md-form mt-4">
            <p class="small text-gray mb-1">Email <span class="text-danger">*</span></p>
            <input type="email" name="email" id="email" class="form-control" placeholder="Email" value="{{ $email }}" required>
        </div>
        <div class="col-4 md-form mt-4">
            <p class="small text-gray mb-1">Номер телефона <span class="text-danger">*</span></p>
            <input type="text" onkeypress='return event.charCode >= 48 && event.charCode <= 57' name="phone" id="phone" class="form-control" value="{{ $phone }}" placeholder="Номер телефона" required>
        </div>
        <div class="col-4 md-form mt-4">
            <p class="small text-gray mb-1">Медийное имя (Название канала, группы и тд) <span class="text-danger">*</span></p>
            <input type="text" name="nickname" id="nickname" class="form-control" placeholder="Никнейм" required>
        </div>
        <div class="col-4 md-form mt-4">
            <p class="small text-gray mb-1">Ссылка на платформу <span class="text-danger">*</span></p>
            <input type="text" name="link" id="link" class="form-control" placeholder="Ссылка на платформу" required>
        </div>
        <div class="col-4 md-form mt-4">
            <p class="small text-gray mb-1">Аватар профиля <span class="text-danger">*</span></p>
            <input type="file" name="avatar" id="avatar" class="form-control" placeholder="Выберите фото" required>
        </div>
        <div class="col-12">
            <hr>
            <p class="font-weight-light font-size-18 text-center ">Тип рекламы</p>
        </div>
        <div class="col-4 form-group mt-4">
            <p class="small text-gray mb-1">Выберите категорию рекламы <span class="text-danger">*</span></p>
            <select name="category" id="category" class="form-control" required>
                @foreach(\App\Category::all() as $category)
                    <option value="{{ $category->id }}">{{ $category->title }}</option>
                @endforeach
            </select>
        </div>
        <div class="col-4 form-group mt-4">
            <p class="small text-gray mb-1">Выберите тип рекламы <span class="text-danger">*</span></p>
            <select name="type" id="type" class="form-control" required>
                @foreach(\App\Type::all() as $type)
                    <option value="{{ $type->id }}">{{ $type->title }}</option>
                @endforeach
            </select>
        </div>

        <div class="col-12">
            <hr>
        </div>
        <div class="col-12 field-content">

        </div>
        <div class="col-12 text-center">
            <button type="submit" class="btn btn-success px-5 py-2 mt-3">Сохранить</button>
        </div>

    </div>
    </form>
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
<script>
    $(document).on('change','#type', function (e) {
        var btn = $(e.currentTarget);

        $.ajax({
            method: "POST",
            url: '/getFieldAdvertiser',
            data:
                {
                    '_token': "{{ csrf_token() }}",
                    'type': btn.val(),
                }
            ,

            // serializes the form's elements.
            success: function (data) {
                $('.field-content').html(data.html);
                // console.log(data.html);
            }
        });
    })
</script>
</body>
</html>
