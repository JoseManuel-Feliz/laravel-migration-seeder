@extends('layouts.app')

@section('page-title', 'passengers-data')

@section('main-content')

<main>

    @foreach($passengers as $passenger)
    @dd($passenger)
    @endforeach

</main>

@endsection