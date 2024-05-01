@extends('layouts.viewer')

@section('title','Lets comment in this lil bitch')

@section('content')
    <p>Ghad damn boi ths shit hard </p>
    <ul>
        @foreach ($comments as $comment)

            <li><a href="/comment/{{$comment->username}}"></a>{{ $comment ->username}} </li>
            <li>Title: {{ $comment ->title}} </li>
            <li>Description: {{ $comment ->description}} </li>
            <p></p>

        @endforeach
    </ul>
@endsection

