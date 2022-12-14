@extends('layouts.main')

@section('content')

<div class="container">
    <h1>Here are all the admin functions available.</h1>
    
    <h4>Functions &darr;</h4>
    <div class="admin-functions-grid">
        <div class="admin-delete-account">
            <p>Delete a bankaccount.</p>
            <a class="btn btn-danger" href="{{ route('admin-delete-bankaccount-page') }}">&rarr; Delete a bankaccount</a>
        </div>
    </div>
</div>

@endsection