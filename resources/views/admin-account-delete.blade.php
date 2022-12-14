@extends('layouts.main')

@section('content')
<div class="container">
    <h1>Which account do you want to delete?</h1>
    
    <div class="admin-bankaccount-list">
        @foreach($bankaccounts as $bankaccount)
        <div class="card" style="width: 18rem;">
            <div class="card-header">
                <span>{{$bankaccount->owner_name}}</span>
            </div>
            <ul class="list-group list-group-flush">
                <li class="list-group-item">Type: <span>{{$bankaccount->type}}</span></li>
                <li class="list-group-item">Owner ID: <span>{{$bankaccount->owner_id}}</span></li>
                <li class="list-group-item">Balance: <span>{{$bankaccount->money}}</span></li>
                <li class="list-group-item">bankaccount ID: <span>{{$bankaccount->id}}</span></li>
                <li class="list-group-item">Created at: <span>{{$bankaccount->created_at}}</span></li>
                <li class="list-group-item">
                    <div class="admin-account-delete-button">
                        <form action="{{ route('delete-bank-account', $bankaccount->id) }}" method="POST">
                            @csrf
                            <button class="btn btn-danger" type="submit" onclick="return confirm('Are you sure you want to delete this event?')">
                                Delete
                            </button>
                        </form>
                    </div>
                </li>
            </ul>
        </div>
        @endforeach
    </div>
</div>
@endsection