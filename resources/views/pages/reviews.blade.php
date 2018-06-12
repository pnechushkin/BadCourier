@extends('layouts.sidebar')
@section('content')
    <div class="row" style="text-align: center">
        <h1>Последние 5 отзывов</h1>
    </div>
    <div class="row">
        <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">ФИО</div>
        <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">Текст отзыва</div>
        <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">Дата рождения</div>
    </div>

        @include('includes.review')

@stop