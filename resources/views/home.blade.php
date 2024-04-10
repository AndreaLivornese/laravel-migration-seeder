@extends('layouts/app')

@section('content')

<div class="d-flex flex-column align-items-center row-gap-3 py-5">
    @foreach ($trains as $train)
    <div class="card my_card">
        <div class="card-body">
            <div class="top-card d-flex justify-content-between align-items-center">
                <h5 class="card-title">{{$train->Codice_treno}}</h5>
                <div class="date">
                    {{$train->Data}}
                </div>
            </div>
            <div class="info">
                <div class="departure">
                    <div class="orario">
                        {{$train->Ora_di_partenza}}
                    </div>
                    <div class="luogo">
                        {{$train->Stazione_di_partenza}}
                    </div>
                </div>
                <hr>
                <div class="arrival">
                    <div class="orario">
                    {{$train->ora_di_arrivo}}
                    </div>
                    <div class="luogo">
                        {{$train->Stazione_di_arrivo}}
                    </div>
                </div>
            </div>
        </div>
        <div class="card-footer d-flex justify-content-between align-items-center">

            <div class="price">
                12€
            </div>

            <div class="my_btn btn_primary">
                Acquista
            </div>

        </div>
      </div>
    @endforeach
</div>

    
@endsection