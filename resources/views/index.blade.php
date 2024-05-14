@extends('layouts.app')

@section('title' , 'laravel-vue-app')

@section('content')

<div id="index">
    <Index :info="{{ json_encode($data) }}" :posts="{{ json_encode($posts) }}" ></Index> 
    {{-- json_encode($data) necessario in quanto passiamo dati da php lato server e js lato client --}}
</div>

@endsection