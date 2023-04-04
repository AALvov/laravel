@extends('layouts.default')

@section('content')

    <table>
        <thead>
        <tr>
            <th>name</th>
            <th>age</th>
            <th>position</th>
            <th>address</th>
        </tr>
        <tbody>
        <tr>
            <td>{{$user['name']}}</td>
            @if($user['age']<18)
                <td><h1 style="color:red">Указанный человек слишком молод!</h1></td>
            @else
                <td>{{$user['age']}}</td>
            @endif
            <td>{{$user['position']}}</td>
            <td>{{$user['address']}}</td>
        </tr>
        </tbody>
        </thead>
    </table>

@endsection
