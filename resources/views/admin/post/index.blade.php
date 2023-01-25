@extends('layouts.app')

@section('content')
    {{-- <h1>Dati Utente</h1>
    {{ $userId }} | {{ $user->name }}
 --}}

    <a href="{{ route('admin.posts.create') }}">Crea il tuo nuovo post</a>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nome</th>
                <th scope="col">Data</th>
                <th scope="col">Descrizione</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($post as $elem)
                <tr>
                    <td>{{ $elem->id }}</td>

                    <td>
                        <a href="{{ route('admin.posts.show', $elem->id) }}">{{ $elem->name }}</a>
                    </td>

                    <td>{{ $elem->date }}</td>

                    <td>{{ $elem->description }}</td>

                    <td>
                        <a href="{{ route('admin.posts.edit', $elem->id) }}">
                            <button class="btn btn-warning btn-sm my-2">
                                <i class="fa-solid fa-pencil"></i>
                            </button>

                        </a>

                        <form method="POST" action="{{ route('admin.posts.destroy', $elem->id) }}">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm">
                                <i class="fa-solid fa-x"></i>
                            </button>
                        </form>
                    </td>
                </tr>
            @endforeach


        </tbody>
    </table>
    <div class="d-flex justify-content-center">
        {{ $post->links() }}
    </div>
@endsection
