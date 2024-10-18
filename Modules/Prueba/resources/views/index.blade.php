@extends('prueba::layouts.master')

@section('content')
    <h1>Hello World</h1>

    <p>Module: {!! config('prueba.name') !!}</p>
@endsection
