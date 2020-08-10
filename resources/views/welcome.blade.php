@extends('layouts.app')
@section('content')
    @if(Auth::user()->role->name == 'admin')
        @include('client.home')
    @endif
    @if(Auth::user()->role->name == 'user')
        @include('advertiser.home')
    @endif
@endsection
{{--@push('scripts')--}}
    {{--<script>--}}
        {{--$(document).ready(function () {--}}
            {{--var sidebar = document.getElementById('sidebar');--}}
            {{--console.log(sidebar);--}}
            {{--sidebar.addEventListener("mouseover", function () {--}}
                {{--sidebar.classList.add('show');--}}
                {{--sidebar.querySelectorAll('.sidebar-name').forEach(element => element.classList.add('show'));--}}
            {{--});--}}
            {{--sidebar.addEventListener("mouseout", function () {--}}
                {{--sidebar.classList.remove('show');--}}
                {{--sidebar.querySelectorAll('.sidebar-name').forEach(element => element.classList.remove('show'));--}}
            {{--});--}}
            {{--// if (sidebar.onmouseover == true)--}}
        {{--});--}}
        {{--// $('#sidebar').onmouseover(function (e) {--}}
        {{--//     var sidebar = $(e.currentTarget);--}}
        {{--//     sidebar.addClass('show');--}}
        {{--// });--}}
        {{----}}
        {{----}}
    {{--</script>--}}
{{--@endpush--}}
