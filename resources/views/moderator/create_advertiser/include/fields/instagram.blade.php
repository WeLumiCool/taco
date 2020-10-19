<div class="row">
    @foreach($fields as $field)
        <div class="col-4 md-form mt-4">
            @if($field->type == 'text')
                <p class="small text-gray mb-1">{{ $field->name }}<span class="text-danger">*</span></p>
                <input type="text" name="{{ $field->id }}" id="{{ $field->name }}" class="form-control" placeholder="{{ $field->name }}" required>
            @elseif($field->type == 'number')
                <p class="small text-gray mb-1">{{ $field->name }}<span class="text-danger">*</span></p>
                <input type="number" name="{{ $field->id }}" id="{{ $field->name }}" class="form-control" placeholder="{{ $field->name }}" required>
            @elseif($field->type == 'date')
                <p class="small text-gray mb-1">{{ $field->name }}<span class="text-danger">*</span></p>
                <input type="date" name="{{ $field->id }}" id="{{ $field->name }}" class="form-control" placeholder="{{ $field->name }}" required>
            @elseif($field->type == 'textarea')
                <p class="small text-gray mb-1">{{ $field->name }}<span class="text-danger">*</span></p>
                <textarea  name="{{ $field->id }}" id="{{ $field->name }}" rows="5" cols="20" class="form-control" placeholder="{{ $field->name }}" required></textarea>
            @endif
        </div>
    @endforeach
</div>