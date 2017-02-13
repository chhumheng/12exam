@extends('layouts.app')
@section('title', 'Add Country')
{{--@section('breadcrumbs', Breadcrumbs::render('countryCreate'))--}}
@section('content')
    <div class="container">
        <div class="panel panel-default">
            <div class="panel-heading"><big>{{ trans('text_lang.addCountry')}}</big></div>

            <div class="panel-body">
                <div class="row">
                    {{--<div class="text-center col-md-12">--}}
                        {{--@include('flash::message')--}}
                    {{--</div>--}}
                </div>


                {!! Form::open(array('url' => '/account/country', 'class' => 'form-horizontal', 'country' => 'form')) !!}
                @if (count($errors) > 0)
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <div class="form-group{{ $errors->has('pkCountriesID') ? ' has-error' : '' }}">
                    {!! Html::decode(Form::label('pkCountriesID', trans('text_lang.id') . ' <span class="requredStar">***</span>', array('class' => 'col-md-3 control-label'))) !!}
                    <div class="col-md-7">
                        {!! Form::text('pkCountriesID', old('pkCountriesID'), ['class' => 'form-control']) !!}
                        @if ($errors->has('pkCountriesID'))
                            <span class="help-block">
                                <strong>{!! $errors->first('pkCountriesID') !!}</strong>
                            </span>
                        @endif
                    </div>
                </div>

                <div class="form-group{{ $errors->has('countriesNameEN') ? ' has-error' : '' }}">
                    {!! Html::decode(Form::label('countriesNameEN', trans('text_lang.nameEN') . ' <span class="requredStar">***</span>', array('class' => 'col-md-3 control-label'))) !!}
                    <div class="col-md-7">
                        {!! Form::text('countriesNameEN', old('countriesNameEN'), ['class' => 'form-control']) !!}
                        @if ($errors->has('countriesNameEN'))
                            <span class="help-block">
                                <strong>{!! $errors->first('countriesNameEN') !!}</strong>
                            </span>
                        @endif
                    </div>
                </div>



                <div class="form-group{{ $errors->has('countriesStatus') ? ' has-error' : '' }}">
                    {!! Form::label('countriesStatus', trans('text_lang.Status'), ['class' => 'col-md-3 control-label']) !!}
                    <div class="col-md-7">
                        {!! Form::select('countriesStatus', array( 1 => trans('text_lang.active'), 0 => trans('text_lang.inActive')), null, ['class' => 'form-control']) !!}
                        @if ($errors->has('countriesStatus'))
                            <span class="help-block">
                                <strong>{!!  $errors->first('countriesStatus') !!}</strong>
                            </span>
                        @endif
                    </div>
                </div>

                <div class="form-group form-group-lg">
                    <div class="col-md-7 col-md-offset-3">
                        <em class="requredStar"><b>{{ trans('text_lang.noteStar') }}</b> {{ trans('text_lang.descriptionNotesRequired') }}</em>
                    </div>
                </div>

                <div class="form-group">
                    <div class="text-right col-md-7 col-md-offset-3">
                        <button type="submit" class="btn btn-primary">
                            {{ trans('text_lang.save')}}
                        </button>
                        <a class="btn btn-success" href="{{ url('/account/country') }}">{{ trans('text_lang.cancel')}}</a>
                    </div>
                </div>
                {!! Form::close() !!}
            </div>
            {{--#panel-body--}}
        </div>
    </div>
@endsection

@section('extraJS')
    {{--input more script here--}}
@endsection