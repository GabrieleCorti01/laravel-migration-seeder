
@extends('layouts.app')

@section('content')

    <div class="container-main">
        <div class="wrapper-container">

        @forelse
            <div class="card">

                <div class="card-header">
                    <h2>{{ $vacanza->title }}</h2>
                    <h3>{{ $vacanza->location }}</h3>
                </div>

                <div class="card-body">
                    <p>{{ $vacanza->persone }}</p>
                    <p>{{ $vacanza->date }}</p>
                </div>

            </div>
            @empty
            
            @endforelse
        </div>
    </div>
@endsection



