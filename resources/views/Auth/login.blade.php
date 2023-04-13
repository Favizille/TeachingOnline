@extends("master")

@section("content")

    <div class="card-body mt-6 col-6">
        <form>
        <h2 class="mt-6 mb-6 text-center"> Glad To Have You Back!!!</h2>

        <label><h4>Email</h4></label>
        <div class="mb-4">
            <input type="email" name="email" class="form-control p-3 fs-5" placeholder="Email">
        </div>

        <label><h4>Password</h4></label>
        <div class="mb-4">
            <input type="password" name="password" class="form-control p-3 fs-5" placeholder="Password">
        </div>

        <div class="text-center">
            <button type="submit" class="btn bg-gradient-info mt-4 mb-3"><h5>Login</h5></button>
        </div>

        <h5 class="text-center mb-6 pb-6"><i> <b> Don't have an account? </b></i><a href="{{route("register_view")}}" class="text-primary">Register</a></h5>
        </form>
    </div>

@endsection
