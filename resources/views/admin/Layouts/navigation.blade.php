<nav>
    <div class="logo-name">
      <div class="logo-image">
        <img src="{{asset('images/logo.png')}}" alt="" />
      </div>

      <span class="logo_name">SportsNepal</span>
    </div>

    <div class="menu-items">
      <ul class="nav-links">
        <li>
          <a href="{{route('admindashboard')}}">
            <i class="uil uil-estate"></i>
            <span class="link-name">Dahsboard</span>
          </a>
        </li>
        @if(auth()->check() && auth()->user()->role == "admin")
            <li>
            <a href="{{route('form')}}">
                <i class="uil uil-users-alt"></i>
                <span class="link-name">Users Management</span>
            </a>
            </li>
        @endif
        <li>
          <a href="{{route('asset')}}">
            <i class="uil uil-building"></i>
            <span class="link-name">Asset Management</span>
          </a>
        </li>
        @if(auth()->check() && auth()->user()->role == "owner")
        <li>
          <a href="#">
            <i class="uil uil-book-medical"></i>
            <span class="link-name">Bookings</span>
          </a>
        </li>
        @endif
        <li>
          <a href="#">
            <i class="uil uil-feedback"></i>
            <span class="link-name">Feedback</span>
          </a>
        </li>
        <li>
          <a href="#">
            <i class="uil uil-setting"></i>
            <span class="link-name">Settings</span>
          </a>
        </li>
      </ul>

      <ul class="logout-mode">
        <li>
          <a href="{{route('logout')}}">
            <i class="uil uil-signout"></i>
            <span class="link-name">Logout</span>
          </a>
        </li>

        <li class="mode">
          <a href="#">
            <i class="uil uil-moon"></i>
            <span class="link-name">Dark Mode</span>
          </a>

          <div class="mode-toggle">
            <span class="switch"></span>
          </div>
        </li>
      </ul>
    </div>
  </nav>