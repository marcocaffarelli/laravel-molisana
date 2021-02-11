@extends('layouts.app')

@section('content')
    <main>
        <h2>LE LUNGHE</h2>
        <div class="card">
            @foreach($dati as $dato)
                @if($dato['tipo'] === "lunga")
                    <img src="{{ $dato['src'] }}" alt="">
                @endif
            @endforeach
        </div>
        <h2>LE CORTE</h2>
        <div class="card">
            @foreach($dati as $dato)
                @if($dato['tipo'] === "corta")
                    <img src="{{ $dato['src'] }}" alt="">
                @endif
            @endforeach
        </div>
        <h2>LE CORTISSIME</h2>
        <div class="card">
            @foreach($dati as $dato)
                @if($dato['tipo'] === "cortissima")
                <img src="{{ $dato['src'] }}" alt="">
                @endif
            @endforeach
        </div>
    </main>
@endsection