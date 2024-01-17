@extends('layouts.app')

@section('content')
    <div>
        <h2 class="my-3 fs-2">
            Train on Departure on 16 Jenuary 2024
        </h2>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Company</th>
                    <th scope="col">Train ID</th>
                    <th scope="col">From</th>
                    <th scope="col">To</th>
                    <th scope="col">Time Of Departure</th>
                    <th scope="col">Time Of Arrival</th>
                    <th scope="col">Platform</th>
                    <th scope="col">State</th>

                </tr>
            </thead>
            <tbody>
                @foreach ($trains as $train)
                    <tr>
                        <th scope="row"> {{ $train->company }}</th>
                        <th>{{ $train->train_code }}</th>
                        <th>{{ $train->departure_station }}</th>
                        <th>{{ $train->arrival_station }}</th>
                        <th>{{ $train->departure_time }}</th>
                        <th>{{ $train->arrival_time }}</th>
                        <th>{{ $train->platform_number }}</th>
                        <th>
                            @if ($train->delayed === 1 && $train->on_time === 0)
                                Canceled
                            @else
                                @if ($train->delayed === 0 && $train->on_time === 1)
                                    Late
                                @else
                                    On Time
                                @endif
                            @endif
                        </th>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
