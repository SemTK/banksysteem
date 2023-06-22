@extends('layouts.main')

@section('content')

<div class="container">
    <h1>This is where you can see your requested loans or the option to apply for a loan.</h1>

    <a href="{{ route('loan-request-form') }}" class="btn btn-primary">Request a loan</a>
</div>

@endsection