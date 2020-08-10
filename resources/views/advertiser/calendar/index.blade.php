@extends('layouts.app')
@section('content')
    <div class="container-fluid" style="margin-top:100px;">
        <div class="row">
            <div class="col-lg-6 col-12 bg-white py-4 px-4 content-box">
                <img class="img-fluid" src="{{ asset('images/calendar.png') }}" alt="">

                <div class="form-check mt-4">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Оранжевое - то, что прошло через платформу</label>
                </div>
                <div class="form-check mt-2">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Зеленым User 2 может отметить свободные</label>
                </div>
                <div class="form-check mt-2">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Голубым User 2 может отметить занятые</label>
                </div>
            </div>
        </div>
    </div>
@endsection