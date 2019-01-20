@extends('layouts.dependencies')
  <div class="card-login" style="display: none;">
      <div class="card-header">Seu login</div>

      <div class="card-body">
        <div class="form-group row">
          <div id="login-validation" class="col-md-12 validation-error-container">

          </div>
        </div>
          <form method="POST" id="login-form" action="{{ route('login') }}">
              

              <div class="form-group row">
                  <label for="email-login" class="col-md-4 col-form-label text-md-right">E-mail</label>

                  <div class="col-md-6">
                      <input id="email-login" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>

                      @if ($errors->has('email'))
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $errors->first('email') }}</strong>
                          </span>
                      @endif
                  </div>
              </div>

              <div class="form-group row">
                  <label for="password-login" class="col-md-4 col-form-label text-md-right">Senha</label>

                  <div class="col-md-6">
                      <input id="password-login" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                      @if ($errors->has('password'))
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $errors->first('password') }}</strong>
                          </span>
                      @endif
                  </div>
              </div>

              <div class="form-group row">
                  <div class="col-md-6 offset-md-4">
                      <div class="form-check">
                          <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                          <label class="form-check-label" for="remember">
                              Lembrar-me
                          </label>
                      </div>
                  </div>
              </div>

              <div class="form-group row mb-0">
                  <div class="col-md-8 offset-md-4">
                      <button id="submit-login" type="button" class="btn btn-primary">
                          Entrar
                      </button>
                  </div>
              </div>
          </form>
      </div>
  </div>
