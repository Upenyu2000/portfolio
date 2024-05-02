@extends('layouts.viewer')


@section('content')
<style>
    body {
        background-image: url('https://images3.alphacoders.com/134/1345203.jpeg');
        background-size: cover; 
        background-filter: blur(20px);
    }
    table {
        border-collapse: collapse;
        width: 100%;
    }

    .title {
        color: white;
    }

    th, td {
        border: 1px solid black;
        padding: 8px;
        text-align: left;
    }
    th {
        background-color: #f2f2f2;
    }
</style>
    <tr>
        <ul>
        <h2 class="title">Post</h2>
            <table>
            <th>Lord i cant do this without you </th>
            <thead></thead>
                <th>Username:
                    @if ( $post ->username)
                    {{ $post ->username}}
                
                    @else 
                        Unknown Username
                    @endif</th>
                    <thead></thead>
                <th>Title: {{ $post ->title}} </th>
                <thead></thead>
                <th>Description: {{ $post ->description}} </th>
                <thead></thead>
            </table>
                <p></p>
        </ul>
    </tr>
@endsection
