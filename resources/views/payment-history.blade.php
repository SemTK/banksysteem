@extends('layouts.main')

@section('content')

<div class="container">
    <h1>These are all your previous banktransfers and payments done by your bankaccount or savingsaccount.</h1>
    
    <table class="table">
        <thead>
            <tr>
                <th scope="col">Date</th>
                <th scope="col">Amount</th>
                <th scope="col">Used Account ID</th>
                <th scope="col">Receiving Account ID</th>
            </tr>
        </thead>
        @foreach($payments as $payment)
        <tr>
            <td>{{$payment->created_at}}</td>
            <td>{{$payment->amount}}</td>
            <td>{{$payment->bankaccount_id}}</td>
            <td>{{$payment->receiving_account}}</td>
        </tr>
        @endforeach
    </table>
</div>
    
@endsection