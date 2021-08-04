@extends('layouts.app')

@section('content')
<div class="card">
  <div class="card-body register-card-body">
    <p class="login-box-msg">Ingresar ahora</p>

    <form method="POST" action="{{ route('login') }}">
      @csrf
      <div class="input-group mb-3">
        <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" placeholder="Ingresa tu Email" value="{{ old('email') }}" required autocomplete="email">
        <div class="input-group-append">
          <div class="input-group-text">
          </div>
        </div>
        @error('email')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
      </div>
      <div class="input-group mb-3">
        <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="Ingresa tu contraseña" required autocomplete="new-password">
        <div class="input-group-append">
          <div class="input-group-text">
          </div>
        </div>
          @error('password')
              <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
              </span>
          @enderror
      </div>
      <div class="row">
        <div class="col-md-6 offset-md-3">
          <button type="submit" class="btn btn-primary btn-block">Iniciar</button>
        </div>
      </div>
    </form>

    <div class="social-auth-links text-center">
      <p>- O -</p>
    </div>
    <div class="row">
      <div class="col-md-6 offset-md-3">
          <a href="{{ url('') }}/register" class="text-center">Crear una cuenta</a>
      </div>
    </div>

  </div>
  <!-- /.form-box -->
</div>
@endsection
