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
        width: relative;
    }
    .delete_button{
        color:red;
        background-color:red;
    }

    .title {
        color: black;
    }

    th, td {
        border: 1px solid black;
        padding: relative; 
        text-align: left;
    }
    th {
        background-color: #f2f2f2;
    }
    .form-container {
        width: relative;
        margin: 0 auto;
        margin-top: 50px;
        background-color: #ccc; 
        padding: 20px;
        border-radius: 10px;
        font-weight: bold;
    }
    .form-container input[type="text"], 
    .form-container textarea {
        width: relative;
        padding: 10px;
        margin-top: 5px;
        margin-bottom: 10px;
        border: 1px solid #ccc;
        border-radius: 5px;
    }
    .form-container input[type="submit"] {
        background-color: #4CAF50;
        color: white;
        padding: 10px 20px;
        border: none;
        border-radius: 5px;
        cursor: pointer;
    }
    .form-container input[type="submit"]:hover {
        background-color: #45a049;
    }
</style>

<div class="form-container">
    <h2 class="title">Edit Post</h2>
    <form method="POST" action="{{ route('posts.update', ['username' => $post->username]) }}">
        @csrf
        @method('PUT')
        <label for="title">Title:</label><br>
        <input type="text" id="title" name="title" value="{{ $post->title }}"><br>
        <label for="description">Description:</label><br>
        <textarea id="description" name="description">{{ $post->description }}</textarea><br>
        <input type="submit" value="Update">
    </form>
</div>
<button><a href="{{ route('posts.index') }}" class="button">Back</a></button>
@endsection
