@extends('layouts/app')

@section('content')

<ul>
    @foreach ($trains as $train)
    <li>
        {{$train->Codice_treno}}
    </li>
    @endforeach
</ul>
    
@endsection