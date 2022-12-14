@extends('layouts.main')

@section('content')
<div class="container">
    <h1>Deposit money to your account.</h1>
    <div class="deposit-rules">
        @if($bankaccount->type == "regular")
        <h6>The minimum deposit is 5€.</h6>
        <h6>The maximum at once is 2500€.</h6>
        @endif
        @if($bankaccount->type == "deluxe")
        <h6>The minimum deposit is 25€.</h6>
        <h6>The maximum at once is 100.000€</h6>
        @endif
        @if($bankaccount->type == "savings")
        <h6>The minimum deposit is 1€.</h6>
        <h6>The maximum at once is 25.000€</h6>
        @endif
    </div>
    <div class="deposit-form">
        <form action="{{ route('bankaccount-deposit-money', $bankaccount->id)}}" method="POST">
            @csrf
            <div class="mb-3 row">
                <label for="money" class="col-sm-2 col-form-label">Deposit money:</label>
                <div class="col-sm-10">
                    @if($bankaccount->type == "regular")
                    <input type="number" class="form-control" id="money" name="money" min="5" max="2500">
                    @endif
                    @if($bankaccount->type == "deluxe")
                    <input type="number" class="form-control" id="money" name="money" min="25" max="100000">
                    @endif
                    @if($bankaccount->type == "savings")
                    <input type="number" class="form-control" id="money" name="money" min="1" max="25000">
                    @endif
                </div>
            </div>
            <div class="deposit-button">
                <div class="mb-3 row">
                    <button type="submit" class="btn btn-success" onclick="return confirm('are you sure you want to deposit the money?')">Deposit money</button>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection