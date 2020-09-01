@extends('layouts.admin.app')
@section('content')
    <div class="container" style="margin-top:100px;">
        <div class="position-relative" id="admin-content" style="min-height: 75vh;">
            {{--<users-component></users-component>--}}
            <router-view></router-view>
        </div>
    </div>
@endsection
{{--@push('scripts')--}}
    {{--<script>--}}
        {{--$(document).on('click','.sidebar-point', function (e) {--}}
            {{--var btn = $(e.currentTarget);--}}
            {{--var type = btn.data('type');--}}

            {{--$.ajax({--}}
                {{--url: '{{ route('admin/switch') }}',--}}
                {{--method: 'POST',--}}
                {{--data: {--}}
                    {{--"_token": "{{ csrf_token() }}",--}}
                    {{--"type": type,--}}
                {{--},--}}
                {{--success: data => {--}}
                    {{--$('.sidebar-point').removeClass('active');--}}
                    {{--btn.addClass('active');--}}
                    {{--$('#admin-content').html(data.html);--}}
                {{--},--}}
                {{--error: () => {--}}

                {{--}--}}
            {{--});--}}

        {{--})--}}
    {{--</script>--}}
{{--@endpush--}}