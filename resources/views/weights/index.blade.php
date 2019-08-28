@extends('layouts.app')
<title>HF Weight Tracker</title>
@section('welcome')

<h1>Welcome to Weight Tracker</h1>
<p>Weigh yourself once each day, wearing the same clothing and at the same time of day. 
Enter your weight here, and we will alert you if your weight has increased more than 2 1/2 
pounds since the previous day, or more than 5 pounds in the past week.</p>

<div class="today-entry">
    Today
    <form method="post" action="/weights">
    @csrf
        <input type="number" step=".1" name="weight" placeholder="{{ $today_weight }}">

    </form>
</div>

<div class="container">
    <div class="row">
        <div class="col">
        first thing
        </div>
        <div class="col">
        second thing
        </div>
    </div>
</div>
Your weight today: {{ $today_weight }}
Your weight yesterday: {{ $yesterday_weight }}
Your weight a week ago: {{ $last_week_weight }}

Change since yesterday: {{ $change_since_yesterday }}
Change since a week ago: {{ $change_since_last_week }}
@endsection
