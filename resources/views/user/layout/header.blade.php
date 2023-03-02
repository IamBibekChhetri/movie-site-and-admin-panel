<!-- header -->
<header class="header">
    <div class="header__wrap">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="header__content">
                        <!-- header logo -->
                        <a href="{{('dashboard')}}" class="header__logo">
                            <h2>Watch Movies</h2>

                        </a>
                        <!-- end header logo -->

                        <!-- header nav -->
                        <ul class="header__nav">
                            <!-- dropdown -->

                            <li class="header__nav-item">
                                <a href="{{('dashboard')}}" class="header__nav-link">Home</a>
                            </li>

                            <!-- end dropdown -->

                            <!-- dropdown -->

                            <li class="header__nav-item">
                                <a href="{{('movies')}}" class="header__nav-link">Movies</a>
                            </li>
                            <!-- end dropdown -->

                            <li class="header__nav-item">
                                <a href="{{('about')}}" class="header__nav-link">About Us</a>
                            </li>

                            <li class="header__nav-item">
                                <a href="{{('contact')}}" class="header__nav-link">Contact Us</a>
                            </li>


                        </ul>
                        <!-- end header nav -->

                        <!-- header auth -->
                        <div class="header__auth">

                            <!-- dropdown -->
                            <li class="header__nav-item">
                                <a class="dropdown-toggle header__nav-link menu-icon fas fa-user" href="#" role="button" id="dropdownMenuCatalog" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> Profile </a>

                                <ul class="dropdown-menu header__dropdown-menu" aria-labelledby="dropdownMenuCatalog">
                                    <li><a href="{{('profile')}}">Profile</a></li>
                                    <li><a href="{{('changePassword')}}">Change Password</a></li>
                                    <li>
                                        <a class="dropdown-item" href="#" onclick="event.preventDefault();
                                            document.getElementById('logout-form').submit();">
                                            <span class="dropdown-icon oi oi-account-logout"></span> Log Out
                                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                                @csrf
                                            </form>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <!-- end dropdown -->

                        </div>
                        <!-- end header auth -->

                        <!-- header menu btn -->
                        <button class="header__btn" type="button">
                            <span></span>
                            <span></span>
                            <span></span>
                        </button>
                        <!-- end header menu btn -->
                    </div>
                </div>
            </div>
        </div>
    </div>

</header>
<!-- end header -->