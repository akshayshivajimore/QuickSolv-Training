@extends('master')
@section("content")
<div class="container custom-login">
    <div class="row">
        <div class="col-sm-4 col-sm-offset-4">
            <form action="signup-add" method="POST" >
            @csrf
                <div class="form-group">
                <label for="name">Name</label>
                <input type="name" name="name" class="form-control" id="name" placeholder="Enter Name">
                </div>
                <div class="form-group">
                <label for="exampleInputEmail1">Email address</label>
                <input type="email" name="email" class="form-control" id="exampleInputEmail1" placeholder="Email">
                </div>
                <div class="form-group">
                <label for="exampleInputPassword1">Password</label>
                <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                </div>
                <div class="form-group">
                <label for="confirm_password">Confirm Password</label>
                <input type="confirm_password" name="confirm_password" class="form-control" id="confirm_password" placeholder="Password">
                </div>
                <button type="submit" class="btn btn-default">Signup</button>
            </form>
        </div>
    </div>
</div>
@endsection