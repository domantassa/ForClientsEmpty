@extends('layout')
@section('content')
    @foreach($verslai as $verslas)
    <div>{{$verslas->name}}</div>

    @endforeach


@endsection
