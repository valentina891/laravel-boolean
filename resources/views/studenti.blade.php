@extends('layouts.app')

@section('titolo')
    Studenti
@endsection

@section('content')
    <div class="card-group">
        @foreach ($data as $student)
            <div class="card" style="max-width: 18rem;">
                <img src="{{ $student['img'] }}" class="card-img-top" alt="{{ $student['nome'] }}">
                <div class="card-body">
                    <h5 class="card-title">{{ $student['nome'] }}</h5>
                    <p class="card-text">{{ $student['descrizione'] }}</p>
                    <p class="card-text"><small class="text-muted">{{ $student['anni'] }}</small></p>
                </div>
            </div>

        @endforeach
    </div>
@endsection