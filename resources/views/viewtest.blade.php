@extends('layout.masterlayout')

@section('content')
this is view test blade
 {!! Form::open('route'=>'') !!}
 {!! Form::text('form helper')!!}
 {!! Form::close() !!}web
@endsection
