@extends('layouts.app')

@section('title' , 'show')

@section('content')
<div id="show">
    <Show :post="{{ json_encode($post) }}" ></Show>
    {{-- {{dd($post)}} --}}
</div>
@endsection