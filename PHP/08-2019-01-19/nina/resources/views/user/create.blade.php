@extends('layout.app')

@section('content')

<div class="container mt-3">
    <form action="{{ route('users.store') }}" role="form" method="post">
        <div class="form-group">
            <label for="exampleInputName1">Name</label>
            <input name="name" type="text" class="form-control" id="exampleInputName1" placeholder="Enter name">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Email</label>
            <input name="email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Password</label>
            <input name="password" type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
        </div>
        
        <input name="country_id" value="2" type="hidden" class="form-control" >

        {{csrf_field()}}
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>