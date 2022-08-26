<header>
    {{-- TOP HEADER --}}
    <div class="top-header">
        <div class="container">
            <ul>
                <li>
                    <a href="#">DC Power&#8480; Visa&reg;</a>
                </li>
                <li>
                    <a href="#" class="dropdown">Additional DC sites</a>
                </li>
            </ul>
        </div>
    </div>
    {{-- BOTTOM HEADER --}}
    <div class="bottom-header">
        <div class="container">
            {{-- Logo left --}}
            <div class="logo">
                <a href="{{ route("home") }}">
                    <img src="{{ asset("img/dc-logo.png") }}" alt="brand logo dc">
                </a>
            </div>
            {{-- Header Nav --}}
            <div class="header-nav">
                <ul>
                    <li>
                        <a href="#">CHARACTERS</a>
                    </li>
                    <li>
                        <a href="#">COMICS</a>
                    </li>
                    <li>
                        <a href="#">MOVIES</a>
                    </li>
                    <li>
                        <a href="#">TV</a>
                    </li>
                    <li>
                        <a href="#">GAMES</a>
                    </li>
                    <li>
                        <a href="#">COLLECTIBLES</a>
                    </li>
                    <li>
                        <a href="#">VIDEOS</a>
                    </li>
                    <li>
                        <a href="#">FANS</a>
                    </li>
                    <li>
                        <a href="#">NEWS</a>
                    </li>
                    <li>
                        <a href="#" class="dropdown">SHOP</a>
                    </li>
                </ul>  
            </div>
            {{-- Search bar Right  --}}
            <div class="searchbar">
                <input type="search" name="header-search" value="" placeholder="Search">
                <i class="fas fa-search"></i>
            </div>
        </div>
    </div>
</header>