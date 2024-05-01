@extends('layouts.viewer')

@section('title','Hot dogs or bums')

@section('content')
    <p>What do you prefer to eat: Answer nigga </p>
    <ul>
        @foreach ($posts as $post)
            <li> {{ $post ->username}} </li>
            <p></p>

        @endforeach
    </ul>
@endsection

