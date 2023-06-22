<section class="s-pageheader {{ Request::path() === 'home' ? 's-pageheader--home' : ''}}">

        <header class="header">
            <div class="header__content row">

                <div class="header__logo">
                    <a class="logo" href="/home">
                        <img src="{{ asset('images/logo.svg')}}" alt="Homepage">
                    </a>
                </div>
                 <!-- end header__logo -->
                 <x-social-links/>
                 <!-- end header__social -->
                <!-- header search -->
                <x-search-bar/>
                <!-- end header__search -->
                <!-- header menu -->
                <x-header-menu/>
                <!-- end header menu -->
            </div> <!-- header-content -->
        </header> <!-- header -->
        {{$slot}}
    </section>