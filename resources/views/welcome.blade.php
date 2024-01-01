@extends('layout')

@section('title', '23!!')

@section('content')
    <div class="card text-white bg-dark mb-3 text-center card-custom" style="max-width: 38rem;">
        <img class="card-img-top" src="https://media4.giphy.com/media/xTI7mKff34dJAYgfzX/giphy.gif?cid=ecf05e478bmxuerustamkcfprw0qwmo3zddohwytx087932z&ep=v1_gifs_search&rid=giphy.gif&ct=g" alt="Casimiro vascaino">
        <div class="card-body">
            <h5 class="card-title">Gabrielli faz 23!</h5>
            <p class="card-text">
            Venha comemorar o meu aniversário comigo! Eu sou desenvolvedora backend, não espere um site bonito.<br>
            O que está esperando pra confirmar sua presença?<br>
            É só buscar o seu nome na lista de convidados e clicar pra confirmar.<br>
            Qualquer dúvida pode me mandar mensagem que eu te ajudo :D <br>
            </p>
            <a href="/confirm-presence" class="btn btn-primary">Diga se vai ou não!</a>
        </div>
    </div>
@endsection
