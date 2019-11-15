@extends('layouts.auth')
@section('content')
<main class="admin-main  ">
    <form action="{{ route('custom.login') }}" method="post">
        @csrf
        <div class="container-fluid">
            <div class="row ">
                <div class="col-lg-4  bg-white">
                    <div class="row align-items-center m-h-100">
                        <div class="mx-auto col-md-8">
                            <div class="p-b-20 text-center">
                                <p>
                                    <img src="assets/img/logo.svg" width="80" alt="">

                                </p>
                                <p class="admin-brand-content">
                                    Cupones
                                </p>
                            </div>
                            <h3 class="text-center p-b-20 fw-400">Iniciar Sesión</h3>
                            <form class="needs-validation" action="#">
                                <div class="form-row">
                                    <div class="form-group floating-label col-md-12">
                                        <label>Email</label>
                                        <input type="email" required class="form-control" name="email" placeholder="Email">
                                    </div>
                                    <div class="form-group floating-label col-md-12">
                                        <label>Contraseña</label>
                                        <input type="password" required class="form-control " name="clave" >
                                    </div>
                                </div>

                                <button type="submit" class="btn btn-primary btn-block btn-lg">Iniciar Sesión</button>

                            </form>
                            <p class="text-right p-t-10">
                                <a href="#!" class="text-underline">Forgot Password?</a>
                            </p>
                        </div>

                    </div>
                </div>
                <div class="col-lg-8 d-none d-md-block bg-cover" style="background-image: url('assets/img/login.svg');">

                </div>
            </div>
        </div>
    </form>
</main>
@endsection