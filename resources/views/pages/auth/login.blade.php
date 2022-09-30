@extends('layouts.auth')
@section('content')
<div class="login-box">
    <!-- /.login-logo -->
    <div class="card card-outline card-primary">
        <div class="card-header text-center mb-4">
            <a href="/" class="h1"><b>PKM</b> POLIBATAM</a>
        </div>
        <div class="card-body">

        
            <form action="../../index3.html" method="post">
                <div class="input-group mb-3">
                    <input
                        type="email"
                        class="form-control"
                        placeholder="Email"
                    />
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-envelope"></span>
                        </div>
                    </div>
                </div>
                <div class="input-group mb-3">
                    <input
                        type="password"
                        class="form-control"
                        placeholder="Password"
                    />
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-lock"></span>
                        </div>
                    </div>
                </div>
                <div class="row">
                    
                    <!-- /.col -->
                    <div class="col">
                        <button
                            type="submit"
                            class="btn btn-primary btn-block"
                        >
                            Sign In
                        </button>
                    </div>
                    <!-- /.col -->
                </div>
            </form>


            <!-- /.social-auth-links -->

            
            <p class="mb-0 text-center mt-4">
                <a href="register.html" class="text-center"
                    >Membuat akun?</a
                >
            </p>
        </div>
        <!-- /.card-body -->
    </div>
    <!-- /.card -->
</div>
@endsection