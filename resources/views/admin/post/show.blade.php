@extends('layouts.app');

@section('content')
    <div class="text-center">
        <h1>{{ $single_post->name }}</h1>
        <p>{{ $single_post->description }}</p>
    </div>
@endsection
