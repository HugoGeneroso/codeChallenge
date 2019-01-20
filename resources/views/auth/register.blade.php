@extends('layouts.dependencies')
<div class="card-register">
    <div class="card-header text-left">Seu cadastro</div>

    <div class="card-body">
      <div class="form-group row">
        <div id="register-validation" class="col-md-12 validation-error-container">

        </div>
      </div>
        <form method="POST" id="register-form" action="{{ route('register') }}">
            

            <div class="form-group row">
                <label for="email-register" class="col-md-12 col-form-label text-md-left">Qual e-mail você utiliza para se comunicar com seu cliente?</label>

                <div class="col-md-12">
                    <input id="email-register" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>

                    @if ($errors->has('email'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                    @endif
                </div>
            </div>

            <div class="form-group row">
                <label for="name" class="col-md-12 col-form-label text-md-left">Como gostaria de ser chamado?</label>

                <div class="col-md-12">
                    <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>

                    @if ($errors->has('name'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('name') }}</strong>
                        </span>
                    @endif
                </div>
            </div>

            <div class="form-group row">
              <label for="password-register" class="col-md-12 col-form-label text-md-left">Seus clientes falam com você pelo Whatsapp e celular?</label>
                <div class="col-md-6">
                  <input id="phone" type="text" class="form-control{{ $errors->has('phone') ? ' is-invalid' : '' }}" name="phone" required>

                  @if ($errors->has('phone'))
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $errors->first('phone') }}</strong>
                      </span>
                  @endif
                </div>


                <div class="col-md-6">
                    <select id="uses_whatsapp" type="text" class="form-control" name="uses_whatsapp" required>
                      <option value=1>Sim</option>
                      <option value=0>Não</option>
                    </select>
                </div>
            </div>

            <div class="form-group row">
                <div class="col-md-6">
                  <label for="password-register" class="col-md-12 col-form-label text-md-left">Crie a sua senha</label>
                  <input id="password-register" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                  @if ($errors->has('password'))
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $errors->first('password') }}</strong>
                      </span>
                  @endif
                </div>


                <div class="col-md-6">
                    <label for="password-confirm" class="col-md-12 col-form-label text-md-left">Confirme a senha</label>
                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                </div>
            </div>

            <div class="form-group row mb-12">
              <label for="area-atuacao" class="col-md-12 col-form-label text-md-left">Conte pra gente, qual a sua área de atuação?</label>
              <select id="area-atuacao" multiple class="form-control" name="area_atuacao" required>
                <option value="profissional">Fotógrafo/VideoMaker profissional</option>
                <option value="iniciante">Fotógrafo/VideoMaker iniciante</option>
                <option value="naoFotografo">Não sou fotógrafo</option>
              </select>
            </div>

            <div class="form-group row mb-12">
                <div class="offset-md-9">
                    <a href="#" id="submit-register">
                        Salvar
                    </a>
                </div>
            </div>
        </form>
    </div>
</div>
