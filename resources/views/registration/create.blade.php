@extends('layouts.master')

@section('content')

    <div class="col-sm-8 blog-main">
        <h1>Register</h1>
        <hr>

        <form method="post" action="/register">

            {{ csrf_field() }}

            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" class="form-control" id="inputName" name="name" required>
            </div>

            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control" id="inputEmail" name="email" required>
            </div>

            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" class="form-control" id="inputPassword" name="password" required>
            </div>

            <div class="form-group">
                <label for="password_confirmation">Confirm Password</label>
                <input type="password" class="form-control" id="inputPasswordConfirmation" name="password_confirmation" required>
            </div>

            <div class="form-group text-center">
                <button type="submit" class="btn btn-primary btn-block">Submit</button>
            </div>

            @include('layouts.errors')

        </form>
    </div>

@endsection