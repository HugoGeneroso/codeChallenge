@extends('layouts.dependencies')
<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>Laravel checkout</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
        <link href="{{ URL::asset('css/index.css') }}" rel="stylesheet">
        @section('scripts')
          <script src="{{ asset('js/app.js') }}"></script>
          <script type="text/javascript" src="{{ URL::asset('js/index.js') }}"></script>
          <script type="text/javascript" src="{{ URL::asset('js/pedido.js') }}"></script>
        @endsection
    </head>
    <body>
        <div class="flex-top position-ref full-height">
            <div class="content">
                <div class="title m-b-md bg-img ">
                    Code Challenge - Checkout com registro e login
                </div>

                <div class="links">
                  <!-- Button trigger modal -->
                  <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bd-modal-lg">
                    Adquirir um plano
                  </button>

                </div>
            </div>
        </div>

        <!-- Large modal -->
        <div class="modal fade bd-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
          <div class="modal-dialog modal-lg">
            <div class="modal-content">

              <div class="modal-header">
                <h3 class="col-md-12 text-center">Estamos quase lá!</h3>
              </div>

              <div class="modal-body">
                <h3 class="col-md-12 modal-header-message"></h3>
                <div class="row col-md-12">
                  <div class="col-md-6">
                    @if (Auth::check())
                      @include('checkout.logged')

                    @else
                      <button class="col-md-12 cadastro-button btn btn-primary">Já tenho cadastro</button>
                      @include('auth.register')
                      @include('auth.login')

                    @endif
                  </div>

                  <div class="col-md-6">
                    @include('checkout.pedido')
                  </div>
                </div>

              </div>
            </div>
          </div>
        </div>
        @yield('scripts')
    </body>
</html>
