<?php
$sidebar = [
    [
        'group' => 'dashboard',
        'title' => 'Dashboard',
        'icon'  => 'tachometer-alt',
        'url'   => url('dashboard'),
        'role'  => [
            1,
        ]
    ],
    [
        'group' => 'news',
        'title' => 'Berita',
        'icon'  => 'newspaper',
        'url'   => url('master-news'),
        'role'  => [
            1,
        ]
    ],
    [
        'group' => 'catalog',
        'title' => 'Katalog',
        'icon'  => 'catalog',
        'url'   => url('master-catalog'),
        'role'  => [
            1,
        ]
    ],
];
$admin = session()->get('admin');
$menu['role_id'] = $admin['role_id'];
?>
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="#">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3">Batikun</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    @foreach ($sidebar as $keyGroup => $valueGroup)
    @if (in_array($menu['role_id'], $valueGroup['role']))
    @if (isset($valueGroup['title']) && !isset($valueGroup['list']))
    <li class="nav-item active">
        <a class="nav-link" href="{{ $valueGroup['url'] }}">
            <i class="fas fa-fw fa-{{ $valueGroup['icon'] }}"></i>
            <span>{{ $valueGroup['title'] }}</span>
        </a>
    </li>
    @endif
    @endif
    @if (isset($valueGroup['list']))
    <li class="nav-item active">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="true" aria-controls="collapsePages">
            <i class="fas fa-fw fa-folder"></i>
            <span>{{ $valueGroup['title'] }}</span>
        </a>
        <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                @foreach ($valueGroup['list'] as $key => $value)
                @if (in_array($menu['role_id'], $value['role']))
                <a class="collapse-item" href="">{{ $value['title'] }}</a>
                @endif
                @endforeach
            </div>
        </div>
    </li>
    @endif
    @endforeach
    <!-- Divider -->
    <hr class=" sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>