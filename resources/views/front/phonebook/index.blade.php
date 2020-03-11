@extends('layouts.front')
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-12 py-3">
            <h1>Annuaire</h1>
        </div>
    </div>
    <div class="row">
        @if(count($cards) > 0)
            @foreach($cards as $card)
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-body" style="min-height: 200px">
                        <h3>{{ $card->title }}</h3>
                {{ $card->phone}}
                <br />{{ $card->email}}
                    </div>
                </div>
            </div>
            @endforeach
        @endif
    </div>
</div>


@endsection