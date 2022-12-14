@extends('layouts.main')

@section('content')
<div class="container">
    <h1>Withdraw your money here.</h1>
    
    @if($bankaccount->type == "regular")
    <h6>The maximum at once is 2500€.</h6>
    <h6>Your current balance is: {{$bankaccount->money}}€</h6>
    @endif
    @if($bankaccount->type == "deluxe")
    <h6>The maximum at once is 100.000€</h6>
    <h6>Your current balance is: {{$bankaccount->money}}€</h6>
    @endif
    @if($bankaccount->type == "savings")
    <h6>The maximum at once is 25.000€</h6>
    <h6>Your current balance is: {{$bankaccount->money}}€</h6>
    @endif
    
    <div class="withdraw-form">
        <form action="{{ route('bankaccount-withdraw-money', $bankaccount->id) }}" method="POST">
            @csrf
            <div class="mb-3 row">
                <label for="money" class="col-sm-2 col-form-label">Withdraw money:</label>
                <div class="col-sm-10">
                    @if($bankaccount->type == "regular")
                    <input type="number" class="form-control" id="money" name="money" max="2500">
                    @endif
                    @if($bankaccount->type == "deluxe")
                    <input type="number" class="form-control" id="money" name="money" max="100000">
                    @endif
                    @if($bankaccount->type == "savings")
                    <input type="number" class="form-control" id="money" name="money" max="25000">
                    @endif
                </div>    
            </div>
            <div class="mb-3 row">
                <label for="receiving-bankaccount-id" class="col-sm-2 col-form-label">Receiving bankaccount ID:</label>
                
                <div class="col-sm-10">
                    <input type="text" name="receiving-bankaccount-id" id="receiving-bankaccount-id" class="form-control"> 
                </div>
            </div>
            <div class="withdraw-button">
                <div class="mb-3 row">
                    <button type="submit" class="btn btn-danger" onclick="return confirm('are you sure you want to withdraw the money?')">Withdraw money</button>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection