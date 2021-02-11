@extends('layouts.app')

@section('content')
    @foreach($dati as $dato)
        @if($dato['tipo'] === "lunga")
            <h3>{{$dato['titolo']}}</h3>
        @endif
        @if($dato['tipo'] === "corta")
            <h3>{{$dato['titolo']}}</h3>
        @endif
        @if($dato['tipo'] === "cortissima")
            <h3>{{$dato['titolo']}}</h3>
        @endif
    @endforeach
@endsection