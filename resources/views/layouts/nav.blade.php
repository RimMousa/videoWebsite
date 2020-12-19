<nav class="navbar navbar-expand-lg fixed-top bg-danger " color-on-scroll="300">
    <div class="container">
        <div class="navbar-translate">
            <a class="navbar-brand" href="{{ route('frontend.landing') }}" rel="tooltip" title="Coded by Creative Tim"
                data-placement="bottom" target="_blank">
                Online Learning Videos
            </a>
            <button class="navbar-toggler navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation"
                aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-bar bar1"></span>
                <span class="navbar-toggler-bar bar2"></span>
                <span class="navbar-toggler-bar bar3"></span>
            </button>
        </div>
        <div class="collapse navbar-collapse justify-content-end" id="navigation">
            <ul class="navbar-nav">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="" id="navbarDropdownMenuLink"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Categories
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        @foreach ($categories as $category)
                            <a class="dropdown-item" href="{{route('front.category', $category->id)}}">{{ $category->name }}</a>

                        @endforeach
                    </div>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="" id="navbarDropdownMenuLink"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Skills
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        @foreach ($skills as $skill)
                            <a class="dropdown-item" href="{{route('front.skill', $skill->id)}}">{{ $skill->name }}</a>

                        @endforeach
                    </div>
                </li>

                <li class="nav-item">
                    <a href="{{ url('/login') }}" class="nav-link">
                        login
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{ url('/register') }}" class="nav-link">
                        Register
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>
