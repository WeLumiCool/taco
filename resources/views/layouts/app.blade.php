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
<div class="h-100" id="app">
    @include('partials.header')
    <main class="h-100">
        <div class="container-fluid h-100">
            <div class="row h-100">
                @include('partials.sidebar')
                <div class="col-lg-10 col-12 py-4">
                    @yield('content')
                </div>
            </div>
        </div>
    </main>
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
    var ctx = document.getElementById('myChart').getContext('2d');
    var myChart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: ['Red', 'Blue', 'Yellow', 'Green', 'Purple', 'Orange'],
            datasets: [{
                label: '# of Votes',
                data: [12, 19, 3, 5, 2, 3],
                backgroundColor: [
                    'rgba(255, 99, 132, 0.2)',
                    'rgba(54, 162, 235, 0.2)',
                    'rgba(255, 206, 86, 0.2)',
                    'rgba(75, 192, 192, 0.2)',
                    'rgba(153, 102, 255, 0.2)',
                    'rgba(255, 159, 64, 0.2)'
                ],
                borderColor: [
                    'rgba(255, 99, 132, 1)',
                    'rgba(54, 162, 235, 1)',
                    'rgba(255, 206, 86, 1)',
                    'rgba(75, 192, 192, 1)',
                    'rgba(153, 102, 255, 1)',
                    'rgba(255, 159, 64, 1)'
                ],
                borderWidth: 1
            }]
        },
        options: {
            scales: {
                yAxes: [{
                    ticks: {
                        beginAtZero: true
                    }
                }]
            }
        }
    });
</script>
</body>
</html>

