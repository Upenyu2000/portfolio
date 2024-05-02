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

        <h2>Create a Post</h2>
        <form method="POST" action="{{route('posts.store')}}">
            @csrf
            <p style="color: white;">Username: <input type="text" name="username"></p>
            <p style="color: white;">Title: <input type="text" name="title"></p>
            <p style="color: white;">Description: <input type="text" name="description"></p>
            <input type="submit" value="Submit" >
            <a href="{{ route('posts.index') }}" class="button">Cancel</a>



        </form>
@endsection
