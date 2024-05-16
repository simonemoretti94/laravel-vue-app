@extends('layouts.app')

@section('title' , 'show')

@section('content')

<div id="kopf">
<Kopf></Kopf>
</div>

<div id="show">
<Show :post="{{ json_encode($post) }}"></Show>
</div> 

<div id="fuß">
<Fuß></Fuß>
</div>


<style scoped>
    main {
    background-color: #2c2c2c;
    min-height: 500px;
    }
</style>

@endsection