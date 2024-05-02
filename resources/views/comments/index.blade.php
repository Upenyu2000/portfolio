@extends('layouts.viewer')

@section('title','Makadii henyu')

@section('content')
    <p>Titambirewo </p>
    <ul>
        @foreach ($comments as $comment)

            <li>Username:<a href="{{ route('comments.show', ['username' => $comment ->username]) }}">{{ $comment ->username}} </a></li>
            <li>Title: {{ $comment ->title}} </li>
            <li>Description: {{ $comment ->description}} </li>
            <p></p>

        @endforeach
    </ul>
@endsection

