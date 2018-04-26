@extends('layouts.mainlayout')



@section('content')
<div class="container">

      <!-- Jumbotron Header -->
      <header class="jumbotron my-1">
        <h1 class="display-3">Welcome!</h1>
        <p class="lead">This is a Repository for Creatives and Content</p>
        <a href="{{ route('login') }}"{{ __('Login') }} class="btn btn-primary btn-lg">LogIn-Now!</a>
      </header>

      <!-- Page Features -->
      <div class="row text-center">

        

        <div class="col-lg-4 col-md-6 mb-4">
          <div class="card">
            <img class="card-img-top" src="{{ URL::to('/') }}/images/nexa.png" alt="">
            <div class="card-body">
              <h4 class="card-title">Maruti Suzuki Nexa</h4>
              <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Explicabo magni sapiente, tempore debitis beatae culpa natus architecto.</p>
            </div>
            <div class="card-footer">
              <a href="#" class="btn btn-primary">Find Out More!</a>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 mb-4">
          <div class="card">
            <img class="card-img-top" src="{{ URL::to('/') }}/images/true-value.jpg" alt="">
            <div class="card-body">
              <h4 class="card-title">Card title</h4>
              <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente esse necessitatibus neque.</p>
            </div>
            <div class="card-footer">
              <a href="#" class="btn btn-primary">Find Out More!</a>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 mb-4">
          <div class="card">
            <img class="card-img-top" src="{{ URL::to('/') }}/images/arena2.jpg" alt="">
            <div class="card-body">
              <h4 class="card-title">Card title</h4>
              <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Explicabo magni sapiente, tempore debitis beatae culpa natus architecto.</p>
            </div>
            <div class="card-footer">
              <a href="#" class="btn btn-primary">Find Out More!</a>
            </div>
          </div>
        </div>

      </div>
      <!-- /.row -->

    </div>
    <!-- /.container -->

@endsection









