

@extends('layouts.app')

@section('content')
<div class="current-series">
    <h2>Current Series</h2>
    <div class="comics-grid">
        @foreach($comics as $comic)
            <div class="comic-card">
                <img src="{{ $comic['thumb'] }}" alt="{{ $comic['title'] }} cover">
                <h3>{{ $comic['title'] }}</h3>
            </div>
        @endforeach
    </div>
    <button class="btn-load-more">Load More</button>
</div>
@endsection
