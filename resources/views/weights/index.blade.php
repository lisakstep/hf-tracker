@extends('layouts.app')
<title>HF Weight Tracker</title>
@section('welcome')

<h1>Welcome to Weight Tracker</h1>
<p>Weigh yourself at the same time each day, wearing the same clothing.
Enter your weight here, and we will alert you if your weight has increased more than 2 1/2 
pounds since the previous day, or more than 5 pounds in the past week.</p>

<div class="data-display">
    Today
    <form method="post" action="/weights">
        @csrf
        <input type="number" step=".1" name="weight" placeholder="{{ $today_weight }}">

    </form>
</div>

<div class="container">
    <div class="row">
        <div class="col data-display result {{ ($change_since_yesterday >= 2.5) ? 'danger-border' : 'success-border'}}">
            <div class="row">
                <div class="text-in-row">
                    One Day Ago
                </div>
            </div>
            <div class="row">
                <div class="text-in-row result-text {{ ($change_since_yesterday >= 2.5) ? 'text-danger' : 'text-success'}}">
                    @if ( $change_since_yesterday > 0 )
                    +
                    @endif
                    @if ( $change_since_yesterday == 0 )
                    no change
                    @else
                    {{ $change_since_yesterday }}
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="text-in-row footnote">
                    (was {{ $yesterday_weight }})
                </div>
            </div>
        </div>
        <div class="col data-display result {{ ($change_since_last_week >= 5) ? 'danger-border' : 'success-border'}}">
            <div class="row">
                <div class="text-in-row">
                    One Week Ago
                </div>
            </div>
            <div class="row">
                <div class="text-in-row result-text {{ ($change_since_last_week >= 5) ? 'text-danger' : 'text-success'}}">
                    @if ( $change_since_last_week > 0 )
                    +
                    @endif
                    @if ( $change_since_last_week == 0 )
                    no change
                    @else
                    {{ $change_since_last_week }}
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="text-in-row footnote">
                    (was {{ $last_week_weight }})
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
