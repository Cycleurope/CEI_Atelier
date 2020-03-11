@extends('layouts.front')
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-12 py-3">
            <h1>Vidéos</h1>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-body">
                    <h3>Vidéos récemment ajoutées</h3>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    @if(count($videos) > 0)
                    <div class="row">
                        @foreach($videos as $v)
                        <div class="col-lg-4">
                            {!! $v->embed() !!}
                            <h3>{{ $v->title }}</h3>
                        </div>
                        @endforeach
                    </div>
                    @else
                    <div class="alert alert-info-full">Aucune vidéo n'est disponible actuellement.</div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection