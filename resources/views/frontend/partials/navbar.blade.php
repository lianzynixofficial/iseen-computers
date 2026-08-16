<header class="site-header">

    <nav class="site-navbar" aria-label="Main navigation">

        <div class="navbar-container">

            {{-- Logo / Brand --}}
            <a href="{{ route('home') }}" class="navbar-brand">
                <img
                    src="{{asset('images/iseen-computer-logo.webp') }}"
                    alt="I Seen Computer"
                    class="navbar-logo"
                >

                <span class="navbar-title">
                    I Seen Computer
                </span>
            </a>

            {{-- Desktop Navigation --}}
            <div class="navbar-menu">

                <nav class="site-nav" aria-label="Primary navigation">

                    <a
                        href="{{ route('home') }}"
                        class="{{ request()->routeIs('home') ? 'is-active' : '' }}"
                    >
                        Home
                    </a>

                    <a href="{{ route('home') }}#services">
                        Services
                    </a>

                    <a href="{{ route('home') }}#about">
                        About
                    </a>

                    <a
                        href="{{ route('contact') }}"
                        class="{{ request()->routeIs('contact') ? 'is-active' : '' }}"
                    >
                        Contact
                    </a>

                </nav>

            </div>

            {{-- Mobile Menu Button --}}
            <button
                type="button"
                class="navbar-toggle"
                aria-label="Toggle navigation"
                aria-expanded="false"
                aria-controls="navbar-menu"
            >
                <span></span>
                <span></span>
                <span></span>
            </button>

        </div>

    </nav>

</header>
