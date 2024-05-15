@extends('layouts.app')

@section('content')

<style>
    main {
        min-height: calc(100vh - 100px);
        overflow-y: scroll;
        overflow-x: hidden;
    }

    div#sidebar {
        border-right: solid 1px black;
    }

    div#content {
        & .row {
            margin-left: 0;
        }
    }
</style>

<div id="kopf">
<Kopf></Kopf>
</div>

<main class="d-flex">
    <div id="sidebar" class="col-3">
    <Sidebar></Sidebar>
    </div>

    <div class="col-9">
        <div id="content" class="container">
            <div class="row">
                <h1>@yield('create-or-edit') a post</h1>

                @include('partials.validation-error')

                @yield('form-head')
                @csrf
                @yield('form-method')

                <div class="mb-3">
                    <label for="title" class="form-label">Title</label>
                    <input
                        type="text"
                        name="title"
                        id="title"
                        class="form-control @error('title')
                            is-invalid
                        @enderror"
                        placeholder="write a title"
                        aria-describedby="helpId"
                        value="{{ old('title' , Route::currentRouteName() == 'comics.edit' ? $post->title : '' ) }}"
                    />
                    <small id="helpId" class="text-muted @error('title')
                        d-none
                    @enderror">Write above a title</small>
                    @error('title')
                        <div class="alert alert-danger mt-1">
                        {{$message}}
                        </div>
                    @enderror
                </div>
                
                <div class="mb-3">
                    <label for="description" class="form-label">Description</label>
                    <textarea
                    class="form-control @error('description')
                        is-invalid
                    @enderror"
                    name="description"
                    id="description"
                    rows="3"
                    >{{ old('title' , Route::currentRouteName() == 'comics.edit' ? $post->title : '' ) }}</textarea>
                    <small id="helpdescription" class="text-muted @error('description')
                        d-none
                    @enderror">Write above a description</small>
                    @error('description')
                        <div class="alert alert-danger mt-1">
                        {{$message}}
                        </div>
                    @enderror
                </div>

                <button class="btn btn-primary" type="submit">@yield('button-create-edit')</button>
                </form>
            {{-- <div class="container">
            {{dd($post)}}
            </div> --}}
            </div>
        </div>
    </div>
</main>

<div id="fuß">
<Fuß></Fuß>
</div>

@endsection