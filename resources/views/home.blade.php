@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
        <!-- <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div-->
    </div>
</div>
<body>
<div class="container">
    <br>
    @yield('contenido')
    <div class="d-flex justify-content-center mt-5">
        <img class="img-fluid" src="https://cdn-icons-png.flaticon.com/512/6073/6073873.png">
    </div>
</div>
<br>
<br>
<br>
<footer class=" text-dark text-center py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <p class="mb-0" style="transform: rotate(0deg); display: inline-block; font-size: 18px; transform-origin: top left;">Hecho por Karol Castillo</p>
                <p class="mb-0" style="transform: rotate(0deg); display: inline-block; font-size: 18px; transform-origin: top left;">0909-20-19052 Desarrollo Web</p>
            </div>
        </div>
    </div>
</footer>
</body>
@endsection
