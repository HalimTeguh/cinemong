<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <div class="sidebar-brand-wrapper d-none d-lg-flex align-items-center justify-content-center fixed-top">
      <h1 class="text-2xl">Cinemong</h1>
    </div>
    <ul class="nav">
      <li class="nav-item profile">
        <div class="profile-desc">
          <div class="profile-pic">
            <div class="count-indicator">
              <img class="img-xs rounded-circle " src="{{ mix('/resources/template/assets/images/faces/face15.jpg') }}" alt="">
              <span class="count bg-success"></span>
            </div>
            <div class="profile-name">
              <h5 class="mb-0 font-weight-normal">Henry Klein</h5>
            </div>
          </div>
      </li>
      <li class="nav-item nav-category">
        <span class="nav-link">Navigation</span>
      </li>
      <li class="nav-item menu-items">
        <a class="nav-link <?php ($title === 'dashboard') ? 'active' : 'inactive' ?>" href="/dashboard">
          <span class="menu-icon">
            <i class="mdi mdi-speedometer"></i>
          </span>
          <span class="menu-title">Dashboard</span>
        </a>
      </li>
      <li class="nav-item menu-items">
        <a class="nav-link <?php ($title === 'manageUser') ? 'active' : 'inactive' ?>" href="/dashboard/manageUser">
          <span class="menu-icon">
            <i class="mdi mdi-account-multiple"></i>
          </span>
          <span class="menu-title">Manage User</span>
        </a>
      </li>
      <li class="nav-item menu-items">
        <a class="nav-link <?php ($title === 'manageMovie') ? 'active' : 'inactive' ?>" href="/dashboard/manageMovie">
          <span class="menu-icon">
            <i class="mdi mdi-movie"></i>
          </span>
          <span class="menu-title">Manage Movie</span>
        </a>
      </li>
      <li class="nav-item menu-items">
        <a class="nav-link <?php ($title === 'manageTicket') ? 'active' : 'inactive' ?>" href="/dashboard/manageTicket">
          <span class="menu-icon">
            <i class="mdi mdi-ticket-confirmation"></i>
          </span>
          <span class="menu-title">Manage Ticket</span>
        </a>
      </li>
      <li class="nav-item menu-items">
        <a class="nav-link" href="{{ mix('/resources/template/pages/icons/mdi.html') }}">
          <span class="menu-icon">
            <i class="mdi mdi-contacts"></i>
          </span>
          <span class="menu-title">Icons</span>
        </a>
      </li>
    </ul>
  </nav>