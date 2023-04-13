@extends('master')

@section('content')

    <div class="card-body col-6">
        <form action="{{route('register')}}" method="POST">
            @csrf
        <h2 class="mb-4 text-center"> Register Here</h2>

        <div class="mb-3">
            <input type="text" name="first_name" class="form-control p-3 fs-5" required placeholder="First Name">
        </div>

        <div class="mb-3">
            <input type="text" name="last_name" class="form-control p-3 fs-5" required placeholder="Last Name">
        </div>

        <div class="mb-3">
            <input type="text" name="role"  value="user" class="form-control p-3 fs-5" required placeholder="role" hidden>
        </div>

        <div class="mb-4">
            <input type="email" name="email" class="form-control p-3 fs-5" required placeholder="Email">
        </div>

        <div class="mb-4">
            <input type="password" name="password" class="form-control p-3 fs-5" required placeholder="Password">
        </div>

        <div class="mb-4">
            <input type="password" name="password_confirmation" class="form-control p-3 fs-5" required placeholder=" Confirm Password">
        </div>

        <label><h4>Image</h4></label>
        <div class="mb-4">
            <input type="file" name="image_path">
        </div>
        <div class="text-center">
            <button type="submit" class="btn bg-gradient-info mt-2 mb-1"><h5>Register</h5></button>
        </div>
        <h5 class="text-center mt-4 pb-6"><i> <b>Already have an account?  </b></i><a href="{{route("login_view")}}" class="text-primary">Login</a></h5>
        </form>
    </div>

@endsection
