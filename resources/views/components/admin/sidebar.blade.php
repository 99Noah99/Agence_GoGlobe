<div class="dashboard__sidebar bg-white scroll-bar-1">
    <div class="sidebar -dashboard">
        <div class="sidebar__item">
            <div class="sidebar__button -is-active">
                <a href="db-dashboard.html" class="d-flex items-center text-15 lh-1 fw-500">
                    <i class="fas fa-border-all mr-15"></i>
                    Dashboard
                </a>
            </div>
        </div>
        <div class="sidebar__item ">
            <div class="accordion -db-sidebar js-accordion">
                <div class="accordion__item">
                    <div class="accordion__button">
                        <div class="sidebar__button col-12 d-flex items-center justify-between">
                            <div class="d-flex items-center text-15 lh-1 fw-500">
                                <i class="fas fa-flag  mr-15"></i>
                                Gestion forfaits
                            </div>
                            <i class="fa-solid fa-chevron-down fa-2xs"></i>
                        </div>
                    </div>

                    <div class="accordion__content">
                        <ul class="list-disc pb-5 pl-40">

                            <li>
                                <a href="" class="text-15">Tous les forfaits</a>
                            </li>

                            <li>
                                <a href="{{ route('show_admin_add_forfait') }}" class="text-15">Ajouter un forfait</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="sidebar__item ">
            <div class="accordion -db-sidebar js-accordion">
                <div class="accordion__item">
                    <div class="accordion__button">
                        <div class="sidebar__button col-12 d-flex items-center justify-between">
                            <div class="d-flex items-center text-15 lh-1 fw-500">
                                <i class="fas fa-building mr-15"></i>
                                Gestion hébergements
                            </div>
                            <i class="fa-solid fa-chevron-down fa-2xs"></i>
                        </div>
                    </div>

                    <div class="accordion__content">
                        <ul class="list-disc pb-5 pl-40">

                            <li>
                                <a href="db-vendor-hotels.html" class="text-15">Tous les hébergements</a>
                            </li>

                            <li>
                                <a href="{{ route('show_admin_add_hebergement') }}" class="text-15">Ajouter un
                                    hébergement</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="sidebar__item ">
            <div class="accordion -db-sidebar js-accordion">
                <div class="accordion__item">
                    <div class="accordion__button">
                        <div class="sidebar__button col-12 d-flex items-center justify-between">
                            <div class="d-flex items-center text-15 lh-1 fw-500">
                                <i class="fas fa-bus-alt mr-15"></i>
                                Gérer bus
                            </div>
                            <i class="fa-solid fa-chevron-down fa-2xs"></i>
                        </div>
                    </div>

                    <div class="accordion__content">
                        <ul class="list-disc pb-5 pl-40">

                            <li>
                                <a href="db-vendor-bus.html" class="text-15">Tous les bus</a>
                            </li>

                            <li>
                                <a href="db-vendor-add-bus.html" class="text-15">Ajouter un bus</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="sidebar__item ">
            <div class="accordion -db-sidebar js-accordion">
                <div class="accordion__item">
                    <div class="accordion__button">
                        <div class="sidebar__button col-12 d-flex items-center justify-between">
                            <div class="d-flex items-center text-15 lh-1 fw-500">
                                <i class="fas fa-map-marker-alt mr-15"></i>
                                Locations
                            </div>
                            <i class="fa-solid fa-chevron-down fa-2xs"></i>
                        </div>
                    </div>

                    <div class="accordion__content">
                        <ul class="list-disc pb-5 pl-40">

                            <li>
                                <a href="db-all-locations.html" class="text-15">Toutes les localisations</a>
                            </li>

                            <li>
                                <a href="db-add-locations.html" class="text-15">Ajouter une locations</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="sidebar__item ">
            <div class="accordion -db-sidebar js-accordion">
                <div class="accordion__item">
                    <div class="accordion__button">
                        <div class="sidebar__button col-12 d-flex items-center justify-between">
                            <div class="d-flex items-center text-15 lh-1 fw-500">
                                <i class="fas fa-user-cog mr-15"></i>
                                Gestion clients
                            </div>
                            <i class="fa-solid fa-chevron-down fa-2xs"></i>
                        </div>
                    </div>

                    <div class="accordion__content">
                        <ul class="list-disc pb-5 pl-40">
                            <li>
                                <a href="{{ route('show_admin_all_user') }}" class="text-15">Tous les clients</a>
                            </li>
                            <li>
                                <a href="db-dashboard.html" class="text-15">Ajouter un client</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="sidebar__item">
            <div class="sidebar__button">
                <a href="db-all-review.html" class="d-flex items-center text-15 lh-1 fw-500">
                    <i class="fas fa-comments mr-15"></i>
                    Review
                </a>
            </div>
        </div>
        <div class="sidebar__item ">
            <div class="accordion -db-sidebar js-accordion">
                <div class="accordion__item">
                    <div class="accordion__button">
                        <div class="sidebar__button col-12 d-flex items-center justify-between">
                            <div class="d-flex items-center text-15 lh-1 fw-500">
                                <i class="fas fa-wallet mr-15"></i>
                                Payment
                            </div>
                            <i class="fa-solid fa-chevron-down fa-2xs"></i>
                        </div>
                    </div>

                    <div class="accordion__content">
                        <ul class="list-disc pb-5 pl-40">

                            <li>
                                <a href="db-dashboard.html" class="text-15">Payment information</a>
                            </li>

                            <li>
                                <a href="db-dashboard.html" class="text-15">All payment gateway</a>
                            </li>
                            <li>
                                <a href="db-dashboard.html" class="text-15">Ajouter payment method</a>
                            </li>
                            <li>
                                <a href="db-dashboard.html" class="text-15">All currency</a>
                            </li>
                            <li>
                                <a href="db-dashboard.html" class="text-15">Ajouter currency</a>
                            </li>
                            <li>
                                <a href="db-dashboard.html" class="text-15">All withdrawal method</a>
                            </li>
                            <li>
                                <a href="db-dashboard.html" class="text-15">Ajouter withdrawal method</a>
                            </li>

                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <div class="sidebar__item">
            <div class="sidebar__button ">
                <a href="{{ route('logout') }}" class="d-flex items-center text-15 lh-1 fw-500"
                    onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                    <i class="fas fa-sign-out-alt mr-15"></i>
                    Logout
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
            </div>
        </div>
    </div>
</div>