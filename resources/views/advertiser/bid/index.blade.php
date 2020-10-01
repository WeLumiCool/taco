@extends('layouts.app')
@section('content')
    <div class="container-fluid" style="margin-top:100px;">
        <div class="row justify-content-center">
            <div class="col-12 bg-white py-4 px-4 content-box">
                <div class="col-12 mt-5">
                    <div class="row">
                        <div class="col-lg-4 col-12">
                            <div class="nav nav-tabs" id="myTab" role="tablist">
                                <a class="active w-100" id="home-tab" data-toggle="tab" href="#false" role="tab" aria-controls="home" aria-selected="true">
                                    <button class="btn taco-btn-2 w-100 mb-3 py-2 font-size-12">
                                        Незавершенные кампании
                                    </button>
                                </a>
                                <a class="w-100" id="profile-tab" data-toggle="tab" href="#wait" role="tab"
                                   aria-controls="profile" aria-selected="false">
                                    <button class="btn taco-btn-2 w-100 mb-3 py-2 font-size-12">
                                        Ожидают подтверждения
                                    </button>
                                </a>
                                <a class="w-100" id="contact-tab" data-toggle="tab" href="#active" role="tab"
                                   aria-controls="contact" aria-selected="false">
                                    <button class="btn taco-btn-2 w-100 mb-3 py-2 font-size-12">
                                        Активные кампании
                                    </button>
                                </a>
                                <a class="w-100" id="contact-tab" data-toggle="tab" href="#close" role="tab"
                                   aria-controls="contact" aria-selected="false">
                                    <button class="btn taco-btn-2 w-100 mb-3 py-2 font-size-12">
                                        Завершенные
                                    </button>
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-8 col-12 px-4 tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="false" role="tabpanel" aria-labelledby="home-tab">
                                <div class="row">
                                    <div class="col-lg-3 col-12">
                                        <p class="font-size-16 mb-0">
                                            Рекламодатель
                                        </p>
                                    </div>
                                    <div class="col-lg-3 col-12">
                                        <p class="font-size-16 mb-0">
                                            Платформа
                                        </p>
                                    </div>
                                    <div class="col-lg-3 col-12">
                                        <p class="font-size-16 mb-0">
                                            Сумма
                                        </p>
                                    </div>
                                </div>
                                <hr>
                            </div>
                            <div class="tab-pane fade" id="wait" role="tabpanel" aria-labelledby="profile-tab">
                                <div class="row">
                                    <div class="col-lg-3 col-12">
                                        <p class="font-size-16 mb-0">
                                            Рекламодатель
                                        </p>
                                    </div>
                                    <div class="col-lg-3 col-12">
                                        <p class="font-size-16 mb-0">
                                            Платформа
                                        </p>
                                    </div>
                                    <div class="col-lg-3 col-12">
                                        <p class="font-size-16 mb-0">
                                            Сумма
                                        </p>
                                    </div>
                                </div>
                                <hr>
                                @foreach($advs as $adv)
                                    @if($adv->status == 1)
                                        <div class="row">
                                            <div class="col-lg-3 col-12">
                                                <p class="font-size-16 mb-0">
                                                    {{ \App\Advertiser::find($adv->advertiser_id)->name }}
                                                </p>
                                            </div>
                                            <div class="col-lg-3 col-12">
                                                <p class="font-size-16 mb-0">
                                                    {{ \App\Type::find($adv->type_id)->title }}
                                                </p>
                                            </div>
                                            <div class="col-lg-3 col-12">
                                                <p class="font-size-16 mb-0">
                                                    {{ $adv->total_price }} сом
                                                </p>
                                            </div>
                                            <div class="col-lg-3 col-12">
                                                <a href="{{ route('advCompany',$adv->id) }}">
                                                    <p class="small">
                                                        Подробнее
                                                    </p>
                                                </a>
                                            </div>
                                        </div>
                                    @endif
                                @endforeach
                            </div>
                            <div class="tab-pane fade" id="active" role="tabpanel" aria-labelledby="contact-tab">
                                <div class="row">
                                    <div class="col-lg-3 col-12">
                                        <p class="font-size-16 mb-0">
                                            Рекламодатель
                                        </p>
                                    </div>
                                    <div class="col-lg-3 col-12">
                                        <p class="font-size-16 mb-0">
                                            Платформа
                                        </p>
                                    </div>
                                    <div class="col-lg-3 col-12">
                                        <p class="font-size-16 mb-0">
                                            Сумма
                                        </p>
                                    </div>
                                </div>
                                <hr>
                                @foreach($advs as $adv)
                                    @if($adv->status == 2)
                                        <div class="row">
                                            <div class="col-lg-3 col-12">
                                                <p class="font-size-16 mb-0">
                                                    {{ \App\Advertiser::find($adv->advertiser_id)->name }}
                                                </p>
                                            </div>
                                            <div class="col-lg-3 col-12">
                                                <p class="font-size-16 mb-0">
                                                    {{ \App\Type::find($adv->type_id)->title }}
                                                </p>
                                            </div>
                                            <div class="col-lg-3 col-12">
                                                <p class="font-size-16 mb-0">
                                                    {{ $adv->total_price }} сом
                                                </p>
                                            </div>
                                            <div class="col-lg-3 col-12">
                                                <a href="{{ route('advCompany',$adv->id) }}">
                                                    <p class="small">
                                                        Подробнее
                                                    </p>
                                                </a>
                                            </div>
                                        </div>
                                    @endif
                                @endforeach
                            </div>
                            <div class="tab-pane fade" id="close" role="tabpanel" aria-labelledby="contact-tab">
                                <div class="row">
                                    <div class="col-lg-3 col-12">
                                        <p class="font-size-16 mb-0">
                                            Рекламодатель
                                        </p>
                                    </div>
                                    <div class="col-lg-3 col-12">
                                        <p class="font-size-16 mb-0">
                                            Платформа
                                        </p>
                                    </div>
                                    <div class="col-lg-3 col-12">
                                        <p class="font-size-16 mb-0">
                                            Сумма
                                        </p>
                                    </div>
                                </div>
                                <hr>
                                @foreach($advs as $adv)
                                    @if($adv->status == 3)
                                        <div class="row">
                                            <div class="col-lg-3 col-12">
                                                <p class="font-size-16 mb-0">
                                                    {{ \App\Advertiser::find($adv->advertiser_id)->name }}
                                                </p>
                                            </div>
                                            <div class="col-lg-3 col-12">
                                                <p class="font-size-16 mb-0">
                                                    {{ \App\Type::find($adv->type_id)->title }}
                                                </p>
                                            </div>
                                            <div class="col-lg-3 col-12">
                                                <p class="font-size-16 mb-0">
                                                    {{ $adv->total_price }} сом
                                                </p>
                                            </div>
                                            <div class="col-lg-3 col-12">
                                                <a href="{{ route('advCompany',$adv->id) }}">
                                                    <p class="small">
                                                        Подробнее
                                                    </p>
                                                </a>
                                            </div>
                                        </div>
                                    @endif
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection