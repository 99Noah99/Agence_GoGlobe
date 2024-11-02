<div class="header-margin"></div>
{{-- {{ dd('header') }} --}}
<header data-add-bg="" class="header -dashboard bg-white js-header" data-x="header" data-x-toggle="is-menu-opened">
    <div data-anim="fade" class="header__container px-30 sm:px-20">
        <div class="-left-side">
            <a href="{{ route('show_accueil') }}">
                <img src="{{ asset('images/logoblack.png') }}" alt="logo">
            </a>

            {{-- <a href="#!" class="header-logo" data-x="header-logo" data-x-toggle="is-logo-dark">
                <img src="{{ asset('images/logoblack.png') }}" alt="logo icon">
                <img src="{{ asset('images/logoblack.png') }}" alt="logo icon">
            </a> --}}
        </div>

        <h1 class="header__title">Admin Pannel</h1>
    </div>
</header>