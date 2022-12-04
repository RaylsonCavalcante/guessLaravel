@extends('layouts.main')

@section('title', 'Guess')

@section('content')

<center>
    <div class="h1">
        <h1>Qual seu Palpite?</h1>
    </div>
    <div class="guess">
        <div class="card guessTimes mb-3">
            <form action="/events/{{ $id }}" method="POST">
                @csrf
                <center>
                    <input type="text" class="form-control" id="name" name="name" placeholder="Digite seu Nome" required>
                </center>    
                <div class="timesImg">
                    <img src="/img/flags/{{ $nameImg[0] }}.png" class="card-img-top" alt="...">
                    <span class="x">X</span>
                    <img src="/img/flags/{{ $nameImg[1] }}.png" class="card-img-top" alt="...">
                </div>
                <div class="card-body">
                    <div class="inputGuess">
                        <input type="number" class="form-control border-primary" id="guess1" name="guess1" required>
                        <input type="number" class="form-control border-primary" id="guess2" name="guess2" required>
                    </div>
                    <input type="submit" class="btn btn-primary btn-salvar" value="Salvar">                
                </div>
            </form>
        </div>
    </div>
</center>

@endsection