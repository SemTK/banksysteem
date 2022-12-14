@extends('layouts.main')

@section('content')
<div class="container">
    <h1>Create your bankaccount</h1>
    <p>Note: You cannot cancel your bankaccount the first year of existence.</p>
    <form action="{{ route('create-bank-account') }}" method="POST">
        @csrf
        <div class="mb-3 row">
            <label for="typeOfAccount" class="col-sm-2 col-form-label">Type of account:</label>
            <div class="col-sm-10">
                <select class="form-control" name="typeOfAccount" id="typeOfAccount"> 
                    <option value="regular">Regular Bankaccount</option>
                    <option value="savings">Savings Account</option>
                    <option value="deluxe">Deluxe Bankaccount</option>
                </select>
            </div>
        </div>
        <div class="mb-3 row">
            <label for="money" class="col-sm-2 col-form-label">Deposit money:</label>
            <div class="col-sm-10">
                <input type="number" class="form-control" id="money" name="money" min="100">
            </div>
        </div>
        <div class="create-account-button">
            <div class="mb-3 row">
                <button type="submit" class="btn btn-primary">Create Account</button>
            </div>
        </div>
    </form>
</div>
@endsection