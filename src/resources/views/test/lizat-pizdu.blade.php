@extends('layouts.app')

@section('content')
    Текущее время: {{ date('H:i') }}
    @if($result)
        Сколько времени прошло от первого захода: {{ $result }} сек.
    @endif
@endsection
