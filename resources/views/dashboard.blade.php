@extends('layouts.main')

@section('content')

<div class="container">
    <h1>Welcome back, {{Auth::user()->name}}</h1>
</div>

@endsection