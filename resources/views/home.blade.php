@extends('layouts.app')
@section('content')
@include('commons.errors')
<h1 class="page-heading">マイページ</h1>
<p>ようこそ、{{ Auth::user()->name }}さん | <a href="{{ route('articles.index') }}">記事を書く</a></p>
<form action="{{ route('logout') }}" method="post">
    @csrf
    <button type="submit">ログアウト</button>
</form>
@endsection()
