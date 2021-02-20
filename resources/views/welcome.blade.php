@extends('layout.app')

@section('content')
    <section class="cd-timeline js-cd-timeline">
        <div class="cd-timeline__container">
            @foreach($json as $value)
                <div class="cd-timeline__block js-cd-block">
                    <div class="cd-timeline__img cd-timeline__img--movie js-cd-img">
                        <img src="{{ asset('img/loc.svg') }}" alt="Picture">
                    </div>
                    <!-- cd-timeline__img -->
                    <div class="cd-timeline__content js-cd-content">
                        <h3>{{ $value['trip_status'] }}</h3>
                        <p><b>{{ $value['current_asset_position_name'] }}</b></p>
                        <a href="{{ route('tracking.details', $value['this_tracking_job_id']) }}" class="btn btn-primary btn-lg">View Details</a>
                        <span class="cd-timeline__date" style="border: 2px solid green; background-color: green; border-radius: 12px; color:white;">{{ $value['created_at'] }}</span>
                    </div>
                    <!-- cd-timeline__content -->
                </div>
            @endforeach
        </div>
    </section>

@endsection
