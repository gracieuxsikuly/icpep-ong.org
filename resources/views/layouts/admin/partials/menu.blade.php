<div class="vertical-menu">

    <div data-simplebar class="h-10">

        <!--- Sidemenu -->
        <div id="sidebar-menu">
            <!-- Left Menu Start -->
            <ul class="metismenu list-unstyled" id="side-menu">


                <li class="menu-title" key="t-apps">Apps</li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="bx bx-store"></i>

                        <span key="t-ecommerce">MENU</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{route ('AjoutMenu') }}" key="t-products">Ajouter Menu</a></li>
                        <li><a href="{{route ('ListMenu') }}" key="t-product-detail">Liste Menu</a></li>
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="bx bx-store"></i>

                        <span key="t-ecommerce">PROJET</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{route ('AjoutProjet') }}" key="t-products">Ajouter Projet</a></li>
                        <li><a href="{{route ('ListProjet') }}" key="t-product-detail">Liste des Projets</a></li>
                    </ul>
                </li>


        </div>
        <!-- Sidebar -->
    </div>
</div>
