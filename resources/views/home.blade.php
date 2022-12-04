@extends('layouts.main')

@section('title', 'Home')

@section('content')

<center>
    <img class="banner" src="/img/banner.png" alt="banner">

    <div class="games">
        <div class="card" style="width: 18rem;">
            <div class="times">
                <img src="/img/flags/portugal.png" class="card-img-top" alt="...">
                <span>X</span>
                <img src="/img/flags/suica.png" class="card-img-top" alt="...">
            </div>
            <div class="card-body">
            <label>
                <p>Portugal</p>
                <p>Suíça</p>
            </label>
            <a href="/events/guess/1" class="btn btn-primary">Lançar Palpite</a>
            </div>
        </div>

        <div class="card" style="width: 18rem;">
            <div class="times">
                <img src="/img/flags/brazil.png" class="card-img-top" alt="...">
                <span>X</span>
                <img src="/img/flags/coreia.png" class="card-img-top" alt="...">
            </div>
            <div class="card-body">
            <label>
                <p>Brazil</p>
                <p>Coreia do Sul</p>
            </label>
            <a href="/events/guess/2" class="btn btn-primary">Lançar Palpite</a>
            </div>
        </div>

        <div class="card" style="width: 18rem;">
            <div class="times">
                <img src="/img/flags/argentina.png" class="card-img-top" alt="...">
                <span>X</span>
                <img src="/img/flags/australia.png" class="card-img-top" alt="...">
            </div>
            <div class="card-body">
            <label>
                <p>Argentina</p>
                <p>Austrália</p>
            </label>
            <a href="/events/guess/3" class="btn btn-primary">Lançar Palpite</a>
            </div>
        </div>
    </div>
        
    @if (count($guesses) > 0)
        <table class="table">
            <thead>
                <tr class="bg-primary text-white">
                    <th scope="col">#</th>
                    <th scope="col">Nome</th>
                    <th scope="col">Palpite</th>
                    <th scope="col">Excluir</th>
                </tr>
            </thead>

            @foreach ($guesses as $guess)

                <tbody>
                    <tr class="bg-light">
                        <th scope="row">{{ $loop->index + 1 }}</th>
                        <td class="name">{{ $guess->name }}</td>
                        <td class="palpite">

                            @if($guess->game == 1)
                                <img src="/img/flags/portugal.png" width="30"  alt="...">
                                {{ $guess->guess }}
                                <img src="/img/flags/suica.png" width="30"  alt="...">
                            @elseif($guess->game == 2)
                                <img src="/img/flags/brazil.png" width="30"  alt="...">
                                {{ $guess->guess }}
                                <img src="/img/flags/coreia.png" width="30"  alt="...">
                            @else
                                <img src="/img/flags/argentina.png" width="30"  alt="...">
                                {{ $guess->guess }}
                                <img src="/img/flags/australia.png" width="30"  alt="...">
                            @endif

                        </td>
                        <td>
                            <form action="/events/{{ $guess->id }}" method="POST">
                                @csrf
                                @method("DELETE")
                                <button type="submit" class="btn btn-danger delete-btn">
                                    <ion-icon name="trash-outline" width="20"></ion-icon>
                                </button>
                            </form>
                        </td>
                    </tr>
                </tbody>
                
            @endforeach
        </table>
    @endif
</center>

@endsection