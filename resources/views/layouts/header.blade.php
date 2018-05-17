@section('header')
    <!-- HEADER -->
    <header class="gl-header">
        <!-- BOTTOM BAR/NAVIGATION -->
        <div class="gl-header-bottombar">
            <!-- Navigation Menu start-->
            <nav class="navbar gl-header-main-menu" role="navigation">
                <div class="container-fluid">

                    <!-- Navbar Toggle -->
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse"
                                data-target=".navbar-collapse">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>

                        <!-- Logo -->
                        <a class="navbar-brand" href="/">
                            {{--<b><span style="color: #d63031">Trave</span><span style="color:#ff7675">Ladub</span></b>--}}
                            <img src="ntl.png" alt="" >
                        </a>
                    </div>
                    <!-- Navbar Toggle End -->

                    <!-- navbar-collapse start-->
                    <div id="nav-menu" class="navbar-collapse gl-menu-wrapper collapse" role="navigation">
                        <ul class="nav navbar-nav gl-menus">
                            <li>
                                <a href="/">Home</a>
                            </li>
                            <li>
                                <a href="/destinasi">Destinasi</a>
                            </li>
                            <li>
                                <a href="/rekomendasi">Rekomendasi</a>
                            </li>
                            <li>
                                <a href="/forum">Forum</a>
                            </li>
                            <li>
                                <a href="/faq">FAQ</a>
                            </li>
                        </ul>
                    </div>
                    <!-- navbar-collapse end-->

                    @guest
                    <div class="gl-extra-btns-wrapper">
                        <a href="/login" class="gl-add-post-btn">Masuk</a>
                    </div>
                    @else
                        <div class="gl-extra-btns-wrapper" style="background-color: red">
                            <a class="gl-add-post-btn" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                {{ Auth::user()->name }}
                            </a>
                        </div>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST"
                              style="display: none;">
                            @csrf
                        </form>

                        @endguest

                </div>
            </nav>
            <!-- Navigation Menu end-->
        </div>
        <!-- END -->
    </header>
    <!-- HEADER END -->
@endsection