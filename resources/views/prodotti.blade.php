@extends('layouts.app')

@section('content')
    <main>
        <h2>LE LUNGHE</h2>
        <div class="cards_container">
            @foreach($dati as $dato)
                @if($dato['tipo'] === "lunga")
                    <div class="card">
                        <img src="{{ $dato['src'] }}" alt="">
                        <div class="hover">
                            <img src="/img/icon.png" alt="">
                            <p>{{$dato['descrizione']}}</p>
                        </div>
                    </div>
                @endif
            @endforeach
        </div>
        <h2>LE CORTE</h2>
        <div class="cards_container">
            @foreach($dati as $dato)
                @if($dato['tipo'] === "corta")
                    <div class="card">
                        <img src="{{ $dato['src'] }}" alt="">
                        <div class="hover">
                            <img src="/img/icon.png" alt="">
                            <p>{{$dato['descrizione']}}</p>
                        </div>
                    </div>
                @endif
            @endforeach
        </div>
        <h2>LE CORTISSIME</h2>
        <div class="cards_container">
            @foreach($dati as $dato)
                @if($dato['tipo'] === "cortissima")
                    <div class="card">
                        <img src="{{ $dato['src'] }}" alt="">
                        <div class="hover">
                            <img src="/img/icon.png" alt="">
                            <p>{{$dato['descrizione']}}</p>
                        </div>
                    </div>
                @endif
            @endforeach
        </div>
    </main>
@endsection