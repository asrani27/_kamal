@extends('welcome')

@section('content')
<div class="row">
    <div class="col-3">
    </div>

    <div class="col-6 text-center">

        <br /><br />
        <div class="card card-outline card-primary">
            <div class="card-body">
                <p class="login-box-msg">Masukan username dan password</p>

                <form action="/login" method="post">
                    @csrf
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" placeholder="Username" name="username"
                            autocomplete='new-password' required>
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fa fa-user"></span>
                            </div>
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <input type="password" class="form-control" placeholder="Password" name="password"
                            autocomplete='new-password'>
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-lock"></span>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <!-- /.col -->
                        <div class="col-12">
                            <button type="submit" class="btn bg-gradient-primary btn-block">Login</button>
                        </div>
                        <!-- /.col -->
                    </div>
                </form>
                <!-- /.social-auth-links -->
                <br />
                <p class="mb-0 text-center">

                </p>
            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->
    </div>
    <div class="col-3">
    </div>
</div>
@endsection