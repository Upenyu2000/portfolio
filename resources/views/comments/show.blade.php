@extends('layouts.viewer')

@section('title','View comments')

@section('content')
    <p>Lord i cant do this without you </p>
    <ul>
            <li>Username:
                @if ( $comment ->username)
                {{ $comment ->username}}
            
                @else 
                    Unknown Username
                @endif</li>
            <li>Title: {{ $comment ->title}} </li>
            <li>Description: {{ $comment ->description}} </li>
            <p></p>
    </ul>
@endsection
