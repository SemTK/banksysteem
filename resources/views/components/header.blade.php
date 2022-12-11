<nav class="navbar navbar-expand-lg bg-light">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">BankSysteem</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Info</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Pricing</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Your Details
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Detailed Finances</a></li>
                        <li><a class="dropdown-item" href="#">Payment history</a></li>
                        <li><a class="dropdown-item" href="#">Debt</a></li>
                        <li><a class="dropdown-item" href="#">Loan Request</a></li>
                    </ul>
                </li>
            </ul>
        </div>
        <span class="navbar-text">
            @if(Auth::user())
            <a href="{{ route('logout') }}">Log Out</a>
            @else
            <a href="{{ route('register') }}">Register a bankaccount</a>
            <a href="{{ route('login') }}">Login</a>
            @endif
        </span>
    </div>
</nav>