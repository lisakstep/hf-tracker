@extends('layouts.app')

@section('welcome')

<h2>Welcome to the weight tracker.</h2>
<p>Weigh yourself once each day, wearing the same clothing and at the same time of day. 
Enter your weight here, and we will alert you if your weight has increased more than 2 1/2 
pounds since the previous day, or more than 5 pounds in the past week.</p>

<form method="post" action="/weights">
@csrf
    <input type="number" step=".1" name="weight" placeholder="000.0">

    <input type="submit" name="submit">

</form>

<ul>
    @foreach($weights as $weight)

    <li>{{ $weight->weight }}</li>

    @endforeach
</ul>

Your weight today: {{ $today_weight }}
Your weight yesterday: {{ $yesterday_weight }}
Your weight a week ago: {{ $last_week_weight }}

Change since yesterday: {{ $change_since_yesterday }}
Change since a week ago: {{ $change_since_last_week }}
@endsection
