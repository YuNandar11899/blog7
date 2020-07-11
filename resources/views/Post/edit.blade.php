@extends('layouts.app2')
@section('content2')
    <div class="container">
<form action="/posts/{{$posts->id}}" method="post" enctype="multipart/form-data">
    @csrf
    @method('PATCH')
    @include('post.form')
    <input type="submit"  value="Update">
</form>
    </div>
@endsection
