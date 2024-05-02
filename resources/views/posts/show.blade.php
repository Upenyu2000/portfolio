@extends('layouts.viewer')

@section('content')
<style>
    body {
        background-image: url('https://images3.alphacoders.com/134/1345203.jpeg');
        background-size: cover; 
        background-filter: blur(20px);
    }
    table {
        border-collapse: collapse;
        width: 100%;
    }

    .title {
        color: white;
    }

    th, td {
        border: 1px solid black;
        padding: 8px;
        text-align: left;
    }
    th {
        background-color: #f2f2f2;
    }
</style>
<h2 class="title">Posts</h2>
<table>
    <thead>
        <tr>
            <th>Username</th>
            <th>Title</th>
            <th>Description</th>
        </tr>
    </thead>
    <tbody>
        @foreach($posts as $post)
        <tr>
            <th>{{ $post->username ?? 'Unknown Username' }}</th>
            <th>{{ $post->title }}</th>
            <th>{{ $post->description }}</th>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection
