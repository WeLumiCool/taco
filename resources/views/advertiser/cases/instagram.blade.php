<div class="row">
    <div class="col-6">
        <p class="font-weight-bold font-size-16 text-dark">
            Цена
        </p>
    </div>
    <div class="col-6">
        <p class="font-weight-bold font-size-16 text-dark">
            Тип рекламы
        </p>
    </div>
</div>
@foreach($cases as $case)
    <div class="row border-bottom pt-3 {{ $loop->index % 2 == 1 ? 'grey lighten-2' : 'bg-white'}}">
        <div class="col-6 d-flex align-items-center">
            <p class="{{ $loop->index % 2 == 1 ? 'font-weight-bold' : 'font-weight-light'}} font-weight-light font-size-14 text-dark mb-0">
                {{$case->price}} сом
            </p>
        </div>
        <div class="col-6 d-flex align-items-center">
            <p class="{{ $loop->index % 2 == 1 ? 'font-weight-bold' : 'font-weight-light'}} font-weight-light font-size-14 text-dark mb-0">
                {{$case->type}}
            </p>
        </div>
    </div>
@endforeach