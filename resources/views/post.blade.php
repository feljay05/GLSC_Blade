@extends('layouts.main')

@section('container')
    <article>
        <h2>{{$post["title"] }}</h2>
        <h5>{{$post["author"] }}</h5>
        <p>{{$post["body"] }}</p>
    </article>

    @if ($post['is_verified'] === true)
    <div class="alert alert-success d-inline-block">
        Post ini terverfikasi
    </div>
        @elseif ($post['is_verified'] === false)
        <div class="alert alert-danger d-inline-block">
            Post ini tidak terverfikasi
        </div>
    @endif

    <h1>Menggunakan foreach</h1>
    @forelse ($post as $post)
     @if ($post === true)
        <div class="alert alert-success d-inline-block">
        Post ini terverfikasi
        </div>
        @elseif ($post === false)
        <div class="alert alert-danger d-inline-block">
            Post ini tidak terverfikasi
        </div>
        @endif
    @empty
        <div>Kosong</div>
    @endforelse

    <br></b>

    <a href="/blog">Back to posts </a>
@endsection
