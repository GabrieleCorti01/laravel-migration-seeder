
@extends('layouts.app')

@section('content')
Ciao
<div>
    @foreach($vacanze as $vacanza)
    <p>{{$vacanza->title}}</p>
    @empty
    @endforeach
</div>
@endsection



