@extends('layouts.create-edit')

@section('title' , 'edit')

@section('create-or-edit' , 'Edit')

@section('form-head')
<form action="{{ route('posts.update' , $post) }}" method="post">
@endsection

@section('form-method')
@method('PUT')
@endsection

@section('button-create-edit' , 'Edit')