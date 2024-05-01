@extends('layouts.viewer')

@section('title','Lets comment in this lil bitch')

@section('content')
    <p>Ghad damn boi ths shit hard </p>
    <ul>
        @foreach ($comments as $comment)
            <li> {{ $comment ->username}} </li>
            <p></p>

        @endforeach
    </ul>
@endsection

