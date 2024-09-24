<ul class="navbar-nav bg-dark sidebar sidebar-dark accordion" id="accordionSidebar">
  
    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
      <div class="sidebar-brand-icon rotate-n-15">
        {{-- <i class="fas fa-laugh-wink"></i> --}}
      </div>
      <div class="sidebar-brand-text mx-3">Villa Anggrek<sup></sup></div>
    </a>
    
    <!-- Divider -->
    <hr class="sidebar-divider my-0">
    
    <!-- Nav Item - Dashboard -->
    <li class="nav-item">
      <a class="nav-link" href="{{ route('dashboard') }}">
        <i class="fas fa-home"></i>
        <span>Dashboard</span></a>
    </li>
    
    <li class="nav-item">
      <a class="nav-link" href="{{ route('products') }}">
        <i class="fas fa-book"></i>
        <span>Product</span></a>
    </li>
    
    <!-- <li class="nav-item">
      <a class="nav-link" href="{{ route('profile') }}"  >
        <i class="fa fa-fw fa-user"></i>
        <span>Profile</span></a>
    </li> -->
    
    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">
    
    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
      <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>
    
    
  </ul>