@extends('layouts.app')

@section('content')
    <div>
        <h2 class="my-3 fs-2">
            Train on Departure on 16 Jenuary 2024
        </h2>
        <ul class="row">
            @foreach ($trains as $train)
                <li class="my-2 fs-5">
                    <div class="col d-flex flex-wrap">
                        <span class="me-3">
                            <span class="title">
                                Train ID:
                            </span>
                            {{ $train->train_code }}
                        </span>

                        <span class="me-3">
                            <span class="title">
                                From :
                            </span>
                            {{ $train->departure_station }}
                        </span>

                        <span class="me-3">
                            <span class="title">
                                To :
                            </span>
                            {{ $train->arrival_station }}
                        </span>

                        <span class="me-3">
                            <span class="title">
                                Time Of Departure:
                            </span>
                            {{ $train->departure_time }}
                        </span>

                        <span class="me-3">
                            <span class="title">
                                Time Of Arrival:
                            </span>
                            {{ $train->arrival_time }}
                        </span>

                        <span class="me-3">
                            <span class="title">
                                Platform:
                            </span>
                            {{ $train->platform_number }}
                        </span>
                    </div>
                </li>
            @endforeach
        </ul>
    </div>
@endsection
