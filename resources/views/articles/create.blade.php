@extends('layouts.app')
@section('content')
<form action="{{ route('articles.store') }}" method="post">
	@include('article.form')
	<button type="submit">投稿する</button>
	<a href="{{ route('articles.index') }}">キャンセル</a>
</form>
@endsection()