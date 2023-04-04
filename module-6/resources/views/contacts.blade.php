@extends('layouts.default')

@section('content')

    <table>
        <thead>
        <tr>
            <th>address</th>
            <th>post_code</th>
            <th>email</th>
            <th>phone</th>
        </tr>
        <tbody>
        <tr>
            <td>{{$user_contacts['address']}}</td>
            <td>{{$user_contacts['post_code']}}</td>
            @if(!$user_contacts['email'])
                <td><h1 style="color:red">Адрес электронной почты не указан</h1></td>
            @else
                <td>{{$user_contacts['email']}}</td>
            @endif
            <td>{{$user_contacts['phone']}}</td>
        </tr>
        </tbody>
        </thead>
    </table>

@endsection
