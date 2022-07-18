<nav id="sidebar" class="sidebar js-sidebar">
  <div class="sidebar-content js-simplebar">
    <a class="sidebar-brand" href="/dashboard">
      <span class="text-center">Restu Anggari Hotel</span>
    </a>

    <ul class="sidebar-nav">
      <li class="sidebar-header text-center fs-4">
        Main Menu
      </li>

      <li class="sidebar-item {{ str_contains(request()->path(), 'dashboard') ? 'active' : null }}">
        <a class="sidebar-link" href="/home">
          <i class="align-middle fs-4" data-feather="sliders"></i> <span class="align-middle fs-4">Home</span>
        </a>
      </li>

      <li class="sidebar-item {{ str_contains(request()->path(), 'user') ? 'active' : null }}">
        <a class="sidebar-link" href="/tamu">
          <i class="align-middle fs-4" data-feather="user"></i> <span class="align-middle fs-4">Tamu</span>
        </a>
      </li>
      
      <li class="sidebar-item {{ str_contains(request()->path(), 'dataPesan') ? 'active' : null }}">
        <a class="sidebar-link" href="/kamar">
          <i class="align-middle fs-4" data-feather="home"></i> <span class="align-middle fs-4">Kamar</span>
        </a>
      </li>
      
      <li class="sidebar-item {{ str_contains(request()->path(), 'dataPesan') ? 'active' : null }}">
        <a class="sidebar-link" href="/fasilitas">
          <i class="align-middle fs-4" data-feather="grid"></i> <span class="align-middle fs-4">Fasilitas</span>
        </a>
      </li>

      <li class="sidebar-item {{ str_contains(request()->path(), 'dataPesan') ? 'active' : null }}">
        <a class="sidebar-link" href="/booking">
          <i class="align-middle fs-4" data-feather="file-text"></i> <span class="align-middle fs-4">Booking</span>
        </a>
      </li>

      
  </div>
</nav>