@extends('layouts.app')

@section('content')
    <div class="container_prodotti">
        <!-- le paste lunghe -->
        <h2>LE LUNGHE</h2>
        <div class="cards_container">
            @foreach($dati as $dato)
                <!-- if per selezionare la pasta con tipo lunga -->
                @if($dato['tipo'] === "lunga")
                    <div class="card">
                        <img src="{{ $dato['src'] }}" alt="">
                        <div class="hover">
                            <img src="/img/icon.png" alt="">
                            <p>{{$dato['titolo']}}</p>
                        </div>
                    </div>
                @endif
                <!-- if per selezionare la pasta con tipo lunga -->
            @endforeach
        </div>
        <!-- /le paste lunghe -->
        
        <!-- le paste corte -->
        <h2>LE CORTE</h2>
        <div class="cards_container">
            @foreach($dati as $dato)
                <!-- if per selezionare la pasta con tipo corta -->
                @if($dato['tipo'] === "corta")
                    <div class="card">
                        <img src="{{ $dato['src'] }}" alt="">
                        <div class="hover">
                            <img src="/img/icon.png" alt="">
                            <p>{{$dato['titolo']}}</p>
                        </div>
                    </div>
                @endif
                <!-- if per selezionare la pasta con tipo corta -->
            @endforeach
        </div>
        <!-- /le paste corte -->
        
        <!-- /le paste cortissime -->
        <h2>LE CORTISSIME</h2>
        <div class="cards_container">
            @foreach($dati as $dato)
                <!-- if per selezionare la pasta con tipo cortissima -->
                @if($dato['tipo'] === "cortissima")
                    <div class="card">
                        <img src="{{ $dato['src'] }}" alt="">
                        <div class="hover">
                            <img src="/img/icon.png" alt="">
                            <p>{{$dato['titolo']}}</p>
                        </div>
                    </div>
                @endif
                <!-- /if per selezionare la pasta con tipo cortissima -->
            @endforeach
        </div>
        <!-- /le paste cortissime -->

    </div>
@endsection