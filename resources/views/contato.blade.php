@extends('layouts.main_layout')
@section('content')


    <div class="container mt-5">
        <div class="row">
            <div class="col text-center">

                <span class="display-3">PÁGINA DE CONTATO</span>

                <hr>

                @auth
                     <p class="display- text-success">Este texto só vai ser apresentado se estiver autenticado </p>
                @endauth

                @guest
                     <p class="display- text-danger">Este texto só vai ser apresentado para usuário visitante </p>
                @endguest


            </div>
        </div>
    </div>


@endsection
