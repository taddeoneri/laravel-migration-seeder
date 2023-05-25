@extends('layouts.app')


@section('maincontent')
    <main>
        <h1 class="text-center">Lista treni</h1>

        @foreach ($trains as $train)
        <ul>
            <li>{{ $train->company }}</li>
            <li>{{ $train->departure_station }}</li>
            <li>{{ $train->arrival_station }}</li>
            <li>{{ $train->departure_time }}</li>
            <li>{{ $train->arrival_time }}</li>
            <li>{{ $train->train_code }}</li>
            <li>{{ $train->carriages }}</li>
            <li>{{ $train->delay }}</li>
            <li>{{ $train->delated }}</li>
        </ul>
        @endforeach

    </main>
@endsection
