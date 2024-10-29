@extends('layouts.app')

@section('title','Trains Timetable')


@section('main-content')

<main>

    <div class="container">

        <table class="trains-table">

            <thead>
                <tr>
                    <th> # </th>
                    <th> Company </th>
                    <th> Departure station </th>
                    <th> Arrival station </th>
                    <th> Departure time </th>
                    <th> Arrival time </th>
                    <th> Train code </th>
                    <th> number of carriages </th>
                    <th> On time </th>
                    <th> Canceled </th>
                </tr>
            </thead>

            <tbody>
                @forelse($trains as $train)
                <tr>
                    <td> {{$train->id}} </td>
                    <td> {{$train->azienda}}</td>
                    <td> {{$train->stazione_partenza}} </td>
                    <td> {{$train->stazione_arrivo}} </td>
                    <td> {{$train->orario_partenza}} </td>
                    <td> {{$train->orario_arrivo}} </td>
                    <td> {{$train->codice_treno}} </td>
                    <td> {{$train->numero_carrozze}} </td>

                    @if($train->cancellato)
                    <td> {{$train->in_orario ? 'On time' : 'Delay'}} </td>
                    <td> {{$train->cancellato ? '/ / /' : 'Cancelled' }} </td>

                    @else
                    <td colspan="2"> Cancelled </td>
                    @endif
                </tr>
                @empty
                <tr>
                    <td colpan="11"> no trains available </td>
                </tr>
                @endforelse
            </tbody>

        </table>
    </div>

</main>


@endsection