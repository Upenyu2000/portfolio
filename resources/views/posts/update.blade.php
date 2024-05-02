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
    .message {
        width: 50%;
        margin: 0 auto;
        margin-top: 50px;
        background-color: rgba(255, 255, 255, 0.8);
        padding: 20px;
        border-radius: 10px;
    }
</style>

<div class="message">
    <h2>Post Updated</h2>
    <p>The post has been updated successfully.</p>
    <a href="{{ route('posts.index') }}" class="button">Back</a>
</div>
@endsection
