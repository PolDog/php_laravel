@extends('layouts.default')

@section('content')

<table border="4">

    <tr>
        <td>List of users:</td>
        @foreach($contactsArray as $key=>$contact)
    <tr>
        <td>contact {{ $key }}</td>
        <td>addres:{{ $contact['addres'] }}<br>
            @if($contact['email']==="")
            email: Адрес электронной почты не указан<br>
            @else
            email:{{ $contact['email'] }}<br>
            @endif
            post_code:{{ $contact['post_code'] }}<br>
            addres:{{ $contact['phone'] }}
        </td>
    </tr>
    @endforeach
    </td>
    </tr>
</table>
@stop