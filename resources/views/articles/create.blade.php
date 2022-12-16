@extends('layouts.app')
@section('content')
<form action="{{ route('articles.store') }}" method="post">
    @include('articles.form')     //フォームの共通化
<button type="submit">投稿する</button>
<a href="{{ route('articles.index') }}">キャンセル</a>
</form>
@endsection()