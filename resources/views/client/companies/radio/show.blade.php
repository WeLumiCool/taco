@extends('layouts.app')
@section('content')
    <div class="container-fluid" style="margin-top: 100px;">
        <div class="row justify-content-center bg-white">
            <div class="col-12 py-4 px-4">
                <h3 class="roboto font-size-24 text-center" style="color: #556CE0;">
                    {{ $company->name }}
                </h3>
            </div>
        </div>
        <div class="row bg-white">
            <div class="col-3 border-right">
                <img class="img-fluid" src="{{ asset('storage/'.$company->user->avatar) }}" alt="">
            </div>
            <div class="col-9">
                <p class="font-size-20 text-center">
                    Описание
                </p>
                <p class="font-size-16 px-5">
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                </p>
            </div>
        </div>
        <div class="cases bg-white p-5 mt-5 container">
            <p class="font-size-24 text-center font-weight-bold">
                Прайс лист {{$company->name}}
            </p>
            <p class="font-size-16 text-center py-3 mb-5">Базовая стоимость 1-й минуты:</p>
            <div class="row">
                <div class="col-3">
                    <p class="font-weight-bold font-size-18 text-dark">
                        Время
                    </p>
                </div>
                <div class="col-3">
                    <p class="font-weight-bold font-size-18 text-dark">
                        Цена в будние дни
                    </p>
                </div>
                <div class="col-3">
                    <p class="font-weight-bold font-size-18 text-dark">
                        Цена в выходные дни
                    </p>
                </div>
            </div>
            @foreach($cases as $case)

                <div class="row border-bottom pt-3 {{ $loop->index % 2 == 1 ? 'grey lighten-2' : 'bg-white'}}">
                    <div class="col-3">
                        <p class="{{ $loop->index % 2 == 1 ? 'font-weight-bold' : 'font-weight-light'}} font-weight-light font-size-14 text-dark">
                            {{$case->time}}
                        </p>
                    </div>
                    <div class="col-3">
                        <p class="{{ $loop->index % 2 == 1 ? 'font-weight-bold' : 'font-weight-light'}} font-size-14 text-dark">
                            {{$case->price_weekdays}} сом
                        </p>
                    </div>
                    <div class="col-3">
                        <p class="{{ $loop->index % 2 == 1 ? 'font-weight-bold' : 'font-weight-light'}} font-size-14 text-dark">
                            {{$case->price_weekend  }} сом
                        </p>
                    </div>
                    <div class="col-3">
                        <a href="/order/{{$company->id}}/{{$company->type_id}}/{{$case->id}}">
                        <button class="btn taco-btn px-3 py-1">Заказать рекламу</button>
                        </a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection