@extends('layouts.app')


@section('maincontent')
    <main>
        <h1 class="text-center">Lista treni</h1>
        <ul>
            @foreach ($trains as $train)
                <li>{{ $train->company }}</li>
            @endforeach
        </ul>
    </main>
@endsection
