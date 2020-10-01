<div class="row">
    <div class="col-2">
        <p class="font-weight-bold font-size-18 text-dark">
            Цена
        </p>
    </div>
    <div class="col-3">
        <p class="font-weight-bold font-size-18 text-dark">
            Название
        </p>
    </div>
    <div class="col-5">
        <p class="font-weight-bold font-size-18 text-dark">
            Описание
        </p>
    </div>
</div>
@foreach($cases as $case)
    <div class="row border-bottom pt-3 {{ $loop->index % 2 == 1 ? 'grey lighten-2' : 'bg-white'}}">
        <div class="col-2 d-flex align-items-center">
            <p class="{{ $loop->index % 2 == 1 ? 'font-weight-bold' : 'font-weight-light'}} font-weight-light font-size-14 text-dark mb-0">
                {{$case->price}}$
            </p>
        </div>
        <div class="col-3 d-flex align-items-center">
            <p class="{{ $loop->index % 2 == 1 ? 'font-weight-bold' : 'font-weight-light'}} font-weight-light font-size-14 text-dark mb-0">
                {{$case->name}}
            </p>
        </div>
        <div class="col-5 d-flex align-items-center">
            <p class="{{ $loop->index % 2 == 1 ? 'font-weight-bold' : 'font-weight-light'}} font-weight-light font-size-14 text-dark mb-0">
                {{$case->desc}}
            </p>
        </div>
    </div>
@endforeach