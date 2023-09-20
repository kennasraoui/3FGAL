<!-- Sidebar -->
<div class="sidebar">
    
    <!-- Sidebar user panel (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="info">
            <li class="nav-item">
                <a href="{{ route('home') }}" class="d-block">{{ Auth::user()->name }}</a>
            </li>
        </div>
    </div>
    

    <!-- Sidebar Menu -->
    <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <li class="nav-item">
                <a href="{{ route('home') }}" class="nav-link">
                    <i class="nav-icon fas fa-th"></i>
                    <p>
                        {{ __('Tableau De Bord') }}
                    </p>
                </a>
            </li>

            <li class="nav-item">
                <a href="#" class="nav-link">
                    <i class="nav-icon fa fa-file" aria-hidden="true"></i>
                    <p>
                        {{ __('Facteur ') }}
                        <i class="fas fa-angle-left right"></i>
                    </p>
                </a>
                <ul class="nav nav-treeview" style="display: none;">
                    <li class="nav-item">
                        <a href="{{ route('home') }}" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Facteur enter </p>
                        </a>
                    </li>
                </ul>
                <ul class="nav nav-treeview" style="display: none;">
                    <li class="nav-item">
                        <a href="{{ route('home') }}" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Facteur sorti </p>
                        </a>
                    </li>
                </ul>
                <ul class="nav nav-treeview" style="display: none;">
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Compteurs</p>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link">
                    <i class="nav-icon fa fa-cog" aria-hidden="true"></i>
                    <p>
                        {{ __('Administration') }}
                        <i class="fas fa-angle-left right"></i>
                    </p>
                </a>
                <ul class="nav nav-treeview" style="display: none;">
                    <li class="nav-item">
                        <a href="{{ route('home') }}" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Géré les utilisteurs</p>
                        </a>
                    </li>
                </ul>
                <ul class="nav nav-treeview" style="display: none;">
                    <li class="nav-item">
                        <a href="{{ route('home') }}" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Géré les roles</p>
                        </a>
                    </li>
                </ul>

            </li>
            <li class="nav-item">
                <a href="#" class="nav-link">
                    <i class="nav-icon fas fa-users-cog"></i>
                    <p>
                        {{ __('HR') }}
                        <i class="fas fa-angle-left right"></i>
                    </p>
                </a>
                <ul class="nav nav-treeview" style="display: none;">
                    <li class="nav-item">
                        <a href="{{ route('home') }}" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>{{ __('Demandes à approuver') }}</p>
                        </a>
                    </li>
                </ul>
                <ul class="nav nav-treeview" style="display: none;">
                    <li class="nav-item">
                        <a href="{{ route('home') }}" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>{{ __('Les employer') }}</p>
                        </a>
                    </li>
                </ul>
                <ul class="nav nav-treeview" style="display: none;">
                    <li class="nav-item">
                        <a href="{{route('home') }}" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>{{ __('Contrats') }}</p>
                        </a>
                    </li>
                </ul>
                <ul class="nav nav-treeview" style="display: none;">
                    <li class="nav-item">
                        <a href="{{ route('home') }}" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>{{ __('Positions') }}</p>
                        </a>
                    </li>
                </ul>
                <ul class="nav nav-treeview" style="display: none;">
                    <li class="nav-item">
                        <a href="{{ route('home') }}" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>{{ __('Projets') }}</p>
                        </a>
                    </li>
                </ul>
                <ul class="nav nav-treeview" style="display: none;">
                    <li class="nav-item">
                        <a href="{{ route('home') }}" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>{{ __('Type de conge') }}</p>
                        </a>
                    </li>
                </ul>
                

            </li>
            <li class="nav-item">
                <a href="{{ route('home') }}" class="nav-link">
                    <i class="nav-icon far fa-address-card"></i>
                    <p>
                        {{ __('About us') }}
                    </p>
                </a>
            </li>

        </ul>
    </nav>
    <!-- /.sidebar-menu -->
</div>
<!-- /.sidebar -->
