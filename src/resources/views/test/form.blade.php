@extends('layouts.app')

@section('content')
    <form action="">
        {{ csrf_field() }}
        <input type="text" name="name">
        <input type="text" name="age">
        <input type="submit">
    </form>
@endsection


