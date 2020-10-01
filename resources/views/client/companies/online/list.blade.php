@extends('layouts.app')
@section('content')
    <div class="container-fluid" style="margin-top: 100px;">
        <div class="row justify-content-center bg-white">
            <div class="col-12 py-4 px-4">
                <h3 class="roboto font-size-24 text-center" style="color: #556CE0;">
                    Реклама на онлайн площадках
                </h3>
            </div>
            <div class="col-8 py-3 px-4">
                <p class="font-size-18">Подберите для себя оптимальный вариант рекламы!</p>
            </div>
        </div>

        <div class="row bg-white justify-content-center">
            <div class="col-6">
                <div class="md-form mt-0 mb-0">
                    <label for="price">Введите сумму на рекламу</label>
                    <input type="text" name="price" id="price" onkeypress='return event.charCode >= 48 && event.charCode <= 57' class="form-control " placeholder="Цена">
                </div>
            </div>
            <div class="col-3">
                <button class="btn taco-btn py-2 px-5 m-0" id="btn-get">Подобрать</button>
            </div>
        </div>

        <div class="pt-5 bg-white p-5">
            <div class="row choice-list">
                @foreach($cases as $case)
                    <div class="col-3 p-2">

                        <div class="py-2  shadow-sm h-100">
                            {{--@dd($case->advertiser)--}}
                            <div class="mx-5" style="height:150px; background-image: url({{ asset('storage/'.$case->advertiser->user->avatar) }}); background-size: cover; background-position: center;"></div>
                            <p class="font-size-16 text-center roboto font-weight-normal mt-3">{{$case->advertiser->name}}</p>
                            <p class="font-size-16 text-center roboto font-weight-light mt-1">{{$case->type}}</p>
                            <p class="font-size-16 text-center roboto font-weight-light mt-1">{{$case->position}}</p>
                            <p class="font-size-16 text-center roboto font-weight-bold mt-1">{{$case->place}}</p>
                            <p class="font-size-14 text-center roboto font-weight-bold mt-1">Цена: {{$case->price}} сом</p>
                            <div class="text-center">
                                <a href="{{ route('online',$case->advertiser->id) }}">
                                    <button class="btn taco-btn px-3 py-1">
                                        Подробнее
                                    </button>
                                </a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
@push('scripts')
    <script>
        $(document).on('click', '#btn-get', function () {
            var btn = $('#price');
            // var type = $('#type');

            $.ajax({
                url: '{{ route('online_calc') }}',
                method: 'POST',
                data: {
                    "_token": "{{ csrf_token() }}",
                    "value": btn.val(),
                    // "type": type.val()
                },
                success: data => {
                    $('.choice-list').html(data.html);
                },
                error: () => {
                }
            });
        })
    </script>
@endpush