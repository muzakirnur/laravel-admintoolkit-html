<!-- Sidebar Starts -->
<aside class="sidebar">
    <!-- Sidebar Header Starts -->
    <a href="#">
      <div class="sidebar-header">
        <div class="sidebar-logo-icon">
          <img src="{{ asset('images/logo-small.svg') }}" alt="logo" class="h-[45px]" />
        </div>

        <div class="sidebar-logo-text">
          <h1 class="flex text-xl">
            <span class="font-bold text-slate-800 dark:text-slate-200"> Admin </span>
            <span class="font-semibold text-primary-500">Toolkit</span>
          </h1>

          <p class="whitespace-nowrap text-xs text-slate-400">Simple &amp; Customizable</p>
        </div>
      </div>
    </a>
    <!-- Sidebar Header Ends -->

    <!-- Sidebar Menu Starts -->
    <ul class="sidebar-content">
      <!-- Dashboard -->
      <li>
        <a href="javascript:void(0);" class="sidebar-menu {{ Request::routeIs('dashboard', 'ecommerce') ? 'active' : '' }}">
          <span class="sidebar-menu-icon">
            <i data-feather="home"></i>
          </span>
          <span class="sidebar-menu-text">Dashboard</span>
          <span class="sidebar-menu-arrow">
            <i data-feather="chevron-right"></i>
          </span>
        </a>
        <ul class="sidebar-submenu">
          <li>
            <a href="{{ route('dashboard') }}" class="sidebar-submenu-item {{ Request::routeIs('dashboard') ? 'active' : '' }}">Analytics</a>
          </li>
          <li>
            <a href="{{ route('ecommerce') }}" class="sidebar-submenu-item {{ Request::routeIs('ecommerce') ? 'active' : '' }}">Ecommerce</a>
          </li>
        </ul>
      </li>

      <div class="sidebar-menu-header">Applications</div>

      <!-- Email -->
      <li>
        <a href="{{ route('email') }}" class="sidebar-menu {{ Request::routeIs('email') ? 'active' : '' }}">
          <span class="sidebar-menu-icon">
            <i data-feather="mail"></i>
          </span>
          <span class="sidebar-menu-text">Email</span>
        </a>
      </li>
      <!-- Chat -->
      <li>
        <a href="{{ route('chat') }}" class="sidebar-menu {{ Request::routeIs('chat') ? 'active' : '' }}">
          <span class="sidebar-menu-icon">
            <i data-feather="message-square"></i>
          </span>
          <span class="sidebar-menu-text">Chat</span>
        </a>
      </li>
      <!-- Calendar -->
      <li>
        <a href="{{ route('calendar') }}" class="sidebar-menu {{ Request::routeIs('calendar') ? 'active' : '' }}">
          <span class="sidebar-menu-icon">
            <i data-feather="calendar"></i>
          </span>
          <span class="sidebar-menu-text">Calendar</span>
        </a>
      </li>
      <!-- Invoice -->
      <li>
        <a href="javascript:void(0);" class="sidebar-menu {{ Request::routeIs('invoice-create', 'invoice-detail') ? 'active' : '' }}">
          <span class="sidebar-menu-icon">
            <i data-feather="file-text"></i>
          </span>
          <span class="sidebar-menu-text">Invoice</span>
          <span class="sidebar-menu-arrow">
            <i data-feather="chevron-right"></i>
          </span>
        </a>
        <ul class="sidebar-submenu">
          <li>
            <a href="{{ route('invoice-create') }}" class="sidebar-submenu-item {{ Request::routeIs('invoice-create') ? 'active' : '' }}"> Create </a>
          </li>

          <li>
            <a href="{{ route('invoice-detail') }}" class="sidebar-submenu-item {{ Request::routeIs('invoice-detail') ? 'active' : '' }}"> Details </a>
          </li>
        </ul>
      </li>
      <!-- ecommnerce -->
      <li>
        <a href="javascript:void(0);" class="sidebar-menu {{ Request::routeIs('e-commerce.*') ? 'active' : '' }}">
          <span class="sidebar-menu-icon">
            <i data-feather="shopping-bag"></i>
          </span>
          <span class="sidebar-menu-text">Ecommerce</span>
          <span class="sidebar-menu-arrow">
            <i data-feather="chevron-right"></i>
          </span>
        </a>
        <ul class="sidebar-submenu">
          <li>
            <a href="{{ route('e-commerce.product-list') }}" class="sidebar-submenu-item {{ Request::routeIs('e-commerce.product-list') ? 'active' : '' }}"> Product List </a>
          </li>
          <li>
            <a href="{{ route('e-commerce.product-edit') }}" class="sidebar-submenu-item {{ Request::routeIs('e-commerce.product-edit') ? 'active' : '' }}"> Product Edit </a>
          </li>
          <li>
            <a href="{{ route('e-commerce.order-list') }}" class="sidebar-submenu-item {{ Request::routeIs('e-commerce.order-list') ? 'active' : '' }}"> Order List </a>
          </li>
          <li>
            <a href="{{ route('e-commerce.order-detail') }}" class="sidebar-submenu-item {{ Request::routeIs('e-commerce.order-detail') ? 'active' : '' }}"> Order Details </a>
          </li>
          <li>
            <a href="{{ route('e-commerce.customer-list') }}" class="sidebar-submenu-item {{ Request::routeIs('e-commerce.customer-list') ? 'active' : '' }}"> Customer List </a>
          </li>
        </ul>
      </li>
      <!-- Users -->
      <li>
        <a href="javascript:void(0);" class="sidebar-menu {{ Request::routeIs('users.*') ? 'active' : '' }}">
          <span class="sidebar-menu-icon">
            <i data-feather="users"></i>
          </span>
          <span class="sidebar-menu-text">Users</span>
          <span class="sidebar-menu-arrow">
            <i data-feather="chevron-right"></i>
          </span>
        </a>
        <ul class="sidebar-submenu">
          <li>
            <a href="{{ route('users.list') }}" class="sidebar-submenu-item {{ Request::routeIs('users.list') ? 'active' : '' }}">List</a>
          </li>
          <li>
            <a href="{{ route('users.profile') }}" class="sidebar-submenu-item {{ Request::routeIs('users.profile') ? 'active' : '' }}"> Profile </a>
          </li>
        </ul>
      </li>
    </ul>
    <!-- Sidebar Menu Ends -->
  </aside>
  <!-- Sidebar Ends -->
