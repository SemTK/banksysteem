@extends('layouts.main')

@section('content')

<div class="container">
    <h1>Loan Request</h1>
    
    <div class="mb-3 row">
        <label for="loanAmount" class="col-sm-2 col-form-label">Amount:</label>
        <div class="col-sm-10">
            <input type="number" class="form-control" id="loanAmount" name="loanAmount" min="100">
        </div>
    </div>
    <div class="mb-3 row">
        <label for="receivingAccount" class="col-sm-2 col-form-label">Receiving Account</label>
        <div class="col-sm-10">
            
            <select class="form-control" name="typeOfAccount" id="typeOfAccount"> 
                <option value="regular">Regular Bankaccount</option>
                <option value="savings">Savings Account</option>
                <option value="deluxe">Deluxe Bankaccount</option>
            </select>
            
        </div>
    </div>
</div>

@endsection