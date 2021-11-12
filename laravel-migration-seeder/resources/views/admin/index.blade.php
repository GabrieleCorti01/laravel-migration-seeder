
@extends('layouts.app')

@section('content')

    <div class="container-main">
        <div class="wrapper-container row p-5">

        @forelse($vacanze as $vacanza)
            <div class="card col-2 m-4">

                <div class="card-header">
                    <h2>{{ $vacanza->title }}</h2>
                </div>

                <div class="card-body">
                    <h3>Destinazione {{ $vacanza->location }}</h3>
                    <p>Per: {{ $vacanza->persone }} persone</p>
                    <p>Partenza il {{ $vacanza->date }}</p>
                </div>

            </div>
            @empty
            <p>ciao</p>
            @endforelse
        </div>
    </div>
@endsection



