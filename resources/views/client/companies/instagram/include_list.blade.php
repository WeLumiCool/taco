@foreach($cases as $case)
    <div class="col-3 p-2">

        <div class="py-2  shadow-sm">
            {{--@dd($case->advertiser)--}}
            <div class="mx-5" style="height:150px; background-image: url({{ asset('storage/'.$case->advertiser->user->avatar) }}); background-size: cover; background-position: center;"></div>
            <p class="font-size-16 text-center roboto font-weight-normal mt-3">{{$case->advertiser->name}}</p>
            <p class="font-size-16 text-center roboto font-weight-light mt-1">Тип: {{$case->type}}</p>
            <p class="font-size-14 text-center roboto font-weight-light mt-1">Цена: {{$case->price}} сом</p>
            <div class="text-center">
                <a href="{{ route('instagram',$case->advertiser->id) }}">
                    <button class="btn taco-btn px-3 py-1">
                        Подробнее
                    </button>
                </a>
            </div>
        </div>
    </div>
@endforeach