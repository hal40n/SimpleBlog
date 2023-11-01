@extends('layouts.app')
@section('content')
    @foreach ($articles as $article)
    <article class="article-item">
        <div class="article-title">{{ $article->title }}</div>
        <div class="article-body">{{ $article->body }}</div>
    </article>
    @endforeach
@endsection()
