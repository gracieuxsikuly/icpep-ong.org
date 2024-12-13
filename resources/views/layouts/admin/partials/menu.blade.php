<div class="vertical-menu">

    <div data-simplebar class="h-10">

        <!--- Sidemenu -->
        <div id="sidebar-menu">
            <!-- Left Menu Start -->
            <ul class="metismenu list-unstyled" id="side-menu">


                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="bx bx-store"></i>

                        <span key="t-ecommerce">Les projets</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{route ('ajoutprojet') }}" key="t-products">Ajouter Projet</a></li>
                        <li><a href="{{route ('listprojet') }}" key="t-product-detail">Liste des Projets</a></li>
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="bx bx-store"></i>

                        <span key="t-ecommerce">Publications ou blog</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{route ('ajoutblog', ['blog' => "0"]) }}" key="t-products">Ajouter blog</a></li>
                        <li><a href="{{route ('listblog') }}" key="t-product-detail">Liste blog</a></li>
                    </ul>
                </li>




        </div>
        <!-- Sidebar -->
    </div>
</div>
