@extends('layouts.main-layouts')

@section('titlePage')
    home
@endsection

@section('content')
    <h1>hello world</h1>

    <div class="container d-flex flex-wrap">
        @foreach ($trains as $train)
            <div class="card">
                <ul>
                    <li>Agenzia treno: {{ $train['agency'] }}</li>
                    <li>Stazione di partenza: {{ $train['departure_station'] }}</li>
                    <li>Stazione di arrivo: {{ $train['arrival_station'] }}</li>
                    <li>Orario di Partenza: {{ $train['departure_time'] }}</li>
                    <li>Orario di arrivo: {{ $train['arrival_time'] }}</li>
                    <li>Codice treno: {{ $train['code'] }}</li>
                    <li>Numero delle carrozze del treno: {{ $train['n_carriage'] }}</li>

                    @if ($train['in_time'])
                        <li class="green">In Orario</li>
                    @else
                        <li class="red">In ritardo</li>
                    @endif

                    @if ($train['delated'])
                        <li class="red">Cancellato</li>
                    @else
                        <li class="green">In Programma</li>
                    @endif

                    {{-- <li>In orario: {{ $train['in_time'] }}</li>
                    <li>Cancellato: {{ $train['delated'] }}</li> --}}
                </ul>

            </div>
        @endforeach
    </div>
@endsection
