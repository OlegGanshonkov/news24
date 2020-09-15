@extends('layouts.app')

@section('content')
    @if($error)
        <div style="color: red">{{ $error }}</div>
    @endif
    <form action="" method="post">
        {{ csrf_field() }}
        <input type="number" name="num">
        <button type="submit" name="submit">submit</button>
    </form>
@endsection
