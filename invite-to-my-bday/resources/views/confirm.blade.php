@extends('layout')

@section('title', '23!!')

@section('content')
    <div class="card text-white bg-dark mb-3 text-center card-custom" style="max-width: 38rem;">
        @if ($guests->count() > 0)
            <img class="card-img-top" src="https://i.giphy.com/80ssZ0yRb2FATvZKcs.webp" alt="Bora beber">
        @else 
            <img class="card-img-top" src="https://media.tenor.com/PKKCAakpBZIAAAAM/neyney-neymar.gif">
        @endif
        <div class="card-body">
            <h5 class="card-title">Gabrielli faz 23!</h5>
            <p class="card-text">
                @if ($guests->count() > 0)
                    @foreach ($guests as $guest)
                        <table class="table table-striped table-dark">
                            <thead>
                            <tr>
                                <th scope="col">Nome</th>
                                <th scope="col">Confirmar</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <th scope="row">{{ $guest->name}}</th>
                                <th>
                                    <form action="{{ route('confirm-attendance', ['guestId' => $guest->id]) }}" method="POST">
                                        @csrf
                                        <button type="submit" class="btn btn-primary" value="1">Eu vou!</button>
                                    </form>
                                </th>                                
                                <td>
                                    <form action="{{ route('denny-attendance', ['guestId' => $guest->id]) }}" method="POST">
                                        @csrf
                                        <button type="submit" class="btn btn-danger" value="2">Não vou</button>
                                    </form>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    @endforeach
                @else
                    Infelizmente não encontrei seu nome na lista. Tente novamente ou entre em contato comigo.
                @endif
            </p>
        </div>
    </div>
@endsection
