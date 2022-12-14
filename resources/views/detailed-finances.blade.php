@extends('layouts.main')

@section('content')

<div class="container">
    <h1>This is your current financial situation.</h1>
    
    <div class="finances">
        <h6>Here are your bankaccounts.</h6>
        <div class="finances-bankaccounts">
            
            @foreach($bankaccounts as $bankaccount)
            
            @if($bankaccount->owner_id == Auth::user()->id)
            
            <div class="card" style="width: 18rem;">
                <div class="card-header">
                    Type: {{$bankaccount->type}}
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">Balance: <span>{{$bankaccount->money}}</span></li>
                    <li class="list-group-item">Yearly fee: <span>...</span></li>
                    <li class="list-group-item">Created at: <span>{{$bankaccount->created_at}}</span></li>
                    <li class="list-group-item">
                        <div class="finances-money-buttons">
                            <a class="btn btn-success" href="{{ route('bankaccount-deposit-page', $bankaccount->id) }}">Deposit</a>
                            <a class="btn btn-danger" href="{{ route('bankaccount-withdraw-page', $bankaccount->id) }}">Withdraw</a>
                        </div>
                    </li>
                </ul>
            </div>
            
            
            @else
            <p>You do not own any bankaccounts.</p>
            @endif
            
            @endforeach
        </div>
    </div>
</div>

@endsection