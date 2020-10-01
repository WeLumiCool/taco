<div class="row">
    <div class="col-2">
        <p class="font-weight-bold font-size-18 text-dark">
            Площадка
        </p>
    </div>
    <div class="col-2">
        <p class="font-weight-bold font-size-18 text-dark">
            Тип рекламы
        </p>
    </div>
    <div class="col-2">
        <p class="font-weight-bold font-size-18 text-dark">
            Позиция
        </p>
    </div>
    <div class="col-2">
        <p class="font-weight-bold font-size-18 text-dark">
            Описание
        </p>
    </div>
    <div class="col-2">
        <p class="font-weight-bold font-size-18 text-dark">
            Цена
        </p>
    </div>
</div>
@foreach($cases as $case)
    <div class="row border-bottom pt-3 {{ $loop->index % 2 == 1 ? 'grey lighten-2' : 'bg-white'}}">
        <div class="col-2 d-flex align-items-center">
            <p class="{{ $loop->index % 2 == 1 ? 'font-weight-bold' : 'font-weight-light'}} font-weight-light font-size-14 text-dark mb-0">
                {{$case->place}}
            </p>
        </div>
        <div class="col-2 d-flex align-items-center">
            <p class="{{ $loop->index % 2 == 1 ? 'font-weight-bold' : 'font-weight-light'}} font-weight-light font-size-14 text-dark mb-0">
                {{$case->type}}
            </p>
        </div>
        <div class="col-2 d-flex align-items-center">
            <p class="{{ $loop->index % 2 == 1 ? 'font-weight-bold' : 'font-weight-light'}} font-weight-light font-size-14 text-dark mb-0">
                {{$case->position}}
            </p>
        </div>
        <div class="col-2 d-flex align-items-center">
            <p class="{{ $loop->index % 2 == 1 ? 'font-weight-bold' : 'font-weight-light'}} font-weight-light font-size-14 text-dark mb-0">
                {{$case->desc}}
            </p>
        </div>
        <div class="col-2 d-flex align-items-center">
            <p class="{{ $loop->index % 2 == 1 ? 'font-weight-bold' : 'font-weight-light'}} font-weight-light font-size-14 text-dark mb-0">
                {{$case->price}} сом
            </p>
        </div>
    </div>
@endforeach