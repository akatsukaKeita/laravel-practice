@extends('layouts.app')
@section('content')
@include('commons.errors')
<form action="{{ route('articles.store') }}" method="post">
    @include('articles.form')
    <button type="button" class="btn btn-primary">投稿する</button>
    <a href="{{ route('articles.index') }}" class="link-primary">キャンセル</a>
</form>
@endsection()