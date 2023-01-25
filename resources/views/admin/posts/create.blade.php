@extends('layouts.app')

@section('content')
    <div class="text-center">
        <h1>Crea un Post</h1>

    </div>

    <form action="{{ route('admin.posts.store') }}" method="POST">

        @csrf

        <div class="mb-3">
            <label for="" class="form-label">Titolo</label>
            <input type="text" class="form-control" name="title">
            @error('title')
                <div class="alert alert-danger">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Body</label>
            <textarea class="form-control" name="body"></textarea>
            @error('body')
                <div class="alert alert-danger">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <button type="submit" class="btn btn-primary">Crea</button>
    </form>
@endsection
