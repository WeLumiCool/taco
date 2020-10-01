@extends('layouts.app')
@section('content')

    <div class="container mt-5">
        <div class="text-center mb-3">
            <p class="font-size-20 font-weight-bold">Личный кабинет</p>
        </div>
        <div class="row bg-white p-4 rounded">
            <div class="col-3 border-right text-center">
                <div style="width:200px; height:200px; background-size: cover; background-position: center; background-repeat: no-repeat; border-radius: 50%; background-image: url({{ asset('storage/'.$user->avatar) }})"></div>
            </div>
            <div class="col-9 px-5">
                <p class="font-size-18 font-weight-normal">{{$user->name}}</p>
                <p class="font-size-18 font-weight-normal">{{$user->advertiser->name}}</p>
                <p class="font-size-16 font-weight-light mb-1">Email: {{$user->email}}</p>
                <p class="font-size-16 font-weight-light mb-1">Номер телефона: {{$user->phone}}</p>
                <p class="font-size-16 font-weight-normal mb-1">Ваши услуги: {{ $user->advertiser->category->title }} реклама. {{$user->advertiser->type->title}}</p>
            </div>
        </div>
        <div class="bg-white p-4 mt-3 rounded">
            @if($user->advertiser->type_id == 2)
                @include('advertiser.cases.instagram', ['cases' => $cases])
            @elseif($user->advertiser->type_id == 3)
                @include('advertiser.cases.tiktok', ['cases' => $cases])
            @elseif($user->advertiser->type_id == 4)
                @include('advertiser.cases.youtube', ['cases' => $cases])
            @elseif($user->advertiser->type_id == 5)
                @include('advertiser.cases.vkontakte', ['cases' => $cases])
            @elseif($user->advertiser->type_id == 7)
                @include('advertiser.cases.radio',['cases' => $cases])
            @elseif($user->advertiser->type_id == 8)
                @include('advertiser.cases.tv',['cases' => $cases])
            @elseif($user->advertiser->type_id == 9)
                @include('advertiser.cases.online',['cases' => $cases])
            @endif
        </div>
    </div>

@endsection