@extends('layouts.viewer')

@section('styles')
    <style>

        body {
                background-image: url('https://images8.alphacoders.com/134/thumb-1920-1345986.jpeg');
                background-size: cover; 
                background-filter: blur(20px);
            }

        .container {
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            background-color: #f9f9f9;
        }
        .form-group {
            margin-bottom: 20px;
        }
        label {
            display: block;
            font-weight: bold;
            margin-bottom: 5px;
        }
        input[type="text"], textarea {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
        }
        button[type="submit"], .button {
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            background-color: red;
            color: #fff;
            font-size: 16px;
            cursor: pointer;
        }

        button[type="submit"]:hover, .button:hover {
            background-color: white; 
        }
        
    </style>
@endsection

@section('content')
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
        <h2>Delete a Post</h2>
        <form method="POST" action="{{route('posts.destroy',['username' => $post->username]) }}">
            @csrf
            @method('DELETE')
            <button type="submit" value="Submit" >Delete</button>
        </form>
        <p><a href="{{ route('posts.index') }}" class="button">Back</a></p>
@endsection
