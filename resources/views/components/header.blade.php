<nav class="navbar navbar-expand-lg bg-light">
    <div class="container-fluid">
        <a class="navbar-brand" href="{{ route('home') }}">BankSysteem</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
                @if(Auth::user())
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{ route('dashboard') }}">Dashboard</a>
                </li>
                @else
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{ route('home') }}">Home</a>
                </li>
                @endif
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('info') }}">Info</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('pricing') }}">Pricing</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Your Details
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="{{ route('detailed-finances') }}">Detailed Finances</a></li>
                        <li><a class="dropdown-item" href="{{ route('payment-history') }}">Payment history</a></li>
                        <li><a class="dropdown-item" href="{{ route('debt') }}">Debt</a></li>
                        <li><a class="dropdown-item" href="{{ route('loan-requests') }}">Loan Requests</a></li>
                    </ul>
                </li>
                @if(Auth::user() && Auth::user()->isAdmin == 1)
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('admin') }}">Admin</a>
                </li>
                @endif
            </ul>
        </div>
        <span class="navbar-text">
            @if(Auth::user())
            <form action="{{ route('logout') }}" method="POST">
                @csrf
                <button type="submit" class="nav-link">logout</button>
            </form>
            @else
            <a href="{{ route('register') }}">Register a bankaccount</a>
            <a href="{{ route('login') }}">Login</a>
            @endif
        </span>
    </div>
</nav>