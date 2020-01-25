@extends('app')
@section('content')
    <form action="/store" method="post">
        @csrf
        <div id="editor"></div>
        <input type="submit">
    </form>
@endsection
@section('script')
    <script src="/js/ckeditor.js"></script>
@endsection
