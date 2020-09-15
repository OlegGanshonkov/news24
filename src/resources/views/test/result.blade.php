@extends('layouts.app')

@section('content')
    <div style="background: bisque;">
        Result: {{ $sum }}
    </div>
    <ul>
        <li>
            {{ $method }}
        </li>
    </ul>
    @if (isset($all))
        <hr/>
        <div>
            <ul>
                @foreach($all as $key => $item)
                    <li><b>{{ $key }}: </b>{{ $item }}</li>
                @endforeach
            </ul>
        </div>
    @endif
@endsection


