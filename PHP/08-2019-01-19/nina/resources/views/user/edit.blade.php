@extends('layout.app')

@section('content')

<div class="container mt-3">
    <form>
        <div class="form-group">
            <label for="exampleInputEmail1">Name</label>
            <input value="{{$user->name}}" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter name">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Email</label>
            <input value="{{$user->email}}" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
        </div>
        
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>