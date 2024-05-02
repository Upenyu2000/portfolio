@extends('layouts.viewer')

@section('content')
<style>
    body {
        background-image: url('https://images3.alphacoders.com/134/1345203.jpeg');
        background-size: cover; 
        background-filter: blur(20px);
    }
    .button{
        color:black;
    }
    table {
        border-collapse: collapse;
        width: 100%;
    }
    .delete_button{
        color:red;
        background-color:red;
    }

    .title {
        color: white;
    }

    th, td {
        border: 1px solid black;
        padding: 1em; /* Use relative units for padding */
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
            <th>Actions</th>
        </tr>
    </thead>
    <tbody >
        @foreach($posts as $post)
        <tr class='tbody'>
            <th class='tbody'>{{ $post->username ?? 'Unknown Username' }}</th>
            <th class='tbody'>{{ $post->title }}</th>
            <th class='tbody'>{{ $post->description }}</th>
            <th>
                <form method="POST" class='delete_button' action="{{ route('posts.destroy', ['username' => $post->username]) }}">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Delete</button>
                </form>

            </th>
        </tr>
        @endforeach
    </tbody>
</table>
<button><a href="{{ route('posts.edit', ['username' => $post->username]) }}" class="button">Edit</a>
<button><a href="{{ route('posts.index') }}" class="button">Back</a></button>
@endsection
