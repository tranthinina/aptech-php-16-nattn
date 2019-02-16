@extends('layout.app')

@section('content')
<table class="table">
    <thead>
        <tr>
        <th scope="col">#</th>
        <th scope="col">Name</th>
        <th scope="col">Email</th>
        <th scope="col">Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach($users as $user)
        <tr>
            <th scope="row">{{$user->id}}</th>
            <td>{{$user->name}}</td>
            <td>{{$user->email}}</td>
            <td>
                <form action="{{ route('users.destroy',['id' => $user->id]) }}" role="form" method="post">
                    {{method_field('DELETE')}}
                    <a href="users/{{$user->id}}/edit" class="btn btn-sm btn-warning">edit</a>
                    {{csrf_field()}}
                    <button type="submit" class="btn btn-sm btn-danger">delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
