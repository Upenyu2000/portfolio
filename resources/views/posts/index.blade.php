@extends('layouts.viewer')

@section('content')


<style>
    body {
        background-image: url('https://images7.alphacoders.com/134/thumb-1920-1343296.jpeg');
        background-size: cover; 
        background-filter: blur(20px);
    }
    table {
        border-collapse: collapse;
        width: 100%;
    }
    th, td {
        border: 1px solid black;
        padding: 8px;
        text-align: left;
    }
    th {
        background-color: #f2f2f2; /* Background color for table header */
    }
</style>
<p></p>
<a href="{{ route('posts.create')}}" style="color: green;">Create a Post</a>
<h2 style="color: blue;">Posted information</h2>
<table border="1">
    <thead>
        <tr>
            <th>Username</th>
            <th>Title</th>
            <th>Description</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($posts as $post)
        <tr>
            <thead>
                <th><a href="{{ route('posts.show', ['username' => $post->username]) }}" style="color: red;">{{ $post->username }}</a></th>
                <th style="color: black;">{{ $post->title }}</th>
                <th style="color: black;">{{ $post->description }}</th>
            </thead>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection
