@extends('layouts.app')

@section('content')
<div class="container-fluid">
  <div class="row no-gutter">
    <div class="d-none d-md-flex col-md-4 col-lg-6 bg-image"></div>
    <div class="col-md-8 col-lg-6">
      <div class="login d-flex align-items-center py-5">
        <div class="container">
          <div class="row">
            <div class="col-md-9 col-lg-8 mx-auto">
              <h3 class="login-heading mb-4">Welcome back!</h3>
              <!--<form method="POST" action="{{ route('login') }}">
                  @csrf
                <div class="form-label-group">
                  comentado <label for="input"class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>
                  <input type="email" id="inputEmail" class="form-control @error('email') is-invalid @enderror" placeholder="Email address" required autofocus name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                  <div class="col-md-6">

                      @error('email')
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                          </span>
                      @enderror
                  </div>
                </div>

                <div class="form-label-group">
                  comentado <label for="input" Passwordclass="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>
                  <input type="password" id="inputPassword" class="form-control @error('password') is-invalid @enderror" placeholder="Password" required name="password" required autocomplete="current-password">
                  <div class="col-md-6">
                      @error('password')
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                          </span>
                      @enderror
                  </div>
                </div>

                <div class="custom-control custom-checkbox mb-3">
                  <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                  <label class="form-check-label" for="remember">
                      {{ __('Remember Me') }}
                  </label>
                </div>
                <div class="form-group row mb-0">
                  <div class="col-md-8 offset-md-4">
                    <button class="btn btn-lg btn-primary btn-block btn-login text-uppercase font-weight-bold mb-2" type="submit">{{ __('Login') }}
                    </button>
                    @if (Route::has('password.request'))
                        <a class="btn btn-link" href="{{ route('password.request') }}">
                            {{ __('Forgot Your Password?') }}
                        </a>
                    @endif
                  </div>
                </div>
              </form> -->
              <form name="login">
                <!--<table width="200" border="0">-->
                  <tr>
                    <th scope="row"><h2>Usuario</h2></th>
                    <td><div class="form-label-group">
                      <!--<input type="email" id="inputEmail" class="form-control @error('email') is-invalid @enderror" placeholder="Email address" required autofocus name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>-->
                      <input name="usuario" type="email" class="form-control" value="" placeholder="Email address" required autocomplete="email" autofocus />
                    </div></td>
                  </tr>
                  <tr>
                    <th height="33" scope="row"><h2>Clave</h2></th>
                    <td><div class="form-label-group">
                      <!--<input type="password" id="inputPassword" class="form-control @error('password') is-invalid @enderror" placeholder="Password" required name="password" required autocomplete="current-password">-->
                      <input name="password" type="password" class="form-control" value="" placeholder="Password" required name="password" required autocomplete="current-password" />
                    </div></td>
                    <td>
                      <div class="form-group row mb-0">
                      <div class="col-md-8 offset-md-4">
                      <!--<button class="btn btn-lg btn-primary btn-block btn-login text-uppercase font-weight-bold mb-2" type="submit">{{ __('Login') }}-->
                      </button>
                      <input value="Entrar" target="_parent" onclick="Login()" type="button" class="btn btn-lg btn-primary btn-block btn-login text-uppercase font-weight-bold mb-2"/>
                    </div>
                  </div>
                  </td>
                  </tr>
                <!--</table>-->
              </form>

<script language="JavaScript">
  function Login(){
    var done=0;
    var usuario=document.login.usuario.value;
    var password=document.login.password.value;
    if (usuario=="admin" && password=="admin") {

      window.location = 'auth/index';
    }
    if (usuario=="comprador" && password=="comprador") {
      window.location="https://www.mercadolibre.com.mx/";
    }
    if (usuario=="" && password=="") {
      alert("Error en Usuario o Contraseña. Intenta de nuevo.")
    }
  }
  </script>
</center>
<script language="Javascript">
//-- Begin
document.oncontextmenu = function(){return false}
// End -->
</script>





            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
