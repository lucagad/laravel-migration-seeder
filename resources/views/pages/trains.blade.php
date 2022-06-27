@extends('layout.main')

@section('content')

<h1>Trains List</h1>

<div class="trains_card_container">

  @foreach ($trains as $train)
      <div class="train_card">
          <ul>
              <li><strong> Codice Treno: </strong>
                {{$train->train_code}}
              </li>

              <li><strong> Destinazione:</strong>
                {{$train->departure_station}}
              </li>

              <li><strong> Orario Partenza:</strong>
                {{$train->departure_time}}
              </li>

              <li><strong> Orario Arrivo:</strong>
                {{$train->arrival_time}}
              </li>

              <li>
                <strong> In orario:</strong>
                @if($train->is_canceled == 1) {{'No - Treno Cancellato'}} 
                @else 
                {{($train->is_in_time == 1)? 'Si' : 'No'}}
                @endif
              </li>

              <li>
                <strong> Cancellato:</strong>  
                {{($train->is_canceled == 1)? 'Si' : 'No'}} 
              </li>
              
      </div>
  @endforeach
</div>

<a href="{{Route('home')}}"> Torna indietro</a>

@endsection