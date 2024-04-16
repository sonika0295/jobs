<nav class="navbar navbar-expand-lg navbar-light navbar-custom">
    <div class="container">
        <!-- Navbar brand (text logo) -->
        <a class="navbar-brand" href="{{ route('home') }}">
            <div class="logo-container">
                <div class="logo">
                    <span class="big-font">Klusmelder</span>
                </div>
                <div class="slogan">
                    <span class="small-font">The place for posting and executing tasks</span>
                </div>
            </div>
        </a>

        <!-- Toggle button for mobile -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Right-aligned items -->
        <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('task.add.form') }}">I have a task</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('employee.apply.form') }}">I want a task</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="accountDropdownButton" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        Account
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="accountDropdownButton">
                        @guest
                            <li><a class="dropdown-item" href="{{ route('signup') }}">Signup</a></li>
                            <li><a class="dropdown-item" href="{{ route('login') }}">Login</a></li>
                        @else
                            <li><a class="dropdown-item" href="{{ route('logout') }}">Logout</a></li>
                        @endguest
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="languageDropdownButton" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        Language
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="languageDropdownButton">
                        <li><a class="dropdown-item" href="#">Dutch</a></li>
                        <li><a class="dropdown-item" href="#">English</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>
