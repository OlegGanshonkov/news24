@extends('layouts.app')

@section('content')
    <table>
        <thead>
        @foreach($employees as $employee)
            <tr>
                @if(is_object($employee))
                    @foreach($employee as $key => $item)
                        <th>
                            {{ $key }}
                        </th>
                    @endforeach
                @else
                    <th>{{ $employee }}</th>
                @endif
            </tr>
            @break
        @endforeach
        </thead>
        <tbody>
        @foreach($employees as $employee)
            <tr>
                @if(is_object($employee))
                    @foreach($employee as $item)
                        <td style="padding: 5px 10px;">
                            {{ $item }}
                        </td>
                    @endforeach
                @else
                    <tD>{{ $employee }}</tD>
                @endif
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection


