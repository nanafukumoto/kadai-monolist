@extends('layouts.app')

@section('content')
    <h1>Wantランキング</h1>
    @include('items.items', ['items' => $items, 'unit' => $unit])
@endsection