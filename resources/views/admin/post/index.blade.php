@extends('layouts.app')

@section('content')
    {{-- <h1>Dati Utente</h1>
    {{ $userId }} | {{ $user->name }}
 --}}
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
                </tr>
            @endforeach


        </tbody>
    </table>
    <div class="d-flex justify-content-center">
        {{ $post->links() }}
    </div>
@endsection
