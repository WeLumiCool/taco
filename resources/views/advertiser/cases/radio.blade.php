<div class="row">
    <div class="col-4">
        <p class="font-weight-bold font-size-16 text-dark">
            Время
        </p>
    </div>
    <div class="col-4">
        <p class="font-weight-bold font-size-16 text-dark">
            Цена в будние дни
        </p>
    </div>
    <div class="col-4">
        <p class="font-weight-bold font-size-16 text-dark">
            Цена в выходные дни
        </p>
    </div>
</div>
@foreach($cases as $case)

    <div class="row border-bottom pt-3 {{ $loop->index % 2 == 1 ? 'grey lighten-2' : 'bg-white'}}">
        <div class="col-4">
            <p class="{{ $loop->index % 2 == 1 ? 'font-weight-bold' : 'font-weight-light'}} font-weight-light font-size-14 text-dark">
                {{$case->time}}
            </p>
        </div>
        <div class="col-4">
            <p class="{{ $loop->index % 2 == 1 ? 'font-weight-bold' : 'font-weight-light'}} font-size-14 text-dark">
                {{$case->price_weekdays}} сом
            </p>
        </div>
        <div class="col-4">
            <p class="{{ $loop->index % 2 == 1 ? 'font-weight-bold' : 'font-weight-light'}} font-size-14 text-dark">
                {{$case->price_weekend  }} сом
            </p>
        </div>
    </div>
@endforeach