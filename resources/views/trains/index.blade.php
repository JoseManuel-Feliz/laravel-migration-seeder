@extends('layouts.app')


@section('main-content')

<!-- "id" => 41
"azienda" => "Trenitalia"
"stazione_partenza" => "Roma Termini"
"stazione_arrivo" => "Milano Centrale"
"orario_partenza" => "2024-10-25 06:30:00"
"orario_arrivo" => "2024-10-25 10:45:00"
"codice_treno" => "IC001"
"numero_carrozze" => 12
"in_orario" => 1
"cancellato" => 0 -->
<main>

    <table>

        <thead>
            <tr>
                <th>
                    id
                </th>
                <th>
                    Azienda
                </th>
                <th>
                    stazione di partenza
                </th>
                <th>
                    stazione di arrivo
                </th>
                <th>
                    orario di partenza
                </th>
                <th>
                    orario di arrivo
                </th>
                <th>
                    codice treno
                </th>
                <th>
                    numero carrozze
                </th>
                <th>
                    in orario
                </th>
                <th>
                    cancellato
                </th>

            </tr>
        </thead>
        <tbody>
            @forelse($trains as $train)
            <tr>
                <td>
                    {{$train->id}}
                </td>
                <td>
                    {{$train->azienda}}
                </td>
                <td>
                    {{$train->stazione_partenza}}
                </td>
                <td>
                    {{$train->stazione_arrivo}}
                </td>
                <td>
                    {{$train->orario_partenza}}
                </td>
                <td>
                    {{$train->orario_arrivo}}
                </td>
                <td>
                    {{$train->codice_treno}}
                </td>
                <td>
                    {{$train->numero_carrozze}}
                </td>
                <td>
                    {{$train->in_orario}}
                </td>
                <td>
                    {{$train->cancellato}}
                </td>


            </tr>
            @empty
            <tr>

                <td rowspan="11">
                    no trains available
                </td>
            </tr>
            @endforelse
        </tbody>



    </table>
</main>


@endsection