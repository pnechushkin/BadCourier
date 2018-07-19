@extends('layouts.sidebar')
@section('content')
    <div class="row">
        <form class="form-horizontal" role="form" method="POST" action="{{ url('/find') }}">
            {{ csrf_field() }}

            <div class="form-group{{ $errors->has('surname') ? ' has-error' : '' }}">
                <label for="surname" class="col-md-4 control-label">Фамилия</label>
                <div class="col-md-6">
                    <input id="surname" type="text" name="surname" value="{{ old('surname') }}"
                           placeholder="Обязательно">
                    @if ($errors->has('surname'))
                        <span class="help-block">
                                        <strong>{{ $errors->first('surname') }}</strong>
                                    </span>
                    @endif
                </div>
            </div>

            <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                <label for="name" class="col-md-4 control-label">Имя</label>
                <div class="col-md-6">
                    <input id="name" type="text" name="name" value="{{ old('name') }}"
                           placeholder="Обязательно">
                    @if ($errors->has('name'))
                        <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                    @endif
                </div>
            </div>

            <div class="form-group{{ $errors->has('patronymic') ? ' has-error' : '' }}">
                <label for="patronymic" class="col-md-4 control-label">Отчество</label>
                <div class="col-md-6">
                    <input id="patronymic" type="text" name="patronymic" value="{{ old('patronymic') }}">
                    @if ($errors->has('patronymic'))
                        <span class="help-block">
                                        <strong>{{ $errors->first('patronymic') }}</strong>
                                    </span>
                    @endif
                </div>
            </div>

            <div class="form-group{{ $errors->has('DateBirth') ? ' has-error' : '' }}">
                <label for="DateBirth" class="col-md-4 control-label">Дата рождения</label>
                <div class="col-md-6 ">
                    <input id="DateBirth" type="text" name="DateBirth" value="{{ old('DateBirth') }}">
                    @if ($errors->has('DateBirth'))
                        <span class="help-block">
                                        <strong>{{ $errors->first('DateBirth') }}</strong>
                                    </span>
                    @endif
                </div>
            </div>


            <div class="form-group">
                <div class="col-md-offset-4">
                    <button type="submit" class="btn btn-primary">
                        Проверить
                    </button>
                </div>
            </div>
        </form>
    </div>
@stop
