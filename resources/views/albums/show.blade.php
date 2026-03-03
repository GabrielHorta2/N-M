@extends('layouts.app')

@section('content')
    <h1>{{ $album->name }}</h1>
    <p>Year: {{ $album->year }}</p>
    <p><img src="{{ $album->url_img }}" alt="{{ $album->name }}"></p>

    <h2>Songs</h2>
    @if($musics->isEmpty())
        <p>No songs available for this album.</p>
    @else
        <ul>
            @foreach($musics as $music)
                <li>{{ $music->title }} by {{ $music->artist }}</li>
            @endforeach
        </ul>
    @endif
@endsection
