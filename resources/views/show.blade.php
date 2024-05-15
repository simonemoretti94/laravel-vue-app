@extends('layouts.app')

@section('title' , 'show')

@section('content')

<div id="kopf">
<Kopf></Kopf>
</div>


<main>
<div class="container">

    <h1 class="text-white">Post id: {{ $post[0]->id }}</h1>
    <div class="row bg-light mt-3">
        <div>
            <p>{{ $post[0]->title }}</p>
            <p>{{ $post[0]->description }}</p>
        </div>

    </div>
        
</div>
</main>
    
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