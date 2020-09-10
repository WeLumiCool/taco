@extends('layouts.app')
@section('content')
    @if(Auth::user()->role->name == 'user')
        @include('client.home')
    @endif
    @if(Auth::user()->role->name == 'user2')
        @include('advertiser.home')
    @endif
@endsection
