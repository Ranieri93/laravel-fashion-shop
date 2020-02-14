@extends('layouts.main')
@section('content')
    <main>
        <div class="container">
            <div class="row">
                    @foreach($vestiti as $vestitoSingolo)
                            <div class="col-3">
                                <ul class="list-unstyled">
                                    <li>ID prodotto: {{ $vestitoSingolo->id }}</li>
                                    <li>Nome prodotto: {{ $vestitoSingolo->name }}</li>
                                    <li>Tipologia prodotto: {{ $vestitoSingolo->type }}</li>
                                    <li>Prezzo prodotto: {{ $vestitoSingolo->price }}</li>
                                </ul>
                            </div>
                    @endforeach
            </div>
        </div>
    </main>
@endsection
