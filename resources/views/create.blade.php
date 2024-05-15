@extends('layouts.create-edit')

@section('title', 'create')

@section('create-or-edit' , 'Create')

@section('form-head')

<form action="{{route('posts.store')}}" method="post">

@endsection

@section('button-create-edit' , 'Create')
