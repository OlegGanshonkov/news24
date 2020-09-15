@extends('layouts.app')

@section('sidebar', '123 - Page Title - 123')

@section('content')
    <ul>
        @foreach($arr as $item)
            <li>{{ $loop->iteration }}</li>
        @endforeach
    </ul>
@endsection
