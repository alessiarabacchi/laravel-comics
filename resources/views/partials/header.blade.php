

<header class="header">
    <div class="header-top">
        <!-- Logo -->
        <a href="{{ url('/') }}" class="header-logo">
            <img src="{{ asset('/public/images/._dc-logo.png') }}" alt="DC Comics Logo" height="50">
        </a>

        <!-- Navigation Menu -->
        <nav class="navbar">
            <ul class="nav-list">
                <li class="nav-item"><a href="{{ url('/characters') }}" class="nav-link">Characters</a></li>
                <li class="nav-item"><a href="{{ url('/comics') }}" class="nav-link">Comics</a></li>
                <li class="nav-item"><a href="{{ url('/movies') }}" class="nav-link">Movies</a></li>
                <li class="nav-item"><a href="{{ url('/tv') }}" class="nav-link">TV</a></li>
                <li class="nav-item"><a href="{{ url('/games') }}" class="nav-link">Games</a></li>
                <li class="nav-item"><a href="{{ url('/collectibles') }}" class="nav-link">collectibles</a></li>
                <li class="nav-item"><a href="{{ url('/videos') }}" class="nav-link">Videos</a></li>
                <li class="nav-item"><a href="{{ url('/fans') }}" class="nav-link">Fans</a></li>
                <li class="nav-item"><a href="{{ url('/news') }}" class="nav-link">News</a></li>
                <li class="nav-item"><a href="{{ url('/shop') }}" class="nav-link">Shop</a></li>
            </ul>
        </nav>

        <!-- Search Bar -->
        <form action="{{ url('/search') }}" method="GET" class="search-form">
            <input type="text" name="query" class="search-input" placeholder="Search">
            <button type="submit" class="search-button">Search</button>
        </form>
    </div>

    <div class="header-banner">
        <img src="{{ asset('public/images/._dc-logo-bg.png') }}" alt="Header Banner" />
    </div>
</header>
