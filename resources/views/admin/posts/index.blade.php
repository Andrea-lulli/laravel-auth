@extends('layouts.app')

@section('content')
    <a href="{{ route('admin.posts.create') }}">Crea nuovo post</a>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">Id</th>
                <th scope="col">
                    Title
                </th>
                <th scope="col">Body</th>
                <th scope="col">actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($posts as $elem)
                <tr>
                    <td>{{ $elem->id }}</td>
                    <td>
                        <a href="{{ route('admin.posts.show', $elem->id) }}">
                            {{ $elem->title }}
                        </a>
                    </td>
                    <td>{{ $elem->body }}</td>
                    <td>
                        <a href="{{ route('admin.posts.edit', $elem->id) }}">
                            Edit
                        </a>

                        <form action="{{ route('admin.posts.destroy', $elem->id)}}" method="POST">

                            @csrf
                            @method('DELETE')
                            <Button type="submit" class="btn btn-danger">
                                Delete
                            </Button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <div class="d-flex justify-content-center">
        {{ $posts->links() }}
    </div>
@endsection
