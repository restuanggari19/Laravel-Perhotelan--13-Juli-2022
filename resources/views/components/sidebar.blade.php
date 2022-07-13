<nav id="sidebar" class="sidebar js-sidebar">
  <div class="sidebar-content js-simplebar">
    <a class="sidebar-brand" href="/dashboard">
      <span class="align-middle">Restu Anggari Hotel</span>
    </a>

    <ul class="sidebar-nav">
      <li class="sidebar-header text-center fs-4">
        Main Menu
      </li>

      <li class="sidebar-item {{ str_contains(request()->path(), '/') ? 'active' : null }}">
        <a class="sidebar-link" href="/dashboard">
          <i class="align-middle" data-feather="sliders"></i> <span class="align-middle">Dashboard</span>
        </a>
      </li>

      <li class="sidebar-item {{ str_contains(request()->path(), 'tamu') ? 'active' : null }}">
        <a class="sidebar-link" href="/user">
          <i class="align-middle" data-feather="user"></i> <span class="align-middle">Tamu</span>
        </a>
      </li>
      
      <li class="sidebar-item {{ str_contains(request()->path(), 'tamu') ? 'active' : null }}">
        <a class="sidebar-link" href="/dataPesan">
          <i class="align-middle" data-feather="home"></i> <span class="align-middle">Kamar Pesanan</span>
        </a>
      </li>

      
  </div>
</nav>