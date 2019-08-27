@extends('layouts.app')

@section('entryForm')
<form method="post" action="/weights">
@csrf
    <input type="number" step=".1" name="weight" placeholder="000.0">

    <input type="submit" name="submit">

</form>
@endsection

@section('content')
    <p>This is in the content section of the create file</p>
@endsection
