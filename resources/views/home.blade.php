@extends('layouts/main')

@section('content')
    <section>
        <div class="container">
            @foreach ($holidays as $holiday)
                <article class="mt-5 text-center">
                    <h2>{{ $holiday->address }}</h2>
                    <h4>{{ $holiday->city }}</h4>
                    <h4>{{ $holiday->state }}</h4>
                    <div>Duration: {{ $holiday->duration }} days</div>
                    <div>Price: {{ $holiday->price }}€</div>
                    <div>Available Seats: {{ $holiday->available_seats }}</div>
                    <div>Travel Arrangements: {{ $holiday->travel_arrangements }}</div>
                    @if (! $loop->last)
                        <hr>
                    @endif
                </article>
            @endforeach

            <section>
                <div class="mt-5 mb-5">
                    {{ $holidays->links() }}
                </div>
            </section>
        </div>
    </section>
@endsection