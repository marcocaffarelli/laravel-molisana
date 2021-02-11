@extends('layouts.app')

@section('homeContent')
    <div class="container_home">
        <div class="parte_superiore">
            <div class="card_grande">
                <img src="/img/buone idee.jpg" alt="">
                <div class="hover">
                    <p>La Molisana. Dove buone idee prendono nuove forme</p>
                </div>
            </div>
            <div class="container_cards">
                <div class=card_piccola> 
                   <img src="/img/rimacinata.jpg" alt="">
                   <div class="hover">
                        <p>I nostri 5 sfarinati decorticati a pietra</p>
                    </div>
                </div>
                <div class=card_piccola> 
                    <img src="/img/integrale.jpg" alt="">
                    <div class="hover">
                        <p>Nuovo integrale: ricco di fibre e con più vitamine</p>
                    </div>
                </div>
                <div class=card_piccola> 
                    <img src="/img/mano.jpg" alt="">
                    <div class="hover">
                        <p>Cento anni di pasta Molisana</p>
                    </div>
                </div>
                <div class=card_piccola> 
                    <img src="/img/tenaci.png" alt="">
                    <div class="hover">
                        <p>Da oggi la nostra tenacità è certificata</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="parte_inferiore">
            <div class="container_cards">
                <div class=card_piccola> 
                    <img src="/img/pelati.jpg" alt="">
                    <div class="hover">
                        <p>Perfetto per una grande pasta</p>
                    </div>
                </div>
                <div class=card_piccola> 
                    <img src="/img/filiera.jpg" alt="">
                    <div class="hover">
                        <p>La nostra filiera Integrata</p>
                    </div>
                </div>
                <div class=card_piccola> 
                    <img src="/img/comunicazione.jpg" alt="">
                    <div class="hover">
                        <p>La nostra comunicazione pubblicitaria</p>
                    </div>
                </div>
                <div class=card_piccola> 
                    <img src="/img/premio.png" alt="">
                    <div class="hover">
                        <p>Orgogliosi di affermare la qualità italiana nel mondo</p>
                    </div>
                </div>
            </div>
            <div class="card_grande">
                <img src="/img/italiana.jpg" alt="">
                    <div class="hover">
                        <p>Grano 100% italiano</p>
                    </div>
            </div>
        </div>
    </div>
@endsection