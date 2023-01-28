@extends('../../Layouts.login')

@section('login')
    <form method="POST">
        @csrf
        <div class="row h-100 align-items-center justify-content-center" style="min-height: 100vh;">
            <div class="col-12 col-sm-8 col-md-6 col-lg-5 col-xl-4">
                <div class="bg-secondary rounded p-4 p-sm-5 my-4 mx-3">
                    <div class="d-flex align-items-center justify-content-between mb-3">
                        <a href="index.html" class="">
                            <h3 class="text-primary">CRM CORE</h3>
                        </a>
                        <h3> <i class="fa fa-user me-2"></i></h3>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" autofocus id="floatingInput"
                            placeholder="name@example.com" name="email" value="{{ old('email') }}">
                        <label for="floatingInput">Email</label>
                    </div>
                    <div class="form-floating mb-4">
                        <input type="password" class="form-control" id="floatingPassword" placeholder="*******"
                            name="password">
                        <label for="floatingPassword">Contraseña</label>
                    </div>
                    @if ($errors->any())
                        <div class="form-floating mb-4" style="font-size: 12px">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <button type="submit" class="btn btn-primary py-3 w-100 mb-4">Iniciar sesión</button>

                </div>
            </div>
        </div>
    </form>
@endsection
