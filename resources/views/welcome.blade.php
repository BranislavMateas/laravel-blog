@extends('layouts.master')


@section('content')

    <div class="title m-b-md">
        {{ $title }}
    </div>

    <ul>
        @foreach ($posts as $item)
            <li>{{ $item }}</li>
        @endforeach
    </ul>

@endsection
