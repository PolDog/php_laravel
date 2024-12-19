@extends('layouts.default')

@section('content')

<table border="4">

    <tr>
        <td>List of users:</td>
        @foreach($usersArray as $key=>$user)
    <tr>
        <td>User {{ $key }}</td>
        <td>name:{{ $user['name'] }}<br>
            @if($user['age']<18)
                age: очень молод ( {{ $user['age'] }} ) <br>
            @else
                age:{{ $user['age'] }}<br>
            @endif
            position:{{ $user['position'] }}<br>
            addres:{{ $user['addres'] }}
        </td>
    </tr>
    @endforeach
    </td>
    </tr>
</table>
@stop