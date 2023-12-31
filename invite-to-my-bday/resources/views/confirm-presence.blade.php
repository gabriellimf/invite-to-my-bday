@extends('layout')

@section('title', '23!!')

@section('content')
    <div class="card text-white bg-dark mb-3 text-center card-custom" style="max-width: 38rem;">
        <img class="card-img-top" src="https://media1.giphy.com/media/v1.Y2lkPTc5MGI3NjExN3ZoeTRsMmR6N3NtaTJ4cXM3eWx5a2M3am1icG4zcG9sYmFwdnlrYiZlcD12MV9pbnRlcm5hbF9naWZfYnlfaWQmY3Q9Zw/XeBHezfO05G9OWpctp/giphy.gif" alt="Casimiro vascaino">
        <div class="card-body">
            <h5 class="card-title">Gabrielli faz 23!</h5>
            <p class="card-text">
                Quando: 13/01/2024 a partir das 14:00 horas<br>
                Onde: Av. Est. José Júlio de Souza, 2160 - Praia de Itaparica, Vila Velha - ES, 29102-010<br>
                <a href="https://maps.app.goo.gl/pKomAE6tsXD1NtEf9">Quer ver no mapa? Clica aqui!</a><br>
                Se liga! Vai ser algo simples, só um churrasco pros amigos mesmo. Mas vai ter bolo, então não perde!
                Não se esqueça de levar sua bebida.<br>
                "Ah, e se eu confirmar e depois não puder ir?"<br>
                Não tem problema, só avisa antes, pra eu não comprar coisa demais. Mas confirme sua presença ou falta até o dia 10/01/2024, por favor.
            </p>
            <p>Pesquise aqui seu nome:</p>
            <form class="form-inline my-2 my-lg-0" action="{{ route('search-guest') }}" method="GET" style="display: flex; justify-content: center; align-items: center;">
                <input class="form-control mr-sm-2" type="search" name="guest_name" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form>            
        </div>
    </div>
</div>
@endsection

